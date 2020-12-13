<?php

// you can integrate this to any pert of your site

// result haircut moon caledar without detail 
echo file_get_contents('https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&month=12&&dot_shift=10');

// result haircut moon caledar with detail
echo file_get_contents('https://astrolog.life/api/api_get_moon.php?moon_type=haircut_full&month=12&&dot_shift=10');

// etc. see README.md

?>
