<?php 

namespace Alvaro220592\ComposerCep;

class Search{
    private $url = "viacep.com.br/ws/";

    public function getAddress(string $cep): array{ //vai retornar um array
        $cep = preg_replace("/[^0-9]/im", "", $cep); //tudo q não for número é substituído
        $get = file_get_contents($this->url . $cep . "/json");

        return (array) json_decode($get, true);
    }
}

?>