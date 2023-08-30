/* ----------------------------------------------------------------------------

Exercício: 023
Enunciado:
    Existem 4 checkboxes referentes a um conjunto de permissões de usuário.
    Cada checkbox pode ser checkada individualmente.
    Por baixo existem duas opções: todas e nenhuma.
    Ao clicar em todas, todas as checkboxes devem ser checkadas.
    Ao clicar em nenhuma, todas as checkboxes devem ser descheckadas.
---------------------------------------------------------------------------- */
const checkAllBtn = document.querySelector("#all")
const uncheckAllBtn = document.querySelector("#none")
const checkboxes = document.querySelectorAll("input[type=checkbox]")

function changeCheckVal(btn, inputs, state) {
    btn.addEventListener("click", () => {
        inputs.forEach(element => {
            if(element.checked != state) {
                element.checked = state
            }
        });
    } )
}

changeCheckVal(checkAllBtn, checkboxes, true)
changeCheckVal(uncheckAllBtn, checkboxes, false)