<html>
    <head>
        <title>
            Encuesta sobre costo de Rúbrica de documentación laboral en presentación papel (libro de hojas móviles)
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <link href="<?php echo $global_web_css; ?>/estilo.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $global_web_css; ?>/ocultar_campos.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $global_web_js; ?>/lib/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo $global_web_js; ?>/encuesta_laboral.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="contenedor" method="post" action="<?php echo $global_web; ?>/index.php">
            <h1 id="tituloEncuesta">
                Encuesta sobre costo de Rúbrica de documentación laboral en presentación papel (libro de hojas móviles)
            </h1>
            <table class="pregunta" id="tblCantidadEmpresas">
                <tr>
                    <td>
                        <p>1. ¿De cuántas empresas administra la documentación laboral (puede incluír la propia)?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="1" name="optCantidadEmpresas" />
                        <label>a) 1</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+1" name="optCantidadEmpresas" />
                        <label>b) Más de 1</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadIngresadaEmpresas">
                <tr>
                    <td>
                        1.I. ¿Cuántas empresas administra?
                        <input type="text" value="" name="txtCantidadIngresadaEmpresas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblEmpleadosPorEmpresa">
                <tr>
                    <td>
                        <p>2. Detalle cuántos empleados tiene aproximadamente cada empresa completando el siguiente cuadro:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="dentroPregunta">
                            <thead>
                                <tr>
                                    <td>
                                        Cantidad de empleados
                                    </td>
                                    <td>
                                        Empresas que administra con esa Cantidad de Empleados
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa3" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa4" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        26
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa5" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        51
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa6" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        101
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa7" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        201
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa8" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        501
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa9" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1001
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa10" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Más de 2000
                                    </td>
                                    <td>
                                        <input type="text" name="txtEmpleadosPorEmpresa11" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadEmpleadosDedicados">
                <tr>
                    <td>
                        <p>3. ¿Cuántos empleados de su empresa se dedican a la administración de documentación laboral?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="parcial" name="optCantidadEmpleadosDedicados" />
                        <label>a) 1 empleado con dedicación parcial</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="fulltime" name="optCantidadEmpleadosDedicados" />
                        <label>b) 1 empleado con dedicación full time</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+1" name="optCantidadEmpleadosDedicados" />
                        <label>c) Más de 1 empleado con dedicación full time</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblHorasMensuales">
                <tr>
                    <td>
                        3.I. ¿Cuántas horas mensuales le dedica a esta tarea?
                        <input type="text" value="" name="txtHorasMensuales" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadEmpleadosFulltime">
                <tr>
                    <td>
                        3.II. ¿Cuántos empleados tiene dedicación full time a esta tarea?
                        <input type="text" value="" name="txtCantidadEmpleadosFulltime" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadVecesViaja">
                <tr>
                    <td>
                        <p>4. Por cada presentación, ¿Cuántas veces debe dirigirse a la Secretaría de Trabajo?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="2" name="optCantidadVecesViaja" />
                        <label>a) 2 veces (una vez para presentar, otra vez para retirar)</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="3" name="optCantidadVecesViaja" />
                        <label>b) 3 veces</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+3" name="optCantidadVecesViaja" />
                        <label>c) Más de 3 veces</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadIngresadaVecesViaja">
                <tr>
                    <td>
                        4.I. ¿Cuántas veces?
                        <input type="text" value="" name="txtCantidadIngresadaVecesViaja" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblPorCadaViaje">
                <tr>
                    <td>
                        <p>5. Por cada vez que se dirige a la Secretaría de Trabajo:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        5.I ¿Qué gasto tiene en viáticos?
                        <input type="text" value="" name="txtGastoViaticos" />
                    </td>
                </tr>
                <tr>
                    <td>
                        5.II ¿Cuántas horas le insume esta tarea?
                        <input type="text" value="" name="txtHorasInsumidas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblTiempoIncluidoEnOtraPregunta">
                <tr>
                    <td>
                        5.III ¿Se incluyó este tiempo en la pregunta 5.?
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="si" name="optTiempoIncluidoEnOtraPregunta" />
                        <label>Sí</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input  type="radio" value="no" name="optTiempoIncluidoEnOtraPregunta" />
                        <label>No</label>
                    </td>
                </tr>
            </table>
            <div class="apartado" >
                <p>
                    Teniendo en cuenta que se deben realizar durante el año 3 presentaciones de los libros de hojas móviles por empresa, se requiere conocer el costo estimado en insumos de librería para esta tarea:
                </p>
            </div>
            <table class="pregunta" id="tblTipoImpresora">
                <tr>
                    <td>
                        <p>6. ¿Qué tipo de impresora utiliza? </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="chorro" name="optTipoImpresora" />
                        <label>a) Chorro a Tinta</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="laser" name="optTipoImpresora" />
                        <label>b) Láser</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblFrecuanciaCambioCartuchos">
                <tr>
                    <td>
                        6.I ¿Cada cuánto reemplaza o recarga los cartuchos?
                        <input type="text" value="" name="txtFrecuanciaCambioCartuchos" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblFrecuanciaCambioToner">
                <tr>
                    <td>
                        6.II ¿Cada cuánto reemplaza el tóner?
                        <input type="text" value="" name="txtFrecuanciaCambioToner" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblUsoImpresora">
                <tr>
                    <td>
                        <p>7. ¿Utiliza la impresora exclusivamente para imprimir documentación laboral? </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="si" name="optUsoImpresora" />
                        <label>a) Sí</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="no" name="optUsoImpresora" />
                        <label>b) No</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblProcentajeUsoImpresora">
                <tr>
                    <td>
                        7.I ¿Qué porcentaje de tiempo utiliza la impresora para documentación laboral?
                        <input type="text" value="" name="txtProcentajeUsoImpresora" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblOpcionCantidadResmas">
                <tr>
                    <td>
                        <p>8. ¿Cuántas resmas de papel imprime por cada presentación?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="-1" name="optOpcionCantidadResmas" />
                        <label>a) Menos de 1</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="1" name="optOpcionCantidadResmas" />
                        <label>b) 1</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+1" name="optOpcionCantidadResmas" />
                        <label>c) Más de 1</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadHojas">
                <tr>
                    <td>
                        8.I ¿Cuántas hojas?
                        <input type="text" value="" name="txtCantidadHojas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadResmas">
                <tr>
                    <td>
                        8.II ¿Cuántas resmas?
                        <input type="text" value="" name="txtCantidadResmas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblUsaFotocopias">
                <tr>
                    <td>
                        <p>9. ¿Utiliza fotocopias en cada presentación? Por ejemplo de la última hoja foliada.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="si" name="optUsaFotocopiaPresentacion" id="optUsaFotocopiasSi" /><label>a) Sí</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="no" name="optUsaFotocopiaPresentacion" id="optUsaFotocopiasNo" /><label>b) No</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadFotocopias">
                <tr>
                    <td>
                        9.I. ¿Cuántas fotocopias realiza por cada presentación?
                        <input type="text" value="" name="txtCantidadFotocopias" id="txtCantidadFotocopias" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadCarpetas">
                <tr>
                    <td>
                        <p>10. ¿Cuántas carpetas utiliza por cada presentación?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="0" name="optCantidadCarpetas" id="optCantidadCarpetasNinguna" /><label>a) Ninguna</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="1" name="optCantidadCarpetas" id="optCantidadCarpetas1" /><label>b) 1</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+1" name="optCantidadCarpetas" id="optCantidadCarpetasMasDe1" /><label>c) Más de 1</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadIngresadaCarpetas">
                <tr>
                    <td>
                        10.I. ¿Cuántas carpetas utiliza?
                        <input type="text" value="" name="txtCantidadIngresadaCarpetas" id="txtCantidadIngresadaCarpetas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadNepacos">
                <tr>
                    <td>
                        <p>11 ¿Cuántas nepacos utiliza por cada presentación?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="0" name="optCantidadNepacos" id="optCantidadNepacosNinguno" /><label>a) Ninguno</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="1" name="optCantidadNepacos" id="optCantidadNepacos1" /><label>b) 1</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+1" name="optCantidadNepacos" id="optCantidadNepacosMasDe1" /><label>c) Más de 1</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadIngresadaNepacos">
                <tr>
                    <td>
                        11.I. ¿Cuántas nepacos utiliza?
                        <input type="text" value="" name="txtCantidadIngresadaNepacos" id="txtCantidadNepacos" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadCaratulas">
                <tr>
                    <td>
                        <p>12. ¿Cuántas carátulas utiliza por cada presentación?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="0" name="optCantidadCaratulas" id="optCantidadCaratulasNinguno" /><label>a) Ninguna</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="4" name="optCantidadCaratulas" id="optCantidadNepacos4" /><label>b) 4</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="+4" name="optCantidadCaratulas" id="optCantidadNepacosMasDe4" /><label>c) Más de 4</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadIngresadaCaratulas">
                <tr>
                    <td>
                        12.I. ¿Cuántas carátulas utiliza?
                        <input type="text" value="" name="txtCantidadIngresadaCaratulas" id="txtCantidadCaratulas" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCantidadReimpresion" >
                <tr>
                    <td>
                        13. ¿Cuántas veces se tuvo que reimprimir un libro por error de foliado o errores de forma previo a su presentación?
                        <input type="text" value="" name="txtCantidadReimpresion" id="txtCantidadReimpresion" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCostoArchivado">
                <tr>
                    <td>
                        14. Costo estimado del archivado por 10 años de los libros rubricados
                        <input type="text" value="" name="txtCostoArchivado" id="txtCostoArchivado" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" >
                <tr>
                    <td>
                        15. Costo estimado de riesgos laborales in-tinere, de robo, extravío y rotura de los libros rubricados en cada una de las presentaciones
                        <input type="text" value="" name="txtCostoRiesgosLaborales" id="txtCostoRiesgosLaborales" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" >
                <tr>
                    <td>
                        16. Tiempo promedio de puesta a disposición para revisión de jueces, inspectores laborales y autoridades competentes de los libros rubricados
                        <input type="text" value="" name="txtTiempoPromedioParaRevision" id="txtTiempoPromedioParaRevision" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" >
                <tr>
                    <td>
                        17. Costo estimado de riesgos de robo, extravío y rotura de los libros rubricados cuando se solicitan en las inspecciones
                        <input type="text" value="" name="txtCostoEstimadoRiesgos" id="txtCostoEstimadoRiesgos" />
                    </td>
                </tr>
            </table>
            <table class="pregunta" >
                <tr>
                    <td>
                        18. Detalle, en su opinión, los principales inconvenientes y/o costos del proceso de Rúbrica de documentación laboral en presentación papel (libro de hojas móviles)
                        <textarea name="txaInconvenientes" id="txtInconvenientes"></textarea>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblTieneConexionInternet">
                <tr>
                    <td>
                        <p>19. ¿Su empresa tiene conexión a Internet?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="si" name="optTieneConexionInternet" id="optTieneConexionInternetSi" /><label>a) Sí</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="no" name="optTieneConexionInternet" id="optTieneConexionInternetNo" /><label>b) No</label>
                    </td>
                </tr>
            </table>
            <table class="pregunta" id="tblCostoConexionInternet">
                <tr>
                    <td>
                        19.I. Costo  de conexión a Internet
                        <input type="text" value="" name="txtCostoConexionInternet" id="txtCostoConexionInternet" />
                    </td>
                </tr>
            </table>
            <table class="pregunta">
                <tr>
                    <td>
                        <input style="float:right;" type="submit" value="Terminar y enviar formulario" name="btnEnviar"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>