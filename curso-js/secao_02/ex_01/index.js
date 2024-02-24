// IEEE 754-2008
let num1 = 0.7
let num2 = 0.1
let result = num1 + num2
console.log(result)

result += num2
result += num2
console.log(result)

result = Number(result.toFixed(2))
console.log(result)
console.log(Number.isInteger(result))