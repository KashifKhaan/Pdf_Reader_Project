<html>
    <head>
        <title>Pdf Reader</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <fieldset>
            <legend><h2>Upload Your PDF</h2></legend>
            <div class = "">
                <form action="action.php" method="post" enctype="multipart/form-data">
                <label for="">Choose your PDF</label><br>
                <input id="pdf" type="file" name="pdf" value="" required><br><br>
                <input id="upload" type="submit" name="submit" value="Submit"><br><br>
                </form>
            </div>
        </fieldset>
        
        <br><br><br>
        <?php
            include_once('display.php');
        ?>
    </body>
</html>