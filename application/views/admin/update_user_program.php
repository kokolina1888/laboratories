<?php 
//DISPLAYS ALL PROGRAMS OF A USER IN ORDER TO UPDATE OR DELETE

echo '<h2>'.$user_info['username'].'</h2>';

echo "<pre>";

var_dump($program_requests);

echo "</pre>";

echo '<ul>';

$count = count($program_requests);

echo '<li>'. $program_requests[0]['programm_type'] .'-'. $program_requests[0]['cicle'];
echo '<a href=#>Прегледай детайли</a>';
echo '<a href=#>Изтрий</a>';

for ($i=1; $i < $count; $i++) { 
	if ($program_requests[$i]['programm_type_id'] === $program_requests[$i-1]['programm_type_id'] && $program_requests[$i]['cicle'] === $program_requests[$i-1]['cicle']) 
	{

		echo '</li>';
	}

	else
	{
		echo '<li>'. $program_requests[$i]['programm_type'] .' - '. $program_requests[$i]['cicle'];
		echo '<a href="">Прегледай детайли</a>';
		echo '<a href=#>Изтрий</a>';
	}
}


echo '</li></ul>';
