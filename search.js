const searchForm = document.getElementById('search-form');
const searchInput = document.getElementById('search-input');
const searchResults = document.getElementById('search-results');

searchForm.addEventListener('submit', function(event) {
  event.preventDefault();
  const query = searchInput.value;

  fetch(`https://free-car-api.com/search?query=${query}`)
    .then(response => response.json())
    .then(data => {
      // Handle the API response and display results
      displaySearchResults(data);
    })
    .catch(error => {
      console.error('Error:', error);
    });
});

function displaySearchResults(results) {
  // Clear previous results
  searchResults.innerHTML = '';

  // Display each search result
  results.forEach(result => {
    const carElement = document.createElement('div');
    carElement.innerHTML = `
      <h3>${result.make} ${result.model}</h3>
      <p>Year: ${result.year}</p>
      <p>Price: ${result.price}</p>
      <p>Location: ${result.location}</p>
    `;
    searchResults.appendChild(carElement);
  });
}
