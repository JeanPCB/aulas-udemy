const footer = document.querySelector("footer")
let fHeight = footer.offsetHeight

const mainContainer = document.querySelector("#main-container")
pBottomMain = fHeight * 2
mainContainer.style.paddingBottom = `${pBottomMain}px`