<?php
//echo phpinfo();
//header('Content-Type:	text/html; charset=utf-8');
$handle = fopen('/home/enuke-lapi-2/sdwines.csv', "r");
//echo locale_get_default();
//print_r($data);
        while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
          echo $data[1];
					echo "<br>";
					}
?>
