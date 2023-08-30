<?php include '../../datalayer/bookserver.php'; ?>
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
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Mandna<span>Consultancy</span></h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			
			<li><a href="feedback.php">FeedBack</a></li>


			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Doctor ID</th>
		<th>Patient ID</th>
		<th>Date</th>
		<th>Time</th>
		

		</tr>

		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	   <h1 style="margin-left:37% ;margin-top:70px"   class="asd">Send Confirmation Email </h1>

    <form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;margin-top:110px;margin-left: -10px;">

    
    <div classs="xa" style="margin-top:0px">
        <label for="email" style="width:40px;">Email</label>
        <input type="email"  id="email" name="email" maxlength="50" style="width:400px;" placeholder="XAXAXA@gmail.com">
        
        <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
        <input type="text"  id="subject" name="subject" maxlength="50" style="width:400px;" placeholder="Appointment Confirmation">
        
        <label for="name" style="margin:10px ;display:inline-block;" >Message</label>
        <input type="text" placeholder="this is a Confirmation email for your appointment ID:" type="textarea"  id="message" name="message" rows="1" style="width:400px;padding-top: 10px" maxlength="2000">
               
               
        
        <button type="submit"  id="message" name="sendemail" style="width:200px;height:30px;border-radius: 10px; background: #992828 ;margin-left:45%;color: white ">Send
               </button>
               
        
        </div>
        </form>
    
    
    <?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'FROM:gassermohsen83@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>
</body>
</html>