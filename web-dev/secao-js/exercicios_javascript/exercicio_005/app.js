/* ----------------------------------------------------------------------------

Exercício: 005
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES - VERSÃO CÓDIGO REDUZIDO
    
    O exercício anterior, mas com quantidade de código JS reduzida.

---------------------------------------------------------------------------- */

const values = []
const ranges = []

function slidersLength(num, slidersArr) {
    return slidersArr.length = num
}

for(i = 0; i < slidersLength(3, ranges); i++) {
    values[i] = document.querySelector(`#value_${i + 1}`)
    ranges[i] = document.querySelector(`#range_${i + 1}`)
    setRangeAttributes(ranges[i], values[i], 'textContent')
}

function setRangeAttributes(range, element, property, min = 0, max = 100, value = 0) {
    setMinimun(min)
    setMaximun(max)
    setValue(value)

    range.addEventListener('input', (e) => {
        showRangeValue(element, property, getRangeValue(e.target))
    })

    function setMinimun(min) {
        range.setAttribute('min', min)
    }

    function setMaximun(max) {
        range.setAttribute('max', max)
    }

    function setValue(value) {
        range.setAttribute('value', value)
    }
}

function getRangeValue(range) {
    return range.value
}

function showRangeValue(element, property, value) {
    element[property] = value
}