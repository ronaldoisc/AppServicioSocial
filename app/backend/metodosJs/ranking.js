
function generate() {
  var doc = new jsPDF('p', 'pt', 'letter');
  var res = doc.autoTableHtmlToJson(document.getElementById("tabla"));
  var finalY = doc.lastAutoTable.finalY || 10;
  doc.text('Reporte sobre el consumo de agua', 14, finalY + 15);
  doc.autoTable(res.columns, res.data, {
    // startY: finalY + 20,
    html: "#tabla",

    useCss: true,
    margin: { top: 40 }
  }
  );

  doc.save("Reporte.pdf");
}


$(document).ready(function () {

  $('#tipo').change(function (e) {
    e.preventDefault();
    var id = $("#tipo").val();
    if (id == "2") {
      $("#encabezado").empty();
      $("#alerta").empty();
     
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoUsuarios'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
            '<th scope="col">Fecha</th>' +
            '<th scope="col">Nombre</th>' +
            '<th scope="col">Estado</th>' +
            '<th scope="col">Municipio</th>' +
            '<th scope="col">Localidad</th>' +
            '<th scope="col">Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);


          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +
            '<td>' + val.Fecha + '</td>' +
              '<td>' + val.Nombre + " "+val.ApellidoPaterno + '</td>' +
              '<td>' + val.Estado+ '</td>' +
              '<td>' + val.Municipio + '</td>' +
              '<td>' + val.localidad + '</td>' +
              '<td>' + val.NoLitros + '</td>';


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        }
        );
    } else if (id == "3") {
      $("#encabezado").empty();
      $("#alerta").empty();
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoLocalidad'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
          '<th scope="col">Fecha</th>' +
          '<th scope="col">Estado</th>' +
            '<th scope="col">Municipio</th>' +
            '<th scope="col">Localidad</th>' +
            '<th scope="col">Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);
          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +
            '<td>' + val.Fecha+ '</td>' +
             '<td>' + val.Estado+ '</td>' +
              '<td>' + val.Municipio + '</td>' +
              '<td>' + val.localidad + '</td>' +
              '<td>' + val.litros + '</td>';


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        });
    }else if(id=="4"){
      $("#encabezado").empty();
      $("#alerta").empty();
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoMunicipio'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
            '<th scope="col">Fecha</th>' +
            '<th scope="col">Estado</th>' +
            '<th scope="col">Municipio</th>' +
            '<th scope="col">Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);
          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +

              '<td>' + val.Fecha + '</td>' +
              '<td>' + val.Estado + '</td>' +
              '<td>' + val.Municipio + '</td>' +
              '<td>' + val.Litros + '</td>';


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        });
    }



  }
  );
});