<?php
    function conexion(){
        return mysqli_connect(
            'localhost',
            'ezequielmendoza',
            'EzeMen02Amk',
            'tapu4',
            3306
        );
    }
?>