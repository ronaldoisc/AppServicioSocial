function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? ""
        : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var idUsuario = getParameterByName("id");

function getMisRegistros(){
    $.post("../../../controlador/misRegistros.controlador.php", {
        accion: 'getMisRegistros',
        id:idUsuario
    },
    function(data) {
        var salida = "";
        $.each(data, function(i, val) {

            salida =
                `<div class="col-12 col-md-3 mt-3">
                <div class="card">
                <img class="card-img-top" src="https://www.pngitem.com/pimgs/m/78-786420_icono-usuario-joven-transparent-user-png-png-download.png" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">${ val.Nombre} ${ val.ApellidoPaterno} ${ val.ApellidoMaterno}</h4>
                  
                    <p class="card-text">Servicio: ${ val.NombreServicio}</p>
                    <p class="card-text">Total de Pago: $${ val.Costo}</p>
                    <p class="card-text">Fecha: ${ val.FechaPago}</p>
                    <a href="V_DetalleRegistro.php?id=${val.Id}"><i class="fas  fa-2x fa-chevron-circle-down"></i></a>
                </div>
            </div>
            </div>`;
            $("#cuerpoCard").append(salida);
        });

    });

}

$(document).ready(function(e){
getMisRegistros();
});