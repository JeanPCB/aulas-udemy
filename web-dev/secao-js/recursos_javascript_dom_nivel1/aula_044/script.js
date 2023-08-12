// INTRODUÇÃO À VALIDAÇÃO DE FORMULÁRIOS

// usuario
document.querySelector('input[name = "usuario"').addEventListener('keyup', () => {
    if(document.querySelector('input[name = "usuario"] + span') !== null) {
        document.querySelector('input[name = "usuario"] + span').remove()
    }
})

// senha
document.querySelector('input[name = "senha"').addEventListener('keyup', () => {
    if(document.querySelector('input[name = "senha"] + span') !== null) {
        document.querySelector('input[name = "senha"] + span').remove()
    }
})

function formValidation() {
    document.formulario_login.addEventListener('submit', (e) => {

        // buscar valores dos campos
        let usuario = e.target.usuario.value
        let senha = e.target.senha.value
        let submit = true
    
        if(usuario === '') {
            submit = false
            const username = document.querySelector('input[name = usuario]')
            username.insertAdjacentHTML('afterend', '<span class="error">Usuário é obrigatório')
        }
    
        if(senha === '') {
            submit = false
            const password = document.querySelector('input[name = senha]')
            password.insertAdjacentHTML('afterend', '<span class="error">Senha é obrigatória')
        }
    
        if(!submit) {
            e.preventDefault()
        }
    })



}

window.onload = formValidation
