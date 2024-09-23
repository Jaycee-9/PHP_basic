<?php
$data="abc";
const newData = "abc";
$h1_color="blue";
$name='Jay Thakkur';
?>

<h1 style='color:<?php echo $h1_color?>'>
    <?php
    $data="tom";
    // newData="Jay";
        echo newData;
        echo "<br/>";
        echo $data
    ?>
</h1>

<?php
  define("data","jay");
    echo data;
    echo "<br/>";
    echo var_dump(data)
?>



<h1 style='color:green'>
<?php
 $number_1=20;
 $number_2=50;
echo "<br/>";
echo $number_1 * $number_2
?>
</h1>


<h2 style='color:red'>
    <?php
   echo $number_1 += 5;
   echo "<br/>";
   echo $number_2 /=5;
   ?>
</h2>

<h3 style='color:blue'>
<?php
    echo $number_1;
    echo '<br/>';
    echo ++$number_1;
    echo '<br/>';
    echo $number_2--;
    echo '<br/>';
    echo $number_2;
?>
</h3>

<h1 style='color:purple'>
    <?php
        $age=25;
    echo "My name is $name and i'm $age years old";
    echo '<br/>';

        if($age<18){
            echo "Minor hai bhai";
        }else{
            echo "all ok";
        }
    ?>
</h1>

<!-- For Loop -->

<h1>
<?php
$table=2;
for($i=1;$i<=10;$i++){
   
    echo $table*$i."<br/>";
}
?>
</h1>