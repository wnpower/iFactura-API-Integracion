<?php
    $cliente->RazonSocial = "CLIENTE S.A.";
    $cliente->Identificador = "20-11111111-9";
    $cliente->Email = "proveedores@sucliente.com.ar";
    $cliente->Direccion = "Juan de Garay 1234";
    $cliente->Localidad = "Olivos";
    $cliente->CodigoPostal = "1234";
    $cliente->Provincia = 1;
    $cliente->CondicionImpositiva = 3;
    $cliente->TipoPersona = 1;
    $cliente->TipoDocumento = 1;
    $cliente->Actualizar = True;
    //COMPROBANTE
    $comprobante->Numero = 1;
    $comprobante->Fecha = date("Y-m-d H:i:s");
    $comprobante->FechaVencimiento = "2015-07-01";
    $comprobante->FechaDesde = "2015-07-01";
    $comprobante->FechaHasta = "2015-07-30";
    $comprobante->AutoEnvioCorreo = false;
    $comprobante->PuntoVenta = 1;
    $comprobante->FormaPago = 5;
    $comprobante->TipoComprobante = 4;
    $comprobante-> HashComprobanteRelacionado = "878176267FD23";
    $comprobante->DetalleFactura = array();
    //DetalleFactura
    $i = 1;
    $comprobante->DetalleFactura[$i]->Cantidad = 1;
    $comprobante->DetalleFactura[$i]->ValorUnitario = floatval(150);
    $comprobante->DetalleFactura[$i]->Total = floatval(150);
    $comprobante->DetalleFactura[$i]->Descripcion = "Servicio de Consultoría 1";
    $comprobante->DetalleFactura[$i]->Codigo = "";
    $comprobante->DetalleFactura[$i]->AlicuotaIVA = 1;
    $valoriva = (floatval(21) / 100) * floatval(150);
    $comprobante->DetalleFactura[$i]->IVA = floatval($valoriva);
    $comprobante->DetalleFactura[$i]->UnidadMedida = 7;
    $comprobante->DetalleFactura[$i]->Bonificacion = 0;
    $comprobante->DetalleFactura[$i]->ConceptoFactura = 2;
    $comprobante->Cliente = $cliente;
    $data->Email = "usuario@sudominio.com.ar";
    $data->Password ="SuContraseña";
    $data->Nota = $comprobante;
    $data_string = json_encode($data);
    $ch = curl_init('https://app.ifactura.com.ar/API/EmitirNota');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
?>