<?php
require_once "php/conexion.php";
$conexion=conexion();
$sql="select fechaVenta,montoVenta from ventas order by fechaVenta";
$result=mysqli_query($conexion,$sql);
$valoresy=array();//montos
$valoresx=array();//ventas

while ($ver=mysqli_fetch_row($result)) {
   $valoresy[]=$ver[1];
   $valoresx[]=$ver[0];
}

//convertir a jeison
$datosx=json_encode($valoresx);
$datosy=json_encode($valoresy);
?>

<div id="graficalineal">
</div>
<script type="text/javascript">

function crearCadenaLineal(json){
    var parsed = JSON.parse(json);
     var arr = [];

     for (var x in parsed) {
         arr.push(parsed[x]);         
     }
     return arr;
}
</script>
<script type="text/javascript">

  datosx=crearCadenaLineal('<?php echo $datosx ?>');
  datosy=crearCadenaLineal('<?php echo $datosy ?>');



  var Data = {
  type: 'scatter',
  x: [1,2,3,4,5,6,7,8,9],
  y: [4,2,-1,4,-5,-7,0,3,8],
  mode: 'lines+markers',
  name: 'Data',
  showlegend: true,
  hoverinfo: 'all',
  line: {
    color: 'blue',
    width: 2
  },
  marker: {
    color: 'blue',
    size: 8,
    symbol: 'circle'
  }
}


// Viol punto maximo y monimo
// var Viol = {
//   type: 'scatter',
//   x: [6,9],
//   y: [-7,8],
//   mode: 'markers',
//   name: 'Violation',
//   showlegend: true,
//   marker: {
//     color: 'rgb(255,65,54)',
//     line: {width: 3},
//     opacity: 0.5,
//     size: 12,
//     symbol: 'circle-open'
//   }
// }


//maximo y minimo de las lineas
var CL = {
  type: 'scatter',
  x: [0.5, 10, null, 0.5, 10],
  y: [-8, -8, null, 5, 5],
  mode: 'lines',
  name: 'LCL/UCL',
  showlegend: true,
  line: {
    color: 'red',
    width: 2,
    dash: 'dash'
  }
}

var Centre = {
  type: 'scatter',
  x: [0.5, 10],
  y: [0, 0],
  mode: 'lines',
  name: 'Centre',
  showlegend: true,
  line: {
    color: 'grey',
    width: 2
  }
}

//ancho de la grafica
var data = [Data,CL,Centre]

var layout = {
  title: 'Basic SPC Chart',
  xaxis: {
    zeroline: false
  },
  yaxis: {
    range: [-10,10],
    zeroline: false
  }
}

Plotly.newPlot('graficalineal', data,layout);









 // grafica unaaaaaaaaaa
    // var data = [{
    //     x: datosx,
    //     y: datosy,
    //     type: 'scatter'
    // }];

    // Plotly.newPlot('graficalineal', data);


    //grafica dos

//     var trace1 = {
//   x: [1, 2, 3, 4],
//   y: [10, 15, 13, 17],
//   type: 'scatter'
// };

// var trace2 = {
//   x: [1, 2, 3, 4],
//   y: [16, 5, 11, 9],
//   type: 'scatter'
// };

// var data = [trace1, trace2];

// Plotly.newPlot('myDiv', data);

</script>