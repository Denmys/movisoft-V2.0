let words = document.querySelectorAll(".word");
words.forEach((word)=>{
    let letters = word.textContent.split("");
    word.textContent="";
    letters.forEach((letter)=>{
        let span = document.createElement("span");
        span.textContent = letter;
        span.className = "letter";
        word.append(span);
    });
});

let currentWordIndex = 0;
let maxWordIndex = words.length -1;
words[currentWordIndex].style.opacity = "1";

let changeText = ()=>{
    let currentWord = words[currentWordIndex];
    let nextWord = currentWordIndex === maxWordIndex ? words[0] : words[currentWordIndex + 1];

    Array.from(currentWord.children).forEach((letter,i)=>{
        setTimeout(()=>{
            letter.className = "letter out";

        },i * 80);
    });
    nextWord.style.opacity="1";
    Array.from(nextWord.children).forEach((letter,i)=>{
        letter.className = "letter behind";
        setTimeout(()=>{
            letter.className = "letter in";
        },340 + i * 80);
    });
    currentWordIndex = currentWordIndex === maxWordIndex ? 0 : currentWordIndex + 1;
};

changeText();
setInterval(changeText,5000)

// Animacion de Contador Numerico en los Skills //////////////////////////////////////

document.addEventListener('DOMContentLoaded', function () {
    const counter = document.querySelector('.countersoft');
    const targetCount = 78; // Actualiza el conteo máximo a 78
    const duration = 2000; // Duración de la animación en milisegundos
    let start = 0;
    const stepTime = duration / targetCount;

    const timer = setInterval(() => {
        start++;
        counter.textContent = start + '%'; // Agrega el símbolo de porcentaje
        if (start === targetCount) {
            clearInterval(timer);
        }
    }, stepTime);
});

document.addEventListener('DOMContentLoaded', function () {
    const counter = document.querySelector('.counterhardware');
    const targetCount = 92;  // Actualiza el conteo máximo a 92
    const duration = 5000;   // Duración de la animación en milisegundos (5 segundos)
    let start = 0;
    const stepTime = duration / targetCount;

    const timer = setInterval(() => {
        start++;
        counter.textContent = start + '%';  // Agrega el símbolo de porcentaje
        if (start === targetCount) {
            clearInterval(timer);
        }
    }, stepTime);
});

document.addEventListener('DOMContentLoaded', function () {
    const counter = document.querySelector('.counterrepair');
    const targetCount = 89;  // Establece el número objetivo a 89
    const duration = 4000;   // Duración de la animación en milisegundos (4 segundos)
    let start = 0;
    const stepTime = duration / targetCount;

    const timer = setInterval(() => {
        start++;
        counter.textContent = start + '%';  // Añade el símbolo de porcentaje al número
        if (start === targetCount) {
            clearInterval(timer);
        }
    }, stepTime);
});

document.addEventListener('DOMContentLoaded', function () {
    const counter = document.querySelector('.counterredes');
    const targetCount = 85;  // Establece el número final a 81
    const duration = 3000;   // Duración de la animación en milisegundos (3 segundos)
    let start = 0;
    const stepTime = duration / targetCount;

    const timer = setInterval(() => {
        start++;
        counter.textContent = start + '%';  // Añade el símbolo de porcentaje junto al número
        if (start === targetCount) {
            clearInterval(timer);
        }
    }, stepTime);
});



// Animacion de los Circulos de las Skill ////////////////////////////////////

const circles = document.querySelectorAll('.circle');
circles.forEach(elem=>{
    var dots = elem.getAttribute("data-dots");
    var marked = elem.getAttribute("data-percent");
    var percent = Math.floor(dots*marked/100);
    var points = "";
    var rotate = 360 / dots ;

    for(let i = 0 ; i < dots ; i++ ){
        points += `<div class="points" style="--i:${i}; --rot:${rotate}deg"></div>`;
    }
    elem.innerHTML = points;

    const pointsMarked = elem.querySelectorAll('.points');
    for(let i = 0; i<percent ; i++){
        pointsMarked[i].classList.add('marked');
    }
})

// Aplicando mix a Seccion de Ofertas //////////////////////////////////////////
var mixer = mixitup('.ofertas-gallery');