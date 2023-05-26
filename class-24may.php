<?php 

    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true,
            'cantidad' => 5
        ],
        
        [
            'nombre' => 'Televisor 24"',
            'precio' => 300,
            'disponible' => true,
            'cantidad' => 5
        ],
        
        [
            'nombre' => 'Monitor Curvo',
            'precio' => 300,
            'disponible' => false,
            'cantidad' => 5
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/boostrap/bootstrap.min.js" defer></script>
    <title>Document</title>
</head>

<body>

    <?php
        //var_dump($productos);
        $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
        $jsondec = json_decode($json, true);
        require_once("model/Producto.php");
                //echo ""; var_dump($json);
        //var_dump($jsondec);
    ?>

<div class="container">

    <table class="table table-dark">

        <thead>
            <tr>
                <th colspan="4" ><h3 align="center">Productos</h3></th>
            </tr>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponible</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>

            <?php 

                foreach($jsondec as $item){

                    $objProduct = new Producto($item['nombre'],$item['precio'],$item['disponible'],$item['cantidad']);
                    echo "<br> Valor total: ".$objProduct->valor_total();
                    ?>
                        <tr scope="row"><td><?php echo $objProduct->getNombre();?></td>
                        <td><?php echo $objProduct->getPrecio();?></td>
                        <td><?php echo $objProduct->getDisponible();?></td>
                        <td><?php echo $objProduct->getCantidad(); ?></td>
                        </tr>

                    <?php } ?>
                
        <tbody>

        </tbody>

    </table>

</div>

</body>

</html>