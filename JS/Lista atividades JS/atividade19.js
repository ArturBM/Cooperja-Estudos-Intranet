function cardapio(cod,qnt){
    switch(cod){
        case 100: console.log(`O valor de ${qnt} Cachorro Quente é ${(3 * qnt).toFixed(2)}`)
        break
        case 200: console.log(`O valor de ${qnt} Hambúrguer simples é ${(4 * qnt).toFixed(2)}`)
        break
        case 300: console.log(`O valor de ${qnt} Cheeseburguer é ${(5.50 * qnt).toFixed(2)}`)
        break
        case 400: console.log(`O valor de ${qnt} Bauru é ${(7.5 * qnt).toFixed(2)}`)
        break
        case 500: console.log(`O valor de ${qnt} Refri é ${(3.5 * qnt).toFixed(2)}`)
        break
        case 600: console.log(`O valor de ${qnt} Suco é ${(2.8 * qnt).toFixed(2)}`)
        break
        default: console.log('Não temos')
    }
}

cardapio(100,2)
cardapio(200,1)
cardapio(300,3)
cardapio(400,4)
cardapio(500,5)
cardapio(600,6)
cardapio(123,8)
