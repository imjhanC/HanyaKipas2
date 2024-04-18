// JavaScript code in script.js
function myFunction() {
    var dropdown = document.getElementById("myDropdown");
    // Toggle the display of the dropdown content
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

let slideIndex = 1;
    showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
     showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

document.addEventListener("DOMContentLoaded", function() {
    var slides = document.querySelectorAll(".mySlides");
    var dots = document.querySelectorAll(".dot");
    var productInfoContainer = document.querySelector(".product-info-container");

    var slideIndex = 0;

    showSlides(slideIndex);

    function showSlides(index) {
        if (index < 0) {
            slideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            slideIndex = 0;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex].style.display = "block";
        updateProductInfo(slideIndex);
    }

    function updateProductInfo(index) {
        var currentSlide = slides[index];
        var productName = currentSlide.querySelector(".caption").innerText;
        var productPrice = currentSlide.querySelector(".product-info p:nth-child(1)").innerText;
        var productDesc = currentSlide.querySelector(".product-info p:nth-child(2)").innerText;
        var productType = currentSlide.querySelector(".product-info p:nth-child(3)").innerText;
        var productqty = currentSlide.querySelector(".product-info p:nth-child(4)").innerText;

        // Update the product info container
        productInfoContainer.innerHTML = `
            <h1>Product name: ${productName}</h1>
            <p>Price: RM ${productPrice}</p>
            <p>Description: ${productDesc}</p>
            <p>Type: ${productType}</p>
            <p>Quantity: ${productqty}</p>
        `;
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n - 1);
    }

    // Add event listeners for next and previous buttons
    document.querySelector(".prev").addEventListener("click", function() {
        plusSlides(-1);
    });

    document.querySelector(".next").addEventListener("click", function() {
        plusSlides(1);
    });

    // Add event listeners for dot buttons
    dots.forEach(function(dot, index) {
        dot.addEventListener("click", function() {
            currentSlide(index + 1);
        });
    });
});

function navigateToPage(url) {
    window.location.href = url;
}