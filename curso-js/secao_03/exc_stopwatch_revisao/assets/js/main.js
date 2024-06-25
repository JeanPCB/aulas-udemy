let timerDisplay = document.querySelector(".timer");
const startBtn = document.querySelector(".start");
const stopBtn = document.querySelector(".stop");
const restartBtn = document.querySelector(".restart");

let seconds = 0;
let timer;

startBtn.addEventListener("click", () => {
    timer = setInterval(()=> {
        seconds++;
        timerDisplay.innerHTML = getTimeFromSeconds(seconds);
    }, 1000);
});

stopBtn.addEventListener("click", () => {
    clearInterval(timer);
});

restartBtn.addEventListener("click", () => {
    clearInterval(timer);
    seconds = 0;
    timerDisplay.innerHTML = "00:00:00";
});

function getTimeFromSeconds(sec) {
    const date = new Date(sec * 1000);
    return date.toLocaleTimeString("pt-BR", {
        hour12: false,
        timeZone: "GMT"
    });
}