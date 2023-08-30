<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Mandna" />
    <meta property="og:description" content="Making Healthcare Readily Available" />
    <meta property="og:image" content="https://Mandna.netlify.app/images/Mandna-logos_transparent.png" />
    <meta property="og:image:secure_url" content="https://Mandna.netlify.app/images/logo-white.png" />
    <meta property="og:url" content="https://Mandna.netlify.app" />
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="images/Mandna-logos_transparent.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Mandna" />

    <link rel="shortcut icon" href="images/Mandna-logos_transparent.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Mandna<span>Consultancy</span></h1>
		<nav>
		


		
		<ul> 
			
		
			
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>PatientAddress</th>
		<th>PatientEmail</th>
		<th>PatientContactNumber</th>
		<th>BloodGroup</th>

		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('202') AND  patientID=101 "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

