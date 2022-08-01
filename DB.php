<html>
    <body>
			<?php
$con=mysqli_connect("localhost","root","","test")
or die (mysqli_connection_error());
echo "Connected to MySQL <br>";

mysqli_query($con, " CREATE TABLE NOT WXISTS
test INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id),name varchar(30),age INT )")
or die(Mysqli_Connect_error());
echo "table created! <br>";

</body>
</html>
