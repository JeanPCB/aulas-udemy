/* ----------------------------------------------------------------------------

Exercício: 009
Enunciado:
    Exercício simples: O texto é branco e o elemento range vai servir para
    alterar a transparência do texto. Do valor mais opaco à esquerda, até
    à transparência total à direita.

    NOTA: Deves definir os valores do range.
---------------------------------------------------------------------------- */
const range = document.querySelector('#range')
const title = document.querySelector('h3')

setRangeAttr(range, 1, 0, 1, 0.1)
setOpacity(title, range)

function setRangeAttr(range, value = 0, min = 0, max = 100, step = 1) {
    range.setAttribute('value', value)
    range.setAttribute('min', min)
    range.setAttribute('max', max)
    range.setAttribute('step', step)
}

function setOpacity(element, inputEl) {
    inputEl.addEventListener('input', (e) => {
        element.style.opacity = e.target.value
    })
}