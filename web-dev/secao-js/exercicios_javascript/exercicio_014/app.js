/* ----------------------------------------------------------------------------

Exercício: 014
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão. 
    Depois da inserção com sucesso, o input deve ser limpo e receber o focus para
    nova inserção.
    Não são permitidas as palavras "teste", "obrigado" e "hoje"
---------------------------------------------------------------------------- */
const addBtn = document.querySelector("button")
const textPost = document.querySelector("#text_post")
const posts = document.querySelector("#posts")

displayParagraph(addBtn, textPost, posts)

function displayParagraph(btn, input, father) {
    let count = 1

    btn.addEventListener("click", () => {
        if(isInputFull(input)) {
            if(!isValidInput(input)) {
                alert("O valor do campo é inválido!")
            } else {
                const tempP = addEl("p")
                tempP.textContent = count + " - " + input.value
    
                appendEl(father, tempP)
                
                count++
            }
        }

        clearInput(input)
        input.focus()
    })
}

function addEl(element) {
    return document.createElement(element)
}

function appendEl(father, child) {
    return father.appendChild(child)
}

function clearInput(input) {
    return input.value = ""
}

function isValidInput(input) {
    switch (input.value) {
        case "teste":
        case "hoje":
        case "obrigado":
            return false

        default:
            return true
    }
}


function isInputFull(input) {
    return input.value != "" ? true : false
}