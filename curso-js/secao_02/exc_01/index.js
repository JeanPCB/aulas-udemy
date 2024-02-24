// Calcular o IMC e exibir os dados da pessoa
const NOME = 'Luíz Otávio'
const SOBRENOME = 'Miranda'
const IDADE = 30
const PESO = 84
const ALTURA_M = 1.80

let imc = PESO / ALTURA_M ** 2

let anoAtual = new Date().getFullYear()
let anoNascimento = anoAtual - IDADE

console.log(`${NOME} ${SOBRENOME} tem ${IDADE} anos, pesa ${PESO} kg, tem ${ALTURA_M}m de altura e seu IMC é de ${imc.toFixed(2)}`)
console.log(`${NOME} ${SOBRENOME} nasceu em ${anoNascimento}`)