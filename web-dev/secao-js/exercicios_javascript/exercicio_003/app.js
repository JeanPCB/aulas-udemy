/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */

import * as changeValue from "./modules/changeValue.js"

function changeValueColor(value, object, key) {
    switch (checkValue(value)) {
        case "zero":
            const white = setColor(object, key, "rgb(255, 255, 255)")
            changeColor(changeValue['textElement']['style'], 'color', white)
            break
        
        case "positive":
            const green = setColor(object, key, "rgb(0, 255, 0)")
            changeColor(changeValue['textElement']['style'], 'color', green)
            break

        case "negative":
            const red = setColor(object, key, "rgb(255, 0, 0)")
            changeColor(changeValue['textElement']['style'], 'color', red)
            break

        default:
            break
    }


    function checkValue(value) {
        if(value == 0) {
           return "zero"
        } else if(value > 0) {
            return "positive"
        } else {
            return "negative"
        }
    }
    
    function setColor(object, key, color) {
        object[key] = color
        return color
    }

    function changeColor(element, property, color) {
        element[property] = color
    }
}

changeValue.decreaseBtn.addEventListener('click', () => {
    changeValueColor(changeValue['valueProperties'].current, changeValue['valueProperties'], 'color')
})

changeValue.increaseBtn.addEventListener('click', () => {
    changeValueColor(changeValue['valueProperties'].current, changeValue['valueProperties'], 'color')
})
