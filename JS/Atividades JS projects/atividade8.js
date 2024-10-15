function multiplicador(num1,num2){
    let result = 0
    for(i = 0; i<num2; i++){
        result += num1
    }
    return result
}

console.log(multiplicador(3,5))