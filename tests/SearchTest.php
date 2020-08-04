<?php 

use PHPUnit\Framework\TestCase;
use ave\cep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */

    public function testGetAdressFromZipCode(string $input, array $esperado){

        $resultado = new Search();
        $resultado = $resultado->getAdressFromZipCode($input);

        $esperado = [
          

    "cep" => "14302-192",
    "logradouro" => "Estrada Municipal Ayrton Senna",
    "complemento" => "",
    "bairro" => "Aeroporto",
    "localidade" => "Batatais",
    "uf" => "SP",
    "unidade" => "",
    "ibge" => "3505906",
    "gia" => "2082"

        ];

        $this->assertEquals($esperado, $resultado);
        
    }
   
    public function dadosTeste(){
        return [

            "Estrada Municipal Ayrton Senna" =>[
                "14302192",
                [
                    "cep" => "14302-192",
                    "logradouro" => "Estrada Municipal Ayrton Senna",
                    "complemento" => "",
                    "bairro" => "Aeroporto",
                    "localidade" => "Batatais",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3505906",
                    "gia" => "2082" 
                ]
                ],

            "Endereço qualquer" => [

                "14302192",
                [
                    "cep" => "14302-192",
                    "logradouro" => "Estrada Municipal Ayrton Senna",
                    "complemento" => "",
                    "bairro" => "Aeroporto",
                    "localidade" => "Batatais",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3505906",
                    "gia" => "2082" 
                ]

            ]

        ] ;
        
    }


}