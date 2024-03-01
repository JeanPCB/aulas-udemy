function main() {
    // Variables
    const h1 = document.querySelector("h1");

    const weekDays = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado"];
    const months = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

    const date = new Date();
    const rawWeekDay = date.getDay();
    const day = date.getDate();
    const rawMonth = date.getMonth();
    const year = date.getFullYear();
    const hours = date.getHours();
    const minutes = date.getMinutes();

    const weekDay = dateParamToString(rawWeekDay, weekDays);
    const month = dateParamToString(rawMonth, months);
    
    const fullDateString = `Data: ${weekDay}, ${day} de ${month} de ${year}\nHora: ${hours}:${minutes}`;

    // Invoking
    showNowDate();

    // Functions
    function showNowDate() {
        h1.innerText = "";
        h1.innerText = fullDateString;
    }

    function dateParamToString(dateParam, dateParams) {
        switch(dateParam) {
            case 0:
                return dateParams[0];
            case 1:
                return dateParams[1];
            case 2:
                return dateParams[2];
            case 3:
                return dateParams[3];
            case 4:
                return dateParams[4];
            case 5:
                return dateParams[5];
            case 6:
                return dateParams[6];
            case 7:
                return dateParams[7];
            case 8:
                return dateParams[8];
            case 9:
                return dateParams[9];
            case 10:
                return dateParams[10];
            case 11:
                return dateParams[11];
            default:
                return null;
        }
    }
}
main()
