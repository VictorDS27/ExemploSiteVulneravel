# ExemploSiteVulneravel


<b> 1. Vulnerabilidade SQL Injection: </b>

Para impedir ataques via SQL Injection, utilizei o seguinte código:
```
= preg_replace('/[^[:alnum:]_]/', '',$_POST['login']);
```

"Alpha" faz com que seja aceito apenas numeros e letras (de A a Z), ou seja, não é permitido caracteres especiais.
