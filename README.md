# surl
Allow users submit URL to Site To Create a Large Directory or Database

steps about installing:

''''

``````
CLONE THIS REPO USING 
git clone https://github.com/tecmie/surl.git 
`````

or download the Zip File 

Grant Permissions to these files in the folder  
chmod 755 or just to these files: iplog.txt and log.html

# settings:
in directory  /inc  there is config.php file...
change it with your own settings

open database.sql file and change 40 row with own name for admin(admin name) and own password, but tha pass must be in md5 (this is cryptographic)  ... go to this website: http://tools.eti.pw/md5.php
and generate own string ... just write your password with words and click on button generate and take the string, then copy/paste to this 40 row in .sql file :)
````

#how to access the admin panel?

http://localhost/FOLDER_NAME/admin
http://DOMAIN_NAME/admin
```

your admin name on default now is:
addurladminname

and the password is:
add.url.com/foryou:)
`````

IF YOU INTEND TO MODIFY ADMIN USERNAME AND PASSWORD
YOU CAN SELECT A NEW PASSWORD IN PHPMYADMIN FROM THE TABLES ADMIN
Remember to select the md5 option in password field 

from phpmyadmin u will import this .sql file and that's all...


u must go to 'shrink the web' website: shrinktheweb.com  , to get your own key for webthumbnails generator about the pictures...  and there is limit about for possible web snapshots. 
