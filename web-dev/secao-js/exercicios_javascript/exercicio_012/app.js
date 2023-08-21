/* ----------------------------------------------------------------------------

Exercício: 012
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão.
---------------------------------------------------------------------------- */

const textPost = document.querySelector("#text_post")
const btn = document.querySelector("button")

setAddParagraphBtn(textPost, btn, "#posts")

function setAddParagraphBtn(input, btn, father) {
    btn.addEventListener("click", () => {
        if(!isInputEmpty(input)) {
            const paragraph = addEl("p")
            paragraph.innerText = input.value
            
            appendEl(father, paragraph)
        }
    })
}

function isInputEmpty(input) {
    return input.value === '' ? true : false
}

function addEl(element) {
    return document.createElement(element)
}

function appendEl(father, child) {
    return document.querySelector(father).appendChild(child)
}