<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarEmailDiagnostico($nome, $whatsapp, $relatorio) {
    $mail = new PHPMailer(true);

    try {
        // Configuração SMTP do Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['email'];           // <- seu Gmail
        $mail->Password   = $_ENV['senha'];                  // <- sua senha de app gerada
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remetente e destinatário (você mesmo)
        $mail->setFrom($_ENV['email'], 'Check-up Empresarial');
        //$mail->addAddress($_ENV['email']); // Você mesmo como destinatário
        $mail->addAddress($_ENV['email_que_vai_receber']); // Você mesmo como destinatário

        $mail->isHTML(true);
        $mail->Subject = 'Resultado do Check-up Empresarial';

        $html = "
        Nome: $nome<br>
        WhatsApp: $whatsapp<br><br>
        <b>Status Geral:</b> {$relatorio['status'][1]} {$relatorio['status'][0]}<br><br>
        <b>Mensagem:</b> {$relatorio['mensagem']}<br><br>
        <b>Diagnósticos por área:</b><br>";

        foreach ($relatorio['diagnosticos'] as $orgao => $dados) {
            $html .= "{$dados['icone']} <strong>$orgao:</strong> {$dados['pontos']} pontos – {$dados['status']}<br>";
        }

        $html .= "<br><b>Total Geral:</b> {$relatorio['total']} pontos<br><br>{$relatorio['frase']}";

        $mail->Body = $html;

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Erro ao enviar e-mail: {$mail->ErrorInfo}");
        return false;
    }
}
