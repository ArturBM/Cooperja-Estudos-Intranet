const sequencia = {
    _valor: 1, // convenção
    get valor(){ return this._valor++},
    set valor(valor){ 
        if(valor > this._valor){
            this._valor = valor
        }
    }
}
// Puxar valor GET
// Atribuir valor SET

console.log(sequencia.valor, sequencia.valor)
sequencia.valor = 1000
console.log(sequencia.valor, sequencia.valor)