function calcularNotas(valor) {
    const notas = [100, 50, 10, 5, 1];

    for (let nota of notas) {
        const quantidade = Math.floor(valor / nota);
        if (quantidade > 0) {
            console.log(`${quantidade} nota(s) de R$ ${nota}`);
            valor -= quantidade * nota; 
        }
    }
}


calcularNotas(18)
calcularNotas(100)
calcularNotas(125)
