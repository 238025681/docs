<?php

class AuthorsController extends BaseController {
    private $db;
    public $poem;

    public function onInit() {
        $this->title = "Authors";
        $this->db = new AuthorsModel();
    }

    public function index() {
        $this->allPoems = $this->db->getAll();
    }

    public function create() {
        if ($this->isPost) {
            $title = $_POST['poem_title'];
            $poem_text = trim($_POST['poem_text']);
            $period = $_POST['poem_period'];
            $fav = isset($_POST['poem_fav']) ? "Y" : "N" ;

            if ($this->db->createAuthor($title, $poem_text, $period, $fav)) {
                $this->addInfoMessage("Стихотворението е добавено.");
            } else {
                $this->addErrorMessage("Възникна грешка.");
            }

            $this->redirect('authors');
        }
    }

    public function delete() {
        if ($this->isPost) {
            $title = trim($_POST['poem_title']);
            if ($this->db->deleteAuthor($title)) {
                $this->addInfoMessage("Стихотворението е изтрито успешно.");
            } else {
                $this->addErrorMessage("Възникна грешка.");
            }

            $this->redirect('authors');
        }
    }

    public function edit( int $id) {
          if ($this->isPost) {

            $title = $_POST['poem_title'];
            $poem_text = trim($_POST['poem_text']);
            $period = $_POST['poem_period'];
            $id = intval($_POST['poem_id']);


            $fav = isset($_POST['poem_fav']) ? "Y" : "N" ;

            if ($this->db->editAuthor($id, $title, $poem_text, $period, $fav)) {
                $this->addInfoMessage("Стихотворението е редактирано.");
            } else {
                $this->addErrorMessage("Възникна грешка.");
            }

            $this->redirect('authors');
        }
        else{

            $post = $this->db->getById($id);
            if (!$post){
                $this->addErrorMessage("Стихотворението не съществува.");
                $this->redirect('authors');
            }

            $this->poem = $post;
        }
    }


    public function deleteComf(int $id) {
        if ($this->isPost) {

            $id = intval($_POST['poem_id']);

            if ($this->db->deleteAuthorById($id)) {
                $this->addInfoMessage("Стихотворението е изтрито.");
            } else {
                $this->addErrorMessage("Възникна грешка.");
            }

            $this->redirect('authors');
        }
        else{
            $post = $this->db->getById(intval($id));
            if (!$post){
                $this->addErrorMessage("Стихотворението не съществува.");
                $this->redirect('authors');
            }

            $this->poem = $post;
        }
    }

}