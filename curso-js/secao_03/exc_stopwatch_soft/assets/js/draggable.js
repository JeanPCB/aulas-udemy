    // Variables
    const mainContainer = document.querySelector(".main-container");
    const titleDiv = document.querySelector(".title-div");

    // Invoking
    titleDiv.addEventListener("mousedown", () => {
        titleDiv.addEventListener("mousemove", dragMainContainer);
    });

    titleDiv.addEventListener("mouseup", () => {
        titleDiv.removeEventListener("mousemove", dragMainContainer);
    });

    // Functions
    function dragMainContainer({movementX, movementY}) {
        const getContainerStyle = window.getComputedStyle(mainContainer);
        const leftValue = parseInt(getContainerStyle.left);
        const topValue = parseInt(getContainerStyle.top);
        mainContainer.style.left = `${leftValue + movementX}px`;
        mainContainer.style.top = `${topValue + movementY}px`;
    }