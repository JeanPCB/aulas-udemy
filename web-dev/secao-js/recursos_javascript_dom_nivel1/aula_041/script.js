/* 
OBJETIVO:
Apresentar 25 caixas em stack vertical
com gradação de cores vermelho, verde ou azul
com variação do valor RGB em 10 pontos
*/
function getColorGradient() {
    document.querySelectorAll("button").forEach((button) => {
        button.addEventListener('click', (event) => {
            deleteElements(".caixa")

            for(i = 0; i < 250; i += 10) {
                const tempDiv = document.createElement('div')
                let btnId = event.target.id
    
                tempDiv.classList.add('caixa')
    
                switch (btnId) {
                    case "btn_vermelho":
                        tempDiv.style.backgroundColor = `rgb(${i}, 0, 0)`
                        break;
                    
                    case "btn_verde":
                        tempDiv.style.backgroundColor = `rgb(0, ${i}, 0)`
                        break;
    
                    case "btn_azul":
                        tempDiv.style.backgroundColor = `rgb(0, 0, ${i})`
                        break;
    
                    default:
                        console.log('div color attr error')
                        break;
                }
                
                document.body.appendChild(tempDiv)
            }
        })
    })

    function deleteElements(element) {
        document.querySelectorAll(element).forEach((e) => e.remove())
    }
}

window.onload = getColorGradient
