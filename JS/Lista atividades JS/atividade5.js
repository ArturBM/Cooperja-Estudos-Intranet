function formatarMoeda(valor) {
    // Arredonda 
    const valorArredondado = valor.toFixed(2);
    
    // ponto pela vírgula
    const valorFormatado = valorArredondado.replace('.', ',');
    
    //  símbolo de R$
    return `R$${valorFormatado}`;
}


const valor = 0.1 + 0.2;
console.log(formatarMoeda(valor)); 
