<!DOCTYPE html>
<html>
<head>
    <title>Liste</title>
</head>
<body>

<h2>Liste des établissements</h2>

<a href="index.php?action=create">Ajouter</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Ville</th>
    <th>Adresse</th>
    <th>Actions</th>
</tr>

<?php foreach ($etablissements as $e) { ?>
<tr>
    <td><?= $e['id'] ?></td>
    <td><?= $e['nom'] ?></td>
    <td><?= $e['ville'] ?></td>
    <td><?= $e['adresse'] ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $e['id'] ?>">Modifier</a>
        <a href="index.php?action=delete&id=<?= $e['id'] ?>">Supprimer</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>