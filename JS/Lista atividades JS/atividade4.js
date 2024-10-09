const div = (dividendo, divisor) => {
    if (divisor !== 0) {
        const resultado = dividendo / divisor;
        const resto = dividendo % divisor;
        return {
            resultado,
            resto
        };
    } else {
        return 'Não dá para efetuar essa divisão'; 
    }
};

const resultado = div(10, 2);
console.log(resultado); 

const erro = div(10, 0);
console.log(erro); 

console.log(div(10,5))
