function main() {
    const imcForm = document.querySelector("#imc-form");
    const resultDiv = document.querySelector("#result-div");

    imcForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const weightInput = imcForm.querySelector("#weight");
        const heightInput = imcForm.querySelector("#height");

        const weight = Number(weightInput.value);
        const height = Number(heightInput.value);

        if(!weight) {
            deleteElement(resultDiv);
            setResult(false, "Peso inválido!");
            return;
        }

        if(!height) {
            deleteElement(resultDiv);
            setResult(false, "Altura inválida!");
            return;
        }

        const imc = imcCalc(weight, height);
        deleteElement(resultDiv);
        setResult(true, null, imc, imcRate(imc));
        resetInput(weightInput);
        resetInput(heightInput);
    })

    function imcCalc(weight = 0, height = 0) {
        let imc = weight / (height * 2);
        return imc.toFixed(1);
    }

    function imcRate(imc) {
        let rate = ["Abaixo do peso", "Peso normal", "Sobrepeso", "Obesidade grau 1", "Obesidade grau 2", "Obesidade grau 3"];

        if(imc > 39.9) return rate[5];
        if(imc > 34.9) return rate[4];
        if(imc > 29.9) return rate[3];
        if(imc > 24.9) return rate[2];
        if(imc >= 18.5) return rate [1];
        if(imc < 18.5) return rate[0];
    }

    function appendElement(fatherId, child) {
        const childElement = document.createElement(child);
        const father = document.querySelector(`#${fatherId}`);
        return father.appendChild(childElement);
    }

    function setResult(isValid, resultText = "Erro!", imc = null, rate = null) {
        const resultParagraph = appendElement("result-div", "p");

        if(!isValid) {
            resultParagraph.innerText = resultText; 
            resultParagraph.classList.add("imc-bad");
            
            return;
        }

        resultParagraph.innerText = `Seu IMC é ${imc} (${rate}).`;
        resultParagraph.classList.add("imc-success");
    }

    function deleteElement(element) {
        element.innerHTML = "";
    }

    function resetInput(input) {
        input.value = "";
    }
}
main();
