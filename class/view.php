<?php
require_once 'config.php';

class view extends config{

  //View Movie in Combobox
  
   //Cinema 1
   public function viewMovies1(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '1'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
   //Cinema 2
   public function viewMovies2(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '2'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
   //Cinema 3
   public function viewMovies3(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '3'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
   //Cinema 4
   public function viewMovies4(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '4'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
   //Cinema 5
   public function viewMovies5(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '5'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
  //Cinema 6
  public function viewMovies6(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE id = '6'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo"<select id='movie' name='Movie'>";
    foreach($result as $data){
      echo "<option>$data[movie]$($data[price])</option>";
  }
  echo"</select>";
  }
  
  //Cinema 1
  public function viewData(){
      $con = $this->con();
      $sql = "SELECT * FROM `tbl_seats`";
      $data = $con->prepare($sql);
      $data->execute();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="2">2</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
       echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
       echo' </div>';

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
       echo' </div>';

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
       echo' </div>';

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
       echo' </div>';

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
       echo' </div>';

       echo' <div class="row">';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
       echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
       echo' </div>';
  }

  public function viewCompletedData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $data){
      echo"<div class='row'>";
      echo"<div class='seat'><input type='checkbox'  name='Seat' value=''>$data[seat]</div>";
      echo"<div class='seat'><input type='checkbox'  name='Seat' value=''>$data[seat]</div>";
      echo"<div class='seat'><input type='checkbox'  name='Seat' value=''>$data[seat]</div>";
      echo"<div class='seat'><input type='checkbox'  name='Seat' value=''>$data[seat]</div>";
      echo"<div class='seat'><input type='checkbox'  name='Seat' value=''>$data[seat]</div>";

      echo "</div>";
  }
  }

  //Cinema2
  public function viewData2(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats1`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">2</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
     echo' </div>';
}

  //Cinema3
  public function viewData3(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats3`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">2</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
     echo' </div>';
}

  //Cinema4
  public function viewData4(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats4`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">2</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
     echo' </div>';
}

  //Cinema5
  public function viewData5(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats5`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">2</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
     echo' </div>';
}

  //Cinema2
  public function viewData6(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats6`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">1</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="1">2</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="3">3</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="4">4</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="5">5</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="6">6</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="7">7</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="8">8</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="9">9</div>';
     echo' <div class="seat"><input type="checkbox"  name="Seat" value="10">10</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="11">11</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="12">12</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="13">13</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="14">14</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="15">15</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="16">16</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">17</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="18">18</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="19">19</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="20">20</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="21">21</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="22">22</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="23">23</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="24">24</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="25">25</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="26">26</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="27">27</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="28">28</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="29">29</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="30">30</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="31">31</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="32">32</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="33">33</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="34">34</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="35">35</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="36">36</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="37">37</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="38">38</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="39">39</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="40">40</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="41">41</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="42">42</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="43">43</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="44">44</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="45">45</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="46">46</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="47">47</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="48">48</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="49">49</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="50">50</div>';
     echo' </div>';

     echo' <div class="row">';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="51">51</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="52">52</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="53">53</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="54">54</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="55">55</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="56">56</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="57">57</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="58">58</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="59">59</div>';
     echo' <div class="seat"><input type="checkbox" name="Seat" value="60">60</div>';
     echo' </div>';
}
  public function updateSeats(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }

  //Cinema 2
  public function updateSeats2(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats1`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }

   //Cinema 3
   public function updateSeats3(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats3`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }

   //Cinema 4
   public function updateSeats4(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats4`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }

   //Cinema 5
   public function updateSeats5(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats5`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }

   //Cinema 6
   public function updateSeats6(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats6`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $data){
    echo" <div class='row'>";
    echo" <div class='seat'><input type='checkbox' name='Seat' checked disabled >$data[seat]</div>";
    echo"</div>";
   }
  }
}

?>
