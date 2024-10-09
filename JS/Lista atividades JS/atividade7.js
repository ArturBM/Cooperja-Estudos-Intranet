function bhaskara(ax2,bx,c) {
    const delta = bx * bx - 4 *ax2 * c

    if(delta < 0) {
        return 'Delta é negativo'
    }

    const raiz1 = (-bx + Math.sqrt(delta))/ (2 *ax2)
    const raiz2 = (-bx - Math.sqrt(delta))/ (2 *ax2)

    return [raiz1.toFixed(2),raiz2.toFixed(2)]
}

console.log(bhaskara(3,-4,-6))