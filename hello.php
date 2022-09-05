<!DOCTYPE html>
<html>
    <body>
        
<?php


function showproductTable($id, $name, $price, $image, $red,$green,$blue){
    echo " <tr> <td><p style = 'color:rgb($red,$green,$blue)'>$id</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$name</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$price</td> 
    <td><img src = '$image' alt = 'Testimage'></td></tr>";
}

$arrayofproduct = array(
    array("01", "samsung-galaxy-a03","5990 Baht","img/samsung-galaxy-a03-b.jpg"),
    array("02", "samsung-galaxy-a13","6990 Baht","img/samsung-galaxy-a13-b.jpg"),
    array("03", "samsung-galaxy-a22","7990 Baht","img/samsung-galaxy-a22-b.jpg"),
    array("04", "samsung-galaxy-a33","8990 Baht","img/samsung-galaxy-a33-5g-b.jpg"),
    array("05", "samsung-galaxy-a52g","9990 Baht","img/samsung-galaxy-a52g-5g-b.jpg"),
    array("06", "samsung-galaxy-a53","10990 Baht","img/samsung-galaxy-a53-5g-b.jpg"),
    array("07", "samsung-galaxy-s21","15900 Baht","img/samsung-galaxy-s21-fe-5g-8gb-256gb-b.jpg"),
    array("08", "samsung-galaxy-s22-plus","17900 Baht","img/samsung-galaxy-s22-plus-8gb-256gb-b.jpg"),
    array("09", "samsung-galaxy-z-flip3","34990 Baht","img/samsung-galaxy-z-flip3-5g-8gb-256gb-b.jpg"),
    array("10", "samsung-galaxy-s22-ultra","45990 Baht","img/samsung-galaxy-s22-ultra-12gb-512gb-b.jpg")
);

    echo"<p style='font-size:50px'>Table of Products";
    echo "<table border='1'  width='50%' height='50%' style='font-size:30px'>";
    echo "<tr> <td>ID</td> <td>Name</td> <td>Price</td> <td>Image</td></tr>";
    for($i=0;$i<10;$i++){
        $red = rand(0,256);
        $green = rand(0,256);
        $blue = rand(0,256);      
        showproductTable($arrayofproduct[$i][0],$arrayofproduct[$i][1],$arrayofproduct[$i][2],$arrayofproduct[$i][3],$red,$green,$blue);
    }

?>
           
</body>
</html>