function calcBuild() {
    function Calculator(table, display) {
        this.table = table;
        this.display = display;

        this.table.addEventListener("click", (e) => {
            const el = e.target;

            if (el.classList.contains("num-btn")) {
                this.displayBtnVal(el);
            };

            if (el.classList.contains("del-btn")) {
                this.delChar(this.display.value);
            }

            if (el.classList.contains("equal-btn")) {
                this.calculate();
            }

            if (el.classList.contains("clear-btn")) {
                this.clearDisplay();
            }
        });

        this.displayBtnVal = (element) => {
            this.display.value += element.innerText;
        };

        this.calculate = () => {
            this.display.value = eval(this.display.value);
        }

        this.delChar = (str) => {
            this.display.value = str.slice(0, -1);
        }

        this.clearDisplay = () => {
            this.display.value = "";
        }
    }

    const c1 = new Calculator(getCalcEl("table", 1), getCalcEl("display", 1));
    const c2 = new Calculator(getCalcEl("table", 2), getCalcEl("display", 2));

    function getCalcEl(elType, id) {
        return document.querySelector(`#${elType}-${id}`);
    }
}

calcBuild();

