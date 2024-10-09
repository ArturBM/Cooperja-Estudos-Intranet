function calc(n1, sinal, n2)
{
    switch (sinal) {
        case '+': return n1 + n2
        case '-': return n1 - n2
        case '*': return n1 * n2
        case '/': return n1 / n2
    }
}

console.log(calc(10,'+',5))
console.log(calc(10,'-',5))
console.log(calc(10,'*',5))
console.log(calc(10,'/',5))