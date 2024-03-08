window.addEventListener("load", main());

function main() {
    const customParsDiv = document.querySelector(".custom-pars-div");
    const allCustomPars = customParsDiv.querySelectorAll("p");
    const bodyStyles = getComputedStyle(document.body);

    for (let par of allCustomPars) {
        par.style.backgroundColor = bodyStyles.backgroundColor;
        par.style.color = "rgb(255, 255, 255)";
    }
}