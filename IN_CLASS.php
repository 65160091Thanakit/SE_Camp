<html>

<head>
    <meta charset="utf-8">
</head>
<body >
    
    <p>

    <?php 
    $multi_x = 2;
    echo "<h1>ตารางสูตรคูณแม่  $multi_x </h1>";?>
        <div>
        <?php 
    
    
    $i = 1;
   
    while ($i <= 24) {
      echo "$multi_x X $i =";
      echo  $i*$multi_x;
      echo "<br>";
      $i++;
    }
    
    ?>
        </div>
    
     </p>


</body>

</html>