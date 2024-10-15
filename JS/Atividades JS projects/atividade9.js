function repet(repetidor,vezes){
    let result = []

    for(i=0;i<vezes;i++){
        result.push(repetidor)
    }

    return result
}

console.log(repet('Codigo',2))
console.log(repet(7,3))