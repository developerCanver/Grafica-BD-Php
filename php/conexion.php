<?php

function conexion(){
    return mysqli_connect('localhost',
                            'root',
                            '',
                            'graficos');

}

// if(conexion()){
//     echo "Verdad";
// }

?>