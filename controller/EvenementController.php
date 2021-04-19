<?php
include_once '../model/EvenementService.php';
include_once '../view/events.php';
$EvenementService = new EvenementService();
$evenements = $EvenementService->findAll();
if (isset($_POST['ajouter'])) {
    // echo $_POST['adresse'];
    // echo $_POST['date'];
    // echo $_POST['description'];
    // echo $_POST['ville'];
    // echo $_POST['category'];

    $titre = $_POST['titre'];
    $adresse = $_POST['adresse'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $ville = $_POST['ville'];
    $category = $_POST['category'];
    // echo '<script>alert("ok");</script>';
    $EvenementService->create(new Evenement($titre, $adresse, $date, $description, $ville, $category));
}
if (isset($_GET['delete'])) {
    // echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $EvenementService->delete($id);
}

// if (isset($_POST['up'])) {
//     $titre = $_POST['titre'];
//     $ev->update(Evenement($titre));
// }
