function main() {
    // Variables
    const subBtnOne = document.querySelector("#btn-1");
    const varA = document.querySelector("#var-a");
    const varB = document.querySelector("#var-b");
    let result = document.querySelector("#result");

    // Invoking
    subBtnOne.addEventListener("click", e => {
        e.preventDefault();
        result.innerText = getHigher(Number(varA.value), Number(varB.value));
    })

    // Functions
    function getHigher(a, b) {
        return (a > b) ? a : b;
    }

} main();