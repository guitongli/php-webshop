<?php
class Cart {
    public $db = null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db=$db;
    }
// insert into cart table
    public function insertCart($params = null, $table='cart'){

        if($this->db->con != null){
            if($params != null){
                //insert into cart (user_id, values())
                $columns=implode(',',array_keys($params));
                $values= implode(',',array_values($params));
                print_r($values);
                print_r($columns);

            }
            $query_string=sprintf
        }

    }

}