function main() {
    // Variables
    const subBtnOne = document.querySelector("#btn-1");
    const subBtnTwo = document.querySelector("#btn-2");
    const subBtnThree = document.querySelector("#btn-3");
    const varA = document.querySelector("#var-a");
    const varB = document.querySelector("#var-b");
    const width = document.querySelector("#width");
    const height = document.querySelector("#height");
    let result1 = document.querySelector("#result-1");
    let result2 = document.querySelector("#result-2");
    let result3 = document.querySelector("#result-3");

    // Invoking
    subBtnOne.addEventListener("click", e => {
        e.preventDefault();
        result1.innerText = getHigher(Number(varA.value), Number(varB.value));
    })

    subBtnTwo.addEventListener("click", e => {
        e.preventDefault();
        result2.innerText = isLandscape(Number(width.value), Number(height.value));
    })

    subBtnThree.addEventListener("click", e => {
        e.preventDefault();
        result3.innerText = fizzBuzz(Number(num.value));
    })

    // Functions
    function getHigher(a, b) {
        return (a > b) ? a : b;
    }

    function isLandscape(width, height) {
        return width > height;
    }

    function fizzBuzz(num) {
        if(num % 3 === 0 && num % 5 === 0) return "FizzBuzz";
        if(num % 3 === 0) return "Fizz";
        if(num % 5 === 0) return "Buzz";
    
        return num;
    }

} main();