<?php

class Model extends Database {

    protected $table = "users";

    public function insert($data){
        $clean_array = allowed_columns($data, $this->table);
        $keys = array_keys($clean_array);
    
        $query = "insert into $this->table ";
        $query .= "(" . implode (",", $keys) . ") values ";
        $query .= "(:" . implode (",:", $keys) . ")";
    
        $db = new Database;
        $db->query($query, $clean_array);
    }
    
    public function where($data){
        $keys = array_keys($data);
    
        $query = "select * from $this->table where ";
        foreach($keys as $key){
            $query .= "$key =:$key && ";
        }
    
        $query = trim($query, "&& ");
    
        $db = new Database;
        return $db->query($query, $data);
    }

}