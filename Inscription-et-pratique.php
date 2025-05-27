<?php
/*
Template Name: Inscription et Pratique
*/

get_header(); // Ajout de l'en-tête WordPress

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = sanitize_text_field($_POST["nom"]); // WordPress recommande sanitize_text_field()
    $email = sanitize_email($_POST["email"]);
    $password = sanitize_text_field($_POST["password"]); // Pas de stockage, juste affichage

    $message = "<div class='success'>Inscription réussie !<br><strong>Nom :</strong> $nom <br><strong>Email :</strong> $email</div>";
}
?>

<div class="container">
    <h2>Inscription</h2>
    <?php echo $message; ?>
    <form method="POST">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
</div>

<style>
    .container {
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        margin: 20px auto;
    }
    h2 {
        color: #333;
    }
    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }
    label {
        font-weight: bold;
    }
    input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background: #007BFF;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    button:hover {
        background: #0056b3;
    }
    .success {
        background: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<?php get_footer(); // Ajout du pied de page WordPress ?>
