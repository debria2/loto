<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numerosEscolhidos = isset($_POST['numeros']) ? $_POST['numeros'] : array();
    $valorAposta = isset($_POST['valor']) ? $_POST['valor'] : 0;

    
    $acertos = count($numerosEscolhidos);
    if ($acertos == 25 || $acertos == 0) {
        $premio = 50 * $valorAposta;
    } else {
        $premio = $acertos * $valorAposta;
    }

    
    echo "Você acertou $acertos números.<br>";
    echo "Seu prêmio é de $premio.";
}
?>
