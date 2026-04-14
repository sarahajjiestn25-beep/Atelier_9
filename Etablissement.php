<?php
require_once 'database.php';

class Etablissement {

    public static function getAll() {
        $db = (new Database())->connect();
        $stmt = $db->query('SELECT * FROM etablissements');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = (new Database())->connect();
        $stmt = $db->prepare('SELECT * FROM etablissements WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nom, $ville, $adresse) {
        $db = (new Database())->connect();
        $stmt = $db->prepare('INSERT INTO etablissements (nom, ville, adresse) VALUES (?, ?, ?)');
        $stmt->execute([$nom, $ville, $adresse]);
    }

    public static function update($id, $nom, $ville, $adresse) {
        $db = (new Database())->connect();
        $stmt = $db->prepare('UPDATE etablissements SET nom=?, ville=?, adresse=? WHERE id=?');
        $stmt->execute([$nom, $ville, $adresse, $id]);
    }

    public static function delete($id) {
        $db = (new Database())->connect();
        $stmt = $db->prepare('DELETE FROM etablissements WHERE id=?');
        $stmt->execute([$id]);
    }
}