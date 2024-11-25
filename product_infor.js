
    function changeImage(src, element) {
     
      document.getElementById("mainImage").src = src;

     
      const images = document.querySelectorAll(".product-images img");
      images.forEach(img => img.classList.remove("selected"));
      element.classList.add("selected");
    }

    function zoomImage(event) {
      const img = document.getElementById('mainImage');
      let zoomLevel = event.deltaY > 0 ? -0.1 : 0.1;
      let currentScale = parseFloat(img.style.transform.replace('scale(', '').replace(')', '')) || 1;
      const newScale = currentScale + zoomLevel;

      img.style.transform = `scale(${newScale})`;
      event.preventDefault();
    }

    function updateZoomOrigin(event) {
      const img = document.getElementById('mainImage');
      const rect = img.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;

      img.style.transformOrigin = `${(x / img.width) * 100}% ${(y / img.height) * 100}%`;
    }

    function addToCart() {
      alert("Product added to cart!");
    }

    function submitReview() {
      const name = document.getElementById('name').value;
      const rating = document.getElementById('rating').value;
      const comment = document.getElementById('comment').value;

      if (name && rating && comment) {
        const reviewList = document.getElementById('review-list');
        const newReview = document.createElement('div');
        newReview.classList.add('comment');

        newReview.innerHTML = `
          <p class="author">${name} - ${rating} Stars</p>
          <p class="date">${new Date().toLocaleDateString()}</p>
          <p>${comment}</p>
        `;
        reviewList.appendChild(newReview);

        
        document.getElementById('name').value = '';
        document.getElementById('rating').value = '1';
        document.getElementById('comment').value = '';
      } else {
        alert("Please fill out all fields.");
      }
    }
    document.getElementById('shoeType').addEventListener('change', filterProducts);
document.getElementById('priceRange').addEventListener('change', filterProducts);

function filterProducts() {
    const type = document.getElementById('shoeType').value;
    const price = document.getElementById('priceRange').value;
    const items = document.querySelectorAll('.shoe-item');
    
    items.forEach(item => {
        const itemType = item.getAttribute('data-type');
        const itemPrice = parseInt(item.getAttribute('data-price'));

        let typeMatch = (type === 'all' || type === itemType);
        let priceMatch = (price === 'all' ||
            (price === 'under500' && itemPrice < 500000) ||
            (price === '500to1000' && itemPrice >= 500000 && itemPrice <= 1000000) ||
            (price === 'above1000' && itemPrice > 1000000));

        if (typeMatch && priceMatch) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
