<!DOCTYPE html>
<html>
<head>
	<title>ABC Results</title>
	<style type="text/css">
		* {
         padding: 0;
         margin: 0;
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open San','Helvetica Neue', sans-serif;

         }

         .header {
         background-color: darkslategray;
         color: white;
         font-size: 20px;
         text-align: center;
         }
         .clipboard
        {
        background-color: green;
        color: white;
        width: 450px;
        height: 40px;
        }
        .namenusn
        {
        	margin-left: 50px;
        	width: auto;
        }
        table,tr,td,th
        {
        	border-collapse: collapse;
        	border:2px solid black;
        	padding: 20px;
        }
        td
        {
        	font-size: 20px;
        }
	</style>
</head>
<body>
	<div class="header">
        <h1>Welcome to ABC Institute of Technology</h1>
    </div><br><br>
    <center>
   <div class="clipboard">
   <h2>ABC Provisional Results for Students</h2>
    </div>
</center><br>
    <center>
    <table>
        <tr>
    	<th><h2>Subjects</h2></th>
    	<th><h2>Internal marks</h2></th>
    	<th><h2>External marks</h2></th>
    	<th><h2>Total marks</h2></th>
    	<th><h2>Result</h2></th>
        </tr>
   <?php
   $conn = mysqli_connect("localhost","root","","studentresult");
   $set = $_POST['search'];
   if($set) {
   $show = "SELECT * FROM batch WHERE stusn = '$set'";
   $result = mysqli_query($conn,$show);
   while ($row = mysqli_fetch_array($result)) {
    echo "<h3> Name : ".$row['stname']."</h3>";
    echo "<h3> USN  : ".$row['stusn']."</h3><br>";
    echo "<tr><td>Subject 1</td><td>".$row['s1in']."</td><td>".$row['s1ex']."</td><td>".$row['s1tot']."</td><td>".$row['s1gr']."</td></tr>";
    echo "<tr><td>Subject 2</td><td>".$row['s2in']."</td><td>".$row['s2ex']."</td><td>".$row['s2tot']."</td><td>".$row['s2gr']."</td></tr>";
    echo "<tr><td>Subject 3</td><td>".$row['s3in']."</td><td>".$row['s3ex']."</td><td>".$row['s3tot']."</td><td>".$row['s3gr']."</td></tr>";
    echo "<tr><td>Subject 4</td><td>".$row['s4in']."</td><td>".$row['s4ex']."</td><td>".$row['s4tot']."</td><td>".$row['s4gr']."</td></tr>";
    echo "<tr><td>Subject 5</td><td>".$row['s5in']."</td><td>".$row['s5ex']."</td><td>".$row['s5tot']."</td><td>".$row['s1gr']."</td></tr>";
    echo "<tr><td>Subject 6</td><td>".$row['s6in']."</td><td>".$row['s6ex']."</td><td>".$row['s6tot']."</td><td>".$row['s6gr']."</td></tr>";
   }
 }
 else
 {
    echo "<script>alert('Invalid or empty USN');window.location='students.html';</script>";
  }
    $conn-> close();
  ?>
    </table>
    <div class="passfail">
    	 <h4>Abbrevations</h4>
    	 <p>
    	 <h4>P -> Pass</h4><h4>F -> Fail</h4>
    	</p>
    </div>
     </center>
</body>
</html>