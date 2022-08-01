<html>
    <body>
          <h1>the result</h1>
              <?php
                  $SERVER ="localhost"; $username="root";$password="";$dbname="test";
                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); }

                   if(empty($_GET['value']))
                    echo "no value";
                   else
                   {
                    $value= $_GET['v'];
                        if ($value == is_integer){
                            $age = $_GET['age']; }
                        else {
                              $name = $_GET['name'] }
                    echo "SUBMITTED";
                   }
                ?>

    </body>
</html>
