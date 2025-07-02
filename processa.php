<?php
require 'bootstrap.php';
require 'app/calculo.php';
require 'app/email.php';
require 'app/template.php';

$nome = $_POST['nome'] ?? '';
$whatsapp = $_POST['whatsapp'] ?? '';

$relatorio = calcularDiagnostico($_POST);
enviarEmailDiagnostico($nome, $whatsapp, $relatorio);
mostrarResultado($nome, $relatorio);
