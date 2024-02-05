<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode adicionar validações adicionais se necessário

    // Envia um e-mail com os dados do formulário
    $destinatario = "seu@email.com";
    $assunto = "Nova mensagem do formulário de contato";
    $corpo_mensagem = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    
    // Use a função mail() do PHP para enviar o e-mail
    mail($destinatario, $assunto, $corpo_mensagem);

    // Redireciona de volta para a página de contato com uma mensagem de sucesso
    header("Location: index.html?enviado=sim");
} else {
    // Se o formulário não foi enviado corretamente, redireciona de volta para a página de contato
    header("Location: index.html?enviado=nao");
}

?>
