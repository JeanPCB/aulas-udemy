/* ----------------------------------------------------------------------------

Exercício: 022
Enunciado:
    Está disponível um elemento select com 3 opções.
    Por baixo existem 4 checkboxes.
    Quando é selecionada a opção 3 no select, as checkboxes devem ficar ativas.
    Qualquer outra opção, devem desativar as checkboxes.
---------------------------------------------------------------------------- */
dropdownOpts = document.querySelector('.form-select')

function dropdownEvents(dropdown, checkboxNum) {
    dropdown.addEventListener('change', () => {
        if(dropdown.value == 3) {
            for(let i = 0; i < checkboxNum; i++) {
                document.querySelector(`input[name=check_${i + 1}]`).checked = true 
            }
        } else {
            for(let i = 0; i < checkboxNum; i++) {
                document.querySelector(`input[name=check_${i + 1}]`).checked = false
            }
        }
    })
}

dropdownEvents(dropdownOpts, 4)