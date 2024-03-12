function main() {
    const date = new Date("01-01-1970 01:40:05");

    function getHour(date) {
        try {
            return date.toLocaleTimeString("pt-BR", {
                hour12: false,
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit"
            });
        } catch(e) {
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
        // console.log(getHour("03-03-1933 03:30:33"));
        // console.log(getHour("sdad"));
        // console.log(getHour(null));
        console.log(getHour(date));
    } catch(err) {
        if(err instanceof TypeError) {
            console.log(err);
        }
        
        console.log("Invalid date: null or undefined");
    } finally {
        console.log("\nend of execution");
    }
}
main();