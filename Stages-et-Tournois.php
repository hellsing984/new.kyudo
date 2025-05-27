<?php get_header(); ?>
<?php
/*
Template Name: Stages et Tournois
*/
session_start();

// Récupérer le mois et l'année sélectionnés, sinon afficher le mois actuel
$mois = isset($_GET['mois']) ? $_GET['mois'] : date('m');
$annee = isset($_GET['annee']) ? $_GET['annee'] : date('Y');
$jours_dans_le_mois = date('t', strtotime("$annee-$mois-01"));

// Initialiser les rendez-vous
if (!isset($_SESSION['rendezvous'])) {
    $_SESSION['rendezvous'] = json_encode([]);
}

// Charger les rendez-vous
$rendezvous = json_decode($_SESSION['rendezvous'], true);

// Sauvegarde automatique après modification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['date'], $_POST['description'])) {
    $rendezvous[$_POST['date']] = $_POST['description'];
    $_SESSION['rendezvous'] = json_encode($rendezvous);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Calendrier des Stages et Autre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #fdf6e3;
        }
        form {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        select {
            padding: 5px;
            font-size: 14px;
            height: 30px;
            width: 120px;
            border: 2px solid #8d6e63;
            background-color: #f9e4b7;
            text-align: center;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            max-width: 1000px;
            margin: auto;
        }

        .day {
            border: 3px solid #8d6e63;
            padding: 10px;
            background-color: #f9e4b7;
            font-size: 20px;
            position: relative;
            text-align: left;
            width: 160px;
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            text-align: left;
            padding: 10px;
            margin-left: -20px;
        }

        textarea {
            width: 100%;
            height: 60px;
            background: transparent;
            border: none;
            resize: none;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Calendrier des Stage et Tournois</h1>

    <form method="get">
        <label for="mois">Choisir un mois :</label>
        <select name="mois" id="mois">
            <?php for ($m = 1; $m <= 12; $m++) : ?>
                <option value="<?= sprintf('%02d', $m) ?>" <?= ($mois == sprintf('%02d', $m)) ? 'selected' : '' ?>>
                    <?= date('F', strtotime("$annee-$m-01")) ?>
                </option>
            <?php endfor; ?>
        </select>

        <label for="annee">Choisir une année :</label>
        <select name="annee" id="annee">
            <?php for ($y = date('Y') - 10; $y <= date('Y') + 10; $y++) : ?>
                <option value="<?= $y ?>" <?= ($annee == $y) ? 'selected' : '' ?>><?= $y ?></option>
            <?php endfor; ?>
        </select>

        <button type="submit">Afficher</button>
    </form>

    <div class="calendar">
        <?php for ($j = 1; $j <= $jours_dans_le_mois; $j++) : ?>
            <div class="day">
                <strong><?= $j ?></strong>
                <textarea data-date="<?= $annee ?>-<?= $mois ?>-<?= $j ?>" onchange="saveRdv(this)"><?= isset($rendezvous["$annee-$mois-$j"]) ? htmlspecialchars($rendezvous["$annee-$mois-$j"]) : '' ?></textarea>
            </div>
        <?php endfor; ?>
    </div>

    <script>
        function saveRdv(el) {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ date: el.getAttribute('data-date'), description: el.value })
            });
        }
    </script>
</body>
</html>

<?php get_footer(); ?>
