<?php
    $url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/covid19korsel';
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
            default:
				echo '404 Not Found';
			break;
        }
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		switch ($url) {
            default:
				echo '404 Not Found';
			break;
        }
    }
?>