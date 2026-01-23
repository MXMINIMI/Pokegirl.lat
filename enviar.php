<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pokegirl.lat@outlook.com";
    $subject = "Nuevo pedido Pokémon competitivo";

    // Recoger datos
    $pokemon = $_POST['pokemon'];
    $ball = $_POST['ball'];
    $shiny = isset($_POST['shiny']) ? "Sí" : "No";
    $alpha = isset($_POST['alpha']) ? "Sí" : "No";

    $ivs = "IVs: HP {$_POST['ivHP']}, Atk {$_POST['ivAtk']}, Def {$_POST['ivDef']}, SpA {$_POST['ivSpA']}, SpD {$_POST['ivSpD']}, Speed {$_POST['ivSpd']}";
    $evs = "EVs: HP {$_POST['evHP']}, Atk {$_POST['evAtk']}, Def {$_POST['evDef']}, SpA {$_POST['evSpA']}, SpD {$_POST['evSpD']}, Speed {$_POST['evSpd']}";

    $message = "Pedido de Pokémon competitivo:\n\n";
    $message .= "Pokémon: $pokemon\n";
    $message .= "Ball: $ball\n";
    $message .= "Shiny: $shiny\n";
    $message .= "Alpha: $alpha\n\n";
    $message .= "$ivs\n$evs\n";

    $headers = "From: pedidos@pokegirl.lat";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pedido enviado correctamente.";
    } else {
        echo "Error al enviar el pedido.";
    }
}
?>
