/* ----------------------------------------------------------------------------

Exercício: 011
Enunciado:
    A grelha inicial contém dezasseis imgs sem souce.
    Quando clicamos numa das imgs, vamos apresentar o símbolo X (imagem)
    No clique seguinte, que só pode acontecer numa img que não tenha símbolo,
    vamos apresentar o símbolo 'O'.
---------------------------------------------------------------------------- */
altImgSource("click", getSeqElements("#img", 16), "./x.png", "./o.png")

function getSeqElements(typeAndName, number) {
    sameElArr = []

    for(i = 1; i <= number; i++) {
        sameElArr[i] = document.querySelector(typeAndName + i)
    }

    return sameElArr
}

function altImgSource(event, elArray, imgURL1, imgURL2) {
    elArray.forEach(element => {
        element.clickCount = 0

        element.addEventListener(event, () => {
            if(element.clickCount === 0) {
                element.setAttribute("src", imgURL1)
                element.clickCount = 1
            } else {
                element.setAttribute("src", imgURL2)
                element.clickCount = 0
            }
        })
    });
}