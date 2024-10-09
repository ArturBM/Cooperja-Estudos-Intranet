function dias(dia) {
    switch (dia){
        case 1: 
        case 7: 
            console.log('Fim de semana')
        break
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            console.log('Dia Util')
        break
        default: console.log('Dia Invalido')    
    }
}

dias(1)
dias(2)
dias(3)
dias(4)
dias(5)
dias(6)
dias(7)
dias(8)