<!-- basic php  -->

<?php
echo "hello World";
echo "<br/>";
echo 10+76;
echo "<br/>";
echo "jay <br/>";
echo "thakkur";
$h2_color='blue'
?>

<!-- using html inside php -->

<?php
$name="Jay Thakkur";
echo "<h1 style='color:blue'>My name is $name</h1>"
?>

 <!-- using php inside html -->
<h1 style='color:red'>
    <?php
    echo $name
    ?>
</h1>

<!-- adding some style with php -->
<h2 style='color:<?php echo $h2_color?>' >
    <?php
        echo $name
    ?>
</h2>

<h2 style='color:<?php echo $h2_color?>'>My name is
    <?php
        echo $name
    ?>
</h2>

<h2>
    <?php
        echo $name
    ?>
</h2>