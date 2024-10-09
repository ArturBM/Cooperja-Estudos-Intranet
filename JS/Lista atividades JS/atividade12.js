function fatorial(num){
    let result = 1
    for(let i = 1; i <= num;i++){
         result = result * i
    }
    return result
}

console.log(fatorial(5))