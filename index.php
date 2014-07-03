<?php

require_once 'config.php';
$encuesta = new Encuesta();
if (isset($_POST['btnEnviar'])) {
    $_cantidad_empresas = isset($_POST['optCantidadEmpresas']) ? $_POST['optCantidadEmpresas'] : '';
    $encuesta->set_cantidad_empresas($_cantidad_empresas);
    $_cantidad_ingresada_empresas = isset($_POST['txtCantidadIngresadaEmpresas']) ? $_POST['txtCantidadIngresadaEmpresas'] : '';
    $encuesta->set_cantidad_ingresada_empresas($_cantidad_ingresada_empresas);
    $_cantidad_empleados_dedicados = isset($_POST['optCantidadEmpleadosDedicados']) ? $_POST['optCantidadEmpleadosDedicados'] : '';
    $encuesta->set_cantidad_empleados_dedicados($_cantidad_empleados_dedicados);
    //$empleados_por_empresa = isset($_POST['pregunta3']);
//si pregunta 4 responde A
    $horas_dedicadas_a_tarea = isset($_POST['txtHorasMensuales']) ? $_POST['txtHorasMensuales'] : '';
    $encuesta->set_horas_mensuales($horas_dedicadas_a_tarea);
    //si pregunta 4 responde c
    $cantidad_empleados_con_dedicacion_full_time = isset($_POST['txtCantidadEmpleadosFulltime']) ? $_POST['txtCantidadEmpleadosFulltime'] : '';
    $encuesta->set_cantidad_empleados_fulltime($cantidad_empleados_con_dedicacion_full_time);
    $_cantidad_veces_viaja = isset($_POST['optCantidadVecesViaja']) ? $_POST['optCantidadVecesViaja'] : '';
    $encuesta->set_cantidad_veces_viaja($_cantidad_veces_viaja);
//si va mas de 3 veces a la secretaria de trasbajo
    $cuantas_veces_que_se_dirige_a_secretaria_de_trabajo = isset($_POST['txtCantidadIngresadaVecesViaja']) ? $_POST['txtCantidadIngresadaVecesViaja'] : '';
    $encuesta->set_cantidad_ingresada_veces_viaja($cuantas_veces_que_se_dirige_a_secretaria_de_trabajo);
//por cada ves que se dirige a la secretaria de trabajo
    $gastos_en_viaticos = isset($_POST['txtGastoViaticos']) ? $_POST['txtGastoViaticos'] : '';
    $encuesta->set_gasto_viaticos($gastos_en_viaticos);
    $horas_insumidas_por_la_tarea = isset($_POST['txtHorasInsumidas']) ? $_POST['txtHorasInsumidas'] : '';
    $encuesta->set_horas_insumidas($horas_insumidas_por_la_tarea);
//falta pregunta9.3
    $tiempo_incluido_en_otra_pregunta = isset($_POST['txtTiempoIncluidoEnOtraPregunta']) ? $_POST['txtTiempoIncluidoEnOtraPregunta'] : '';
    $encuesta->set_tiempo_incluido_en_horas_mensuales($tiempo_incluido_en_otra_pregunta);
//tipo de impresora
    $tipo_de_impresora = isset($_POST['optTipoImpresora']) ? $_POST['optTipoImpresora'] : '';
    $encuesta->set_tipo_impresora($tipo_de_impresora);
//si tiene impresora a tinta
    $_frecuancia_cambio_cartuchos = isset($_POST['txtFrecuanciaCambioCartuchos']) ? $_POST['txtFrecuanciaCambioCartuchos'] : '';
    $encuesta->set_frecuancia_cambio_cartuchos($_frecuancia_cambio_cartuchos);
//si tiene impresora de laser
    $_frecuancia_cambio_toner = isset($_POST['txtFrecuanciaCambioToner']) ? $_POST['txtFrecuanciaCambioToner'] : '';
    $encuesta->set_frecuancia_cambio_toner($_frecuancia_cambio_toner);
//utiliza impresora solo para imprimir documentacion laboral
    $impresora_para_documentacion_laboral = isset($_POST['optUsoImpresora']) ? $_POST['optUsoImpresora'] : '';
    $encuesta->set_uso_impresora($impresora_para_documentacion_laboral);

    $porcentaje_tiempo_que_utiliza_impresora_para_documentacion_laboral = isset($_POST['txtProcentajeUsoImpresora']) ? $_POST['txtProcentajeUsoImpresora'] : '';
    $encuesta->set_porcentaje_uso_impresora($porcentaje_tiempo_que_utiliza_impresora_para_documentacion_laboral);
    $resmas_de_papel_utilizadas = $_POST['optOpcionCantidadResmas'];
    $encuesta->set_opcion_cantidad_resmas($resmas_de_papel_utilizadas);
//si utiliza resmas de papel
//cuantas hojas utilzadas
    $cantidad_hojas_utilizadas = isset($_POST['txtCantidadHojas']) ? $_POST['txtCantidadHojas'] : '';
    $encuesta->set_cantidad_hojas($cantidad_hojas_utilizadas);
//cuantas resmas utilizadas
    $cantidad_resma_utilizadas = isset($_POST['txtCantidadResmas']) ? $_POST['txtCantidadResmas'] : '';
    $encuesta->set_cantidad_resmas($cantidad_resma_utilizadas);
//pregunta 18
    $utiliza_fotocopia_en_presentacion = isset($_POST['optUsaFotocopiaPresentacion']);
    $encuesta->set_usa_fotocopias($utiliza_fotocopia_en_presentacion);
//si responde que si
    $fotocopias_que_realiza_por_cada_presentacion = isset($_POST['txtCantidadFotocopias']) ? $_POST['txtCantidadFotocopias'] : '';
    $encuesta->set_cantidad_fotocopias($fotocopias_que_realiza_por_cada_presentacion);
//pregunta 20
    $cuantas_carpetas_utiliza_por_presentacion = isset($_POST['optCantidadCarpetas']);
    $encuesta->set_cantidad_carpetas($cuantas_carpetas_utiliza_por_presentacion);
//utiliza mas de una
    $cantidad_carpetas_utilizadas = isset($_POST['txtCantidadIngresadaCarpetas']) ? $_POST['txtCantidadIngresadaCarpetas'] : '';
    $encuesta->set_cantidad_ingresada_carpetas($cantidad_carpetas_utilizadas);
//pregunta 22
    $nepacos_utilizados_por_cada_presentacion = isset($_POST['optCantidadNepacos']) ? $_POST['optCantidadNepacos'] : '';
    $encuesta->set_cantidad_nepacos($nepacos_utilizados_por_cada_presentacion);
//cuantos nepacos utiliza
    $_cantidad_ingresada_nepacos = isset($_POST['txtCantidadIngresadaNepacos']) ? $_POST['txtCantidadIngresadaNepacos'] : '';
    $encuesta->set_cantidad_ingresada_nepacos($_cantidad_ingresada_nepacos);
//pregunta 24
    $caratulas_utilidas_por_presentacion = isset($_POST['optCantidadCaratulas']) ? $_POST['optCantidadCaratulas'] : '';
    $encuesta->set_cantidad_caratulas($caratulas_utilidas_por_presentacion);
//cantidad de caratulas
    $_cantidad_ingresada_caratulas = isset($_POST['txtCantidadIngresadaCaratulas']) ? $_POST['txtCantidadIngresadaCaratulas'] : '';
    $encuesta->set_cantidad_ingresada_caratulas($_cantidad_ingresada_caratulas);

//pregunta 26
    $_cantidad_reimpresion = $_POST['txtCantidadReimpresion'];
    $encuesta->set_cantidad_reimpresion($_cantidad_reimpresion);
//
    $_costo_archivado = isset($_POST['txtCostoArchivado']) ? $_POST['txtCostoArchivado'] : '';
    $encuesta->set_costo_archivado($_costo_archivado);
//
    $_costo_riesgos_laborales = isset($_POST['txtCostoRiesgosLaborales']) ? $_POST['txtCostoRiesgosLaborales'] : '';
    $encuesta->set_costo_riesgos_laborales($_costo_riesgos_laborales);
//
    $_tiempo_promedio_revision = isset($_POST['txtTiempoPromedioParaRevision']) ? $_POST['txtTiempoPromedioParaRevision'] : '';
    $encuesta->set_tiempo_promedio_revision($_tiempo_promedio_revision);
//
    $_costo_estimado_riesgos = isset($_POST['txtCostoEstimadoRiesgos']) ? $_POST['txtCostoEstimadoRiesgos'] : '';
    $encuesta->set_costo_estimado_riesgos($_costo_estimado_riesgos);
//
    $_inconvenientes = isset($_POST['txaInconvenientes']) ? $_POST['txaInconvenientes'] : '';
    $encuesta->set_inconvenientes($_inconvenientes);
//
    $_tiene_conexion_internet = isset($_POST['optTieneConexionInternet'])?$_POST['optTieneConexionInternet']:'';
    $encuesta->set_tiene_conexion_internet($_tiene_conexion_internet);
//
    $_costo_conexion_internet = isset($_POST['txtCostoConexionInternet']) ? $_POST['txtCostoConexionInternet'] : '';
    $encuesta->set_costo_conexion_internet($_costo_conexion_internet);

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
require_once $global_ruta_tmpl . '/index.tmpl.php';
