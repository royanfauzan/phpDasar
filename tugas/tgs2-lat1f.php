<!DOCTYPE html>
<html>
<body>
    <?php
        class Car{
            function Car(){
                $this->model = "VW";
            }
        }

        $mobil = new Car();

        echo 'nilai property model : '.$mobil->model;
    ?>
</body>
</html>