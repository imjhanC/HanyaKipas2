var minPrice = document.getElementById('min_price');
        var minPriceOutput = document.getElementById('min_price_output');
        var maxPrice = document.getElementById('max_price');
        var maxPriceOutput = document.getElementById('max_price_output');

        minPrice.addEventListener('input', function() {
            minPriceOutput.innerHTML = this.value;
            if (parseInt(this.value) >= parseInt(maxPrice.value)) {
                maxPrice.value = parseInt(this.value) + 1;
                maxPriceOutput.innerHTML = parseInt(this.value) + 1;
            }
        });

        maxPrice.addEventListener('input', function() {
            maxPriceOutput.innerHTML = this.value;
            if (parseInt(this.value) <= parseInt(minPrice.value)) {
                minPrice.value = parseInt(this.value) - 1;
                minPriceOutput.innerHTML = parseInt(this.value) - 1;
            }
        });

        // Initialize output values
        minPriceOutput.innerHTML = minPrice.value;
        maxPriceOutput.innerHTML = maxPrice.value;