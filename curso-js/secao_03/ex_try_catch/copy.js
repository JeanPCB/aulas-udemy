function main() {
    const date = new Date("01-01-1970 00:01:02");

    function getHour(date) {
        try {
            return date.toLocaleTimeString("pt-BR", {
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit",
                hour12: false
            })

        } catch(err) {
            if(date && !(date instanceof Date)) {
                throw new TypeError("waiting for a Date instance");
            }

            if(!date) {
                throw new ReferenceError("null date");
            }

        } finally {
            console.log(`Entry date: ${date}\n`);
        }
    }

    try {
        // console.log(getHour("testing"));
        console.log(getHour(null));
        console.log(getHour(date));
    } catch(err) {
        if(err instanceof TypeError) {
            console.log("Invalid value in date input");
        }

        if(err instanceof ReferenceError) {
            console.log("Date input can't be null");
        }
    } finally {
        console.log("\nend");
    }
} main();