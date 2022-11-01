# ExemploSiteVulneravel


**1. Vulnerabilidade SQL Injection: **

```
= preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);
```
