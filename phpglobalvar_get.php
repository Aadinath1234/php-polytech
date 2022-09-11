
          <?php
             if(isset($_GET["name"]) || isset($_GET["age"])) {
                echo "HI".$_GET['name']. "<br/>";
                   echo "Age:".$_GET['age']."years old.";
                      exit();

                       }
                     ?>
<html>
  <body>
     <form method= "GET" action="<?php $_PHP_SELF?>">
         Name:< input type= "text"  name= "name"/>
              Age: <input type="text" name = "age"/>
                 <input type="submit"/>
           </form>
          




                    </body>
                    </html>
