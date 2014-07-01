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
            $("#tblHorasMensuales").fadeOut();
        } else {
            $("#tblHorasMensuales").fadeIn();
        }
    });
});

