    // Variables
    const mainContainer = document.querySelector(".main-container");
    const titleDiv = document.querySelector(".title-div");

    // Invoking
    dragElement(titleDiv, mainContainer);

    // Functions
    function dragElement(header = null, el) {
        let startX = 0;
        let startY = 0;
        let finalX = 0;
        let finalY = 0;

        header.addEventListener("mousedown", (e) => {
            startX = e.clientX;
            startY = e.clientY;
            document.onmouseup = closeDragElement;
            document.onmousemove = elementDrag;
        });

        function elementDrag(e) {
            finalX = startX - e.clientX;
            finalY = startY - e.clientY;
            startX = e.clientX;
            startY = e.clientY;

            el.style.top = (el.offsetTop - finalY) + "px";
            el.style.left = (el.offsetLeft - finalX) + "px";
        }
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
