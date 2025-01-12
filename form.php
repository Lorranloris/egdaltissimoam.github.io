<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $responsavel = htmlspecialchars($_POST['responsavel']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);
    $ga = htmlspecialchars($_POST['ga']);
    $ga_detail = htmlspecialchars($_POST['ga_detail']);
    $remedio = htmlspecialchars($_POST['remedio']);
    $remedio_detail = htmlspecialchars($_POST['remedio_detail']);
    $doenca = htmlspecialchars($_POST['doenca']);
    $doenca_detail = htmlspecialchars($_POST['doenca_detail']);
    $restricao = htmlspecialchars($_POST['restricao']);
    $restricao_detail = htmlspecialchars($_POST['restricao_detail']);
    $consentimento = isset($_POST['consentimento']) ? "Sim" : "Não";

    // Montar o corpo do e-mail
    $mensagem = "
        <h2>Inscrição EGD 2025</h2>
        <p><strong>Nome Completo:</strong> $nome</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Responsável:</strong> $responsavel</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Idade:</strong> $idade</p>
        <p><strong>Pertence a algum GA?</strong> $ga</p>
        <p><strong>Detalhes do GA:</strong> $ga_detail</p>
        <p><strong>Toma algum remédio?</strong> $remedio</p>
        <p><strong>Detalhes do Remédio:</strong> $remedio_detail</p>
        <p><strong>Possui algum tipo de doença?</strong> $doenca</p>
        <p><strong>Detalhes da Doença:</strong> $doenca_detail</p>
        <p><strong>Possui algum tipo de restrição alimentar?</strong> $restricao</p>
        <p><strong>Detalhes da Restrição Alimentar:</strong> $restricao_detail</p>
        <p><strong>Consentimento para pagamento:</strong> $consentimento</p>
    ";

    // Configurações do e-mail
    $destinatario = "lorrannbarbosa@gmail.com";
    $assunto = "Nova Inscrição para EGD 2025";
    $headers = "MIME-Version: 1.0" . "
";
    $headers .= "Content-type:text/html;charset=UTF-8" . "
";
    $headers .= "From: no-reply@egd2025.com" . "
";

    // Enviar e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
