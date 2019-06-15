<?php session_start(); ?>
<?php  
 function fetch_data()  
 {  
      $output = '';  
     


$conn= mysqli_connect('localhost','root','') or die (mysql_error());
   mysqli_select_db($conn,'fci_courseregistrationdb') or die (mysql_error());
     mysqli_query($conn , "SET NAMES 'utf8'");
mysqli_query($conn , 'SET CHARACTER SET utf8')
$id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
 {   
         
      $sql = "CALL `sp_select`('$id' ,'7')";  
      $result = $conn->query($sql);
  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["courses"].'</td>  
                          <td>'.$row["codes"].'</td>  
                          <td>'.$row["credit"].'</td>  
                          <td>'.$row["pre"].'</td>  
                           
                     </tr>  
                          ';  
      } } 
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  



      class _PDF extends TCPDF {

        function Header(){
            $this->Cell(8);
            $this->Image('5.png',5,10,20);
            $this->ln(10); 
            $cont="<br><br /><hr>";
           
            $this->Image('logo.png',185,10,20);
             $this->writeHTML($cont);
             $this->ln(20); 


        }

        function Footer(){
           
           $this->SetY(280);
        
         
           
           $this->Cell(0,0,'Page '.$this->PageNo(),0,0,'C');
           

            
        }




      }


      $obj_pdf = new _PDF('P','mm','A4');;  
      
      $obj_pdf->SetCreator(PDF_CREATOR);
      

      
      $obj_pdf->SetTitle("Registered Courses");  
     // $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage(); 
      $obj_pdf->Header();
      
      
      $content = '';  
      $content .= '  
      
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="40%">course</th>  
                <th width="30%">code</th>  
                <th width="10%">credits</th>  
                <th width="10%">Prerequest</th>  
                 
           </tr>  
      ';
       
      $content .= fetch_data(); 
       
      $content .= '</table>';  
      
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Footer();
   
      
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registered courses</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <style>
           .uni{
             width : 100px ;
             height : 100px ;
             padding-left : 1200px ;

           } 
           </style>          
      </head>  
      <body>  
                     <br> <br>
                     
                     
                     
                      <br> <br> 


                      <?php
          
           
           require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($conn , "CALL `SP_Department`('$id')") ;
      // output data of each row
        while($row = mysqli_fetch_array($sql)) {
        echo "<center><b>".$row['DeptartmentCode']." Department-Faculty of computers and information"."</b></center><center><p><b>Suez University</b></p></center>" ;
    }}
   
           
           
           
            ?>
  
           <div class="container" style="width:700px;">   
                <div class="table-responsive">  
<?php
require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($conn , "CALL `SP_stuInfo`('$id')") ; 
       // output data of each row
       echo "<table class='table table-bordered'>" ;
       while($row = mysqli_fetch_array($sql)) {
         echo "<tr>" ;
         echo "<td>"."Name : ".$row["StudentName"]. "</td>";
          echo "<td>"."ID : ".$row["StudentEductionalNumber"]. "</td></tr>";
       }
       echo "</table>" ; 
     }
?>
</div>
 <div class="table-responsive"> <?php 
                     require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($conn , "CALL `sp_CreditsINSemester`('$id','7')") ; 
       // output data of each row
       echo "<table class='table table-bordered'>" ;
       while($row = mysqli_fetch_array($sql)) {
                      
                       echo "<tr><td>"."Credits : ".$row["credit"]."</tr></td>" ;
                       }}
                     ?></div>   

                     <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                                <th width="40%">course</th>  
                               <th width="30%">code</th>  
                               <th width="10%">credit Houres</th>  
                               <th width="10%">PreRequest</th>  
                          </tr> 
                           
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table> 
                     
                     
                     

                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" /> 
                       
                            <br> <br> <br>
                     </form>  
                </div>  
           </div> 
          
      </body>  
 </html>  