twine-test
==========

A very simple "web service" for twine.

Author: JP Reardon <http://jpreardon.com>
Last Updated: 2012-11-28

This file is for testing purposes only. Use at your own risk!

With this file, you can set up a very simple web service for testing Twine (http://www.supermechanical.com/twine/), or other things for that matter. This was a very quick and dirty test, it does not return data in a nice format like JSON, and it only tracks the last known orientation of the Twine. It was originally used so that the Twine orientation could be used to control an Arduino. More information on that here: http://jpreardon.com/2012/11/11/first-twine-project/.

INSTRUCTIONS:

1) Modify the $key variable with your own key.

2) Save data.php to a directory that is publicly available via HTTP. You might want to put it in its own subdirectory e.g. /twintest/data.php

3) Set up a Twine rule with an "HTTP Request" action. The URL for the HTTP request should point to the file you just saved in the step above (e.g. http://example.com/twinetest/data.php?key=<your key>&orientation=[orientation]). Make sure that both the key and orientation parameters are being passed.

To retrieve the last known orientation, just call the URL without any parameters (http://example.com/twinetest/data.php).
