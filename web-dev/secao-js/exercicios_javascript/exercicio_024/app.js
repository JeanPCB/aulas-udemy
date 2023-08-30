/* ----------------------------------------------------------------------------

Exercício: 024
Enunciado:
    Existem 8 checkboxes referentes a um conjunto de permissões de usuário.
    Cada uma delas pode ser checkada individualmente.
    Por baixo, existe um select com 3 perfis de usuário: administrador, coordenador
    e operador.
    Ao selecionar um perfil, as checkboxes devem ser checkadas de acordo com o
    perfil selecionado.

    Administrador: 
        Todas as permissões

    Coordenador: 
        Coordenação dos trabalhos
        Gestão de calendário
        Utilização das máquinas
        Utilização das ferramentas

    Operador:
        Utilização das máquinas
        Utilização das ferramentas

    NOTA: sem perfil, todas as checkboxes devem estar descheckadas.

---------------------------------------------------------------------------- */
const selPerfil = document.querySelector("#select_perfil")
const permissInputs = document.querySelectorAll(".form-input")
const admPermiss = ["Gestão de usuários", "Gestão de armazém", "Gestão de finanças", "Visualização de estatística", "Coordenação dos trabalhos", "Gestão de calendário", "Utilização das máquinas", "Utilização das ferramentas"]
const coordPermiss = ["Coordenação dos trabalhos", "Gestão de calendário", "Utilização das máquinas", "Utilização das ferramentas"]
const operatorPermiss = ["Utilização das máquinas", "Utilização das ferramentas"]

selectProfile(selPerfil, permissInputs)

function selectProfile(profSelect, checkboxes) {
    profSelect.addEventListener("change", () => {
        resetCheckboxes(checkboxes)

        switch (profSelect.value) {
            case "administrador":
                setProfilePerm(permissInputs, admPermiss)
                break
            
            case "coordenador":
                setProfilePerm(permissInputs, coordPermiss)
                break
                
            case "operador":
                setProfilePerm(permissInputs, operatorPermiss)
                break
    
            default:
                break
        }
    })
}

function setProfilePerm(permissInput, permArr) {
    permissInput.forEach(element => {
        const checkbox = element.querySelector("input[type=checkbox]")
        const label = element.querySelector("label")

        for(let i = 0; i < permArr.length; i++) {
            if(checkPermBoxes(label, permArr[i], checkbox)) {
                return
            }
        }
    }); 
}

function checkPermBoxes(label, permission, checkbox) {
    if(label.textContent === permission) {
        checkbox.checked = true
        return true
    }
}

function resetCheckboxes(input) {
    input.forEach(element => {
        const checkbox = element.querySelector("input[type=checkbox]")
        checkbox.checked = false
    });
}