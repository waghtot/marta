<?php
$data = array();

if(isset($argv))
{
	checkRrgv($argv); 
}else{
	response();
}

function checkRrgv($input)
{
	if(isset($input[1]))
	{
		 echo heniek($input[1]);
	}else{
		response();
	}
}

function heniek($input)
{ 
	return color($input);	
}

function color($input)
{
	switch($input){
		case 'rozowy':
			return 'dobrze';
		break;
		default:
			return 'nie dobrze';
		break;
	}

}

function response()
{
	echo 'brak danych wejsciowych';
	exit;
}

