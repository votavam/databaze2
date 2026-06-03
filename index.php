<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis osob</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$pripojeni = new mysqli(
    "localhost",
    "root",
    "",
    "databaze2"
);

$vysledek = $pripojeni->query("
    SELECT * FROM osoba
");
?>

<body>

    <div class="container">
        <h1>osoby</h1>
        
        <div class="flex-table">
            
            <div class="flex-row header">
                <div class="flex-cell">Jméno</div>
                <div class="flex-cell">Příjmení</div>
                <div class="flex-cell">Věk</div>
            </div>

            <?php
            while($radek = $vysledek->fetch_assoc()) {
                echo '<div class="flex-row">';
                echo '  <div class="flex-cell cell-name">' . htmlspecialchars($radek["jmeno"]) . '</div>';
                echo '  <div class="flex-cell">' . htmlspecialchars($radek["prijmeni"]) . '</div>';
                echo '  <div class="flex-cell">' . htmlspecialchars($radek["vek"]) . '</div>';
                echo '</div>';
            }
            
            $pripojeni->close();
            ?>
            
        </div>
    </div>

</body>
</html>