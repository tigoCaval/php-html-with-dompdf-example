<?php
require_once "./FormTable.php";

/**
 * Class User
 */
class User extends FormTable
{
    
    /**
     * Cabeçalho que será apresentado na tabela
     * @var array
     */
    public $header = ['Nome','E-mail','Profissão','Setor','Situação','Sexo'];

     /**
     * Conteúdo que será apresentado na tabela
     * @var array
     */
    public $attribute = [
          ['América','america@mail.com','Médica','Saúde','empregado','Feminino'],
          ['Américo','americo@mail.com','Advogado','Jurídico','empregado','Masculino']
    ]; 
    


}