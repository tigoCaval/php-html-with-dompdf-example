# php-html-with-dompdf-example
Exemplo: php, html com dompdf
### Exemplo
- Definindo Cabeçalho
```php
$header = ['Nome','E-mail','Profissão','Setor','Situação','Sexo'];
```
- Definindo o conteúdo(atributos)
```php
      public $attribute = [
          ['América','america@mail.com','Médica','Saúde','empregado','Feminino'],
          ['Américo','americo@mail.com','Advogado','Jurídico','empregado','Masculino']
    ]; 
```
- Apresentação
```php
   $user = new User();
   echo $user->html(50,$user->header,$user->attribute);
```
- Utilizando com Dompdf/Exemplo
```php
       $html = $user->html(50,$user->header,$user->attribute);
       $pdf = PDF::loadHtml($html);
       $pdf->setPaper('A4','landscape');
       return $pdf->stream('mypdf.pdf'); 
```
#### Referência
https://github.com/barryvdh/laravel-dompdf
