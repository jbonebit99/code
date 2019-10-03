<?php

class HomeController {

    const FOLDER_VIEW = 'Home';

    public function index() {

            require_once HOME_VIEW_DIRECTORY . DS . HomeController::FOLDER_VIEW . DS . "index.php";
    }

    public function tin1(){
        require_once HOME_VIEW_DIRECTORY . DS . HomeController::FOLDER_VIEW . DS . "tinhome1.php";
    }

    public function tin2(){
        require_once HOME_VIEW_DIRECTORY . DS . HomeController::FOLDER_VIEW . DS . "tinhome2.php";
    }

    public function tin3(){
        require_once HOME_VIEW_DIRECTORY . DS . HomeController::FOLDER_VIEW . DS . "tinhome3.php";
    }

}
