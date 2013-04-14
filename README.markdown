# Responsive Design Testing
This tool is for everyone who needs a quick and easy way to test their website design in multiple screen widths.

## Permalink style testing
You can test any website, and provide the link to anyone you like by adding their URL to the end of the testing page address.
For example:
http://mattkersley.com/responsive?google.com

## Installing on your own server
- Copy index.html and responsive.js onto your machine
- Update the *defaultURL* at the top of responsive.js to your own website
-	Upload the files into a subdirectory on your server
- Navigate to the new subdirectory via a browser

Once you've uploaded, you can navigate your website from within the iframes, and the others will update.

This won't work for external sites however due to browser security restrictions.
---
or use
---
$ open -a Google\ Chrome --args --disable-web-security
Also if you're trying to access local files for dev purposes like AJAX or JSON, you can use this flag too.

-–allow-file-access-from-files
For PC go into the command prompt and go into the folder where Chrome.exe is and type

chrome.exe --disable-web-security
That should disable the same origin policy and allow you to access local files.
---

## MyFork
- setup sass project
- some additional script for hiding frames
- activate only 320x480, 480x320, 1024x768
- livereload-js
- load loader_large.gif from host


