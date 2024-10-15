function invertetudo(param){
  if(param > 0) {
    return 'O inverso é '.concat(-param)
  }
  if(param < 0) {
    return 'O inverso é ' + Math.abs(param)
  }
  if(param === 'true'){
    return 'O inverso é false'
  }
  if(param === 'false'){
    return 'O inverso é true'
  }
  return 'Booleanos ou números são esperados, string não suportada';
}

console.log(invertetudo(2))
console.log(invertetudo(-2))
console.log(invertetudo("true"))
console.log(invertetudo("false"))
console.log(invertetudo("artur"))
