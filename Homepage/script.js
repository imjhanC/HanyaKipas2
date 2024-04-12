document.getElementById("searchInput").addEventListener("input", function() {
    let userInput = this.value.trim(); // Get user input
    if (userInput !== "") {
        // Send AJAX request to PHP script
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?q=" + userInput, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let response = JSON.parse(xhr.responseText);
                    displayResults(response);
                } else {
                    console.error("Error: " + xhr.status);
                }
            }
        };
        xhr.send();
    } else {
        clearResults();
    }
});

function displayResults(results) {
    let resultsContainer = document.getElementById("results");
    resultsContainer.innerHTML = ""; // Clear previous results

    // Check if there are any results
    if (results.length > 0) {
        // Create a div to hold the results
        let resultsDiv = document.createElement("div");
        resultsDiv.classList.add("search-results");

        // Create an unordered list to hold the results
        let ul = document.createElement("ul");

        // Iterate over the results and create list items for each
        results.forEach(function(result) {
            let li = document.createElement("li");
            li.textContent = result.productname;
            ul.appendChild(li);
        });

        // Append the unordered list to the results container
        resultsDiv.appendChild(ul);

        // Append the results container under the search bar
        resultsContainer.appendChild(resultsDiv);
    } else {
        // If no results, display a message
        resultsContainer.textContent = "No such product";
    }
}


function clearResults() {
    document.getElementById("results").innerHTML = "";
}