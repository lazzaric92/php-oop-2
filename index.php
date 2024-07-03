<?php 
require_once __DIR__ . "/db/db.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Boolshop</title>
</head>
<body>
    <header class="bg-white p-3 mb-3">
        <div class="container">
            <h1 class="fw-bold mb-0">Boolshop</h1>
        </div>
    </header>
    <main class="py-4 mb-3">
        <div class="container">
            <div class="row">
                <?php foreach ($productsArray as $product) { ?>
                    <article class="col-3 mb-3">
                        <div class="card h-100">
                            <div class="card-image p-3">
                                <img src=" <?php echo $product->getImgUrl() ?> " class="card-img-top" alt="<?php echo $product->getName() ?>" >
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2 fw-bold"><?php echo $product->getName() ?></h5>
                                <h6 class="card-subtitle mb-2"><?php echo $product->getCategory()->getName() ?></h6>
                                <p class="card-text">Prezzo: &euro; <?php echo $product->getPrice() ?></p>
                                <?php if(get_class($product) === "Food"){ ?>
                                    <p class="card-text">Peso netto: <?php echo $product->getNetWeight() ?>g</p>
                                    <p class="card-text">Ingredienti: <?php echo $product->getIngredients() ?></p>
                                <?php } elseif(get_class($product) === "Toy"){ ?>
                                    <p class="card-text">Caratteristiche: <?php echo $product->getFeatures() ?></p>
                                    <p class="card-text">Dimensioni: <?php echo $product->getSize() ?></p>
                                <?php } elseif(get_class($product) === "Accessory"){ ?>
                                    <p class="card-text">Materiale: <?php echo $product->getMaterial() ?></p>
                                    <p class="card-text">Dimensioni: <?php echo $product->getSize() ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </main>


</body>
</html>