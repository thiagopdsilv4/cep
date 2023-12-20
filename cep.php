<?php

    function get_endereco($cep){

        //formatar cep removendo caracteres não numéricos
        preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }

    echo '<pre>';
    var_dump(get_endereco("92706040"));
    echo'</pre>';
    ?>


