<?php
if(strpos($_SERVER[REQUEST_URI],'brokers') !== false){
	header("Location: https://firstcarolinacare.com/brokers/commercial-flashes");
} else {
	header("Location: https://firstcarolinacare.com/employers/flashes");
}
die();
?>