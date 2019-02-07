    <?php

function hexa($carac){

    $caracteres = "0123456789ABCDEF";
    $rand = '';

    for($i=0; $i<$carac; $i++){

        $rand .= $caracteres[rand(0,strlen($caracteres)-1)];

    }

    return $rand;

}

$activate=hexa(20);

$pass=hexa(12);

?>