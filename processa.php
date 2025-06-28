<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ESSENCIAL -->
  <title>Resultado do Check-up Empresarial</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-color: #FDFDFB;
      color: #1C3553;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
    }

    .conteudo {
      background-color: white;
      border: 1px solid #eee;
      padding: 0;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      max-width: 600px;
      width: 90%;
      overflow: hidden;
    }

    .header-logo {
      background-color: #1A1A1A;
      padding: 10px 5px;
    }

    .header-logo img {
      height: 100px;
    }

    h1 {
      background-color: #d8b93f;
      padding: 15px;
      border-radius: 0;
      font-size: 22px;
      margin: 0;
      color: #000;
    }

    h2 {
      color: #000;
    }

    .resultado-geral {
      font-size: 1.6em;
      font-weight: bold;
      margin: 20px 0 10px;
      color: #000;
    }

    .mensagem {
      color: #555;
      font-size: 19px;
      margin: 20px;
      white-space: pre-wrap;
    }

    .mensagem-contato {
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #fff;
      padding: 15px;
      margin: 20px;
      font-size: 19px;
      color: #555;
    }

    .mensagem strong {
      display: inline-block;
      margin-top: 10px;
    }

    .blocos {
      margin: 20px auto;
      padding: 20px;
      border-radius: 12px;
      background-color: #1A1A1A;
      color: white;
      max-width: 90%;
      text-align: center;
    }

    .blocos p {
      margin: 12px 0;
      font-size: 16px;
    }

    .pontuacao-total {
      font-size: 19px;
      font-weight: bold;
      color: #d8b93f;
      text-align: center;
      margin-top: 20px;
    }

    /* 📱 MEDIA QUERY PARA MOBILE (agora com aumento real de tamanho) */
    @media (max-width: 600px) {
      body {
        padding: 10px;
      }

      .conteudo {
        width: 98%;
      }

      .header-logo img {
        height: 100px;
      }

      h1 {
        font-size: 24px;
        padding: 20px 10px;
      }

      .resultado-geral {
        font-size: 22px;
      }

      .mensagem {
        font-size: 18px;
        margin: 0px 0px;
        
      }

      .mensagem-contato {
        font-size: 17px;
        padding: 18px;
        margin: 25px auto;
        width: 80%;
      }

      .mensagem strong {
        font-size: 17px;
      }

      .blocos {
        padding: 25px 20px;
      }

      .blocos p {
        font-size: 14px;
        margin: 12px 0;
      }

      .pontuacao-total {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="conteudo">
    <div class="header-logo">
      <img src="img/logo.png" alt="Logo">
    </div>

    <h1>Resultado do Check-up Empresarial</h1>

    <div class="resultado-geral">🟡 Empresa em alerta</div>

    <div class="mensagem">
      Obrigado por preencher o Check-up Empresarial.
    </div>

    <div class="mensagem-contato">
      Sua empresa está em alerta, há pontos que precisam de atenção antes que se tornem críticos.
<br><br>
      Em breve, entraremos em contato com um plano de mentoria e consultoria ajustado à sua realidade.
    </div>

    <div class="mensagem">
      <strong>💡<br>Este é o momento certo para agir e reverter o cenário.</strong>
    </div>

    <div class="blocos">
      <p><strong>🧠 CÉREBRO:</strong> 14 pontos – 🟡 Em alerta</p>
      <p><strong>❤️ CORAÇÃO:</strong> 22 pontos – 🟢 Saudável</p>
      <p><strong>💨 PULMÃO:</strong> 24 pontos – 🟢 Saudável</p>
      <p><strong>🩸 SANGUE:</strong> 16 pontos – 🟡 Em alerta</p>
      <div class="pontuacao-total">Total Geral: 76 pontos</div>
    </div>
  </div>
</body>
</html>
