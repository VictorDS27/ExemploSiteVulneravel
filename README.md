# ExemploSiteVulneravel


<b> 1. Vulnerabilidade SQL Injection: </b>

```
= preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);
```
