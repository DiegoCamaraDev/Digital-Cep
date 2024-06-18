<?php

namespace Diego\DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipCode(string $zipCode): array{      
        // Substitui todos os caracteres que não são dígitos pelo valor da variável $zipCode
        $zipCode = preg_replace_callback('/[^0-9]/im', function($matches) use ($zipCode) {
            return $zipCode;
        }, $zipCode);
    
        $get = file_get_contents($this->url . $zipCode . "/json");
    
        return (array) json_decode($get);
    }
    
}

?>