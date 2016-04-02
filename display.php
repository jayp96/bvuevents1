<?php include("./inc/header.inc.php"); ?>
<?php 
date_default_timezone_set('asia/kolkata');

$date = mysql_query("SELECT e_datetime,p_id FROM events ORDER BY e_datetime");
$i = 0;
$up = 0;
$pa = 0;
while ($row = mysql_fetch_array($date)) {
    
    $d_result[$i] = $row['e_datetime'];
    $p_result[$i] = $row['p_id'];

    $e_s_datefull = explode(' ', $d_result[$i], 2);
    $e_s_dateseparated = explode('/' , $e_s_datefull[0]);
    $e_s_datemonth = $e_s_dateseparated[0];
    if($e_s_datemonth>02){
      echo $e_s_datemonth;
    }else{
      echo 'hello';
    }
    $e_s_datedate = $e_s_dateseparated[1];
    $e_s_dateyear = $e_s_dateseparated[2];


    $c_datefull = date("m/d/Y");
    $c_dateseparated = explode('/' , $c_datefull);
    $c_datemonth = $c_dateseparated[0];
    if($e_s_datemonth >= $c_datemonth){
      echo 'FUCK OFF';

    }else{
      echo 'stay there';
    }
    $c_datedate = $c_dateseparated[1];
    $c_dateyear = $c_dateseparated[2];
    if($e_s_dateyear >= $c_dateyear){

    if($e_s_datemonth >= $c_datemonth){
        if($e_s_datedate >= $c_datedate){
          //events coming to you in the same month or upcoming months and after or on the same day!
      $allup = mysql_query("SELECT * FROM events WHERE e_datetime = '$d_result[$i]' AND p_id = '$p_result[$i]'");
        while($rowup = mysql_fetch_assoc($allup)){
          
          echo 'database retrieval success';
          $resultup[$up]['upp_id'] = $rowup['p_id'];

          $resultup[$up]['upe_name'] = $rowup['e_name'];
          $resultup[$up]['upe_link'] = $rowup['e_link'];
          $resultup[$up]['upe_poster'] = $rowup['e_poster'];
          $resultup[$up]['upe_datetime'] = $rowup['e_datetime'];
          $up++;
        }


        }else{
          //events which took place in the same month.
          $allpa = mysql_query("SELECT * FROM events WHERE e_datetime = '$d_result[$i]' AND p_id = '$p_result[$i]'");
        while($rowpa = mysql_fetch_assoc($allpa)){
          echo 'database retrieval success';
          $resultpa[$pa]['pap_id'] = $rowpa['p_id'];
          echo "".$result[$pa]['pap_id'];
          $resultpa[$pa]['pae_name'] = $rowpa['e_name'];
          $resultpa[$pa]['pae_link'] = $rowpa['e_link'];
          $resultpa[$pa]['pae_poster'] = $rowpa['e_poster'];
          $resultpa[$pa]['pae_datetime'] = $rowpa['e_datetime'];
          $pa++;
        }


    }

  }else{
      // events which took place the previous month.
    

    }
  


  }else{
   // events which took place the previous year. 
  }
    //echo "<br>".$e_s_date[0];
   //$result[$i]['p_id'] = $row['p_id'];
    //$result[$i]['e_name'] = $row['e_name'];
    
    //$result[$i]['e_link'] = $row['e_link'];
    
    
    //$result[$i]['e_poster'] = $row['e_poster'];
    $i++;
    }



?>
<div class="container-fluid">
<div class="jumbotron text-center" style="background-color: #FDC013;">
<span style="font-size:3em;font-weight:800;color:#fff">Upcoming Events</span>
</div>

<div id="upcoming-events" class="owl-carousel">
  
<?php
$dirpath = "userdata/profile_pics/";
if($up>0){
for($j=0;$j<=$up;$j++){
  
echo '
  <div>
    <div class="text-center">
      <span class="postertitle">'.$resultup[$j]['upe_name'].'</span>
    </div>  
    

    <img src="'.$dirpath.''.$resultup[$j]['upe_name'].'/'.$resultup[$j]['upe_poster'].'">
    <div class="text-center">
    <div class="dthead">
        Date and Time:
      </div>  
      <div class="dtcontent">
        
        '.$resultup[$j]['upe_datetime'].'
      </div>
      <div class="linkhead">
        Link:
      </div>
      <div class="linkcontent">
        '.$resultup[$j]['upe_link'].'
      </div>
      
      <div class="infohead">
      <a href="info/'.$resultup[$j]['upp_id'].'">More Info</a>
      </div>

    </div>
  </div>
  ';

}
}else{
  echo '<h1>Nothing to display</h1>';
}
?>

  
  
  </div>
  
  
  
<div class="jumbotron text-center" style="margin-top:50px;background-color: #FD1386;">
<span style="font-size:3em;font-weight:800;color:white;">Past Events</span>
</div>
<div id="past-events" class="owl-carousel">
  <?php
$dirpath = "userdata/profile_pics/";
if($pa>0){
for($j=$pa;$j>=0;$j--){
  echo "hello".$resultpa[$j]['pae_name'];
echo '
  <div style="overflow:auto">
    <div class="text-center">
      <span class="postertitle">'.$resultpa[$j]["pae_name"].'</span>
    </div>  
    

    <img src="'.$dirpath.''.$resultpa[$j]['pae_name'].'/'.$resultpa[$j]['pae_poster'].'">
    <div class="text-center">
    <div class="dthead">
        Date and Time:
      </div>  
      <div class="dtcontent">
        
        '.$resultpa[$j]['pae_datetime'].'
      </div>
      <div class="linkhead">
        Link:
      </div>
      <div class="linkcontent">
      <a href="'.$resultpa[$j]['pae_link'].'">
      '.$resultpa[$j]['pae_name'].'\'s Link
      </a>
        
      </div>
      
      <div class="infohead">
      <a href="info/'.$resultpa[$j]['pap_id'].'">More Info</a>
      </div>

    </div>
  </div>
  ';

}
}else{
  echo '<h2>Nothing to display.</h2>';
}
?>

  
  
  </div>

  
</div>
</div>

<script src="js/customowldisplay.js"></script>
<script src="js/owl.carousel.min.js"></script>
<?php include("./inc/footer.inc.php"); ?>