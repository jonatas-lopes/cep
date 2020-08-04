<?php

namespace ave\cep;

use ave\cep\ws\ViaCep;

class Search
{
    

    public function getAdressFromZipCode(string $cep): array
    {
        $cep = preg_replace('/[^0-9]/im', '', $cep);

         
        return $this->getFromServer($cep);
    }

    public function getFromServer(string $cep): array
    {

        $get = new ViaCep();
         

        return $get->get($cep);
    }
}
