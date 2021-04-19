<?php
include_once '../controller/EvenementController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-tekchbila">
    <div class="container" >
        <!-- Default form subscription -->
        <h1 class="text-center">ajouter Un evenement</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="titre">titre de evenement</label>
                        <input type="text" name="titre" class="form-control" id="titre" placeholder="Enter le titre">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="adresse">adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="entrer l'adresse">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="date">date</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="entrer la date">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="ville">ville</label>
                        <input type="text" class="form-control" name="ville" id="ville" placeholder="entrer l'ville">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="category">category</label>
                        <input type="text" class="form-control" name="category" id="category" placeholder="entrer la category">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <textarea id="description" name="description" cols="160" rows="5"></textarea>
            </div>
            <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary">
        </form>
        <!--  -->
        <h1 class="text-center">list des evenements</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">date</th>
                    <th scope="col">ville</th>
                    <th scope="col">category</th>
                    <th scope="col">description</th>
                    <th scope="col">opération</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($evenements as $event) : ?>
                    <tr>
                        <th scope="row"><?php echo $event['id']; ?></th>
                        <td><?php echo $event['titre']; ?></td>
                        <td><?php echo $event['adresse']; ?></td>
                        <td><?php echo $event['dateEvenement']; ?></td>
                        <td><?php echo $event['ville']; ?></td>
                        <td><?php echo $event['category']; ?></td>
                        <td><?php echo $event['description']; ?></td>
                        <td>
                            <span>
                                <a href="#" data-target="#<?php echo $event['id']; ?>"><i class='fas fa-edit' style='font-size:30px;'></i></a>
                            </span>
                            <span>
                                <a href="#" name="delete" class="text-danger" onclick="deleteme('<?php echo $event['id']; ?>')"><i class='fas fa-trash-alt' style='font-size:30px;'></i></a>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!--  -->
    </div>

    <!-- Default form subscription -->
</body>
<script lang="javascript" defer>
    function deleteme(delid) {
        if (confirm("Voulez vous supprimer ce evenement?")) {
            window.location.href = '/projet/gestionEvenements/view/events.php?delete=' + delid;
        }

    }
</script>

</html>