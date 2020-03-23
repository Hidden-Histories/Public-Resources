![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories
# -- Setup Artist Porpoise --
## Overview

**NOTE:** This tutorial is meant ONLY for the Hidden Histories admin who sets up accounts for the artists!!!

Each artist (and helper) will have their own copy of the porPOIse back end user interface for managing their own layers for both 
**ARpoise** and **AR-vos**.

There are two steps to set up a new artist with porPOIse:
1. This tutorial shows how to create and configure a **porPOIse account** for each artist.
2. Afterwards, the admin has to register and configure the artist's layers in the **ArpoiseDirectory**. See link to that tutorial in the [**Next Steps**](#next-steps) section at the bottom of this page.

We created a **template folder** for an example artist named ‘Example Artist’. In order to set up a real artist please follow the steps below. In the tutorial we used screenshots of Tamiko Thiel's porPOIse as an example. When you set up for another artist, use the artist's real name whereever it says "Tamiko Thiel" below. Please use only 'normal' letters and no white space characters for 
artist's names.

## Folder Structure
You need ftp/sftp access to the hiddenhistoriesjtown.org server. We use the WinSCP FTP client on a Windows 10 machine to upload 
files to the Hidden Histories server, but the setup using a different FTP client on a Mac, e.g. Cyberduck, should work the same.

Under **public_html** we created two folders, **ArpoiseDirectory** and **artists**. As mentioned above, this tutorial covers setting up a new artist in the **artists** folder. For the the **ArpoiseDirectory** tutorial, please see the 
documentation on the ARpoise github site, but **replace references to the ARpoise server with the appropriate URLs for the Hidden Histories server**!: https://github.com/ARPOISE/ARpoise/tree/master/php/dir

In **artists** we created a template folder called **ExampleArtist**. It contains three subfolders:
- **AssetBundles** for the asset bundles, i.e. the artist's artwork that makes up the total augment.
- **config** for the configuration of the layers of the artist.
- **php** for the interface that enables the artist to configure their layers

### Image - Folders:
![SetupArtistPorpoise1](/administration/images/SetupArtistPorpoise1.PNG)

.
## Create Artist Folder
Duplicate the entire contents of the **ExampleArtist** folder and rename it with the artist's name. In this example, we called it "TamikoThiel." 

Please do NOT use blanks or other special characters in the artist’s name.

### Image - Artist Folder:
![SetupArtistPorpoise2](/administration/images/SetupArtistPorpoise2.PNG)

.
## Edit the artist's config.php file
Edit the artist's config file (in our example here /public_html/artists/TamikoThiel/php/config.php).

Make sure the second to last line contains the **file system location of the config directory** created in the step above. 

And as always, make sure you don't delete the closing bracket '}' ;-)
```
“/home4/hhjtown/public_html/artists/TamikoThiel/config”
```
### Image - config.php:
![SetupArtistPorpoise3](/administration/images/SetupArtistPorpoise3.PNG)

.
## Edit the artist's porpoise.php file:
Edit the artist's porpoise.php file, in our example here: /public_html/artists/TamikoThiel/php/web/porpoise.php 

Make sure the line with the **chdir** command contains the file system location of the php directory created in the step above.
```
chdir("/home4/hhjtown/public_html/artists/TamikoThiel/php");
```
### Image - porpoise.php:
![SetupArtistPorpoise4](/administration/images/SetupArtistPorpoise4.PNG)

.
## Check web access to the artist's porPOIse service
The artist's new porPOIse service should be accessible on the web now via a login page. In a web browser, enter the following url, replacing "TamikoThiel" with the artist's name. You should get the following login screen:

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/

### Image - Web Access:
![SetupArtistPorpoise5](/administration/images/SetupArtistPorpoise5.PNG)

.
## Create a password for the artist
Use the following URL to create a password for the artist, replacing "TamikoThiel" with their name and "gigeldigik" with their chosen password:

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/crypt.php?TamikoThiel=gigeldigik

Please use a different password for every user!

It will generate an encoded password such as the following:
```
$_access["TamikoThiel"] = '$1$i15qMjc5$ZoKrbjTHXlhpAeJfZg.Xt1';
```
Copy that entire line into the artist's users.inc.php file, in our example here: /public_html/artists/TamikoThiel/php/web/dashboard/users.inc.php

### Image - Add Password:
![SetupArtistPorpoise6](/administration/images/SetupArtistPorpoise6.PNG)

.
## Login as the Artist
Replace "TamikoThiel" in this URL with the name of the new artist, and then login using the name and password you created above:
https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/

NOTE: to avoid having all the artist layers pile up in the same place in Japantown, the default GPS location of the layer is in Alviso Marina County Park! To change this:
1. First the admin has to change the GPS location in the ArpoiseDirectory. See link to that tutorial in the [Next Steps](#next-steps) section at the bottom of this page.
2. Then the artist has to change the GPS location in their own layers (see tutorial on creating augments with porPOIse): https://github.com/ARPOISE/ARpoise/blob/master/php/porpoise/README.md

### Image - Artist's default Home page on porPOIse:
![SetupArtistPorpoise7](/administration/images/SetupArtistPorpoise7.PNG)

.
## Next Steps

2. The **admin** must now **register and configure the new artist's layers in the ArpoiseDirectory.** For that tutorial, please see this document on the ARpoise github site but:
- **replace references to the ARpoise server with the appropriate URLs for the Hidden Histories server!**
- we recommend using the artist initials or some such unique tag to make the layer names unique and easily identifiable, e.g. sueyuen1, SY_test1 etc.
https://github.com/ARPOISE/ARpoise/tree/master/php/dir#arpoisedirectory-back-end

3. Once the admin has registered the artist's layers in the directory, the artist can add assets to their layers, animate them if desired and begin testing and editing their layers. For that tutorial, please see this document on the ARpoise github site: https://github.com/ARPOISE/ARpoise/blob/master/php/porpoise/README.md


