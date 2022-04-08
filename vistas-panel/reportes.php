<?php
    include "./header.php";
    include "./menu.php";
    include "../clases/Conexion.php";
    $conexion = new Conexion();
    $datos = $conexion->Conectar();
    $idRecibido = 1;
    $sql = "SELECT * FROM t_cat_reportes";
    $result = mysqli_query($datos, $sql);
?>



<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Reportes</h1>
                <form action="../procesos/gastos/reporte.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="">Fecha de inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio">
                        </div>
                        <div class="col">
                            <label for="">Fecha final</label>
                            <input type="date" class="form-control" name="fecha_fin">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tipo</label>
                            <select name="tipo_reportes" id="" class="form-select">
                                <?php
                            while($ver = mysqli_fetch_array($result)){ 
                                if($ver['id_cat_reportes'] == $idRecibido) {
                        ?>
                                <option selected value="<?php echo $ver['id_cat_reportes']?>">
                                    <?php echo $ver['nombre_reportes'] ?>
                                </option>
                                <?php 
                            } else {
                        ?>
                                <option value="<?php echo $ver['id_cat_reportes']?>">
                                    <?php echo $ver['nombre_reportes'] ?>
                                </option>
                                <?php             
                            }
                        ?>
                                <?php 
                            } 
                        ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4">
                        Consultar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>