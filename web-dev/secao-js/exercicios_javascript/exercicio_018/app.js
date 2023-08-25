/* ----------------------------------------------------------------------------

Exercício: 018
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
   
    Cada texto inserido deve ser precedido da expressão "Eliminar" com cor vermelha
    e como efeito de um mouse hover.

    Se clicar em "Eliminar" apenas poderá ser removida a palavra ou frase
    correspondente.
---------------------------------------------------------------------------- */
const addBtn = document.querySelector("button")
const textField = document.querySelector("#text_post")
const postsField = document.querySelector("#posts")

function setParagraph(field, father) {
    const fieldValArr = []

    function addParagraph() {
        if(!isFieldEmpty(field) && !isRepParagraph(fieldValArr, field)) {
            const tempP = addEl("p")
            
            tempP.textContent = field.value
            tempP.prepend(delText())
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

setParagraph(textField, postsField)

function delText() {
    const tmpAnchor = addEl("a")

    function addDel() {
        tmpAnchor.setAttribute("class", "btn-del")
        tmpAnchor.textContent = "Eliminar"
        tmpAnchor.style.marginRight = "10px"
        tmpAnchor.style.color = "red"
        tmpAnchor.style.fontSize = "18px"
        tmpAnchor.style.textDecoration = "none"
    }

    function setDelEvents() {
        setStyleHover("mouseover", "underline", "pointer")
        setStyleHover("mouseout", "none", "default")

        tmpAnchor.addEventListener("click", (e) => {
            removeFather(e)
        })
    }

    function setStyleHover(event, textDecor, cursor) {
        tmpAnchor.addEventListener(event, (e) => {
            e.target.style.textDecoration = textDecor
            e.target.style.cursor = cursor
        })
    }

    function removeFather(event) {
        event.target.parentElement.remove()
    }

    addDel()
    setDelEvents()

    return tmpAnchor
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