<?php
/** SQLite fixture used only by the standalone portfolio export. */
class Connexion {
    private PDO $db;
    public function __construct() {
        $this->db = new PDO('sqlite::memory:');
        $this->db->exec('CREATE TABLE cours (id INTEGER PRIMARY KEY, titre TEXT, description TEXT, photo TEXT)');
        $this->db->exec('CREATE TABLE inscriptions (utilisateur_id INTEGER, cours_id INTEGER)');
        $insert = $this->db->prepare('INSERT INTO cours VALUES (?, ?, ?, ?)');
        $insert->execute([1, 'Le modèle relationnel', 'Passer d’un diagramme de classes à des tables SQL.', '/Assests/Images/background.jpg']);
        $insert->execute([2, 'PHP orienté objet', 'Séparer les responsabilités du modèle, de la vue et du contrôleur.', '/Assests/Images/logo.png']);
        $this->db->exec('INSERT INTO inscriptions VALUES (1, 1)');
    }
    public function connexion(): PDO { return $this->db; }
}
