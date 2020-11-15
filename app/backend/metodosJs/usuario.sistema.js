function Registrar() 
{
    
   let datos = {
        accion: 'registrarUsuarioSistema',
        txtNombre:$("#txtNombre").val(),
        txtUsuario: $("#txtUsuario").val(),
        txtPwd: $("#txtPwd").val()
     
    }
   
    Swal.fire({
        title: '¿Estas seguro de registrarte?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../controlador/usuario.sistema.controlador.php", datos,
                function (data, textStatus) {
                    console.log(data);
               data = JSON.parse(data);
                                      
                       if(data.Mensaje=="ok"){
                        Swal.fire(
                            'Usuario Registrado',
                            '',
                            'success'
                        )
                    
                       }else{
                        Swal.fire(
                            'Usuario no Registrado',
                            '',
                            'error'
                        ) 
                       }
                       
                }
            );

        }
    })
}