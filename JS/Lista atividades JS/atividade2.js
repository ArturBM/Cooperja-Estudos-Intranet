function verTri(l1,l2,l3) {
    if(l1 == l2 && l2 == l3){
        console.log('Equilátero')
    }
    else if(l1 == l2 || l2 == l3){
        console.log('Isósceles')
    }
    else {
        console.log('Escaleno')
    }
}

verTri(1,2,3)
verTri(2,2,2)
verTri(2,2,3)