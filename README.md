# Application Programming Interface

Eai galera, me chamo Matheus e pela dúvida da comunidade, vou explicar um pouco sobre APIs, criar uma e utilizar.<br><br>
Em nossa API vamos esperar um parâmetro por URL: username, após isso, vamos pegar o username e fazer uma consulta no banco de dados e retornar os resultados em JSON

<h1> O que é uma API? </h1>
De forma básica hehehe, a API é uma maneira em que os sistemas "conversam", é simples, o primeiro sistema envia alguns dados, e o segundo sistema retornar os resultados a partir desses dados.<br>
Como não sou nenhum professor de tecnologia, vou recomendar um vídeo que explica muito bem.
<a href="https://www.youtube.com/watch?v=vGuqKIRWosk&t=99s">Código Fonte TV</a>.

<h1> Arquivos </h1>
Dentro so arquivo "Create.api.php" vamos consultar no banco de dados algum registro com o username passado, "?username=mxtheuz" e retornar um JSON. <br> <br>
Já no arquivo "Request.api.php" vamos automatizar o processo, criaremos um formulário com um campo pra username, vamos pegar o username, buscar no arquivo "Create.api.php" e através do file_get_contents, vamos pegar o JSON e exibi-los. <br> <br>
Agora, dentro do "ViaCEP.php" vamos utilizar um API pronta de consultas de CEPs. 

<h1> ViaCEP </h1>
ViaCEP é uma sistema muito utilizada por grandes empresas, ela basicamente espera dois parâmetros por URL: o próprio CEP e o formato que retornará
<br>
<br>


```php
viacep.com.br/ws/01001000/json/
```

Em "01001000", você pode colocar o CEP em que será consultado.<br>
Em "json", você pode escolher o formato em que será retornado: "json", "xml", "piped" ou "querty".<br>
E o que será retornado é simples:


```json
{
  "cep": "01001-000",
  "logradouro": "Praça da Sé",
  "complemento": "lado ímpar",
  "bairro": "Sé",
  "localidade": "São Paulo",
  "uf": "SP",
  "ibge": "3550308",
  "gia": "1004",
  "ddd": "11",
  "siafi": "7107"
}
```


Caso queira ver a documentação ou ter mais informações <a href="https://viacep.com.br">ViaCEP</a>

<h1> Incompatibilidades </h1>
A primeira incompatibilidade é que por se tratar de uma API que faz uma consulta no banco de dados, pode causar algum erro caso a estrutura SQL esteja errada.<br><br>
Dependendo da versão do PHP também pode causar algum erro.

<br><br>
<br><br>

Novamente, desculpa por algum erro de escrita, é madrugada e eu to com muito sono
Repositorio feito por Matheus
