const slider = document.getElementById("slider")
const left = document.getElementById("left")
const right = document.getElementById("right")

let position = 0
const imageSize = 700


const sliderLength = document.querySelectorAll("#slider img").length

left.addEventListener("click", () => {
    position += imageSize
    if (position > 0) {
        position = -(imageSize * (sliderLength - 1))
    }
    slider.style.left = `${position}px`
});

right.addEventListener("click", () => {
    position -= imageSize
    if (position < -(imageSize * (sliderLenght - 1))) {
        position = 0
    }
    slider.style.left = `${position}px`
})
