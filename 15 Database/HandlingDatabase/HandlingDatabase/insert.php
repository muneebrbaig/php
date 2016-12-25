<?php



  function addNewCountry($newCountry){

    $sql = "INSERT INTO country(Name) VALUES ($newCountry')";

$result = SingleQuery($sql);

if($result === true)
{
	echo 'success';

}
else
{
	echo $result;
}


  }
?>