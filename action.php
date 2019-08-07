<?php
$studentname = filter_input(INPUT_POST, 'stuname');
$studentusn = filter_input(INPUT_POST, 'stuusn'); 
$subject1in = filter_input(INPUT_POST, 'sub1in'); 
$subject1ex = filter_input(INPUT_POST, 'sub1ex'); 
$subject1to = filter_input(INPUT_POST, 'sub1tot'); 
$subject1gr = filter_input(INPUT_POST, 'sub1gr'); 
$subject2in = filter_input(INPUT_POST, 'sub2in'); 
$subject2ex = filter_input(INPUT_POST, 'sub2ex'); 
$subject2to = filter_input(INPUT_POST, 'sub2tot'); 
$subject2gr = filter_input(INPUT_POST, 'sub2gr'); 
$subject3in = filter_input(INPUT_POST, 'sub3in'); 
$subject3ex = filter_input(INPUT_POST, 'sub3ex'); 
$subject3to = filter_input(INPUT_POST, 'sub3tot'); 
$subject3gr = filter_input(INPUT_POST, 'sub3gr'); 
$subject4in = filter_input(INPUT_POST, 'sub4in'); 
$subject4ex = filter_input(INPUT_POST, 'sub4ex'); 
$subject4to = filter_input(INPUT_POST, 'sub4tot'); 
$subject4gr = filter_input(INPUT_POST, 'sub4gr'); 
$subject5in = filter_input(INPUT_POST, 'sub5in'); 
$subject5ex = filter_input(INPUT_POST, 'sub5ex'); 
$subject5to = filter_input(INPUT_POST, 'sub5tot'); 
$subject5gr = filter_input(INPUT_POST, 'sub5gr'); 
$subject6in = filter_input(INPUT_POST, 'sub6in'); 
$subject6ex = filter_input(INPUT_POST, 'sub6ex'); 
$subject6to = filter_input(INPUT_POST, 'sub6tot'); 
$subject6gr = filter_input(INPUT_POST, 'sub6gr'); 
   $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "studentresult";
      $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

      if(mysqli_connect_error()){
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
      }
      else{
      	$sql = "INSERT INTO batch (stname,stusn,s1in,s1ex,s1tot,s1gr,s2in,s2ex,s2tot,s2gr,s3in,s3ex,s3tot,s3gr,s4in,s4ex,s4tot,s4gr,s5in,s5ex,s5tot,s5gr,s6in,s6ex,s6tot,s6gr)
      	values ('$studentname','$studentusn','$subject1in','$subject1ex','$subject1to','$subject1gr','$subject2in','$subject2ex','$subject2to','$subject2gr','$subject3in','$subject3ex','$subject3to','$subject3gr','$subject4in','$subject4ex','$subject4to','$subject4gr','$subject5in','$subject5ex','$subject5to','$subject5gr','$subject6in','$subject6ex','$subject6to','$subject6gr')";
      	if($conn->query($sql)){
                  echo "<script>alert('New data inserted sucessfully!');document.location='admin2.html'</script>";
      	}
      	else{
      		echo "<script>alert('Insertion failed!');document.location='admin2.html'</script>";
      	}
      	$conn->close();
      }
?>