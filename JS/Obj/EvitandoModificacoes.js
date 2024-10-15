// Obejto.preventExtensions
// nao pode adicionar novos
const produto = Object.preventExtensions({
    nome: 'qlqr', preco: 1.99, tag: 'promo'
})

console.log('Exentesível:', Object.isExtensible(produto))

produto.nome = 'Borracha'
produto.descricao = 'Borracha escolar branca'
delete produto.tag
console.log(produto) 

//Object.seal
// nao add nem remove atributos, mas pode alterar
const pessoa = { nome: 'Juliana', idade: 35}
Object.seal(pessoa)
console.log('Selado:', Object.isSealed(pessoa))

pessoa.sobrenome ='Silva'
delete pessoa.nome
pessoa.idade = 29
console.log(pessoa)

//Object.freeze = selado + valores constantes
// Nao pode mudar nada