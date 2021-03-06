function getContribuyentes() {
    $.post("../../../controlador/asignarDispositivos.controlador.php", {
        accion: 'getContribuyentes'
    },
        function (data) {
            var salida = "";
            $("#cmbContribuyente").empty();
            $('#cmbContribuyente').append(`<option value="0">--Elige un Contribuyente--</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.Nombre + " " + val.ApellidoMaterno + "</option>";
            });
            $("#cmbContribuyente").append(salida);
        });
}
function getDispositivos() {
    $.post("../../../controlador/asignarDispositivos.controlador.php", {
        accion: 'getDispositivos'
    },
        function (data) {
            var salida = "";
            $("#cmbDispositivo").empty();
            $('#cmbDispositivo').append(`<option value="0">--Elige un Dispositivo--</option>`);
            $.each(data, function (i, val) {
                salida += "<option value='" + val.Id + "'>" + val.Nombre + "</option>";
            });
            $("#cmbDispositivo").append(salida);
        });
}

function RegistrarAsignarDispositivo() {

    let datos = {
        accion:'registrarAsinarDispositivo',
        cmbIdDispositivo: $("#cmbDispositivo").val(),
        cmbIdContribuyente: $("#cmbContribuyente").val()
        
    };
   
    Swal.fire({
        title: '¿Deseas realizar la asignación?',
        text: "Si estás seguro, presiona aceptar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("../../../controlador/asignarDispositivos.controlador.php", datos,
                function (data) {
                    data = JSON.parse(data);

                    console.log(data.Mensaje);
                    if (data.Mensaje == "ok") {
                        Swal.fire(
                            'Asignacion  almacenada',
                            '',
                            'success'
                        );
                       
                    } else {
                        Swal.fire(
                            'Asignación no almacenada',
                            '',
                            'error'
                        );
                    }
                }
            );

        }
    });

}
function getAsignaciones(){
    $.post("../../../controlador/asignarDispositivos.controlador.php", {
        accion: 'getAsignaciones'
      },
        function (data) {
          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +
         
              '<td>' + val.Nombre + '</td>' +
              '<td>' + val.ApellidoPaterno+ '</td>' +
              '<td>' + val.Dispositivo+ '</td>';
             


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        }
        );
}
$(document).ready(function () {
   
    getContribuyentes();
    getDispositivos();
    getAsignaciones();
});