function verDesemp(pont) {
    let maiorRecorde = -999
    let menorPont = 999
    let contRecorde = 0
    let piorJogo = 0

    for(let i = 1; i < pont.length; i++)
    { 

        if(pont[i] > maiorRecorde){
            maiorRecorde = pont[i]
            contRecorde++
        }

        if(pont[i] < menorPont){
            menorPont = pont[i]
            piorJogo = i + 1
        }
    }
    return [contRecorde, piorJogo]
}

console.log(verDesemp([10,20,20,8,25,3,0,30,1]))