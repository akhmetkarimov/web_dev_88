const images = [
    'https://images2.alphacoders.com/902/902946.png',
    'https://7themes.su/_ph/67/69963588.jpg',
    'https://img1.goodfon.com/wallpaper/nbig/c/f2/warhammer-40000-art.jpg',
    'https://i.pinimg.com/originals/13/9b/c0/139bc04adcfd5bec7235370d7ff43f40.jpg'
]

const slideImg = document.querySelector('.slide-img')

let slideIndex = 0

showSlide()

function showSlide() {
    
    if (slideIndex >= images.length) {
        slideIndex = 0
    }

    if (slideIndex < 0) {
        slideIndex = images.length - 1
    }

    slideImg.innerHTML = `<img src="${images[slideIndex]}" alt="" class="slide-img fade">`

    slideIndex += 1

    setTimeout(showSlide, 2000)
}