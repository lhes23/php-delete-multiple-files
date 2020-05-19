<?php
$source = array(
);

foreach($source as $data){
	if(unlink($data)){
		$results = "Successfully Deleted";
	}
	else{
		$results = "Something Wrong!";
	}
	return $results;
}
echo $results;
?>
