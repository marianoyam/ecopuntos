<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO-PUNTOS</title>

    <!-- responsive-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">


</head>

<body>
    <?php
    if (isset($_GET['id'])) {
    ?>
        <div class="container-fluid">
            <div class="d-grid gap-3">
                <div class="p-2 bg-light border"></div>
                <div class="p-2 bg-light border">
                    <div class="row mx-auto justify-content-center align-items-center">
                        <div class="col-mt-2"></div>
                        <div class="col-mt-8">
                            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 100%;">
                                <img class="card-img-top" src="img/signo-reciclaje.jpg" alt="Card image cap">
                                <div class="card-body" style="text-align:center;">
                                    <h5 class="card-title">Ecopuntos</h5>
                                    <input style="border:0px;text-align:center;" type="text" value="<?php echo $_GET['id']; ?>">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre">Usuario</label>
                                        <input class="form-control" type="text" id="nombre" name="nombre">
                                    </div>

                                    <hr>
                                    <div class="form-group">
                                        <label for="photoUser"><strong>Genera tu Id</strong></label>
                                        <div style="width: 160px; margin:0 auto;">
                                            <label class="dropimage profile">
                                                <a class="form-control btn btn-info"></a>
                                                <input type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="#" class="btn btn-primary">Sumar puntos</a>
                                    <p></p>
                                    <a href="registro.php">Registrate</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-mt-2"></div>
                    </div>
                </div>
                <div class="p-2 bg-light border"></div>
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>