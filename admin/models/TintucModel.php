<?php



class TintucModel extends BaseModel
{
    private $idbaiviet;
    private $anhminhhoa;
    private $tenbaiviet;
    private $tomtat;
    private $noidung;
    private $idloaitin;

    function getidbaiviet()
    {
        return $this->idbaiviet;
    }
    function getanhminhhoa()
    {
        return $this->anhminhhoa;
    }
    function gettenbaiviet()
    {
        return $this ->tenbaiviet;
    }
    function gettomtat()
    {
        return $this->tomtat;
    }
    function getnoidung()
    {
        return $this->noidung;
    }
    function getIDloaitin()
    {
        return $this->idloaitin;
    }
    function setidbaiviet($idbaviet)
    {
        $this->idbaiviet = $idbaviet;
    }
    function setanhminhhoa($anhminhhoa)
    {
        $this->anhminhhoa = ($anhminhhoa);
    }
    function settenbaiviet($tenbaiviet)
    {
        $this->tenbaiviet = ($tenbaiviet);
    }
    function settomtat($tomtat)
    {
        $this->tomtat = ($tomtat);
    }
    function setnoidung($noidung)
    {
        $this->noidung = ($noidung);
    }
    function setidloaitin($idloaitin)
    {
        $this->idloaitin = ($idloaitin);
    }

    public function getList() {
        try {
            $sql = "SELECT * FROM `baiviet` where 1=1";
            $result = $this->_getList($sql);
            return $result;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return null;
    }

    public function getChitiet($id = 0) {
        try {
            $sql = "SELECT * FROM `baiviet` ";
            if (!is_null($this->getidbaiviet())) {
                $sql .= " where idbaiviet = '{$this->getidbaiviet()}'";
            }

            $value = $this->_getObject($sql);
            return $value;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return null;
    }

    public function getTinMoi() {
        try {
            $sql = "SELECT * FROM `baiviet` where 1=1";
            $result = $this->_getList($sql);
            return $result;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return null;
    }
}