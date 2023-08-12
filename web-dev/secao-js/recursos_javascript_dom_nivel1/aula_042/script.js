// DESATIVAR A FUNÇÃO NATIVA DE UM LINK
document.querySelector('a').addEventListener('click', (e) => {
    e.preventDefault()
    console.log(e)
})

// DESATIVAR A SUBMISSÃO DO FORMULÁRIO
document.querySelector('input[type = submit]').addEventListener('click', (e) => {
    
    e.stopPropagation()
    console.log(e)
    //validação do fomulário

    e.preventDefault()
})

// CUIDADO COM A PROPAGAÇÃO!
document.querySelector('div').addEventListener('click', () => {
    console.log('DIV')
})