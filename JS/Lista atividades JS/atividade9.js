function sistema(nota) {
    if (nota < 38){
        return `Reprovado com nota ${nota}`
    }

    const prox5 = Math.ceil(nota/5)*5

    if(prox5 - nota < 3){
        return `Aprovado com nota ${prox5}`
    }

    return `Aprovado com nota ${prox5}`
}

console.log(sistema(20))
console.log(sistema(38))
console.log(sistema(40))
console.log(sistema(100))
