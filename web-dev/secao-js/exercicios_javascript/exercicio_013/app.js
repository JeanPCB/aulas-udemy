/* ----------------------------------------------------------------------------

Exercício: 013
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão. O texto deve apresentar uma numeração
    sequencial e depois de inserido, o input deve ser limpo e receber o focus para
    nova inserção.
---------------------------------------------------------------------------- */

const textPost = document.querySelector("#text_post")
const btn = document.querySelector("button")

setParagraph(textPost, btn, "#posts")

function setParagraph(input, btn, father) {
    let pCounter = 0

    btn.addEventListener("click", () => {
        if(!isEmptyField(input)) {
            pCounter += 1
            const newP = addEl("p")
            newP.innerText = `${pCounter} - ${input.value}`
            
            appendEl(father, newP)
            clearField(input)
            focusOnField(input)
        }
    })
}

function addEl(element) {
    return document.createElement(element)
}

function appendEl(father, child) {
    return document.querySelector(father).appendChild(child)
}

function isEmptyField(field) {
    return field.value === "" ? true : false
}

function focusOnField(field) {
    field.focus()
}

function clearField(field) {
    field.value = ""
}