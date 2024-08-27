<?php

function exist($value)
{
    return isset($value) && empty($value);
}

echo "oiii";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

if (exist($name) && exist($email)) {
    $to = "rafinhacrisdenlavor@gmail.com";
    $subject = "[TESTE] Formulário de contato";
    $body = "Nome: " . $name . PHP_EOL .
        "Email: " . $email . PHP_EOL .
        "Mensagem: " . $messsage . PHP_EOL;
    $headers = "From:rafinhacrisdenlavor@gmail.com" . PHP_EOL . "Reply-To:" . $email . "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado!";
    } else {
        echo "Não foi possível enviar o email. Tente novamente dentro de alguns instantes!";
    }
}
?>