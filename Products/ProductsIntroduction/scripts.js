let openCart = document.querySelector('.shopping-cart');
let closeCart = document.querySelector('.close-shopping-cart');
let list = document.querySelector('.list');
let listCart = document.querySelector('.list-cart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.shopping-cart-quantity');

openCart.addEventListener('click', ()=>{
    body.classList.add('active');
})

closeCart.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let listCarts = [];

function addToCart(id){
    if(listCarts[id] == null){
        listCarts[id] = products[id];
        listCarts[id].quantity = 1;
        if(products[id].productqty <= 0){
            let newDiv = document.createElement('div');
            newDiv.innerHTML = "Out of stock";
        }
    }
    reloadCarts();
}

function reloadCarts(){
    listCart.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCarts.forEach((value, id) => {
        totalPrice = totalPrice + value.productprice;
        count = count + value.quantity;

        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div>${value.productname}</div>
                <div>${value.productprice.toLocaleString()}</div>
                <div>${value.quantity}</div>
                <div>
                    <button onclick="changeQuantity(${id},  ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div> 
                    <button onclick="changeQuantity(${id},  ${value.quantity + 1})">+</button>
                </div>`
        }
    })

    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;

    // Convert the listCart javascript array to php Session array
    listCartsJSON = JSON.stringify(listCarts);
}

function changeQuantity(id, quantity){
    if(quantity === 0){
        delete listCarts[id];
    }else{
        listCarts[id].quantity = quantity;
        listCarts[id].productprice = quantity * products[id].productprice;
    }
    reloadCarts();
}