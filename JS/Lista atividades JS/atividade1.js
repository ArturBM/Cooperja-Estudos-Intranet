function calc(num1, num2) {
    const soma = (a, b) => a + b;
    const sub = (a, b) => a - b;
    const mult = (a, b) => a * b;
    const div = (a, b) => a / b ;

    return {
        soma: soma(num1, num2),
        sub: sub(num1, num2),
        mult: mult(num1, num2),
        div: div(num1, num2),
    };
}

console.log(calc(10, 5));

function calc2(num1, num2) {
    const soma = num1 + num2;
    const sub = num1 - num2;
    const mult = num1 * num2;
    const div =  num1 / num2;

    return {
        soma: soma,
        sub: sub,
        mult: mult,
        div: div
    };
}

console.log(calc2(10, 5));