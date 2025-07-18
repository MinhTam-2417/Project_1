<?php
require_once 'core/Database.php';

class Model  {
    protected $db;
    protected $table;

        //khởi tạo với kết nối CSDL
    public function __construct($table) {
        $this->db = new Database();
        $this->table = $table;
    }
    //lấy tất cả bảng ghi
    public function all(){
        return $this->db->query("SELECT * FROM {$this->table}");
    }
    //lấy bảng ghi theo id
    public function find($id){
        $return = $this-> db->query("SELECT * FROM {$this->table} WHERE id = ?", [$id]);
        return $return ? $return[0] : null;
    }
}
?>
