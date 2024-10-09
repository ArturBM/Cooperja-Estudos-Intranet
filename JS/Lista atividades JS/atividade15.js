function vendedor(opcao) {
    switch(opcao){
        case 'hatch' : console.log('Compra efetuada com sucesso')
        break;
        case 'sedan':
        case 'motos':
        case 'caminhonete':
            console.log('Tem certeza que não prefere este modelo?')
        break;
        default:console.log('Não trabalhamos com este tipo de automóvel aqui')    
    }
}

vendedor('hatch')
vendedor('sedan')
vendedor('motos')
vendedor('caminhonete')
vendedor('bike')