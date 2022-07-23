<?php

$menubar = array("menu1" => "Home",
"menu2" => "Products",
"menu3" => "About us");

$content = array("line1" => "Sed ut perspiciatis unde omnis <br> iste natus error sit",
"line2" => "Nemo enim ipsam voluptatem <br> quia voluptas sit",
"line3" => "Nam libero tempore,cum<br>soluta nobis est eligendi <br> optio cumque nihil impedit",);

$footer = array("line1" => "At vero eos et accusamus et iusto odio",
"line2" => "Nam libero tempore, cum soluta nobis est eligendi optio <br>nihil impedit quo minus id quod maxime placeat facere.",
"line3" => "Ut enim ad minima veniam",
"line4" => "Nam libero tempore, cum <br>soluta nobis est eligendi");

$form = array("name1" => "Iste Natus",
"name2" => "Qui ratione");

$button = array("but1" => "Voluptatibus",
"but2" => "Vel illum qui");
?>

<!DOCTYPE html>
 
  <html>
<?php
    include("elements/head.php");
?>    
   <body>
   <div id="loader" class="center">
       
  <?php
        include("elements/header.php");
        include("elements/content.php");
        include("elements/footer.php");

?>
     
   </body>
       
</html>