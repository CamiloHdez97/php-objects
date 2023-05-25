<?php 
    include("view/templates/header.php");
    require_once("model/Persona.php");
    $alumno = new Persona("camilo","hernandez","25");
?>

<pre class="result">
    <?php 

        //Remplazar variable privada Statica
        self::$nombreAux="Camilo";

        //Remplazar Valor con set
        //$alumno->setNombre('Andres');

        //Lamar un atributo
        echo $alumno->getNombre();
        echo $alumno->getApellido();
        echo $alumno->getEdad();

        //Llamar metodos
        echo Persona::saludar();
    
    ?>
</pre>

<?php 

    include("view/templates/footer.php");

?>