const images = [
    'https://wow.zamimg.com/uploads/blog/images/20516-afterlives-ardenweald-4k-desktop-wallpapers.jpg',
    'https://wallpapercave.com/wp/wp7864479.png',
    'https://images2.alphacoders.com/902/902946.png',
    'https://7themes.su/_ph/67/69963588.jpg',
    'https://img1.goodfon.com/wallpaper/nbig/c/f2/warhammer-40000-art.jpg',
    'https://i.pinimg.com/originals/13/9b/c0/139bc04adcfd5bec7235370d7ff43f40.jpg'
]

const slideImg = document.querySelector('.slide-img')
const slideDots = document.querySelector('.slide-dots')

let slideIndex = 0

let outputDots = ''

for (let i = 0; i < images.length; i++) {
    outputDots += `<p class="dot" onclick="dotSlide(${i})"></p>`
}

slideDots.innerHTML = outputDots

showSlide()
dotSlide(slideIndex)

function nextSlide(n) {
    slideIndex += n
    showSlide()
    dotSlide(slideIndex)
}

function showSlide() {
    
    if (slideIndex >= images.length) {
        slideIndex = 0
    }

    if (slideIndex < 0) {
        slideIndex = images.length - 1
    }

    slideImg.innerHTML = `<img src="${images[slideIndex]}" alt="" class="slide-img fade">`

}

function dotSlide(n) {
    const dots = document.querySelectorAll('.dot')
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active')
    }
    dots[n].classList.add('active')
    slideIndex = n
    showSlide()
}