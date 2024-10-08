const pessoa = {
    saudacao: "Bom dia",
    falar() {
      console.log(this.saudacao); //se tirar o this nao funciona
    },
  };
  
  pessoa.falar();
  const falar = pessoa.falar;
  falar(); //conflito entre funcional objeto
  
  const falarDePessoa = pessoa.falar.bind(pessoa);//bind amarra objeto
  falarDePessoa()