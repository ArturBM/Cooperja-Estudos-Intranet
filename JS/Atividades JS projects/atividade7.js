function Entre(num,min,maximo,incluso){
    if(num> min && num < maximo)
    {
        return true
    }
    if(num >= min && num <= maximo && incluso === true)
        {
            return true
        }
    else{
        return false
    }
}

console.log(Entre(10,1,20))
console.log(Entre(1,1,20,true))
console.log(Entre(1,2,3))
console.log(Entre(1,1,2,true))