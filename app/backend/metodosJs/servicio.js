function RegistrarServicios() {
    alert("hola");
    let datos = {
        accion: 'registrarServicio',
        txtNombre: $("#txtServicio").val(),
        txtCosto: $("#txtCosto").val(),
        cmbIdTipoServicio: $("#cmbTipoServicio").val()
    };

    Swal.fire({
        title: '¿Estas seguro de agregar un nuevo servicio?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/servicio.controlador.php", datos,
                function (data, textStatus) {
                    console.log(data);
                    data = JSON.parse(data);

                    if (data.Mensaje == "ok") {
                        Swal.fire(
                            'Servicio Registrado',
                            '',
                            'success'
                        );

                    } else {
                        Swal.fire(
                            'Servicio no Registrado',
                            '',
                            'error'
                        );
                    }

                }
            );

        }
    });
}


function getTipoServicios() {
    $.post("../../../controlador/servicio.controlador.php", {
        accion: 'getTipoServicios'
    },
        function (data) {
            var salida = "";
            $("#cmbTipoServicio").empty();
            $('#cmbTipoServicio').append(`<option value="0">--Elige un Tipo de Servicio--</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.Servicio + "</option>";
            });
            $("#cmbTipoServicio").append(salida);
        });
}
$(document).ready(function () {
    getTipoServicios();
});