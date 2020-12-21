# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# PorPOISe - create AR-vos image trigger and SLAM

## Overview

This tutorial shows how to create image trigger and SLAM layers for the AR-vos app. **AR-vos** is an open source app that can do **geolocative**, **SLAM** and **image trigger** AR. It is part of the [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) open-source Augmented Reality platform.

You can **download the AR-vos app** from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store and the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

If you haven't done it recently **PLEASE go through the tutorial** [Using the AR-vos App to view image trigger and SLAM based AR artworks](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingAR-vosApp.md#-hidden-histories), so you understand how to *use* AR-vos to view both types of AR.

### NOTE: You MUST already know how to create new content for geolocative AR 

This tutorial assumes you are already comfortable **creating - not just viewing! - geolocative AR,** using the **porPOIse user interface** with either the ARpoise app or the AR-vos app. 

**You create geolocative AR content for the AR-vos app in exactly the same way you do for the ARpoise app.** This is covered by the tutorials on the [Hidden Histories documentation page](http://hiddenhistoriesjtown.org/documentation/), including:
- All the tutorials under **Viewing augments on your smartphone in the ARpoise and AR-vos apps.** 
- All the other, preceding tutorials under the same heading as this one, **Editing augments with the ARpoise porPOIse interface.**

In any case, to do this tutorial you will need to know how to:
- Access your porPOIse account in a web browser and use it to set up POIs.
- Use an **FTP client** to upload new content to your porPOIse account. (If you do not know how to do this, contact the Hidden Histories system administrator.)

.

## Review: image trigger AR and SLAM AR

**The AR-vos app *only* run on recent model smartphones,** as it requires Apple's ARKit and Google Android's ARCore technologies.
  - For iPhones, it works on the iPhone SE or iPhone **6s** (NOT on iPhone 6) and higher. See [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html).
  - For Android, it is harder to say, please see [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). In general, a device needs at least Android version 7.0, see [Android Versions](https://source.android.com/setup/start/build-numbers).
  
**Image trigger AR** uses A.I. computer vision technology to recognize trigger images - posters, postcards, or even photos of the inside or outside of a building - that you assign to a POI.
- Your POI prefab is then placed relative to those images, and will (pretty much) stick to those images. 
- Note that if lighting conditions vary, for instance cast shadows on outdoor trigger images, you might have to set up multiple POIs with different trigger images for the different lighting conditions.

**SLAM AR** uses the newest form of A.I. computer vision technology, [Simultaneous localization and mapping](https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping), to discover planes in the physical space around the user, and then place augments on these planes. The augments will pretty much stay in place, and the user can then walk around them in 3D space.
- Right now the planes always stay visible, and each time you touch any of them, another copy of your POI is placed at that location.
- We will be expanding your control of both the visibility of the planes and how often users can place copies of your POIs, but these updates will probably not come until February 2021 or so.
   
**Geofencing:** all these forms of AR can be restricted to a certain area. Just like the ARpoise app, the AR-vos app always checks your device's GPS coordinates and sends a request to the **ARpoise** back end server to see whether there are specific art works at your location. If there are, you will see them; if there are none, a default layer will be shown to you. (Note that we will change this default layer periodically.)

. 

## AR-vos layers in your porPOIse acccount

We have now added three AR-vos layers to your porPOIse account. If you log in as you always have done to work on your ARpoise layers, you will see them immediately: the three new layers with ".. AR-vos.." in their names.
- **These new layers are **only** visible in the AR-vos app!**
- The older layers - without "AR-vos" in the name - are only visible in the ARpoise app.

![AR-vos_layers](images/AR-vos_layers.png)

.
### How does AR-vos know what sort of AR each layer will provide?

Open each layer in a separate window and arrange them side by side, as in the image below.
- Note that the **form** for the three layers is exactly the same (they just vary in the content and the POIs listed).

![AR-vos_3LayersSideBySide](images/AR-vos_3LayersSideBySide.png)

.

- Now just click on the **first POI in each layer** to open it in the same window.

![AR-vos_3LayersPOIsSideBySide](images/AR-vos_3LayersPOIsSideBySide.png)

.

The setting **URL for trigger image** in the first POI in the list tells the AR-vos app how to treat this entire layer:
- If it is **empty, AR-vos treats this as a geolocative layer.** If you open it in the AR-vos app, you will be surrounded by all the POIs in that layer.
- If that field contains the **URL of a png or jpg** that is viewable on the Internet, the layer is treated as **image trigger AR,** and that **image will be the trigger** for this POI.
- If the field contains the word **SLAM,** the layer is treated as a SLAM layer.

So actually, you could use any of the AR-vos layers to do any type of AR. We just named them differently so you can keep an example of each different type! That said, there are some details you should observe. Read on!

**Remember, geolocative AR in AR-vos is done exactly the same as in ARpoise.** So we will not cover that at all here. If you need to review it, please read all the other tutorials on the [Hidden Histories documentation page](http://hiddenhistoriesjtown.org/documentation/) under the heading **Editing augments with the ARpoise porPOIse interface.**

.

## Setting up an image trigger layer

Go to the layer page for your own AR-vosImage layer. Note that it has two POIs in the POI list right now. (You can of course add and delete and modify them as you wish.)

![AR-vosImage_POI-list](images/AR-vosImage_POI-list.png)

.

Theoretically, you should be able to (for instance) have a catalog or website of your paintings, and use each painting as a trigger for a different AR experience. That is: 
- In each POI you would have linked a photograph of a different painting as a trigger in the field **URL for trigger image.**
- Each **Prefab name** field would reference an AR experience specific to that corresponding painting. So each POI represents a different painting, and a different AR experience connected to that painting.
- Then you should be able to keep the layer open in the AR-vos app as you turn or click through the pages from one painting to another, and get the appropriate AR experience for each painting.

**Right now however, all the POIs persist in real space!**
- If you trigger one POI from one trigger image, and then go to another trigger image without closing the app in between and **in the same real world location,** i.e. in the same place on your screen or in the same catalog, right now all the POIs you have already called up might appear as well as the POI for the trigger image you are currently viewing. 
- We hope to make this an option you can select, rather than the default, but it might not happen until February or so.
- If it bothers you, force close the app in between scanning different trigger images - or simply have the trigger images open in separate windows on different locations on your monitor desktop.

. 
### Settings that behave a bit differently in image trigger versus in geolocative AR.

. 
![AR-vos_ZenPOI_3](images/AR-vos_ZenPOI_3.png)

. 
(For a description of all the settings, please see the [PorPOISe Reference: Layer and POI Properties]( https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIse_REF-Layer-POI-Properties.md#-hidden-histories).)

- **Lat/Lon:** 
  - In image trigger AR, the latitude and longitude GPS values are *not* used to position the POI - it will always be placed centered on the trigger image. 
  - However, the Lat/Lon *is* used to tell the AR-vos app whether to show the POI at all. If it is too far away from where the user is standing, it will not be shown.

- **Relative location (x,y,z):** This does **not** work in image trigger! The origin (0,0,0) of your prefab will be centered in the middle of the image. If you want to adjust so it is NOT centered:
  - In Unity, set up the trigger image as a Quad GameObject (with a zeroed transform!), and then position the prefab as desired with respect to the trigger image. (Do NOT include the trigger image in the asset bundle - simply upload the image itself to the "TI" folder in your porPOise account. See "URL for trigger image" below.) In the "Kini" POI this is what we did with the prefab of King Ludwig II, so that he is standing on the ground in front of the doorway, rather than floating in the middle of the image.
  - OR: in porPOIse, add a **dummy transform animation** that moves it with respect to the center of the image, by using the same values in both From and To fields. See [Exercise 2](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIseWithAR-vos.md#exercise-2-positioning-your-prefab-on-the-trigger-image) below for more details.

- **Scaling factor:** NOTE: If you animate the scale in porPOIse, they scaling values will be multiplied with the Scaling factor as well. Only add animations after you've made sure you can see the object at all!
  - If the scaling factor is too small or too big, you might not see the prefab. 
  - Remember that 3D objects are only visible if you see them from outside. So if a 3D object is too big, and you are inside of it, it will be invisible!

- **Relative angle:** This is supposed to set the prefab such that its "front" side is always pointing to the viewer, but it will depend on what is defined as "front" in the 3D modeling program in which the assets for the prefab were created.
  - If a prefab is sticking out perpendicular from the trigger image, instead of lying in the same plane as the image, try switching the value of the relative angle.
  - **NOTE:** Switching the value of the relative angle might exchange the y axis and the z axis in the animations!

- **URL for trigger image:** 
  - This is the web address of a jpg or png that you upload to the new **TI** (Trigger Images) folder we added to your porPOIse account. 
  - This has the form **hiddenhistoriesjtown.org/artists/ExampleArtist/TI/mytrigger.jpg,** in which you replace "ExampleArtist" with the name of your account, and "mytrigger.jpg" with the name of your trigger image.
  - See the following Exercise 1 below for more details.

- **Width of trigger image:** This doesn't have to be exact, but is a rough guide for the size of your trigger image. This would be around 0.1m = 10cm for a postcard, 1m for a poster, and perhaps 10m for a house facade.

.

## Exercise 1: Setting up a new trigger image

### Best practices for trigger images

What does the trigger image have to look like? See Wikitude's [Best Practices for trigger images](https://www.wikitude.com/blog-image-recognition-tracking-best-practices-and-target-guidelines/) for visual examples of dos and don'ts.

There are two aspects to consider for a trigger image:
- How does it look in the real world? 
  - It should **not** have any reflections or shadows that make it look different at different times. Glass and metal are bad, it should be matt, opaque, non-reflective and evenly lit.
  - It should be **large and clear** enough to be recognizable. If you can't recognize it, neither will AR-vos!
- What sort of file should the trigger image be? 
  - It has to be a **jpg or png,** and should be **RGB,** *not* CYMK.
  - It should be only about **1 MB,** as it will be downloaded and analyzed on the user's smartphone.
  - A good size is between **500 - 1050 pixels on a side.**

Additionally, the AR-vos app needs to be able to identify your trigger image to decide how to depict your AR content:
- If the trigger image is, for instance, a small section of a larger mural, facade or poster, AR-vos has to be able to **identify** it - it should be a **distinctive** part of the larger image.
- **Asymmetrical:** it has to be able to tell which direction is up - remember, it doesn't feel gravity! If it is symmetrical, it can't tell which direction is up or down.
- **High contrast** - otherwise it'll all look like a blur.
- **Lots of detail** - otherwise it'll be hard to identify uniquely.

### 1. Test the trigger images in your example AR-vosImage layer

As mentioned above, the POI setting **URL for trigger image** is where you tell AR-vos what image to look for as a trigger for this specific POI. Let's take a look at an existing trigger image:

- In your porPOIse account, open one of the image trigger POIs and click into the field "URL for trigger image." Copy the URL and paste it into the search field of a web brower, then press the Enter key. You should see the trigger image in the browser. 
- Open the AR-vos app, select your example AR-vosImage layer and use it to scan the image - you should get the POI that links to that trigger image.

### 2. Upload your own trigger image

Now that you know the POIs and their trigger images work, upload your own trigger image.

We have added a folder **TI** in your porPOIse account to hold your trigger images.
- PLEASE only make changes in these two folders! The other files and folders contain the code for your porPOIse account - if you alter them, your porPOIse will not work any more!
- Use your FTP client to access your porPOIse account. If you don't know how to do this, talk to the Hidden Histories system administrator.
- Notice that besides the AssetBundles folder (to which you have already uploaded your own asset bundles when making geolocative layers), there is now a **TI** folder as well.
- Open the TI folder and then drag an image that fits the criteria mentioned above from your hard drive into that folder.

![AR-vos_TI-Folder](images/AR-vos_TI-Folder.png)

.

### 3. Link your trigger image to one of your image trigger POIs:

Do you remember the URL for your [asset bundle in ARpoise](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/CreatingAssetBundles.md#-hidden-histories)? It has this form, whereby "ExampleArtist" contains your own account name: **hiddenhistoriesjtown.org/artists/ExampleArtist/AssetBundles/hh_examples.ace**

The URL for a trigger image is almost the same:
**hiddenhistoriesjtown.org/artists/ExampleArtist/TI/wind-kanji.jpg**

- Replace "AssetBundles" with "TI".
- Replace the asset bundle file name with the name of your image. Don't forget the file type: .jpg or .png
- Paste the URL into a web browser and see if you get the image you uploaded.

Now create a new POI, so you preserve the existing POIs as a reference:
- Copy all the other fields, including the Prefab name and URL, from one of the other POIs.
- Test it to make sure it works.
- Then paste your trigger image URL into the **URL for trigger image** field, and test your image trigger layer to make sure it works with your own image. 
- If the prefab flickers or is very unstable, re-read the section above on best practices for trigger images!

.

## Exercise 2: Positioning your prefab on the trigger image

The position and orientation of your AR content may vary depending on these circumstances:

**Think about how the trigger image will appear in the real world.** Depending on whether it is on a wall, the ground, or help in the viewer's hand, the AR content might need to be positioned and oriented very differently. A trigger image could be:
- A poster on a wall, part of a mural or an entire facade of a building, or as an image on a website.
- A postcard in someone's hand, or on a smartphone.
- An image or some uniquely identifiable marking on the floor.

**The position and orientation of the prefab on the trigger image will depend on how the prefab was constructed in the original 3D modeling program, and set up in Unity as a prefab.** 
- If you make your own, be consistent to save yourself time.
- If you use assets made by other people, you might have to play around with the following settings to orient and position the prefab on the trigger image the way you want it:
  - Remember that Relative location (x,y,z) does **not** work! Use a dummy animation instead, as described below.
  - **Relative angle Yes/No:** Ostensibly this forces the "front" of the object or image to always face the user, but this depends on how "front" is defined for that object. If you can't see the object, or it is perpendicular to the image, try switching this setting.
  
### 1. Use animations to find the axes for a given prefab

The default position of a prefab is in the middle of the trigger image, at 0,0,0. In the example POIs of your AR-vosImage layer:
- The monk prefab "youseiSeedPod_Bell" in the POI "Zen Trigger" is at the default position.
- The "Kini" prefab in the POI "Kini in Door" was set in Unity to be at the proper location with respect to the door trigger image.
- Using these prefabs, or ones of your own, set up tranform animations to find out which axes are which for which prefabs. Try all 3 axes x,y,z for both transform and rotate.
- I like to set Length = 10, Persist = No and Repeat = Yes, so that it is easier to see and understand what is happening.
- If you need to read up on creating animations, see **Editing aguments with the ARpoise porPOIse interface: 3. porPOIse: Layer and POI configuration quick reference** on the [Hidden Histories documentation](https://hiddenhistoriesjtown.org/documentation) page. 

Note that in the image below:
- The monk prefab, youseiSeedPod_Bell, needs Relative angle = Yes to be visible, and the y-axis is the up axis.
- The Kini prefab however needs Relative angle = No to be visible, and the z-axis is the up axis.

![AR-vos_AnimAxes](images/AR-vos_AnimAxes.png)

### 2. Use dummy animations to simply reposition the prefab on the trigger image.

- Especially if you can't rebuild the prefab with a different origin or orientation, you might want to use a "dummy" animation to reposition it with respect to the trigger image.
- Length can be very short, for instance 0.1 seconds.
- BUT set Persist = Yes and Repeat = No, so it just jumps there and stays there. If you do not, the bell sound on the monk prefab "youseiSeedPod_Bell" will jitter constantly.


