// Dải img
const carouselContainer = document.querySelector('.carousel-container');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0; 
const totalItems = document.querySelectorAll('.carousel-item').length;
const visibleItems = 4; 

nextBtn.addEventListener('click', () => {
    if (currentIndex < totalItems - visibleItems) {
        currentIndex++;
        updateCarousel();
    }
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});

function updateCarousel() {
    const offset = -currentIndex * 100 / visibleItems;
    carouselContainer.style.transform = `translateX(${offset}%)`;
}

// Chuyển page product_infor
function infor_Prod(productId) {
    // Chuyển hướng đến trang product_infor.php với tham số ID sản phẩm
    window.location.href = `product_infor.php?id=${productId}`;
}

