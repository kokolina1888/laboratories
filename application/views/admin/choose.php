<?php 

//TO CHOOSE TO VIEW THE PROGRAM REQUESTS BY USERS OR BY PROGRAM DATES AND TYPES
echo "<div class='form'>";

echo '<p class="pretty"><a class="change" href="'.base_url('admin/show-program_dates').'">Прегледайте лабораториите, участаващи в Програма</a></p>';
echo '<p class="pretty"><a class="pretty" href="'.base_url('admin/show-programs-byuser').'">Прегледайте програмите на Лаборатория</a></p>';
echo "</div>";