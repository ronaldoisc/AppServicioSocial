function RegistrarContribuyente() {
   
    let datos = {

        accion:        'registrarContribuyente',
        txtNombre:     $("#txtNombre").val(),
        txtApepat:     $("#txtApepat").val(),
        txtApemat:     $("#txtApemat").val(),
        txtDireccion:  $("#txtDireccion").val(),
        txtNumExt:     $("#txtNumExt").val(),
        txtNumInt:     $("#txtNumInt").val(),
        txtCurp:       $("#txtCurp").val(),
        cmbLocalidad:  $("#cmbLocalidad").val(),
        txtCorreo:     $("#txtCorreo").val(),
        txtTelefono:   $("#txtTelefono").val()
    };
    alert(JSON.stringify(datos));
    Swal.fire({
        title: '¿Deseas agregar un nuevo Contribuyente?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/contribuyente.controlador.php", datos,
            
                function (data) {
                  
                  
                data = JSON.parse(data);
                   
                   
                    if (data.Mensaje == "ok") {
                        Swal.fire(
                            'Contribuyente  almacenado',
                            '',
                            'success'
                        );
                        //formReset();
                    } else {
                        Swal.fire(
                            'Contribuyente no almacenado',
                            '',
                            'error'
                        );
                    }
                }
            );

        }
    });
}
function getEstados() {

    $.post("../../../controlador/contribuyente.controlador.php", {
        accion: 'getEstados'
    },
        function (data) {
            var salida = "";
            $("#cmbEstados").empty();
            $('#cmbEstados').append(`<option value="0">--Elige un Estado--</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.Estado + "</option>";
            });
            $("#cmbEstados").append(salida);
        });

}

$(document).ready(function () {
    const url = "../../../controlador/contribuyente.controlador.php";
    $('#cmbMunicipios').append(`<option value="0">--Elige un Municipio--</option>`);
    $('#cmbLocalidad').append(`<option value="0">--Elige una localidad--</option>`);
    $('#cmbEstados').change(function (e) {
        e.preventDefault();
        let value = $('#cmbEstados').val();

        $.post(url, { accion: 'getUbicacion', subaccion: "Municipios", id_estado: value },
            function (data, status) {

                $("#cmbMunicipios").empty();
                $('#cmbMunicipios').append(`<option value="0">Seleccione un Municipio</option>`);
                $.each(data, function (index, value) {

                    $('#cmbMunicipios').append(`<option value="${value.Id}">${value.Municipio}</option>`);
                });
            });
    });
    $('#cmbMunicipios').change(function (e) {
        e.preventDefault();
        let municipio = $('#cmbMunicipios').val();
        let estado = $('#cmbEstados').val();

        $.post(url, { accion: 'getUbicacion2', subaccion: "localidades", id_estado: estado, id_municipio: municipio },

            function (data, textStatus) {
                $('#cmbLocalidad').empty();
                $('#cmbLocalidad').append(`<option value="0">--Elige una Localidad--</option>`);
                $.each(data, function (index, value) {
                    //JSON.parse(myData)

                    $('#cmbLocalidad').append(`<option value="${value.id}">${value.localidad}</option>`);
                });
            });
    }
    );

    getEstados();


});