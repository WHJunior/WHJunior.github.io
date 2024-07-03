<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Gerador de PDF');
$mpdf->WriteHTML('Autor: Wilson Hugen Junior');

$mpdf->Output();