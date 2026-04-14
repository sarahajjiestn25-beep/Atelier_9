<?php
require_once 'models/Etablissement.php';

class EtablissementController {

    public function index() {
        $etablissements = Etablissement::getAll();
        require 'views/etablissement/index.php';
    }

    public function create() {
        require 'views/etablissement/create.php';
    }

    public function store() {
        $nom = htmlspecialchars($_POST['nom']);
        $ville = htmlspecialchars($_POST['ville']);
        $adresse = htmlspecialchars($_POST['adresse']);

        Etablissement::create($nom, $ville, $adresse);

        header('Location: index.php');
    }

    public function edit($id) {
        $etablissement = Etablissement::getById($id);
        require 'views/etablissement/edit.php';
    }

    public function update($id) {
        $nom = htmlspecialchars($_POST['nom']);
        $ville = htmlspecialchars($_POST['ville']);
        $adresse = htmlspecialchars($_POST['adresse']);

        Etablissement::update($id, $nom, $ville, $adresse);

        header('Location: index.php');
    }

    public function delete($id) {
        Etablissement::delete($id);
        header('Location: index.php');
    }
}