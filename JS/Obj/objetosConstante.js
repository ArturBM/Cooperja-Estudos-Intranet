// pessoa -> 123 -> {...}
const pessoa = {nome: 'Joao'}
pessoa.nome = 'Pedro'
console.log(pessoa)

// pessoa = {
//     nome: 'Ana'
// }

Object.freeze(pessoa) // congelar obj pessoa

pessoa.nome = 'Maria' // como esta congelado, nao vai mudar
console.log(pessoa.nome)

// Nao consegue mexer em nada no obj depois que ultilizamos o Object.freeze
