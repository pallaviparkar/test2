<?php


/*$name = "Ravi ";
$profile = "PHP Developer";
$age = 25;
echo $name , $profile ,  $age, " years old";

echo "</BR>";

echo $name .' '. $profile .' '. $age .' years old';
echo "</BR>";

$name = "Ravi";
$ret =  print $name;
//To test it returns or not
echo $ret;*/


$db_host = '35.160.66.102';
$db_username = 'premium';
$db_password = 'pre2m0i1u0m';
$db_name ='confab_app';


//create Connection object oriented
/*
$con = new mysqli($db_host,$db_username,$db_password);

if($con->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connection Successful";*/


/*
//create Connection procedural
$conn = mysqli_connect($db_host,$db_username,$db_password);


if(!$conn){
	die("Connection failed: " . mysql_connect_error());
}
echo "Connection Successful";

mysqli_close($conn);

*/
/*
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;


echo "-----------------------------------------------------------------------------------";
echo "</BR>";

class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        echo "I'm alive!";    
        echo "</BR>";
        $this->name = $name;
    }
    
    public function __destruct()
    {
        echo "I'm dead now :(";
    }
}

$animal = new Animal("Bob");
echo "Name of the animal: " . $animal->name;

echo "***********************************************************************************";

$animal = new Animal();
echo "Name of the animal: " . $animal->name;


$input = '1,2,3,4,5,6';
echo array_sum(explode(',',$input));
*/

?>
<form name="file-upload" id="file-upload" method="POST" enctype="multipart/form-data">
<input type="file" name="file-1" />
<input type="submit" />
</form>