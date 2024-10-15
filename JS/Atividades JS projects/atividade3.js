function calcularSalario(ht, precohora) {
    let salario = ht * precohora

    return "Salario igual a R$".concat(salario)
}

console.log(calcularSalario(10, 10))