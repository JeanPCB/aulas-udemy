/* ----------------------------------------------------------------------------

Exercício: 019
Enunciado:
    Está declarado um array de frutos.
    Ao inserir uma palavra no input text e clicando em pesquisar, o sistema deverá
    indicar se a palavra existe ou não no array e indicar o resultado SIM ou NAO no
    elemento com o id = "resultado"

    NOTA: Não podes usar um ciclo neste exercício.
---------------------------------------------------------------------------- */
let frutos = ['laranja', 'maçã', 'pêra', 'morango', 'ananás', 'limão', 'banana'];
const searchBar = document.querySelector("#text_palavra")
const result = document.querySelector("#resultado")
const searchBtn = document.querySelector("button")

function setResult(array, input, resultField) {
    searchBtn.addEventListener("click", () => {
        if(hasSearchItem(array, input.value)) {
            resultField.textContent = "SIM"
        } else {
            resultField.textContent = "NÃO"
        }
    })
}

function hasSearchItem(array, item) {
    if(array.find(el => el === item)) {
        return true
    } else {
        return false
    }
}

setResult(frutos, searchBar, result)