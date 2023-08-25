/* ----------------------------------------------------------------------------

Exercício: 017
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
   
    Não pode ser adicionada uma palavra ou frase repetida.
---------------------------------------------------------------------------- */
const addBtn = document.querySelector("button")
const textField = document.querySelector("#text_post")
const postsField = document.querySelector("#posts")

setParagraph(textField, postsField)

function setParagraph(field, father) {
    const fieldValArr = []

    function addParagraph() {
        if(!isFieldEmpty(field) && !isRepParagraph(fieldValArr, field)) {
            const tempP = addEl("p")

            tempP.textContent = field.value
            fieldValArr.push(field.value)

            appendEl(father, tempP)

            field.value = ""
            field.focus()
        } else if(isRepParagraph(fieldValArr, field)) {
            alert("A palavra/frase não pode ser repetida...")
        } else {
            alert("O campo não pode estar vazio")
        }
    }

    addBtn.addEventListener("click", addParagraph)
    textField.addEventListener("keypress", (e) => {
        if(e.key === "Enter") {
            addBtn.click()
        }
    })
}

function isRepParagraph(array, field) {
    let isRep = null

    array.forEach(element => {
        if(field.value === element) {
            isRep = true
        }
    })

    return isRep
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