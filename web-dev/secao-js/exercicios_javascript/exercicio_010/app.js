/* ----------------------------------------------------------------------------

Exercício: 010
Enunciado:
    Existem 4 áreas a cinza.
    Ao clicar numa das áreas a área clicada deve ficar com fundo
    amarelo e as restantes a vermelho.
---------------------------------------------------------------------------- */
setChangesRepClass('box', 'click')

function setChangesRepClass(className, event) {
    const classes = document.getElementsByClassName(className)
    
    for(i = 0; i < classes.length; i++) {
        classes[i].addEventListener(event, (e) => {
            setAllBgColor(classes, 'red')
            changeBgColor(e.target, 'yellow')
        })
    }
}

function setAllBgColor(array, color) {
    for(i = 0; i < array.length; i++) {
        changeBgColor(array[i], color)
    }
}

function changeBgColor(element, color) {
    element.style.backgroundColor = color
}