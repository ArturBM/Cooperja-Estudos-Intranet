function plan(idade) {
    if(idade < 10){
        var add = 80
    }
    else if(idade < 30){
        var add = 50
    }
    else if(idade < 60){
        var add = 95
    }
    else{
        var add = 130
    }
    
    var preco = add + 100
    return preco
}

console.log(plan(9))
console.log(plan(15))
console.log(plan(35))
console.log(plan(65))