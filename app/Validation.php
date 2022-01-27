<?php
namespace ToDo;


class Validation{
    public static $validationErrors = [];
    public static function validate($data){
        if(empty($data['subject']) && !preg_match('/^[A-Za-z0-9]{3,255}$/', $data['subject'])){
            $validationErrors[]="To many characters";
        }
        if(empty($data['priority'])){
            $validationErrors[]="Select Priority";
        }
        if(empty($data['dueDate'])){
            $validationErrors[]="Didn't select due date";
        }
        if(empty($validationErrors)) return true;
    }

}