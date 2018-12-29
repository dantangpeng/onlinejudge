<?php
     
     $Qname = $_POST["Qname"];
	 $question1= $_POST["question1"];
	 $as1a = $_POST["1A"];
	 $as1b = $_POST["1B"];
	 $as1c = $_POST["1C"];
	 $as1d = $_POST["1D"];
	 $question2= $_POST["question2"];
	 $as2a = $_POST["2A"];
	 $as2b = $_POST["2B"];
	 $as2c = $_POST["2C"];
	 $as2d = $_POST["2D"];
	 $question3= $_POST["question3"];
	 $as3a = $_POST["3A"];
	 $as3b = $_POST["3B"];
	 $as3c = $_POST["3C"];
	 $as3d = $_POST["3D"];
	 $question4= $_POST["question4"];
	 $as4a = $_POST["4A"];
	 $as4b = $_POST["4B"];
	 $as4c = $_POST["4C"];
	 $as4d = $_POST["4D"];
	 $question5= $_POST["question5"];
	 $as5a = $_POST["5A"];
	 $as5b = $_POST["5B"];
	 $as5c = $_POST["5C"];
	 $as5d = $_POST["5D"];
     //$questionInfo = $_POST;
     // ? ?   ?   ?        json ?   
	 $array =array(
	 "type" => "R",
     "Slist" => "",
	 "Qname" => $Qname,
	 "Qnumber" => "5",
	 "question1" => $question1,      
	 "as1a" => $as1a,   
	 "as1b" => $as1b,   
	 "as1c" => $as1c,   
	 "as1d" => $as1d, 
	 "question2" => $question2,      
	 "as2a" => $as2a,   
	 "as2b" => $as2b,   
	 "as2c" => $as2c,   
	 "as2d" => $as2d, 
	 "question3" => $question3,      
	 "as3a" => $as3a,   
	 "as3b" => $as3b,   
	 "as3c" => $as3c,   
	 "as3d" => $as3d, 
	 "question4" => $question4,      
	 "as4a" => $as4a,   
	 "as4b" => $as4b,   
	 "as4c" => $as4c,   
	 "as4d" => $as4d, 
	 "question5" => $question5,      
	 "as5a" => $as5a,   
	 "as5b" => $as5b,   
	 "as5c" => $as5c,   
	 "as5d" => $as5d, 
     );  	 
	$json = json_encode($array);
 //   print_r($json);
	echo $json;
	$json = addslashes($json);
    $mysqli = new mysqli("localhost", "root", "", "Answer");
    if(!$mysqli)  {
        echo"database error";
    }else{
        //  echo"php env successful";
    }
	
    $sql = "Insert into q values(\"01111\",\"".$json."\",null);";
  //  $sql = "Insert into answer.q values(\"0002\",null,null);";
    echo $sql;
    $result = mysqli_query($mysqli, $sql);
?>