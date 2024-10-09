function jsimples (capini,taxa,tempo){
    const jurossimples = capini * taxa * tempo
    return jurossimples
}

console.log(jsimples(1000,1,10))

function jcompostos(capini,taxa,tempo){
    const juroscompostos = capini * Math.pow((1 + taxa), tempo)
    return juroscompostos.toFixed(2)
}

console.log(jcompostos(100,1,10))