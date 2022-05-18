<?php
include("./traitement.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Calculatrice</title>
</head>

<body>
    <div class="col-3 offset-4 my-5" >
        <h1 class="text-center">Calculatrice</h1>

        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Premiere valeur</span>
                <input type="text" class="form-control" name="premiereValeur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <select class="form-select" name="operateur" aria-label="Default select example">
                    <option selected>Votre operateur</option>
                    <?php foreach ($operateurs as $operateur) : ?>
                        <option cmass="text-center"><?= $operateur ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Seconde valeur</span>
                <input type="text" class="form-control" name="secondeValeur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="text-center my-3">
            <button type="submit" class="btn btn-primary container-fluid" name="submit">Calculer</button>
            </div>
        </form>
        <?php if(isset($_POST['premiereValeur']) && isset($_POST['operateur']) && isset($_POST['secondeValeur']) &&isset($result)){ ?>
        <div class="alert alert-primary text-center" role="alert">
            <?php echo $result ?>
        </div>
        <?php } ?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>