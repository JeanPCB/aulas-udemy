function main() {
    // Variables
    const timeDisplay = document.querySelector("#time-display");
    const hour = document.querySelector("#hour");
    const minute = document.querySelector("#minute");
    const second = document.querySelector("#second");
    const stopBtn = document.querySelector("#stop-btn");
    const startBtn = document.querySelector("#start-btn");
    const resetBtn = document.querySelector("#reset-btn");
    const stopIcon = document.querySelector("#stop-icon");
    const startIcon = document.querySelector("#start-icon");
    const resetIcon = document.querySelector("#reset-icon");
    
    // Global Counter
    count = 0;

    // Invoking
    startBtn.addEventListener("click", () => {
        timeDisplay.classList.remove("stopped-time");
        enableBtn(stopBtn, stopIcon);
        disableBtn(startBtn, startIcon);
        disableBtn(resetBtn, resetIcon);

        const startTime = setInterval(start, 1000);

        stopBtn.addEventListener("click", () => {
            timeDisplay.classList.add("stopped-time");
            clearInterval(startTime);

            enableBtn(startBtn, startIcon);
            enableBtn(resetBtn, resetIcon);
            disableBtn(stopBtn, stopIcon);
        }); 

        resetBtn.addEventListener("click", () => {
            clearInterval(startTime);
            timeDisplay.classList.remove("stopped-time");
            resetTime();
            disableBtn(resetBtn, resetIcon);
        });
    });

    // Functions
    function start() {
        count++;
        displayTime();
        console.log(count);
    }

    function displayTime() {
        if(count % 3600 === 0 && count > 0) {
            cleanTimeUnit(minute);
            cleanTimeUnit(second);
            setIncreaseTime(hour);
        } else if(count % 60 === 0 && count > 0) {
            cleanTimeUnit(second);
            setIncreaseTime(minute);
        } else if(count % 60 !== 0) {
            setIncreaseTime(second);
        } else {
            return;
        }
    }

    function cleanTimeUnit(element) {
        if(Number(element.innerText) >= 59) {
            element.innerText = "00";
        }
    }

    function setIncreaseTime(element) {
        if(Number(element.innerText) < 9) {
            addLeftZero(element, Number(element.innerText) + 1);
        } else {
            element.innerText = Number(element.innerText) + 1;
        }
    }

    function resetTime() {
        hour.innerText = "00";
        minute.innerText = "00";
        second.innerText = "00";
        count = 0;
    }

    function addLeftZero(element, value) {
        element.innerText = `0${value}`;
    }

    function disableBtn(btn, icon) {
        btn.disabled = true;
        icon.classList.add("disabled-btn");
    }

    function enableBtn(btn, icon) {
        btn.disabled = false;
        icon.classList.remove("disabled-btn");
    }
}
main();