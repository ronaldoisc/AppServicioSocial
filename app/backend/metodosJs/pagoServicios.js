function getContribuyentes() {
    $.post("../../../controlador/pagoServicios.controlador.php", {
        accion: 'getContribuyentes'
    },
        function (data) {
            var salida = "";
            var salid = "";
            $("#cmbContribuyente").empty();
            $('#cmbContribuyente').append(`<option value="0">--Elige un Contribuyente--</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.Nombre + " " + val.ApellidoMaterno + "</option>";
               
            });
            
            $("#cmbContribuyente").append(salida);

        });
}
function getServicios() {
    $.post("../../../controlador/pagoServicios.controlador.php", {
        accion: 'getServicios'
    },
        function (data) {
            var salida = "";
            $("#cmbServicio").empty();
            $('#cmbServicio').append(`<option value="0">----Elige un Servicio----</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.NombreServicio + "</option>";
            });
            $("#cmbServicio").append(salida);
        });
}

function registrarPago() {
    let datos = {
        accion: 'registrarPago',
        cmbIdContribuyente: $("#cmbContribuyente").val(),
        cmbIdServicio: $("#cmbServicio").val(),
        txtIdUsuario: $("#txtIdUsuario").val()
    };

    Swal.fire({
        title: '¿Deseas registrar un nuevo Pago?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/pagoServicios.controlador.php", datos,
                function (data) {
                    data = JSON.parse(data);

                    console.log(data.Mensaje);
                    if (data.Mensaje == "ok") {
                        Swal.fire(
                            'Pago Registrado',
                            '',
                            'success'
                        );

                    } else {
                        Swal.fire(
                            'Pago no registrado',
                            '',
                            'error'
                        );
                    }
                }
            );

        }
    });
}
$(document).ready(function () {
    $("#cmbContribuyente").change(function (e) {
        var salida="";
        let idContribuyente = $("#cmbContribuyente").val();
        
        $.post("../../../controlador/pagoServicios.controlador.php", { accion: 'getContribuyente', idContribuyente: idContribuyente },
            function (data, status) {
                $("#Datoscontribuyente").empty();
                $.each(data, function (index, value) {
                    
                    salida+="<label class='mt-2'>Curp</label>";
                     salida+="<input value="+value.Curp+" disabled class='form-control mt-1'>";
                     salida+="<label class='mt-2'>Correo</label>";
                     salida+="<input value="+value.Correo+" disabled class='form-control mt-1'>";
                     salida+="<label class='mt-2'>Telefono</label>";
                     salida+="<input value="+value.Telefono+" disabled class='form-control mt-1'>";

                    $('#Datoscontribuyente').append(salida);
                });
            });
    });
    $("#cmbServicio").change(function (e) {
        e.preventDefault();
        var salida="";
        let idServicio = $("#cmbServicio").val();
        
        $.post("../../../controlador/pagoServicios.controlador.php", { accion: 'getServicio', idServicio: idServicio },
            function (data, status) {
                $("#DatosServicio").empty();
                $.each(data, function (index, value) {
                    
                    salida+="<label class='mt-2'>Costo</label>";
                     salida+="<input value="+value.Costo+" disabled class='form-control mt-1'>";
                     

                    $('#DatosServicio').append(salida);
                });
            });
    });


    getContribuyentes();
    getServicios();

});