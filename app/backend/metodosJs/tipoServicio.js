function RegistrarTipoServicio() 
{
    
   let datos = {
        accion: 'registrarTipoServicio',
        txtTipoServicio:$("#txtTipoServicio").val(),
        txtDescripcion: $("#txtDescripcion").val(),
        
    };
    alert(JSON.stringify(datos));
   
    Swal.fire({
        title: '¿Estas seguro de agregar un nuevo tipo de servicio?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/tipoServicio.controlador.php", datos,
                function (data, textStatus) {
                   
               data = JSON.parse(data);
                                      
                       if(data.Mensaje == "ok"){
                        Swal.fire(
                            'Tipo de servicio Registrado',
                            '',
                            'success'
                        );
                    
                       }
                       else if(data.Mensaje == "error"){
                        Swal.fire(
                            'Tipo de servicio no Registrado',
                            '',
                            'error'
                        );
                       }
                       
                }
            );

        }
    });
}