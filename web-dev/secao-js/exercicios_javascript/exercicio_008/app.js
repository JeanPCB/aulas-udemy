/* ----------------------------------------------------------------------------

Exercício: 008
Enunciado:
    Existem 5 botões, cada um com uma cor diferente do Bootstrap.
    A ideia é criar o código javascript que permita que o clique em cada
    um dos botões altere o texto acima para a cor de fundo do botão.
---------------------------------------------------------------------------- */

const title = document.querySelector('h3')

setElColorByClass(title, repClassElArr('btn'))

function repClassElArr(commonClass) {
    return document.getElementsByClassName(commonClass)
}

function setElColorByClass(el, classList) {
    let element = null
    let classColor = null

    for(i = 0; i < classList.length; i++) {
        element = classList[i]

        element.addEventListener('click', (e) => {
            classColor = window.getComputedStyle(e.target).backgroundColor
            el.style.color = classColor
        })
    }
}