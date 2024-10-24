<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo SITE_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="calculator.css"> 

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW
        +ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <?php
        include 'config.php';
    ?>
    <div class="cards d-flex flex-wrap justify-content-around">
        <?php
            foreach (PRODUCTS as $product) {
        ?>
                <div class="card" style="width: 18rem; margin-bottom: 20px;">
                    <img src="<?php echo $product["image_url"]; ?>" class="card-img-top" alt="<?php echo $product["name"]; ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product["name"]; ?>
                        </h5>
                        <p class="card-text"><?php echo $product["description"]; ?></p>
                        <p class="card-text">$<?php echo $product["price"]; ?></p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
    </body>
</html>
