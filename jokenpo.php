<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pedra, Papel ou Tesoura</title>
</head>

<body>
    <h1>Jogue Jokenpô!</h1>
    <form method="POST" action="">
        <label for="jogada">Escolha sua jogada:</label>
        <select name="jogada" id="jogada">
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select>
        <button type="submit">Jogar!</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Função para determinar o vencedor
        function determinarVencedor($jogador, $computador)
        {
            if ($jogador == $computador) {
                return "Empate!";
            }

            if (
                ($jogador == "pedra" && $computador == "tesoura") ||
                ($jogador == "tesoura" && $computador == "papel") ||
                ($jogador == "papel" && $computador == "pedra")
            ) {
                return "Você venceu!";
            }

            return "Computador venceu!";
        }

        // Opções de jogadas
        $opcoes = array("pedra", "papel", "tesoura");

        // Pegando a escolha do jogador via formulário
        $jogador = $_POST['jogada'];

        // Escolha do computador (aleatória)
        $computador = $opcoes[array_rand($opcoes)];

        // Exibindo as escolhas
        echo "<p>Você escolheu: <strong>$jogador</strong></p>";
        echo "<p>Computador escolheu: <strong>$computador</strong></p>";

        // Determinando o vencedor
        $resultado = determinarVencedor($jogador, $computador);
        echo "<h2>$resultado</h2>";
    }
    ?>
</body>

</html>