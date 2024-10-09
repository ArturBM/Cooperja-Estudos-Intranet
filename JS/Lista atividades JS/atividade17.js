function aumento(plano, salario){
    if(plano === 'A' || plano === 'a'){
        salario += salario * 0.1
    }
    else if(plano === 'B' || plano === 'b'){
        salario += salario * 0.15
    }
    else{
        salario += salario * 0.2
    }
    return `Novo salario ${salario}`
}

console.log(aumento('A',1000))
console.log(aumento('B',1000))
console.log(aumento('C',1000))