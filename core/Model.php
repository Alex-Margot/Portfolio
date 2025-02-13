<?php
class Model {
    protected function connect() {
        // Replace with actual database connection if needed
        return new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    }
}
?>
