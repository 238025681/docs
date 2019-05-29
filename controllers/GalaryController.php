<?php

class GalaryController extends BaseController {
    private $model;

    public function onInit() {
        $this->title = "Galary";
        $this->model = new GalaryModel();
    }

    public function index() {
        $this->allPoems = $this->model->getAll();
    }

//    function index(){
//        $lastPoems = $this->model->getAllPoemsByPeriod(1);
//        $this->earlyPoems = $lastPoems;
//    }

    function earlyPoems(){
        $lastPoems = $this->model->getAllPoemsByPeriod(1);
        $this->earlyPoems = $lastPoems;
    }

    function latePoems(){
        $lastPoems = $this->model->getAllPoemsByPeriod(0);
        $this->latePoems = $lastPoems;
    }

    function lastPoems(){
        $lastPoems = $this->model->getLastPoems(12);
        $this->lastPoems = $lastPoems;
    }
}