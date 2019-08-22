<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "pustaka";


function KONEKSI(){

$host = "localhost";
$user = "root";
$pass = "";
$database = "pustaka";
$connect = new mysqli($host,$user,$pass,$database);


	return $connect;

}

function cmbQuery($name, $value, $query, $parram='', $atas='--- Pilih Data ---', $atasvalue='', $statas=TRUE){

		$option = '';
		$optionatas='';
		$qry = mysqli_query(KONEKSI(), $query);
		while($data = mysqli_fetch_array($qry)){
			if($data[0] == $value){
				$selected = 'selected';
			}else{
				$selected = '';
			}
			$option .="<option value='".$data[0]."' $selected >".$data[1]."</option>";
		}

		if($statas)$optionatas = "<option value='$atasvalue'>$atas</option>";

		return "<select class='form-control' name='$name' id='$name' $parram> $optionatas".$option."</select>";

	}
?>