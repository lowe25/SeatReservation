<?php
require_once 'config.php';
class edit extends config{
    public $task;

    public function __construct($task){
        $this->task= $task;
    }
    public function editTask(){
        $con = $this->con();
        $sql = "UPDATE `tbl_seats` SET `status`='Taken',=NOW() where `id`=$this->task";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>

