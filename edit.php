<!DOCTYPE html>
<html>
<head>
    <title>Modifier</title>
</head>
<body>

<h2>Modifier établissement</h2>

<form method="POST" action="index.php?action=update&id=<?= $etablissement['id'] ?>">
    Nom: <input type="text" name="nom" value="<?= $etablissement['nom'] ?>"><br>
    Ville: <input type="text" name="ville" value="<?= $etablissement['ville'] ?>"><br>
    Adresse: <input type="text" name="adresse" value="<?= $etablissement['adresse'] ?>"><br>
    <button type="submit">Modifier</button>
</form>

</body>
</html>