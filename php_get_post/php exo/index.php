<?php
include 'user.php';
include 'header.php';
?>
<?php
?>
<h1>INDEX</h1>
<form action="connect.php" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
    </div>
    <div>
        <label for="mdp">Mot de passe</label>
        <input type="text" id="mdp" name="mdp">
    </div>
    <button type="submit">Se connecter</button>
</form>

<?php
if (isset($_GET['error'])) {
    echo '<p style="color: red">Utilisateur ou mot de passe incorrecte</p>';
}
?>
