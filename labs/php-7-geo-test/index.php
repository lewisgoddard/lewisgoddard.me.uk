<?php

echo '<p>Use ?ip=IP_ADDR to geo-ip any address. This is not an API.</p>';

$Geo['PHP Version'] = phpversion();

if (!empty($_GET['ip'])) {
	$Geo['IP'] = $_GET['ip'];
}else if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	$Geo['IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$Geo['IP'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$Geo['IP'] = $_SERVER['HTTP_CLIENT_IP'];
} else {
	$Geo['IP'] = $_SERVER['REMOTE_ADDR'];
}

use GeoIp2\Database\Reader;

if ( is_readable(__DIR__.'/geoip2.phar') ) {
	$Geo['Readable']   = true;

	require_once __DIR__.'/geoip2.phar';

	try {
		if (!class_exists('GeoIp2\Database\Reader')) {
			throw new \Exception('Class GeoIp2\Database\Reader not found');
		}
		$reader = new Reader(__DIR__.'/GeoLite2-City.mmdb');
		$record = $reader->city($Geo['IP']);
		if ( $debug > 1 ) {
			var_dump($record);
		}
		$Geo['Continent'] = $record->continent->code;
		$Geo['Country']   = $record->country->isoCode;

	} catch (\Exception $e) {
		echo '<p class="error">'.$e->getMessage().'</p>'."\n";
		$Geo['Continent'] = false;
		$Geo['Country']   = false;
	}

} else {
	$Geo['Continent'] = false;
	$Geo['Country']   = false;
	$Geo['Readable']   = false;
}

echo '<pre>';
var_dump($Geo);
echo '</pre>';
