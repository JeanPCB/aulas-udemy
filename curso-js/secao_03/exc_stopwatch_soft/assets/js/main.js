function main() {
    // Variables
    const timeDisplay = document.querySelector("#time-display");
    const startBtn = document.querySelector("#start-btn");
    const startIcon = document.querySelector("#start-icon");
    const stopBtn = document.querySelector("#stop-btn");
    const stopIcon = document.querySelector("#stop-icon");
    const resetBtn = document.querySelector("#reset-btn");
    const resetIcon = document.querySelector("#reset-icon");

    let seconds = 0;
    let runTime = null;

    // Invoking
    document.addEventListener("click", (e) => {
        const el = e.target;

        if(el.classList.contains("start")) {
            start();
            return;
        }

        if(el.classList.contains("stop")) {
            stop();
            return;
        }

        if(el.classList.contains("reset")) {
            reset();
            return;
        }
    })

    // Functions
    function start() {
        runTime = setInterval(() => {
            seconds++;
            timeDisplay.innerHTML = getTimeFromSeconds(seconds);
            console.log(getTimeFromSeconds(seconds))
        }, 1);

        timeDisplay.classList.remove("stopped-time");
        disableBtn(startBtn, startIcon);
        disableBtn(resetBtn, resetIcon);
        enableBtn(stopBtn, stopIcon);
    } 
    
    function stop() {
        clearInterval(runTime);
        timeDisplay.classList.add("stopped-time");
        disableBtn(stopBtn, stopIcon);
        enableBtn(startBtn, startIcon);
        enableBtn(resetBtn, resetIcon);
    }

    function reset() {
        seconds = 0;
        timeDisplay.innerText = "00:00:00";
        timeDisplay.classList.remove("stopped-time");
        disableBtn(resetBtn, resetIcon);
    }

    function getTimeFromSeconds(seconds) {
        const time = new Date(seconds * 1000);
        
        return time.toLocaleTimeString("pt-BR", {
            hour12: false,
            timeZone: "GMT"
        });
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