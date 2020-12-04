function RegistrarDispositivo() {

    let datos = {
        accion: 'agregarDispositivo',
        txtId: $("#txtId").val(),
        txtNombre: $("#txtNombre").val(),
        txtDescripcion: $("#txtDescripcion").val(),
        txtObservacion: $("#txtObservacion").val()
    };
   
    Swal.fire({
        title: '¿Deseas agregar un nuevo Dispositivo?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/dispositivo.controlador.php", datos,
                function (data) {
                data = JSON.parse(data);

                    console.log(data.Mensaje);
                    if (data.Mensaje == "ok") {
                        Swal.fire(
                            'Dispositivo  almacenado',
                            '',
                            'success'
                        );
                        //formReset();
                    } else {
                        Swal.fire(
                            'Dispositivo no almacenado',
                            '',
                            'error'
                        );
                    }
                }
            );

        }
    });




}

