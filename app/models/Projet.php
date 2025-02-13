<?php
require_once '../core/Model.php';

class Projet extends Model {
    private $projects = [
        ['id' => 1, 'title' => 'Portfolio Website', 'description' => 'A personal portfolio.'],
        ['id' => 2, 'title' => 'E-commerce Site', 'description' => 'An online shop.']
    ];

    public function getAll() {
        return $this->projects;
    }

    public function getById($id) {
        foreach ($this->projects as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }
        return null;
    }
}
?>

