<?php
    $data->Email = "usuario@suempresa.com.ar";
    $data->Password ="SuContraseña";
    $nota->NotaCredito = true;
    $nota->HashFactura = "SFJSFUOIUIOU8923";
    $data->Nota = $nota;
    $data_string = json_encode($data);
    $ch = curl_init('https://app.ifactura.com.ar/API/EmitirNotadesdeFactura');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
    $resultcurl = curl_exec($ch);
?>