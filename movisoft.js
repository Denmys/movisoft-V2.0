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
let maxWordIndex = words.length - 1;
words[currentWordIndex].style.opacity = "1";

let changeText = ()=>{
    let nextWordIndex = currentWordIndex === maxWordIndex ? 0 : currentWordIndex + 1;
    let currentWord = words[currentWordIndex];
    let nextWord = words[nextWordIndex];

    Array.from(currentWord.children).forEach((letter,i)=>{
        setTimeout(()=>{
            letter.className = "letter out";
        },i * 80);
    });

    nextWord.style.opacity = "1";
    Array.from(nextWord.children).forEach((letter,i)=>{
        letter.className = "letter behind";
        setTimeout(()=>{
            letter.className = "letter in";   
        },340 + i * 80);
    });

    currentWordIndex = nextWordIndex;
};

changeText();
setInterval(changeText, 3000);