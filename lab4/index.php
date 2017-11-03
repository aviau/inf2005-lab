<?php
$nom = "";
if (isset($_POST["nom"])){
    $nom = $_POST["nom"];
}

$prenom = "";
if (isset($_POST["prenom"])){
    $prenom = $_POST["prenom"];
}

$age = "";
if (isset($_POST["age"])){
    $age = $_POST["age"];
}

$annee_diplomation = "";
if (isset($_POST["annee_diplomation"])){
    $annee_diplomation = $_POST["annee_diplomation"];
}

$etablissement = "";
if (isset($_POST["etablissement"])){
    $etablissement = $_POST["etablissement"];
}

$nom_programme = "";
if (isset($_POST["nom_programme"])){
    $nom_programme = $_POST["nom_programme"];
}

$type_admission = "";
if (isset($_POST["type_admission"])){
    $type_admission = $_POST["type_admission"];
}

$parcours = "";
if (isset($_POST["parcours"])){
    $parcours = $_POST["parcours"];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Validation du formulaire
    if (strlen($nom) > 40) {
        $message_erreur .= "Le nom est trop long. ";
    }

    if (strlen($prenom) > 50) {
        $message_erreur .= "Le prenom est trop long. ";
    }

    if (strlen($age) > 1) {
        $message_erreur .= "L'âge est trop long. ";
    }

    if ($message_erreur == "") {
        header("Location: succes.php");
        die();
    }

}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Admission à une association professionnelle d'informaticiens</title>
    </head>
    <body>
        <h1>Formulaire d'admission</h1>

        <?php
            if ($message_erreur != "") {
                echo "<p>" . $message_erreur . "</p>";
            }
        ?>

        <p>Ceci est un paragraphe présentant le formulaire d'admission</p>
        <form method="POST" action="index.php">
            <label>
                Nom:
                <input type="text"
                       name="nom"
                       maxlength="40"
                       value="<?php echo $nom ?>">
            </label>
            <br>
            <label>
                Prénom:
                <input type="text"
                       name="prenom"
                       maxlength="50"
                       value="<?php echo $prenom ?>">
            </label>
            <br>
            <label>
                Âge:
                <input type="text"
                       name="age"
                       maxlength="2"
                       value="<?php echo $age ?>">
            </label>
            <br>
            <p>Dernier diplôme obtenu:</p>
            <label>
                Année de diplomation:
                <input type="text"
                       name="annee_diplomation"
                       maxlength="4"
                       placeholder="AAAA"
                       value="<?php echo $annee_diplomation ?>">
            </label>
            <br>
            <label>
                Établissement:
                <select name="etablissement">
                    <option>Université 1</option>
                    <option>Université 2</option>
                    <option>Université 3</option>
                    <option>Université 4</option>
                    <option>Université 5</option>
                    <option>Université 6</option>
                    <option>Université 7</option>
                    <option>Université 8</option>
                </select>
            </label>
            <br>
            <label>
                Nom du programme:
                <input type="text"
                       nom="nom_programme"
                       maxlength="40"
                       value="<?php echo $nom_programme ?>">
            </label>
            </label>
            <br>
            Type d'admission:
            <label>
                Membre régulier
                <input type="radio" name="type_admission" value="regulier">
            </label>
            <label>
                Membre Or
                <input type="radio" name="type_admission" value="regulier">
            </label>
            <label>
                Membre Observateur
                <input type="radio" name="type_admission" value="regulier">
            </label>
            <label>
                Membre Junior
                <input type="radio" name="type_admission" value="regulier">
            </label>
            <br>
            <label>
                Parcours peofessionnel:
                <br>
                <textarea name="parcours"><?php echo $parcours ?></textarea>
            </label>
            <br>
            <input type="submit">
        </form>
    </body>
</html>
