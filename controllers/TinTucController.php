<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TinTucController
 *
 * @author pc
 */
class TinTucController {

    const FOLDER_VIEW = 'TinTuc' ;

//    public function index() {
//        $TinTuc_Controller = new TinTucModel();
//        $listTinMoi = $TinTuc_Controller->getTinMoi();
//
//        if (!empty($_TenTinTuc)) {
//            $TinTuc_Controller->setTenTinTuc($_TenTinTuc);
//        }
//        $list = $TinTuc_Controller->getList();
//        require_once HOME_VIEW_DIRECTORY . DS . TinTucController::FOLDER_VIEW . DS . "index.php";
//    }

    public function Chitiet() {
        $TinTuc_Model = new TinTucModel();
        $_Id = "";
        $_TenTinTuc = "";
        $_NoiDung = "";
        $_HinhAnh = "";
        if (isset($_GET["idbaiviet"])) {
            $_Id = $_GET["idbaiviet"];
            $TinTuc_Model = new TinTucModel();
            $TinTuc_Model->setidbaiviet($_Id);
            $obj = $TinTuc_Model->getChitiet();
            if (!is_null($obj)) {
                $_Id = $obj->idbaiviet;

                $_TenTinTuc = $obj->tenbaiviet;
                $_NoiDung = $obj->noidung;
                $_HinhAnh = $obj->anhminhhoa;
            }
        }
        require_once HOME_VIEW_DIRECTORY . DS . TinTucController::FOLDER_VIEW . DS . "chitiet.php";
    }

    public function indextcn()
    {
        $TinTuc_Controller = new TinTucModel();
        $listTinMoi = $TinTuc_Controller->getTinMoi();

        if (!empty($_TenTinTuc)) {
            $TinTuc_Controller->setTenTinTuc($_TenTinTuc);
        }
        $list = $TinTuc_Controller->getList();

        require_once HOME_VIEW_DIRECTORY . DS . TinTucController::FOLDER_VIEW . DS . "indextincongnghe.php";
    }
    public function indextk()
    {

        require_once HOME_VIEW_DIRECTORY . DS . TinTucController::FOLDER_VIEW . DS . "indextinkhac.php";
    }

}
