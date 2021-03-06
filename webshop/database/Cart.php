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
      

            }
            $query_string=sprintf('INSERT INTO %s(%s) VALUES (%s)', $table, $columns, $values );
            $result = $this->db->con->query($query_string);
            return $result;
        }

    }

    public function addCart($userId, $itemId){
if(isset($userId)&&isset($itemId)){
    $params=array(
        'user_id' => $userId,
        'item_id'=>$itemId
    );
    $result = $this->insertCart($params);
    //reload page
    if($result){
        header('Location:'.$_SERVER['PHP_SELF']);
    }
}
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum=0;
            foreach($arr as $item){
                $sum+=floatval($item[0]);
            };
            
            return sprintf('%.2f', $sum);
        }

    }

    public function deleteCart($item_id=null, $table='cart'){
        if($item_id != null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id};");
     
       if($result){
           header('Location:'.$_SERVER['PHP_SELF']);
       } else{
           print_r('hey');
       }
         return $result;
        }
    }
 public function deleteWishlist($item_id=null, $table='wishlist'){
        if($item_id != null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id};");
     
       if($result){
           header('Location:'.$_SERVER['PHP_SELF']);
       } else{
           print_r('hey');
       }
         return $result;
        }
    }
    public function getCartId($cartArray=null, $key='item_id'){
        if($cartArray != null){
            $cart_id=array_map(function($value)use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }

    }

    //save for later

    public function saveForLater($item_id=null, $saveTable='wishlist', $fromTable='cart'){
        if($item_id != null){
            $query ="INSERT INTO {$saveTable} SELECT * FROM ($fromTable) WHERE item_id={$item_id}; ";
            $query.= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            $result= $this->db->con->multi_query($query);
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            };
            return $result;
        }
    }

}