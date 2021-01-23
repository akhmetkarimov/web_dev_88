const modal = document.querySelector('.modal')
const modalImg = document.querySelector('.modal-img')
const images = document.querySelectorAll('.img-item')
let imgIndex = 0

function openModal() {
    modal.classList.add('active')
}

function closeModal() {
    modal.classList.remove('active')
}

function openImgModal(e) {
    openModal()
    modalImg.src = e.target.src
}

function nextImg(n) {
    imgIndex += n
    showImg(imgIndex)
}

function showImg(index) {
    if (index <= 0) {
        index = images.length
        imgIndex = images.length
    }

    if (index >= images.length) {
        index = 1
        imgIndex = 1
    }

    console.log(images[index - 1].src, index)

    modalImg.src = images[index - 1].src

}