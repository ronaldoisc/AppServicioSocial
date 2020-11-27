
function generate() {
  var doc = new jsPDF('p', 'pt', 'letter');
  var res = doc.autoTableHtmlToJson(document.getElementById("tabla"));
  var finalY = doc.lastAutoTable.finalY || 10;
  doc.text('Ranking consumo de agua 2020', 14, finalY + 15);
  doc.autoTable(res.columns, res.data, {
    // startY: finalY + 20,
    html: "#tabla",

    useCss: true,
    margin: { top: 40 }
  }
  );

  doc.save("Estados.pdf");
}


$(document).ready(function () {

  $('#tipo').change(function (e) {
    e.preventDefault();
    var id = $("#tipo").val();
    if (id == "2") {
      $("#encabezado").empty();
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoUsuarios'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
            '<th>Nombre</th>' +
            '<th>Municipio</th>' +
            '<th>Localidad</th>' +
            '<th>Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);


          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +

              '<td>' + val.Nombre + '</td>' +
              '<td>' + val.Municipio + '</td>' +
              '<td>' + val.localidad + '</td>' +
              '<td>' + val.NoLitros + '</td>';


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        });
    } else if (id == "3") {
      $("#encabezado").empty();
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoLocalidad'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
            '<th>Municipio</th>' +
            '<th>Localidad</th>' +
            '<th>Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);
          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +

              '<td>' + val.Municipio + '</td>' +
              '<td>' + val.localidad + '</td>' +
              '<td>' + val.litros + '</td>';


            salida += '</tr>';
          });
          $("#tBody").append(salida);
        });
    }else if(id=="4"){
      $("#encabezado").empty();
      $.post("../../../controlador/ranking.controlador.php", {
        accion: 'consumoMunicipio'
      },
        function (data) {
          var encabezado = "";

          encabezado += '<tr>' +
            '<th>Fecha</th>' +
            '<th>Municipio</th>' +
            '<th>Litros</th>';
          encabezado += "</tr>";
          $("#encabezado").append(encabezado);
          var salida = "";


          $.each(data, function (i, val) {
            
            $("#tBody").empty();
            salida += '<tr>' +

              '<td>' + val.Fecha + '</td>' +
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