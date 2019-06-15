 <?php

  require('connection.php') ;
  require('connectpro.php') ;
  


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($s, $_POST["query"]);
 $query = mysqli_query($s , "CALL `SP_search`('7','$search')") ;
 if(mysqli_num_rows($query) > 0){
     echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
              while($row = mysqli_fetch_array($query)) {
     echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }
    echo "</table>";
  }
  else {
    echo 'Data Not Found';
  }
}
else{
  echo '<script type="text/javascript">',
     'myTest();',
     '</script>';

}

?>
