![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories
# -- Setup Artist Porpoise --
## Overview
This is a step by step tutorial to set up Porpoise used by **ARpoise** or **AR-vos** for every artist involved in hidden histories.
We created a template for an example artist named ‘Example Artist’, in order to set up a real artist you should follow the steps below.
In the tutorial we setup porpoise for Tamiko Thiel. If you set up for another user, use the real name where ever it we say Tamiko Thiel below.


## Folder Structure
We use WinSCP on a Windows 10 machine, but the setup using some other client on a Mac, e.g. Cyberduck, should work the same.
You need ftp/sftp access to the hiddenhistoriesjtown.org server. Sue gave that access to me.
Here is what I created on the site so far.
### Image - Folders:
![SetupArtistPorpoise1](/administration/images/SetupArtistPorpoise1.PNG)

Under **public_html** I created two folders, **ArpoiseDirectory** and **artists**. I will talk about ArpoiseDirectory in another tutorial, here we just cover **artists**. In **artists** we created a template folder called **ExampleArtist**.

## Create Artist Folder
Create a copy of the **ExampleArtist** folder and call it **TamikoThiel**, please do not use blanks or other strange characters in the artist’s name.
### Image - Artist Folder:
![SetupArtistPorpoise2](/administration/images/SetupArtistPorpoise2.PNG)

The TamikoThiel folder contains three subfolders, AssetBundles for the asset bundles, i.e. the artwork of the artist, config for the configuration of the layers of the artist and php for the interface allowing the artist to configure her/his layers

## Edit config.php
Edit the file /public_html/artists/TamikoThiel/php/config.php, make sure the last but one line contains the file system location of the config directory created in the step above.

“/home4/hhjtown/public_html/artists/TamikoThiel/config”
### Image - config.php:
![SetupArtistPorpoise3](/administration/images/SetupArtistPorpoise3.PNG)

## Edit porpoise.php
Edit the file /public_html/artists/TamikoThiel/php/web/porpoise.php, make sure line with the chdir command contains the file system location of the ExampleArtist directory created in the first step above.

### Image - porpoise.php:
![SetupArtistPorpoise4](/administration/images/SetupArtistPorpoise4.PNG)

## Check the Web Access
Your new porpoise service should be visible on the web right now. In a web browser enter  the url.

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/

### Image - Web Access:
![SetupArtistPorpoise5](/administration/images/SetupArtistPorpoise5.PNG)

## Add Password
You can create a password for your user TamikoThiel through the web interface. Enter the url:

https://hiddenhistoriesjtown.org/artists/TamikoThiel/php/web/dashboard/crypt.php?TamikoThiel=gigeldigik

Please use a reasonable password instead of ‘gigeldigik’ in the url above! And use a different password for every user.

A password will be created for the artist, e.g.
```
$_access["TamikoThiel"] = '$1$i15qMjc5$ZoKrbjTHXlhpAeJfZg.Xt1';
```
Copy that line into the file /public_html/artists/TamikoThiel/php/web/dashboard/users.inc.php

### Image - Add Password:
![SetupArtistPorpoise6](/administration/images/SetupArtistPorpoise6.PNG)


