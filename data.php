<?php

/*
Very simple "web service" for twine.

Author: JP Reardon <http://jpreardon.com>
Last Updated: 2012-11-28

This file is for testing purposes only. Use at your own risk!

If an orientation and the proper key has been passed in the URL, 
the orientation is saved to a file. Otherwise, the last known
orientation is returned.

The key is primative "security" so just anyone can't write data.
Yes, I said it was primative. Change the key variable to one of
your choice.
*/

// Change the key value to a key of your choice.
$key = "<key goes here>";
$datafile = "datastore.txt";

if ($_GET[orientation] && $_GET[key] == $key) {
	// Update the data file and set the current orientation
	if (file_put_contents($datafile, $_GET[orientation])) {
		print "OK";
	}else {
		print "ERROR";
	}	
} else {
	// Send the current orientation in [brackets]
	print "[" . file_get_contents($datafile) . "]";
}
?>