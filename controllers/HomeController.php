<?php

class HomeController extends BaseController {
    private $model;

    public function onInit() {
        $this->title = "Home";
        $this->model = new HomeModel();
    }

    function index(){
        $this->lastPoems = $this->model->getLastPoems(3);
        $this->favPoems = $this->model->getfavPoems("Y");
    }
}