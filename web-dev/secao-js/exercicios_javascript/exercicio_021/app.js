/* ----------------------------------------------------------------------------

Exercício: 021
Enunciado:
    Existem 4 inputs na página.
    1. Coloca o focus automaticamente no input acima e à esquerda.
    2. Sempre que pressionares a tecla Enter (return), o focus deverá
    passar para o input seguinte, mesmo que não tenhas escrito qualquer texto.
---------------------------------------------------------------------------- */
const inputs = document.querySelectorAll("input")

function changeInputEnterPress(elArray) {
    elArray[0].focus()

    for(let i = 0; i < elArray.length; i++) {
        elArray[i].addEventListener("keypress", (e) => {
            if(e.key === "Enter") {
                if(i != elArray.length - 1) {
                    elArray[i + 1].focus()
                } else {
                    elArray[0].focus()
                }
            }
        })
    }
}

changeInputEnterPress(inputs)