<html>
    <head>
        <title>Pdf Reader</title>
    </head>
    <body bgcolor="yellow">
        <center><h1>{------ All Pdf's ------ }</h1></center>
        <div class="container">
        <!-- <embed type="application/pdf"   width="300" height="300"> -->

            <?php
           include_once('connection.php');
           error_reporting(0);
            $query = "SELECT pdf FROM reader";
            $result = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <center><iframe src="pdf_files/<?php echo $row['pdf']?>" width="80%" height="700px"></iframe></center>
            <!-- <center><embed type="application/pdf" src="pdf_files/<?php echo $row['pdf']?>"  width="800" height="800">     </center>        -->
            <?php
            }
            ?>

        </div>
    </body>
</html>