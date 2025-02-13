 <?php
require_once '../core/Controller.php';
require_once '../app/models/Projet.php';

class PortfolioController extends Controller {
    public function index() {
        $projetModel = new Projet();
        $projets = $projetModel->getAll();
        $this->view('portfolio/index', ['projets' => $projets]);
    }

    public function detail($id) {
        $projetModel = new Projet();
        $projet = $projetModel->getById($id);
        if ($projet) {
            $this->view('portfolio/detail', ['projet' => $projet]);
        } else {
            echo "Projet introuvable.";
        }
    }
}
?>
