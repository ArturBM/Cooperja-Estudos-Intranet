function maiorOuIgual(a,b){
    if (a > b){
        return 'O primeiro numero é maior que o segundo'
    }
    if (a < b){
        return 'O segundo numero é maior que o primeiro'
    }
    if(a === b){
        return 'Os numeros são iguais'
    }
}

console.log(maiorOuIgual(1,2))
console.log(maiorOuIgual(2,2))
console.log(maiorOuIgual(2,1))