/* ----------------------------------------------------------------------------

Exercício: 015
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão.

    As palavras e frases mais recentes devem ficar no topo.
---------------------------------------------------------------------------- */
const textPost = document.querySelector("#text_post")
const addBtn = document.querySelector("button")
const postArea = document.querySelector("#posts")

displayParagraph(addBtn, textPost, postArea)

function displayParagraph(btn, field, father) {
    btn.addEventListener("click", () => {
        if(isFieldFull(field)) {
            const tempP = addEl("p")
            tempP.textContent = field.value

            prependLastEl(father, tempP)
        }

        clearField(field)
        field.focus()
    })
}

function addEl(element) {
    return document.createElement(element)
}

function prependLastEl(father, child) {
    return father.prepend(child)
}

function isFieldFull(field) {
    return field.value != "" ? true : false
}

function clearField(field) {
    return field.value = ""
}