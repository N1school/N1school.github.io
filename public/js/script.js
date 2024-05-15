// fetch('/news')
//     .then(response => response.json())
//     .then(news => {
//
//         const carouselItems = document.querySelector('.news_items');
//         carouselItems.innerHTML = '';
//         news.forEach(item => {
//             appendNewsItemToCarousel(item);
//         });
//     })
//     .catch(error => {
//         console.error('Error fetching news:', error);
//     });
//
//
// function appendNewsItemToCarousel(newsItem) {
//     const carouselItems = document.querySelector('.news_items');
//     const carouselItem = document.createElement('div');
//     carouselItem.classList.add('carousel_item');
//     const newsItemDiv = document.createElement('div');
//     newsItemDiv.classList.add('news_item_div');
//     const newsItemDivs = document.createElement('div');
//     newsItemDivs.classList.add('news_item_divs');
//     const newsItemTitle = document.createElement('div');
//     newsItemTitle.classList.add('news_item_title');
//     newsItemTitle.textContent = newsItem.title;
//     const newsItemDesc = document.createElement('div');
//     newsItemDesc.classList.add('news_item_desc');
//     newsItemDesc.textContent = newsItem.description;
//     newsItemDivs.appendChild(newsItemTitle);
//     newsItemDivs.appendChild(newsItemDesc);
//     carouselItem.appendChild(newsItemDivs);
//     carouselItems.appendChild(carouselItem);
// }
//
//
//
var slideIndex = 0;
var intervalId;

function moveSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.querySelectorAll(".news_items .news_item_div");
    if (n >= slides.length) {slideIndex = 0}
    if (n < 0) {slideIndex = slides.length - 1}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}

function autoSlide() {
    intervalId = setInterval(function() {
        moveSlide(1);
    }, 5000);
}

fetch('/news')
    .then(response => response.json())
    .then(news => {
        news.forEach(item => {
            appendNewsItemToCarousel(item);
        });
        showSlides(slideIndex);
        autoSlide();
    })
    .catch(error => {
        console.error('Error fetching news:', error);
    });

function appendNewsItemToCarousel(newsItem) {
    const carouselItems = document.querySelector('.news_items');
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel_item');
    const newsItemDiv = document.createElement('div');
    newsItemDiv.classList.add('news_item_div');
    const newsItemDivs = document.createElement('div');
    newsItemDivs.classList.add('news_item_divs');
    const newsItemTitle = document.createElement('div');
    newsItemTitle.classList.add('news_item_title');
    newsItemTitle.textContent = newsItem.title;
    const newsItemDesc = document.createElement('div');
    newsItemDesc.classList.add('news_item_desc');
    newsItemDesc.textContent = newsItem.description;
    const newsItemImage = document.createElement('img');
    newsItemImage.classList.add('news_item_img');
    newsItemImage.setAttribute('src', '/img/'+newsItem.image_path);
    newsItemDivs.appendChild(newsItemTitle);
    newsItemDivs.appendChild(newsItemDesc);
    newsItemDiv.appendChild(newsItemImage);
    newsItemDiv.appendChild(newsItemDivs);
    carouselItem.appendChild(newsItemDiv);
    carouselItems.appendChild(carouselItem);
}
//
// document.querySelector('.prev').addEventListener('click', function() {
//     clearInterval(intervalId); // Stop auto-slide
//     moveSlide(-1);
// });
//
// document.querySelector('.next').addEventListener('click', function() {
//     clearInterval(intervalId); // Stop auto-slide
//     moveSlide(1);
// });

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    const icon = document.getElementById('close');
    const menuIcon = document.getElementById('open');

    menuToggle.addEventListener('click', function() {
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
            icon.style.display = 'none';
            menuIcon.style.display = 'block';
        } else {
            menu.style.display = 'block';
            icon.style.display = 'block';
            menuIcon.style.display = 'none';
        }

    });
});
