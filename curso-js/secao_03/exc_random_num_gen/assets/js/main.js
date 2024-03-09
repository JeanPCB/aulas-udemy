function main() {
    const form = document.querySelector("form");
    const genNumSpan = document.querySelector("#gen-number");
    const min = Number(document.querySelector("#min-input").value);
    const max = Number(document.querySelector("#max-input").value);

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        showGenNum(rng(min, max));
    })

    function rng(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }

    function showGenNum(genNum) {
        genNumSpan.innerText = genNum;
    }

    /**
     * TEST RNG LOGIC
    
     * let randomNum = 0;
     * while(randomNum !== 10) {
     *     randomNum = rng(10, 100);
     *     console.log(randomNum);
     * }
    */
}
main();