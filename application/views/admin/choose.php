<?php 

//TO CHOOSE TO VIEW THE PROGRAM REQUESTS BY USERS OR BY PROGRAM DATES AND TYPES
echo "<div class='form'>";

echo '<p class="pretty_form"><a href="'.base_url('admin/show_program_dates').'">Прегледайте лабораториите, участаващи в Програма</a></p>';
echo '<p class="pretty_form"><a href="'.base_url('admin/show_programs_byuser').'">Прегледайте програмите на Лаборатория</a></p>';
echo "</div>";