<?php
    require_once 'config.php';
    class insert extends config{
        public $film;
        public $seat;
        public $time;
        
        public function __construct($film, $seat,$time){
            $this->film = $film;
            $this->seat = $seat;
            $this->time = $time;
        }

        public function insertTask(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }

        public function insertTask2(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats1`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }

        public function insertTask3(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats3`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }

        public function insertTask4(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats4`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }

        public function insertTask5(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats5`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }

        public function insertTask6(){
            $con = $this->con();
            $sql = "INSERT INTO `tbl_seats6`(`film`, `seat`, `time`)VALUES('$this->film','$this->seat','$this->time')";
            $data = $con->prepare($sql);
            $data->execute();
          die();
        }
    }
    ?>