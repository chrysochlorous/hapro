<?php
if(strpos($_SERVER[SERVER_NAME],'broker') !== false){
	header("Location: https://firstcarolinacare.com/brokers/commercial-flashes");
} else {
	header("Location: https://firstcarolinacare.com/employers/flashes");
}
die();
?>