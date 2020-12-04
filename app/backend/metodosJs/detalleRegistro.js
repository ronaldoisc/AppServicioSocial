function genPDF()
  {
   html2canvas(document.getElementById("imprimir") ,{
   onrendered:function(canvas){

    var img=canvas.toDataURL("image/png");
   var doc = new jsPDF();
   doc.addImage(img,'JPEG',-40,30);
   
   doc.save('test.pdf');
   }

   }
   );

  }

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? ""
        : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var IdRegistro = getParameterByName("id");

function getRegistroId() {
    $.post("../../../controlador/misRegistros.controlador.php", {
        accion: 'getRegistro', id: IdRegistro
    },
        function (data) {
            var salida = "";
            $.each(data, function (i, val) {

                salida =
                    `
                    <div class="row justify-content-center" >
            <div class="col-md-7 col-sm-7 col-7">
                <h1 class="text-center mb-5">Comprobante de Pago</h1>
               
                <div class="row">
                    <div class="col-md-6">

                        <h5>Contribuyente</h5>
                        <p> ${ val.Nombre} ${ val.ApellidoPaterno} ${ val.ApellidoMaterno}</p>
                        <h5>Localidad</h5>
                        <p>${ val.localidad}</p>
                        <h5>Dirección</h5>
                        <p>${ val.Direccion}</p>

                    </div>
                    <div class="col-md 6">

                        <h5>Fecha de Pago</h5>
                        <p>${ val.FechaPago}</p>

                        <h5>Atendido por</h5>
                        <p>${ val.Usuario}</p>

                    </div>
                </div>

                <table class="table table-stripped">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th>Servicio</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <td>${ val.Servicio}</td>
                    <td>${ val.Tipo}</td>
                    <td>${ val.Descripcion}</td>
                    <td>${ val.Costo}</td>

                    </tbody>
                </table>

            </div>
        </div>
                    `;
                $("#imprimir").append(salida);
            });

        });
}
$(document).ready(function (e) {
    getRegistroId();
});