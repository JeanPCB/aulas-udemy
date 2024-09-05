function Calculator(display) {
    this.display = display;

    document.addEventListener("click", (e) => {
        const el = e.target;

        if (el.classList.contains("num-btn")) {
            this.displayBtnVal(el);
        };
    });

    this.displayBtnVal = (element) => {
        this.display.value += element.innerText;
    };

    //this.setDisplay = () => { 
    //};
}

const c1 = new Calculator(document.querySelector("#display-1"));
//const c2 = new Calculator(document.querySelector("#display-2"));
