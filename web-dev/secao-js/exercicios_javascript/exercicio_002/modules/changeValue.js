/* ----------------------------------------------------------------------------

Exercício: 002
Enunciado: CONTADOR COM INTERVALO DE VALORES

    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    O valor nunca poderá ser inferior a -10 ou superior a 10.

---------------------------------------------------------------------------- */

export * from "./modules/changeValue.js"

const valueProperties = {
    current: 0
}

const textElement = document.querySelector('#valor')
const decreaseBtn = document.querySelector('#btn_decremento')
const increaseBtn = document.querySelector('#btn_incremento')

decreaseBtn.addEventListener('click', () => {
    if(isMinValue(valueProperties, 'current')) return
    decrease(valueProperties, 'current')
    updateValue(textElement, 'textContent', valueProperties, 'current')
})

increaseBtn.addEventListener('click', () => {
    if(isMaxValue(valueProperties, 'current')) return
    increase(valueProperties, 'current')
    updateValue(textElement, 'textContent', valueProperties, 'current')
})

function updateValue(element, elementKey, object, objectKey) {
    element[elementKey] = object[objectKey]
}

function decrease(object, key) {
    return object[key] -= 1
}

function increase(object, key) {
    return object[key] += 1
}

function isMinValue(object, key) {
    return object[key] == -10 ? true : false
}

function isMaxValue(object, key) {
    return object[key] == 10 ? true : false
}