function main() {
    const form = document.querySelector('form')
    const persons = []

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        const personData = createPerson(
            getFieldValue('firstName'), 
            getFieldValue('lastName'), 
            getFieldValue('weight'), 
            getFieldValue('height')
        )
        
        persons.push(personData)
        console.log(persons)
        showPersonData('result', personData)
    })

    function getFieldValue(fieldId) {
        return form.querySelector(`#${fieldId}`).value
    }

    function createPerson(nome, sobrenome, peso, altura) {
        return {nome, sobrenome, peso, altura}
    }

    function showPersonData(elementId, objPerson) {
        const appendElement = document.querySelector(`#${elementId}`)
        appendElement.innerHTML += `<p>${objPerson.nome} ${objPerson.sobrenome} ${objPerson.peso} ${objPerson.altura}</p>`
    }
}

main()