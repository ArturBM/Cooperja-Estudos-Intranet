function criarProduto(nome, preco) {
    return{
        nome,
        preco,
        desconto: 0.1
    }
}

console.log(criarProduto('Carro', 100999))
console.log(criarProduto('iphone', 3200))
console.log(criarProduto('Macbook', 6000))