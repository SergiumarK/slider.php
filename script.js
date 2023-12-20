const slider = document.getElementById("slider");
const left = document.getElementById("left");
const right = document.getElementById("right");

let position = 0;
const imageWidth = 700; // Asumăm că fiecare imagine are o lățime de 700px
const numarTotalImagini = 3; // Înlocuiește cu numărul real de imagini

left.addEventListener("click", () => {
    position += imageWidth;
    if (position > 0) {
        // Dacă ne-am depășit la stânga, revenim la ultima imagine din dreapta
        position = -(imageWidth * (numarTotalImagini - 1));
    }
    slider.style.left = `${position}px`;
});

right.addEventListener("click", () => {
    position -= imageWidth;
    if (position < -(imageWidth * (numarTotalImagini - 1))) {
        // Dacă ne-am depășit la dreapta, revenim la prima imagine din stânga
        position = 0;
    }
    slider.style.left = `${position}px`;
});
