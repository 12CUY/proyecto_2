<?php
	require_once 'conn.php';
	
    if(isset($_POST['studentID'])){
        
        $studentID =$_POST['studentID'];
		$date = date('Y-o-W');
		$year = date('Y');
		$time = date('c');

		$sql = "SELECT * FROM student WHERE STUDENTID = '$studentID'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'usuario no registrado || contactanos'.$studentID;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['STUDENTID'];
				$sql ="SELECT * FROM attendance WHERE STUDENTID='$id' AND LOGDATE='$date' AND STATUS='0'";
				$query=$conn->query($sql);
				if($query->num_rows>0){
				$sql = "UPDATE attendance SET TIMEOUT='$time', STATUS='1' WHERE STUDENTID='$studentID' AND LOGDATE='$date'";
				$query=$conn->query($sql);
				$_SESSION['success'] = 'BIENVENIDO: '.$row['FIRSTNAME'].' '.$row['LASTNAME'].' | TIEMPO DE INGRESO: '.$time;
				}else{
					$sql = "INSERT INTO attendance(STUDENTID,TIMEIN,LOGDATE,STATUS,YEAR) VALUES('$studentID','$time','$date','0','$year')";
					if($conn->query($sql) ===TRUE){
					 $_SESSION['success'] = 'BIENVENIDO: '.$row['FIRSTNAME'].' '.$row['LASTNAME'].' | TIEMPO DE: '.$time;
			 		}
					 else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
	}

	}else{
		$_SESSION['error'] = 'Escanee su número de código de barras';
}
header("location: index.php");
	   
$conn->close();
?>