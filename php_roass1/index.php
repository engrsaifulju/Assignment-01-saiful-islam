

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment-01</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    
     <div class="container-fluid">
         <div class="row">
             <div class="col-4"></div>
             
            <div class="col-4 m-5">
                <h1 class="pt-4 bg-info p-5">Assignment-01</h1> <br><br> <hr>
                <?php
                
                
                echo 19231284387234; 
                echo "<br>";
                echo "Lorem Ipsume";
                $test="Hellow Bangladesh";    
                
                
                $number1 = 100;
                $number2 = 200;
                $total   = $number1+$number2;
                define('age',20);
                echo "<br>";
                echo age;
                
                $test1 = 'My Name is khan ';
                $test2 = " Saiful Islam";
                $data = $test1 . $test2;
                $nameTest3 = 'My name' . $test2;
                
                $exm9 = "Hellow bangladesh & hellow $test2";
                echo "<br>";
                echo strlen($test1);
                echo "<br>";
                echo strtoupper($test1);
                echo "<br>";
                echo strtolower($test1);

                
               function khan($content){
                   echo $content;
               }
                
                function prac($name,$location){
                    echo "My name is $name";
                    echo "<br>";
                    echo "come from $location";
                }
                ?>
                 
                

                <h2><?php echo $test;?></h2> 
                
                <h2><?php echo $total;?></h2>  
                
                <h2><?php echo $test1;?></h2>
                <p><?php echo $data;?></p> 
                <h2><?php echo $nameTest3;?></h2> 
                
                <p><?php echo $exm9;?></p> 

                
                <p><?php khan("Hi This is khan"); ?></p> 
                <h2><?php echo prac('saiful','Dhaka');?></h2>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
            
             <div class="col-4"></div>

         </div>
     </div>

       
    <!-- Optional JavaScript -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
     <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>