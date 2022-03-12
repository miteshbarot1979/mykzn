<?php 

$data = '[{"id":"1","username":"welcome","email":"welcome@mail.com","mobile":"7897897890"},{"id":"2","username":"Ram Babburi","email":"rambabburi@gmail.com","mobile":"7897897890"},{"id":"3","username":"test","email":"test@mail.com","mobile":"9885776740"},{"id":"4","username":"teja","email":"teja@mail.com","mobile":"7897897897"}]';

$data = json_decode($data);
echo "<pre>";
print_r($data);

?>