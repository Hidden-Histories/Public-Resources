![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories
# -- Setup Artist Porpoise --
## Overview

**NOTE:** This tutorial is meant ONLY for the Hidden Histories admin who sets up accounts for the artists!!!

This is a step by step tutorial how to set up porPOIse for **ARpoise** or **AR-vos** for each artist involved in Hidden Histories.
We created a template for an example artist named ‘Example Artist’. In order to set up a real artist please follow the steps below.

In the tutorial we used screenshots of Tamiko Thiel's porPOIse. When you set up for another artist, use the artist's real name where ever it says "Tamiko Thiel" below. 

**Please use only 'normal' letters and no white space characters for artist's names**.

## Folder Structure
We use the WinSCP FTP client on a Windows 10 machine to upload files to the Hidden Histories server, but the setup using a different FTP client on a Mac, e.g. Cyberduck, should work the same.
You need ftp/sftp access to the hiddenhistoriesjtown.org server. Here is what I created on the site so far.

Under **public_html** I created two folders, **ArpoiseDirectory** and **artists**.
I will talk about ArpoiseDirectory in another tutorial (LINK!!!), here we just cover **artists**. In **artists** we created a template folder called **ExampleArtist**.

### Image - Folders:
![SetupArtistPorpoise1](/administration/images/SetupArtistPorpoise1.PNG)

.
## Create Artist Folder
Create a copy of the **ExampleArtist** folder, here called TamikoThiel - rename it with the artist's name. Please do not use blanks or other special characters in the artist’s name.

### Image - Artist Folder:
![SetupArtistPorpoise2](/administration/images/SetupArtistPorpoise2.PNG)

The artist's folder (here "TamikoThiel") contains three subfolders:
- **AssetBundles** for the asset bundles, i.e. the artist's artwork that makes up the total augment.
- **config** for the configuration of the layers of the artist.
- **php** for the interface that enables the artist to configure their layers
.
## Edit config.php
Edit the file /public_html/artists/TamikoThiel/php/config.php:
make sure the second to last line contains the file system location of the config directory created in the step above.
```
“/home4/hhjtown/public_html/artists/TamikoThiel/config”
```
### Image - config.php:
![SetupArtistPorpoise3](/administration/images/SetupArtistPorpoise3.PNG)

## Edit porpoise.php
Edit the file /public_html/artists/TamikoThiel/php/web/porpoise.php. 
Make sure line with the chdir command contains the file system location of the php directory created in the step above.
```
chdir("/home4/hhjtown/public_html/artists/TamikoThiel/php");
```
### Image - porpoise.php:
![SetupArtistPorpoise4](/administration/images/SetupArtistPorpoise4.PNG)

## Check the Web Access
Your new porPOIse service should be visible on the web right now. In a web browser, enter the url.

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/

### Image - Web Access:
![SetupArtistPorpoise5](/administration/images/SetupArtistPorpoise5.PNG)

## Add Password
You can create a password for your artist (here "TamikoThiel" with password "gigeldigik") through the web interface. Enter the URL with ?artistname=artistpassword:

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/crypt.php?TamikoThiel=gigeldigik

Please use a reasonable password instead of ‘gigeldigik’ in the url above! And use a different password for every user!

A password will be created for the artist, e.g.
```
$_access["TamikoThiel"] = '$1$i15qMjc5$ZoKrbjTHXlhpAeJfZg.Xt1';
```
Copy that line into the file /public_html/artists/TamikoThiel/php/web/dashboard/users.inc.php
### Image - Add Password:
![SetupArtistPorpoise6](/administration/images/SetupArtistPorpoise6.PNG)

## Login as the Artist
Use the name and password you created above and login to the service.
### Image - Login as the Artist:
![SetupArtistPorpoise7](/administration/images/SetupArtistPorpoise7.PNG)

The error message is displayed because the google maps key for Hidden Histories needs to be added.

## Add Google Maps Key
Edit the file /public_html/artists/TamikoThiel/php/web/dashboard/mapskey.inc.php

and make sure the last line reads
```
$_googleMapsKey = 'AIzaSyDFyHIm77knmp5A7qNyY1234hz814SlFaM';
```
With the real Hidden Histories google maps key!

## Further Reading
Another document will talk about how to configure an example layer for the user.

The document linked below gives more info about how an artist has to set up layers.
https://github.com/ARPOISE/ARpoise/blob/master/php/porpoise/README.md


