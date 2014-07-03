$(document).ready(function() {
    $("input[name='optCantidadEmpresas']").change(function() {
        var val = $(this).val();
        if (val === "1") {
            $("#tblCantidadIngresadaEmpresas").fadeOut();
        } else {
            $("#tblCantidadIngresadaEmpresas").fadeIn();
        }
    });
    $("input[name='optCantidadEmpleadosDedicados']").change(function() {
        var val = $(this).val();
        if (val === "parcial") {
            $("#tblHorasMensuales").fadeIn();
            $("#tblCantidadEmpleadosFulltime").fadeOut();
        } else if (val === "+1") {
            $("#tblCantidadEmpleadosFulltime").fadeIn();
            $("#tblHorasMensuales").fadeOut();
        } else {
            $("#tblHorasMensuales").fadeOut();
            $("#tblCantidadEmpleadosFulltime").fadeOut();
        }
    });
    $("input[name='optCantidadVecesViaja']").change(function() {
        var val = $(this).val();
        if (val === "+3") {
            $("#tblCantidadIngresadaVecesViaja").fadeIn();
        } else {
            $("#tblCantidadIngresadaVecesViaja").fadeOut();
        }
    });
    //queda pendiente la pregunta 9 del word
    $("input[name='optTipoImpresora']").change(function() {
        var val = $(this).val();
        if (val === "chorro") {
            $("#tblFrecuanciaCambioCartuchos").fadeIn();
            $("#tblFrecuanciaCambioToner").fadeOut();
        } else if (val === "laser") {
            $("#tblFrecuanciaCambioToner").fadeIn();
            $("#tblFrecuanciaCambioCartuchos").fadeOut();
        }
    });
    $("input[name='optUsoImpresora']").change(function() {
        var val = $(this).val();
        if (val === "no") {
            $("#tblProcentajeUsoImpresora").fadeIn();
        } else {
            $("#tblProcentajeUsoImpresora").fadeOut();
        }
    });
    $("input[name='optOpcionCantidadResmas']").change(function() {
        var val = $(this).val();
        if (val === "-1") {
            $("#tblCantidadHojas").fadeIn();
            $("#tblCantidadResmas").fadeOut();
        } else if (val === "+1") {
            $("#tblCantidadResmas").fadeIn();
            $("#tblCantidadHojas").fadeOut();
        } else {
            $("#tblCantidadHojas").fadeOut();
            $("#tblCantidadResmas").fadeOut();
        }
    });
    $("input[name='optUsaFotocopiaPresentacion']").change(function() {
        var val = $(this).val();
        if (val === "si") {
            $("#tblCantidadFotocopias").fadeIn();
        } else {
            $("#tblCantidadFotocopias").fadeOut();
        }
    });
    $("input[name='optCantidadCarpetas']").change(function() {
        var val = $(this).val();
        if (val === "+1") {
            $("#tblCantidadIngresadaCarpetas").fadeIn();
        } else {
            $("#tblCantidadIngresadaCarpetas").fadeOut();
        }
    });
    $("input[name='optCantidadCarpetas']").change(function() {
        var val = $(this).val();
        if (val === "+1") {
            $("#tblCantidadIngresadaCarpetas").fadeIn();
        } else {
            $("#tblCantidadIngresadaCarpetas").fadeOut();
        }
    });
    $("input[name='optCantidadNepacos']").change(function() {
        var val = $(this).val();
        if (val === "+1") {
            $("#tblCantidadIngresadaNepacos").fadeIn();
        } else {
            $("#tblCantidadIngresadaNepacos").fadeOut();
        }
    });
    $("input[name='optCantidadCaratulas']").change(function() {
        var val = $(this).val();
        if (val === "+4") {
            $("#tblCantidadIngresadaCaratulas").fadeIn();
        } else {
            $("#tblCantidadIngresadaCaratulas").fadeOut();
        }
    });
    $("input[name='optTieneConexionInternet']").change(function() {
        var val = $(this).val();
        if (val === "si") {
            $("#tblCostoConexionInternet").fadeIn();
        } else {
            $("#tblCostoConexionInternet").fadeOut();
        }
    });
});

