<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming API | Watch</title>
</head>
<body>
    
    <?php
        require('includes/dbh.inc.php');

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "SELECT iframe FROM iframelist WHERE id='$id'";
            $res = mysqli_query($conn,$sql);

            $row = mysqli_fetch_assoc($res);

            $iframecode = $row['iframe'];
    ?>

    <center><h2>Example streaming API</h2></center>

    <br><br>

    <center>
        <?php echo $iframecode; ?>
    </center>

    <?php
        } else {
            echo "<h1>Select an ID</h1>";
        }
        
    ?>

</body>
</html>