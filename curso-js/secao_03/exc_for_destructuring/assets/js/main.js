function main() {
    const mainContainer = document.querySelector(".main-container");
    const elements = [
        {tag: "p", text: "Frase 1"},
        {tag: "div", text: "Frase 2"},
        {tag: "footer", text: "Frase 3"},
        {tag: "section", text: "Frase 4"},
    ]

    const newDiv = appendElement(mainContainer, "div");

    for(let i = 0; i < elements.length; i++) {
        const {tag, text} = elements[i]
        const newEl = appendElement(newDiv, tag);
        newEl.innerText = text;
    }

    function appendElement(parent, childEl) {
        const child = document.createElement(childEl);
        parent.appendChild(child);
        
        return child;
    }
}
main();
