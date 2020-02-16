<?php

/**
 * Class FormTable 
 */
abstract class FormTable
{

     /**
      * Primeira parte da tabela
      * @param integer $width
      * @param array $header
      * @author Tiago ACP
      * @return void
      */
     private function htmlHeader(int $width,array $header)
     {
        $html = "<html>";
        $html .= "<head>";
        $html .= "</head>";
        $html .= "<body>";
        $html .= "<table style='width:".$width."%'";
        $html .= "<tr>";
        foreach($header as $item) 
            $html .= "<th>".$item."</th>";
        $html .= "</tr>";  
        return $html;
     }

     /**
      * Retornar html com formato de tabela  
      * @param integer $width
      * @param array $header
      * @param array $attribute
      * @author Tiago ACP
      * @return void
      */
     public function html(int $width, array $header, array $attribute)
     {
        $html = $this->htmlHeader($width, $header);
        foreach($attribute as $item){
            $html .= "<tr>";  
            foreach($item as $value)  
                  $html .= "<td>".$value."</td>" ;
            $html .= "</tr>";      
         }
        $html .= "</table>";
        $html .= "</body>";
        $html .= "</html>";
        return $html;
     }




}