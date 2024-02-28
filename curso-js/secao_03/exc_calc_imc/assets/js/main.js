function main() {
    const imcForm = document.querySelector("#imc-form");
    const resultDiv = document.querySelector("#result-div");
    let weightInput = imcForm.querySelector("#weight");
    let heightInput = imcForm.querySelector("#height");

    imcForm.addEventListener("submit", (e) => {
        e.preventDefault();
        let imcResult = imcCalc(weightInput.value, heightInput.value);
        deleteElement(resultDiv);
        appendResult(imcResult, imcRate(imcResult), resultDiv);
        resetInput(weightInput);
        resetInput(heightInput);
    })

    function imcCalc(weight = 0, height = 0) {
        let imc = weight / (height * 2);
        return imc.toFixed(1);
    }

    function imcRate(imc) {
        let rate = null;

        if(imc < 18.5) {
            rate = "Abaixo do peso";
        } else if(imc >= 18.5 && imc < 25) {
            rate = "Peso normal";
        } else if(imc >= 25 && imc < 30) {
            rate = "Sobrepeso";
        } else if(imc >= 30 && imc < 35) {
            rate = "Obesidade grau 1";
        } else if(imc >= 35 && imc < 40) {
            rate = "Obesidade grau 2";
        } else {
            rate = "Obesidade grau 3";
        }

        return rate;
    }

    function appendResult(imc, rate, element) {
        if(isInputNaN(weightInput) || isInputNaN(heightInput)) {
            element.innerHTML += "<p class='imc-fail'>O valor do peso ou altura é inválido!</p>"; 
        } else {
            element.innerHTML += `<p class='imc-success'>Seu IMC é ${imc} (${rate}).</p>`;
        }
    }

    function isInputNaN(input) {
        if(isNaN(input.value) || input.value === "") {
            return true;
        } else {
            return false;
        }
    }

    function deleteElement(element) {
        element.innerHTML = "";
    }

    function resetInput(input) {
        input.value = "";
    }
}
main();
