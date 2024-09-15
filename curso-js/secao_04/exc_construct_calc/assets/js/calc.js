function calcBuild() {
    window.addEventListener("load", () => {
        const displays = document.querySelectorAll("input");
        displays.forEach((display) => display.innerText = "");
    });

    function Calculator(table, display) {
        this.table = table;
        this.display = display;

        this.table.addEventListener("click", (e) => {
            const el = e.target;

            if (el.classList.contains("num-btn")) {
                this.displayBtnVal(el);
            };
        });

        this.displayBtnVal = (element) => {
            this.display.value += element.innerText;
        };
    }

    const c1 = new Calculator(getCalcEl("table", 1), getCalcEl("display", 1));
    const c2 = new Calculator(getCalcEl("table", 2), getCalcEl("display", 2));

    function getCalcEl(elType, id) {
        return document.querySelector(`#${elType}-${id}`);
    }
}

calcBuild();

