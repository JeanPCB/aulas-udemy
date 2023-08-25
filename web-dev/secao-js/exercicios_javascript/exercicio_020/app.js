/* ----------------------------------------------------------------------------

Exercício: 020
Enunciado:
    Existem 4 inputs na página.
    Sempre que o focus de um input for alterado, a cor de fundo do input
    deve ficar amarela, indicando que o input está ativo. 
    Os inativos devem ficar a branco.
---------------------------------------------------------------------------- */
const textInputs = document.querySelectorAll(".form-control")

function changeFieldBg(event, target, color) {
    target.addEventListener(event, (e) => {
        if(isFieldEmpty(target)) {
            e.target.style.backgroundColor = color
        } else {
            e.target.style.backgroundColor = "rgb(255, 255, 255)"
        }
    })
}

function isFieldEmpty(field) {
    return field.value === "" ? true : false
}

textInputs.forEach( (element) => {
    changeFieldBg("focus", element, "rgb(255, 255, 0)")
    changeFieldBg("blur", element, "rgb(255, 255, 255)")
    changeFieldBg("input", element, "rgb(255, 255, 0)")
});