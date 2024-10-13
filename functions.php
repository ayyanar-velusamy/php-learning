<?php



//validation 


function validate_inputs($array){
    $errors = [];
    foreach($array as $key => $value){
        if(!is_array($value)){
            if(empty(trim($value))){
                $errors[$key] = "<span style='color:red'>". $key . " should not be empty</span>";
            }
        }        
        
    }
    return $errors;
}
 

?>