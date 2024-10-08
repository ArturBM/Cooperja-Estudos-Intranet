let dobro = function (a) {
    return 2 * a
}

dobro = (a) => {
    return 2 * a
} // arrow function

dobro = a => 2 * a

console.log(dobro(Math.PI))

let ola = function () {
    return 'olá'
}

ola = () =>'olá'
ola = _ =>'olá' // possui um param
console.log(ola())