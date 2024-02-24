const number = Number(prompt('Digite um número:'))
const numTitle = document.querySelector('#num-title')
const text = document.querySelector('#text')

numTitle.innerHTML = number
text.innerHTML = ''
text.innerHTML += `<p>Raiz quadrada: ${Math.sqrt(number)}</p>`
text.innerHTML += `<p>${number} é inteiro: ${Number.isInteger(number)}</p>`
text.innerHTML += `<p>É NaN: ${Number.isNaN(number)}</p>`
text.innerHTML += `<p>Arredondando para baixo: ${Math.floor(number)}</p>`
text.innerHTML += `<p>Arredondando para cima: ${Math.ceil(number)}</p>`
text.innerHTML += `<p>Com duas casas decimais: ${number.toFixed(2)}</p>`