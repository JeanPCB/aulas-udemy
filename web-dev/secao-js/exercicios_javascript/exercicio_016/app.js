/* ----------------------------------------------------------------------------

Exercício: 016
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
    Não importa a ordem das palavras e frases.
    Quando clicar em "Limpar", todas as palavras e frases devem desaparecer
    e o input deve ficar limpo e receber o focus.

    NOTA: O HTML não pode ser alterado.
---------------------------------------------------------------------------- */
const addBtn = document.querySelector("#btn-add")
const clearBtn = document.querySelector("#btn-clear")
const textField = document.querySelector("#text_post")
const postsField = document.querySelector("#posts")

setParagraph(textField, postsField)
clearField(textField)

function setParagraph(field, father) {
    addBtn.addEventListener("click", () => {
        if(!isFieldEmpty(field)) {
            const tempP = addEl("p")
            tempP.textContent = field.value
    
            appendEl(father, tempP)
        }
    })
}

function clearField(field) {
    clearBtn.addEventListener("click", () => {
        field.value = ""
        field.focus()
    })
}

function isFieldEmpty(field) {
    return field.value === "" ? true : false
}

function addEl(element) {
    return document.createElement(element)
}

function appendEl(father, child) {
    return father.appendChild(child)
}