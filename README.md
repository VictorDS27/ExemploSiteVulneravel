# ExemploSiteVulneravel


1. <b> Vulnerabilidade SQL Injection: </b>

Para impedir ataques via SQL Injection, utilizei o seguinte código:
```
= preg_replace('/[^[:alnum:]_]/', '',$_POST['login']);
```

"Alpha" faz com que seja aceito apenas numeros e letras (de A a Z), ou seja, não é permitido caracteres especiais.

2. <b> Senha: </b>

A senha estava visivel no banco de dados, sendo assim possivel ser visualizada no momento em que se é invadido o Banco de Dados.
Para resolver isso, utilizei o código para criptografar em MD5:

```
INSERT INTO `tb_admin` (`cd_admin`, `nm_admin`, `ds_senha`) VALUES
(1, 'admin', md5('123456'));
```

3. <b>Banco de Dados sem senha:</b>

O banco de dados estava sem senha, ou seja, estava facil qualquer pessoa acessa-lo.
