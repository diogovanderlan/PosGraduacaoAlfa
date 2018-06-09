class Loja{
  constructor(id, cnpj, razaoSocial, nomeFantasia, email, telefone, endereco){
    this.id = id;
    this.cnpj = cnpj;
    this.razaoSocial = razaoSocial;
    this.nomeFantasia = nomeFantasia;
    this.email = email;
    this.telefone = telefone;
    this.endereco = endereco;
  }
}

class Ebook {
  constructor(id, nome, escritor, editora,preco, idTipo, arquivo){
    this.id = id;
    this.nome = nome;
    this.escritor = escritor;
    this.editora = editora;
    this.preco = preco;
    this.idtipo = idTipo;
  }

}
class Vendedor {
  constructor(id, nome, email, telefone, endereco) {
    this.id = id;
    this.nome = nome;
    this.email = email;
    this.telefone = telefone;
    this.endereco = endereco;
  }
}

class Cliente {
  constructor(id, nome, email, telefone,endereco){
    this.id = id;
    this.nome = nome;
    this.telefone = telefone;
    this.endereco = endereco;
  }
}

class Pessoa {
  constructor(id, Vendedor_id, Cliente_id){
    this.id = id;
    this.Vendedor_id = Vendedor_id;
    this.Cliente_id = Cliente_id;
  }


}

class Venda {
  constructor(id, Pessoa_id, Loja_id, Livro_id){
    this.id = id;
    this.Pessoa_id= Pessoa_id;
    this.Loja_id = Loja_id;
    this.Livro_id = Livro_id;
  }
}

class Livro extends Ebook {
  constructor(id, ebook_id, ebook_idTipo, LivroImpresso_id, LivroImpresso_idTipo ) {
    super()
    this.id = id;
    this.ebook_id = ebook_id;
    this.ebook_idTipo = ebook_idTipo;
    this.LivroImpresso_id = LivroImpresso_id;
    this.LivroImpresso_idTipo = LivroImpresso_id;
}
}
class LivroImpresso {
  constructor(id, nome, escritor, editora, preco, idTipo, papel,gramatura){
    this.id = id;
    this.nome = nome;
    this.escritor = escritor;
    this.editora = editora;
    this.preco = preco;
    this.idTipo = idTipo;
    this.papel = papel;
    this.gramatura = gramatura;
  }
}


 get Pessoa() {
  return Vendedor_id;
}
public class getPessoa(Pessoa) {
  return constructo;
}


console.log(Pessoa);