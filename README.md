# surl
Allow users submit URL to Site To Create a Large Directory or Database

steps about installing:

'''''''
just copy/paste direcrory/folder add.url.ph to your localhost  ...
give writable rights to this folder :) or just to these files: iplog.txt and log.html

# settings:
in directory  /inc  there is config.php file...
change it with your own settings

open addurl.sql file and change 40 row with own name for admin(admin name) and own password, but tha pass must be in md5 (this is cryptographic)  ... go to this website: http://tools.eti.pw/md5.php
and generate own string ... just write your password with words and click on button generate and take the string, then copy/paste to this 40 row in .sql file :)
````

#how to access the admin panel?

http://localhost/add.url.ph/admin
http://yourdomain/admin
```

your admin name on default now is:
addurladminname

and the password is:
add.url.com/foryou:)
`````

if u want change admin/pass , then edin 40 row in .sql file!

from phpmyadmin u will import this .sql file and that's all...


u must go to 'shrink the web' website: shrinktheweb.com  , and to get your own key for webthumbnails generator about the pictures... u can't use my key, because i specified my ip and domains :) and there is limit about this web snaps...
