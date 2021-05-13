<?php

//use to fetch product info

class Product{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con))return null;
         
        $this->db= $db;
    }
    public function getData($table='product'){
       $result= $this->db->con->query("SELECT * FROM {$table}");
       $resultArray = array(); 
        while($item= mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }

    // get product using item id

    public function getProduct($item_id, $table='product'){
        
        if(isset($item_id)){ 
            $result=$this->db->con->query("SELECT*FROM {$table} WHERE item_id={$item_id}");
         
            $resultArray = array(); 
         
        while($item= mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[]=$item;
            // echo $item;
        }
    // return $item;
        return $resultArray;
    }
}
    
}