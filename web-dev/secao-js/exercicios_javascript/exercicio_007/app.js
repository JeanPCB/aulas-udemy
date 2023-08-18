/* ----------------------------------------------------------------------------

Exercício: 006
Enunciado:
    O mesmo exercício do vídeo anterior, mas com código mais sintético.
---------------------------------------------------------------------------- */

hideShowRepEl('click', createRepElArray('#tab', 3, 'tabs'))

function hideShowRepEl(event, elArray) {
    elArray.forEach((element) => {
        element.addEventListener(event, (e) => {
            chooseHideShowRepEl(e, createRepElArray('#info', 3, 'infos'))
        })
    })
}

function chooseHideShowRepEl(e, elArray) {
    elArray.forEach((element) => {
        if(e.target.id.slice(-1) != element.id.slice(-1)) {
            hideEl(element)
        } else {
            showEl(element)
        }
    })
}

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