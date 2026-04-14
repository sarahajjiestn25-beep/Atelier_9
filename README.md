# 🧩 TP MVC en PHP - Gestion des Établissements

## 📌 Description
Ce projet est une application web développée en PHP en utilisant l’architecture **MVC (Modèle - Vue - Contrôleur)**.

Elle permet de gérer une ressource **Etablissement** avec les opérations CRUD :
- Ajouter
- Afficher
- Modifier
- Supprimer

---

## 🧠 Architecture MVC

- **Model** : gère les données et la base de données  
- **View** : gère l'affichage (interface utilisateur)  
- **Controller** : gère la logique et les actions  

---

## 🗂️ Structure du projet
tp_mvc/
│
├── index.php
├── database.php
│
├── models/
│   └── Etablissement.php
│
├── controllers/
│   └── EtablissementController.php
│
└── views/
└── etablissement/
├── index.php
├── create.php
└── edit.php
---## 🛢️ Base de donnéesNom :
`tp_mvc````sqlCREATE TABLE etablissements (    id INT AUTO_INCREMENT PRIMARY KEY,    nom VARCHAR(255),    ville VARCHAR(255),    adresse VARCHAR(255));

⚙️ Technologies utilisées

PHP (PDO)

MySQL

HTML / CSS

🚀 Installation

Cloner le projet :

git clone https://github.com/your-username/tp_mvc.git

Place le projet dans :

htdocs (XAMPP)

Créer la base de données tp_mvc

Lancer XAMPP (Apache + MySQL)

Accéder à :

http://localhost/tp_mvc

✅ Fonctionnalités
✔️ Ajouter un établissement
✔️ Afficher la liste
✔️ Modifier un établissement
✔️ Supprimer un établissement

🧾 Realisé par:
    Sara HAJJI 
 Hanane ELAASRAOUI

Filière : ILCS

Année : 2024/2025

