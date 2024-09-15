function clearDisplays() {
    window.addEventListener("load", () => {
        const displays = document.querySelectorAll("input");
        displays.forEach((display) => display.value = "");
    });
}

clearDisplays();
