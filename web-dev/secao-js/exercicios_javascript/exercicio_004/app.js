/* ----------------------------------------------------------------------------

Exercício: 004
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES
    
    Estão disponíveis três input ranges e respetivas áreas de apresentação dos valores.
    Criar os mecanismos que permitem visualizar os valores dos sliders.
    Todos os sliders devem variar entre 0 e 100. Essas propriedades devem ser
    definidas através do JavaScript.

---------------------------------------------------------------------------- */
const valueOne = document.querySelector('#value_1')
const valueTwo = document.querySelector('#value_2')
const valueThree = document.querySelector('#value_3')

const rangeOne = document.querySelector('#range_1')
const rangeTwo = document.querySelector('#range_2')
const rangeThree = document.querySelector('#range_3')

const values = [valueOne, valueTwo, valueThree]
const ranges = [rangeOne, rangeTwo, rangeThree]

function setRangeAttributes(range, min = 0, max = 100, value = 0, element, property) {
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

for(i = 0; i < ranges.length; i++) {
    setRangeAttributes(ranges[i], ...Array(3), values[i], 'textContent')
}