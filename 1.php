<?php 
	function peserta(){
		if(!isset($obj))
		$obj = new stdClass();
		$obj->name=(string)"Lutfi";
		$obj->Address=(string)"perum alam tirta lestari";
		$obj->hobbies=(array)"badminton";
		$obj->is_married=(boolean)"no";
		$obj->school=(Object)"university";
		$obj->skill=(array)"bermainmusik";
		$object = json_encode($obj);
		return $object;
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>jawban no.1</title>
</head>
<body>

<?php 
	echo peserta();
 ?>

</body>
</html>