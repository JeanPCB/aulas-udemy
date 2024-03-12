function main() {
    // function getBigger(num1, num2) {
    //     return num1 > num2 ? num1 : num2;
    // }
    const getBigger = (num1, num2) => num1 > num2 ? num1 : num2;
    console.log(getBigger(1, 10));
    console.log(getBigger(10, 1));
    console.log(getBigger(5, 5));
} 
main();