<?php
            include_once('connection.php');
            // error_reporting(0); 

            if(isset($_POST['submit'])) {
                $pdf = $_FILES['pdf']['name'];
                $pdf_type = $_FILES['pdf']['type'];
                $pdf_size = $_FILES['pdf']['size'];
                $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
                $upload_to = "pdf_files/".$pdf;


                move_uploaded_file($pdf_tem_loc,$upload_to);

                $query = "INSERT INTO reader(pdf) values('$pdf')";

                $result = mysqli_query($connection,$query);

                if ($result) {
                    echo "<h1><center>Successfully Inserted</center></h1>";
                } else {
                    echo "Failed to Insert";
                }
            }
            header('location:index.php');
            
?>
