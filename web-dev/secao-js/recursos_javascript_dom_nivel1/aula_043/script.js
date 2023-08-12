// INTRODUÇÃO À VALIDAÇÃO DE FORMULÁRIOS
function formValidation() {
    document.formulario_login.addEventListener('submit', (e) => {
        
        deleteWarning()

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

    function deleteWarning() {
        document.querySelectorAll('.error').forEach((element) => element.remove())
    }
}

window.onload = formValidation
