<?php
function mostrarResultado($nome, $relatorio) {?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Resultado do Check-up</title>
        <link rel="stylesheet" href="css/processa.css">
    </head>
    <body>
        <div class="container">
            <div class="topo">
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="titulo-header">Resultado do Check-up Empresarial</div>
            <div class="status-geral">
                <span><?= $relatorio['status'][1] ?></span>
                <span><?= $relatorio['status'][0] ?></span>
            </div>
            <p>Obrigado <?= htmlspecialchars($nome) ?> por preencher o Check-up Empresarial.</p>
            <div class="mensagem">
                <p><?= $relatorio['mensagem'] ?></p>
            </div>
            <div class="box-diagnostico">
                <ul>
                    <?php foreach ($relatorio['diagnosticos'] as $orgao => $dados): ?>
                        <li><?= $dados['icone'] ?> <strong><?= strtoupper($orgao) ?>:</strong> <?= $dados['pontos'] ?> pontos – <?= $dados['status'] ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="total">Total Geral: <?= $relatorio['total'] ?> pontos</div>
            </div>
            <div class="frase-final"><?= $relatorio['frase'] ?></div>
        </div>
    </body>
    </html>
    <?php
}
