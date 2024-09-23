<!-- nested for loop -->

<h1 style='color:pink'>
    <?php
  
    for($i=1;$i<=3;$i++){
        for($j=1;$j<=3;$j++){
            echo $j."<br/>";
        }
    }
    ?>
</h1>

<!-- while loop -->
<h2 style='color:slate'>
<?php
$num=0;
    while($num<=10){
        echo $num."<br/>";
        $num++;
    }
?>
</h2>


<!-- do-while loop -->

<h3 style='color:red'>
    <?php
        $num=10;
        do{
            echo $num."<br/>";
            $num--;
        }while(
            $num>=0
        )
    ?>
</h3>

<!-- go-to statement -->

<h3>
    <?php
    $x=10;
    echo "before condition <br/>";

    if($x==20){
        goto jump;
    }

$name="Jay";
echo  $name."<br/>";

jump:
echo "statement is jumped on line no. 15";

    ?>
</h3>