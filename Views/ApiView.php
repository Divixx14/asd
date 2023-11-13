<?php

class ApiView{

  public function  response($data, $status = 200){
    header("Content-Type: application/json");
    header("HTTP/1.1 {$status} " . $this->_requestStatus($status));
    
    //Encode data en formato JSON
    echo json_encode($data);
}

private function _requestStatus($code) {
    $status = array(
        200 => "OK",
        201 => "Created",
        400 => "Bad request",
        401 => "Unauthorized",
        404 => "Not found",
        500 => "Internal server error",
    );
    return (isset($status[$code])) ? $status[$code] : $status[500];
}


}