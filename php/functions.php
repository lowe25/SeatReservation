<?php
//Add
function insertTodo(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}
function insertTodo2(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask2()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}

function insertTodo3(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask3()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}

function insertTodo4(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask4()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}

function insertTodo5(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask5()){
            echo'
             ';
        }else{
            echo '
          </div>';
        }
    }
}

function insertTodo6(){
    if(!empty($_GET['Seat'])){
        $insert = new insert ($_GET['Movie'],$_GET['Seat'],$_GET['Time']);
        if($insert->insertTask6()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}
//Edit
function editTodo(){
    if(!empty($_GET['edit'])){
        $edit = new edit ($_GET['edit']);
        if($edit->editTask()){
            echo'
             ';
        }else{
            echo '';
        }
    }
}


//View Table
function viewAllSeats(){
    $view = new view;
    $view->viewData();   
    $view->viewCompletedData();
}

//Cinema1
function viewSeats(){
$view = new view;
$view->viewData();  
}

//Cinema2
function viewSeats2(){
    $view = new view;
    $view->viewData2();  
}

//Cinema3
function viewSeats3(){
    $view = new view;
    $view->viewData3();  
}

//Cinema4
function viewSeats4(){
    $view = new view;
    $view->viewData4();  
}

//Cinema5
function viewSeats5(){
    $view = new view;
    $view->viewData5();  
}

//Cinema5
function viewSeats6(){
    $view = new view;
    $view->viewData6();  
}
    
//Combobox Cinema 1
function viewMovies(){
    $view = new view;
    $view->viewMovies1();
}

//Combobox Cinema 2
function viewMovies2(){
    $view = new view;
    $view->viewMovies2();
}

//Combobox Cinema 3
function viewMovies3(){
    $view = new view;
    $view->viewMovies3();
}

//Combobox Cinema 3
function viewMovies4(){
    $view = new view;
    $view->viewMovies4();
}

//Combobox Cinema 5
function viewMovies5(){
    $view = new view;
    $view->viewMovies5();
}

//Combobox Cinema 6
function viewMovies6(){
    $view = new view;
    $view->viewMovies6();
}

//Listener
//Cinema 1
function booking(){
   insertTodo();
   editTodo();
}
//Cinema 2
function booking2(){
    insertTodo2();
}
//Cinema 3
function booking3(){
    insertTodo3();
}
//Cinema 4
function booking4(){
    insertTodo4();
}
//Cinema 5
function booking5(){
    insertTodo5();
}
//Cinema 6
function booking6(){
    insertTodo6();
}

//Cinema 1
function updateSeat(){
    $view = new view;
    $view->updateSeats();
}
//Cinema 2
function updateSeats2(){
    $view = new view;
    $view->updateSeats2();
}

//Cinema 3
function updateSeats3(){
    $view = new view;
    $view->updateSeats3();
}

//Cinema 4
function updateSeats4(){
    $view = new view;
    $view->updateSeats4();
}

//Cinema 5
function updateSeats5(){
    $view = new view;
    $view->updateSeats5();
}

//Cinema 6
function updateSeats6(){
    $view = new view;
    $view->updateSeats6();
}

?>