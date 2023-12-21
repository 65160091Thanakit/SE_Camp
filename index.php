<html>

<head>
    <meta charset="utf-8">
</head>
<body >
    
    <p>

    <?php 
    ?>
     </p>
     <form method="post" action="">
       <input type="text" name="fname">
       <button type="submit">บันทึก</button>
     </form>

<?php

    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }

?>

</body>

</html>