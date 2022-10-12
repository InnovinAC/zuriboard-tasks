<?php
$name = _$POST['name'];
$email = _$POST['email'];
$date_of_birth = _$POST['dob'];
$gender = _$POST['gender'];
$country = _$POST['country'];

$f = fopen('user_data.csv', 'w')
$content = $name.", ".$email.", ".$date_of_birth.", ".$gender.", ".$country;

fwrite($f, $content);
fclose($f);
