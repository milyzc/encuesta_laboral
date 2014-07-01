<?php

require_once 'config.php';
if (isset($_POST['btnEnviar'])) {
    $cuantasEmpresasAdministranLaDocumentacionLaboral = isset($_POST['pregunta1']);
    $pregunta2 = isset($_POST['pregunta2']) ? $_POST['pregunta2'] : '';

    $empleados_por_empresa = isset($_POST['pregunta3']);


    $empleados_que_se_dedican_a_la_administracion_doc_laboral = isset($_POST['pregunta4']);
//si pregunta 4 responde A
    $horas_dedicadas_a_tarea = isset($_POST['pregunta5']) ? ($_POST['pregunta5']) : '';
//si pregunta 4 responde c
    $cantidad_empleados_con_dedicacion_full_time = isset($_POST['pregunta6']);


    $veces_que_se_dirige_a_secretaria_de_trabajo = isset($_POST['pregunta7']);

//si va mas de 3 veces a la secretaria de trasbajo
    $cuantas_veces_que_se_dirige_a_secretaria_de_trabajo = isset($_POST['pregunta8']) ? $_POST['pregunta8'] : '';

//por cada ves que se dirige a la secretaria de trabajo
    $gastos_en_viaticos = isset($_POST['pregunta9.1']) ? $_POST['pregunta9.1'] : '';
    $horas_insumidas_por_la_tarea = isset($_POST['pregunta9.2']) ? $_POST['pregunta9.2'] : '';

//falta pregunta9.3
//tipo de impresora
    $tipo_de_impresora = isset($_POST['pregunta10']) ? $_POST['pregunta10'] : '';
//si tiene impresora
    $cada_cuanto_remplaza_o_recarga_cartuchos = isset($_POST['pregunta11']) ? $_POST['pregunta11'] : '';

    $cada_cuanto_remplaza_el_toner = isset($_POST['pregunta12']) ? $_POST['pregunta12'] : '';

//utiliza impresora solo para imprimir documentacion laboral
    $impresora_para_documentacion_laboral = isset($_POST['pregunta13']) ? $_POST['pregunta13'] : '';

    $porcentaje_tiempo_que_utiliza_impresora_para_documentacion_laboral = isset($_POST['pregunta14']) ? $_POST['pregunta14'] : '';

    $resmas_de_papel_utilizadas = isset($_POST['pregunta15']);
//si utiliza resmas de papel
//cuantas hojas utilzadas
    $cantidad_hojas_utilizadas = isset($_POST['pregunta16']) ? $_POST['pregunta16'] : '';
//cuantas resmas utilizadas
    $cantidad_resma_utilizadas = isset($_POST['pregunta17']) ? $_POST['pregunta17'] : '';

//pregunta 18
    $utiliza_fotocopia_en_prsentacion = isset($_POST['pregunta18']);
//si responde que si
    $fotocopias_que_realiza_por_cada_presentacion = isset($_POST['pregunta19']) ? $_POST['pregunta19'] : '';

//pregunta 20
    $cuantas_carpetas_utiliza_por_presentacion = isset($_POST['pregunta20']);
//utiliza mas de una
    $cantidad_carpetas_utilizadas = isset($_POST['pregunta21']) ? $_POST['pregunta21'] : '';

//pregunta 22
    $nepacos_utilizados_por_cada_presentacion = isset($_POST['pregunta22']);
//cuantos nepacos utiliza
    $cantidad_nepacos_que_utiliza = isset($_POST['pregunta23']) ? $_POST['pregunta23'] : '';

//pregunta 24
    $caratulas_utilidas_por_presentacion = isset($_POST['pregunta24']);
//cantidad de caratulas
    $cantidad_especifica_de_caratulas = isset($_POST['pregunta25']) ? $_POST['pregunta25'] : '';



//pregunta 26
    $pregunta26 = isset($_POST['pregunta26']) ? $_POST['pregunta26'] : '';

    $pregunta27 = isset($_POST['pregunta27']) ? $_POST['pregunta27'] : '';

    $pregunta28 = isset($_POST['pregunta28']) ? $_POST['pregunta28'] : '';

    $pregunta29 = isset($_POST['pregunta29']) ? $_POST['pregunta29'] : '';

    $pregunta30 = isset($_POST['pregunta30']) ? $_POST['pregunta30'] : '';

    $pregunta31 = isset($_POST['pregunta31']) ? $_POST['pregunta31'] : '';

    $pregunta32 = isset($_POST['pregunta32']);

    $pregunta33 = isset($_POST['pregunta33']) ? $_POST['pregunta33'] : '';
}
require_once $global_ruta_tmpl . '/index.tmpl.php';
