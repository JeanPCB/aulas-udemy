/* ----------------------------------------------------------------------------

Exercício: 006
Enunciado:
    Existem 3 botões no layout. Cada botão está associado a uma área de
    informação. O objetivo é criar a lógica que permite apresentar cada
    uma das áreas de acordo com o botão clicado.
    A área de informação um deve estar visível por padrão.

    NOTA: quando uma área é apresentada, as outras devem ficar escondidas
---------------------------------------------------------------------------- */

const tab1 = document.querySelector('#tab1')
const tab2 = document.querySelector('#tab2')
const tab3 = document.querySelector('#tab3')

tab1.addEventListener('click', (e) => {
    createRepElArray('#info', 3, 'infos').forEach((element) => {
        if(e.target.id.slice(-1) != element.id.slice(-1)) {
            hideEl(element)
        } else {
            showEl(element)
        }
    })
})

tab2.addEventListener('click', (e) => {
    createRepElArray('#info', 3, 'infos').forEach((element) => {
        if(e.target.id.slice(-1) != element.id.slice(-1)) {
            hideEl(element)
        } else {
            showEl(element)
        }
    })
})

tab3.addEventListener('click', (e) => {
    createRepElArray('#info', 3, 'infos').forEach((element) => {
        if(e.target.id.slice(-1) != element.id.slice(-1)) {
            hideEl(element)
        } else {
            showEl(element)
        }
    })
})

function createRepElArray(element, repNum, elArray) {
    elArray = []

    for(i = 0; i < repNum; i++) {
        elArray[i] = document.querySelector(element + (i + 1))
    }

    return elArray
}

function hideEl(element) {
    element.style.display = 'none';
}

function showEl(element) {
    element.style.display = '';
}