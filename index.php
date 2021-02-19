<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <link rel="stylesheet" type="text/css" href="libreria/bootstrap/dist/css/bootstrap.css">
    <script src="libreria/jquery-3.5.1.min.js"> </script>
    <script src="libreria/plotly-latest.min.js"> </script>
</head>
<!-- https://plotly.com/javascript/spc-control-charts/ -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panle-primary">
                    graficas con plotly
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="cargaLineal"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="cargarLinealDos"> </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- 
    ventas
id_venta
fechaVenta
montoVenta

    <button type="button" class="btn btn-primary">Primary</button> -->

</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#cargaLineal').load('lineal.php');
        $('#cargarLinealDos').load('lineal_dos.php');
        console.log('entra');
    });
</script>