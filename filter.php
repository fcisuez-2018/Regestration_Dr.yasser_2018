<!--level, department & search filter-->
<script>
  function myTest(){
    var z=document.getElementById("semester").value;
    var x=document.getElementById("level").value;
    var y=document.getElementById("department").value;
    //level one-----------------------------------------------
      if(z==1 && x==1 &&y==1){
       document.getElementById("test").innerHTML="  <?php 
      require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','1',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
      echo "<td>" .$row["Prerequisits"]."</td>" ;
	  //$cid=$row['ID'];
	  //require('connectpro.php') ;
      //$result = mysqli_query($s , "CALL `SP_ButtonActivation`('171036','7','$cid')") ;
	  //if (mysqli_num_rows($result)==0) {
		echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value); refresh_table(this.value);'  value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;  
	  //}else{
		   //echo "<td></td>" ;}
     
    }

    echo "</table>"; 
    ?>";
     
     }
      if(z==1 && x==1 && y==2){
       document.getElementById("test").innerHTML="  <?php      require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','1',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No IT filter in level One');
    }
       if(z==1 && x==1 && y==3){
       document.getElementById("test").innerHTML="  <?php      require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','1',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No CS filter in level One');
    }

//level two---------------------------------------------
       if(z==1 && x==2 && y==1){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
    }
      if(z==1 && x==2 && y==2){
       document.getElementById("test").innerHTML="  <?php  
           require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No IT filter in level Two');
    }
       if(z==1 && x==2 && y==3){
       document.getElementById("test").innerHTML="  <?php 
            require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No CS filter in level Two');
    }

    //level three-----------------------------------------
       if(z==1 && x==3 && y==1){
       document.getElementById("test").innerHTML="  <?php  
           require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','3',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
    }
        if(z==1 && x==3 && y==2){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','3','3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }
       if(z==1 && x==3 && y==3){
      document.getElementById("test").innerHTML=" <?php   
         require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','3','1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
       }
  
   //level four------------------------------------------ 
        if(z==1 && x==4 && y==1){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','4',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
    }
        if(z==1 && x==4 && y==2){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','4','3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }
       if(z==1 && x==4 && y==3){
      document.getElementById("test").innerHTML="  <?php     
       require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('7','4','1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }
        if(z==2 && x==1 &&y==1){
       document.getElementById("test").innerHTML="  <?php 
      require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','1',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
      echo "<td>" .$row["Prerequisits"]."</td>" ;
    //$cid=$row['ID'];
    //require('connectpro.php') ;
      //$result = mysqli_query($s , "CALL `SP_ButtonActivation`('171036','7','$cid')") ;
    //if (mysqli_num_rows($result)==0) {
    echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value); refresh_table(this.value);'  value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;  
    //}else{
       //echo "<td></td>" ;}
     
    }

    echo "</table>"; ?>";
    }
      if(z==2 && x==1 && y==2){
       document.getElementById("test").innerHTML="  <?php  
       require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','1',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No IT filter in level One');
    }
       if(z==2 && x==1 && y==3){
       document.getElementById("test").innerHTML="  <?php      require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','1',null)") ;

      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No CS filter in level One');
    }
   
      if(z==2 && x==2 && y==1){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
    }
      if(z==2 && x==2 && y==2){
       document.getElementById("test").innerHTML="  <?php  
           require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No IT filter in level Two');
    }
       if(z==2 && x==2 && y==3){
       document.getElementById("test").innerHTML="  <?php 
            require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','2',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
alert('No CS filter in level Two');
    }
       if(z==2 && x==3 && y==1){
       document.getElementById("test").innerHTML="  <?php  
           require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','3',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
    }
        if(z==2 && x==3 && y==2){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','3','3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }
        if(z==2 && x==3 && y==3){
      document.getElementById("test").innerHTML=" <?php   
         require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','3','1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";
   

?>";
       }
        if(z==2 && x==4 && y==1){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','4',null)") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
    }
      if(z==2 && x==4 && y==2){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','4','3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }
        if(z==2 && x==4 && y==3){
       document.getElementById("test").innerHTML="  <?php   
          require('connectpro.php') ;
       $sql = mysqli_query($s , "CALL `SP_Registration_Courses`('5','4','1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
    echo "<td class='header'>Type</td>";
    echo "<td class='header'>Credits</td>";
      echo "<td class='header'>Prerequisits</td>"; 
      echo "<td class='header'>Addition</td>";
        while($row = mysqli_fetch_array($sql)) {
          echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
      echo "<td>" .$row["type"]."</td>" ;
      echo "<td>" .$row["credit"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' class='btt' id='getid' onClick='onClick(this.value);' value=".$row['ID']." ><i class='fa fa-plus'></i></button></td>" ;
    }

    echo "</table>";?>";
       }

       }
</script>




<!--semester filter-->
<script>
  function myFunction(){
    var x=document.getElementById("mySelect").value;
    if(x==1){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==2){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'2')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
       if(x==3){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==4){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'4')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==5){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'5')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==6){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'6')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==7){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'7')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
  }
}
</script>
