<?php
//funcao para dertermianar vencedor
 function determinarVencedor($jogador, $computador){
    if($jogador == $computador){
        return "Empate!";
    }

    if(
        ($jogador=="pedra" && $computador =="tesoura")||
        ($jogador == "papel" && $computador == "pedra")||
        ($jogador == "tesoura" && $computador == "padpel")
    ){
        return "Voce venceu!";
    }
    return "Computador venceu!";
 }

 //Opecoed de jogadas
 $opcoes = array("pedra","papel","tesoura");

 //O jogador pode alterar a sua jogada manualmente ou via formulario
 $jogador="pedra";// ex:. jogador escolheu "pedra"

 // Computador escolha "aleatoria"
 $computador = $opcoes[array_rand($opcoes)];

//  exibido escolhas
echo "Voce escolheu $jogador <br/>";
echo "Computador escolheu $compuatdor <br/>";

// derminado vencedor
$resultado = determinarVencedor($jogador, $computador);
echo $resultado;
?>