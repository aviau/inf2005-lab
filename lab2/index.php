<!DOCTYPE html>
<html>
    <head>
            <title>Liste des cours</title>
            <meta charset="utf-8">
    </head>
    <body>
        <table border=1>
            <thead>
                <tr>
                    <th>Sigle</th>
                    <th>Groupe</th>
                    <th>Année</th>
                    <th>Trimestre</th>
                    <th>Titre</th>
                </tr>
            </thead>
            <?php
                $lines = file("cours.txt");
                foreach($lines as $line) {
                    print("<tr>");
                    $pieces = explode(" ", $line);

                    $sigle = explode("-", $pieces[1])[0];
                    $groupe = explode("-", $pieces[1])[1];
                    print("<td>{$sigle}</td>");
                    print("<td>{$groupe}</td>");

                    $annee = substr($pieces[0], 0,4);
                    print("<td>{$annee}</td>");

                    $code_trimestre = $pieces[0][4];
                    switch ($code_trimestre) {
                        case 1:
                            $trimestre = "Hiver";
                            break;
                        case 2:
                            $trimestre = "Été";
                            break;
                        case 3:
                            $trimestre = "Automne";
                            break;
                    }

                    print("<td>${trimestre}</td>");

                    $titre = join(" ", array_slice($pieces, 2));
                    print("<td>{$titre}</td>");
                    print("</tr>");
                }
            ?>
        </table>
        <p>Nombres de cours dans le tableau: <?php print(count($lines)) ?></p>
    </body>
</html>
