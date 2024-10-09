function bi(ano) {
    if((ano%4===0 && ano%100 !== 0) || (ano%400 ===0)){
        return true
    }
    else{
        return false
    }
}

console.log(bi(2024))
console.log(bi(2030))
console.log(bi(2050))