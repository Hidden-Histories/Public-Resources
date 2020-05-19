# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# ARpoise PorPOISe User Interface tutorial

## Overview

Whether you create your own digital assets for your AR artwork, or work together with a helper to turn your drawings, sculptures or videos into digital assets, it is easy to "choreograph" them together into your AR experience in porPOIse. This is a web-based interface that allows you to edit and adjust your own AR experience either while working from your home base, or standing at your artwork site in Japantown.

This tutorial gives you the basics for working with **geolocative AR,** which works on both the **ARpoise app** and the **AR-vos app** in exactly the same way. A subsequent tutorial will cover the image trigger and SLAM AR that can only be done by the AR-vos app.

### Some terminology:

- **Layer:** An ARpoise "layer" is an individual AR experience or project. A single location in the real world can have multiple layers at exactly the same site, each of them a separate AR experience. (This is like a channel on your TV or YouTube - you look at them in the same place, but they are completely separate programs.) When you stand at that site, the ARpoise and AR-vos apps will show you a list of layers available for you there.

- **POI:** A "POI" (Point Of Interest) are the components that all together make up your AR experience (your layer). These can include 3D models, images, sounds etc.

### Workflow (see below for details on how to do all of this!):

#### Initial work at home:

- Due to the coronavirus lockdown, we have positioned your layers **at your home base,** so you can do the main work of **setting up, modifying and testing** your layer in porPOIse there on your PC. 

- Once you understand this tutorial on how to use porPOIse to set up and modify your layer, go to the [**Next Steps**](#next-steps) section at the bottom of this page. to learn how to add new **assets** (2d images, 3D models, sounds, etc.) to your layer.

#### Refining your layers once they are moved to Japantown:

- When your layer is ready for testing, both you and the admin will need to move it to the desired location in Japantown: first they have to change the position in the ARpoise directory registry, and then you need to change the position in your own porPOIse account. 

- Once your layer is positioned in Japantown, you can still change and test it from home using [remote testing with Fixed Location](UsingARpoiseApp.md#exercise2-remote-viewing-of-brush-the-sky-in-san-jose-japantown), as you already learned in the [Using ARpoise App: Remote Viewing with Fixed Position](UsingARpoiseApp.md#-hidden-histories) tutorial.

- For the real testing, **go to the site** where your layer is positioned and view it on your smartphone. (If you have been using Fixed Position to test from home, don't forget to **unclick** it first!). 

- But **before you leave your house, make sure you can access your porPOIse account on a browser in your smartphone!** The easiest way to do this is to mail yourself the link to your porPOIse account login page (you'll learn about this below), and then you can just click the link when you are standing on site in Japantown. Then you can make changes to your layer while standing on site, and see the changes immediately. (Remember to save the changes, then **close and reopen the ARpoise app** - otherwise you will NOT see the changes in your layer!

#### Visualization of how you work in porPOIse - at home and on site

![porPOIse workflow](images/hiddenhistories-porPOIseWorkflow_v3_1024w.png)


. 
## Log in to your porPOIse account

Log in to your porPOIse account in a web browser on your PC. The URL to access it has the form below, but replace ExampleArtist with the porPOIse account name that the admin created for you. (no blanks!):

https://hiddenhistoriesjtown.org/artists/ExampleArtist/php/web/dashboard/

## porPOIse Layers List

Once you log in to your porPOIse account, you will see a list of the layers that the Hidden Histories admin has set up for you. (If you ever need more layers, please ask your admin to add them for you.) Here we  use the fictitous artist Bruce Lee for the example images. Your own pages will show your assigned nickname.

- The **ExampleLayer** is meant as a test layer where you can play around and try out new features. 
- The **ArtistLayer** is where you should slowly build up the final artwork, as you find assets and functionality to your liking.

Click on the name of your example layer to open it for editing.

![UsingPorpoise_BruceLeeStartPage](images/UsingPorpoise_BruceLeeStartPage.png)

. 
## porPOIse Layer Configuration

The layer configuration holds properties that apply to the entire layer. 

**FOR A DESCRIPTION OF ALL THE PROPERTIES SEE [porPOIse_Reference: Layer Properties](UsingPorPOIse_REF-Layer-POI-Properties.md#-hidden-histories-artists)**

- Feel free to change the **Layer title**, which you will see on screen in the ARpoise app when you open your layer. (Don't forget to click "Save" to save your changes!) It is displayed on a rather short white background in the top center of the screen.
- Otherwise please leave these properties at the default values [(as described in the layer configuration reference)](UsingPorPOIse_REF-Layer-POI-Properties.md#-hidden-histories-artists), or discuss with the admin before you change them. 

Beneath the properties menu is a list of all the POIs that make up the AR experience of your layer. If you want to create a completely new POI, you add it with the New POI link - more about this later.

**For now however, let's modify our existing POIs:**

- Select the **StripesCube** POI.
- Then go to the next section, where you will change the POI's properties.

. 
![UsingPorpoise_ExampleLayer_POIlist](images/UsingPorpoise_ExampleLayer_POI-list.png)

. 
## porPOIse POI Configuration

We will now practice changing the configuration of the POIs, and view the layer in the ARpoise app to see what effect they have. 

**FOR A DESCRIPTION OF ALL THE POI PROPERTIES see [porPOIse_Reference: POI Configuration](UsingPorPOIse_REF-Layer-POI-Properties.md#porpoise-poi-configuration)**

. 
![UsingPorpoise_StripesCubePOI_800w](images/UsingPorpoise_StripesCubePOI_800w.png)

### Location properties of POI:

There are two ways you can place POIs in the real world:

- **Lat/Lon fields:** This uses an "absolute" location, theoretically at a fixed GPS position, but the inaccuracy of GPS means that this can vary from time to time. It does two things:
  - The ARpoise server looks at this value + the "Visibility in meters" value (see below) to decide whether or not it should even show this POI to you. If you are standing in Japantown and the GPS value here + Visibility means the POI is in Cupertino, it is too far away to be seen and the app will not show it to you at all.
  - Once the server decides you should be able to see the POI, it compares this value to the GPS value at which you are standing to figure out how large the POI should be, and in what direction (but be warned, both can be inaccurate.)

- **Relative location (x,y,z):** 
  - This is relative to where the viewer is standing, and **overrules the Lat/Lon** (unless you put it too far away from the GPS position of the layer, in which case ARpoise will not be able to see it at all!) 
  - If you use Relative location, the assets will always be at the same distance from the user. (Note that the orientation around the user can change - the technology has no real control over this).
- With Relative location, **if the viewer goes for a walk with the ARpoise app on, the POIs go with them!** The viewer has to refresh or restart the app to have the locations and availablity of the layer updated to their changed location.

**NOTE:** We have placed all the POIs in the ExampleLayer using Relative location, so that you are certain to see them. In Japantown, since the layers are often located very, very close together, [Brush the Sky](http://tamikothiel.com/brushthesky/PR/BrushTheSky_AR-tourSanJoseJapantown.pdf) also uses Relative location to put the augments directly around you, and relies on you to select the correct layer for where you are standing.

### POI location: change these values **one after another**, testing in between:

If you want more information on the properties, see the [porPOIse_Reference: POI Configuration](UsingPorPOIse_REF-Layer-POI-Properties.md#porpoise-poi-configuration).

NOTES: 
- If you can't find the StripesCube after changing values, change them back to the values in the image above, and try again!
- Solid forms in computer graphics have outsides but no insides! If you make the cube so big that you are inside it, you will not see it anymore, as it is invisible from the inside!
- **Save the changes in porPOIse, then close and restart the ARpoise app** to see the changes you have made in your layer.

#### EXERCISES:

1. **Relative location:** 
   - You yourself (or rather your smartphone) are at 0,0,0. 
   - The x value is side to side, y is + up/- down, z is closer/further away.

2. **Google Map:** *After* testing your changes in Relative location, now delete the Relative location completely.
   - Your layer will now be placed using the absolute location in the Lat/Lon fields. 
   - Change them by clicking and dragging on the marker. 
   - Note that when you mouse over the marker, a pop up window tells you the name of the POI, and that as you drag the marker, the Lat/Lon values in the form change too. 
   - In porPOIse, click **Back to your ExampleLayer page:** the Google Map on that page will be the same as  the StripesCube, because the first POI in the list defines what is shown on that map.
   - Zoom out a bit and you should see two markers now. Before, they were all on top of each other.
   - Drag the markers around and note that the Lat and Lon in the POI list change as you drag. If you reposition a POI here, you MUST click Save for that POI, otherwise the change will be lost.
   - Remember however if you moved the marker of another POI that had a Relative location set, that overrules the Lat/Lon and it will not have changed in the ARpoise app!

3. **Relative altitude:** 
   - This only works if you are using absolute location as well, otherwise it is overruled by the y value in Relative location.   
   - Zero is at wherever your smartphone is - usually at your eye level! 
   - Plus values are above and minus values are below eye level.

#### EXERCISE: Change other properties:

1. **Prefab:** This is the name of the asset used in this POI. 
   - Try replacing this Prefab name with one from another POIs. You will then have two of the same color, but of course one will have the properties of this POI.
   - To avoid confusion, please replace the StripesCube Prefab name (and Save!) before you go on to the other properties.

2. **Scaling factor:** try 0.5 and then try 2.

3. **Vertical rotation:** try 30° (since they are cubes, 90° and 180° will look the same!)

4. **Animation properties:** 
   - Read the properties description at [porPOIse_Reference: POI Configuration](UsingPorPOIse_REF-Layer-POI-Properties.md#porpoise-poi-configuration) and play around with the animation values.
   - Sound: Right now there is no audio file in the example asset bundle, but you add one when you create your own asset bundle, it is treated as a Prefab just like any other asset. If it is including in a POI that has an animation, it will start when the first animation starts. More on this later.

5. **Add Animation to a static POI:** Once you understand the animation properties, select a different POI, click **New animation** and fill out the fields to animate it as well.

**Remember to Save / close ARpoise app / restart ARpoise app after every change!**

. 
## Create a new POI

Now create a new POI, reusing a Prefab name from one of the POIs.

1. Go **Back to the ExampleLayer.**
2. Click the **New POI** link above the POI list.
3. In the next screen, ignore the warning and click **Create.**

. 
![UsingPorpoise_NewPOI-Create](images/UsingPorpoise_NewPOI-Create.png)

. 
A new, blank POI will be created at the end of the list.

. 

![UsingPorpoise_notitle](images/UsingPorpoise_notitle.png)

. 
1. Leave the Title at **notitle** for now.

2. Move the POI to the same GPS as the other POIs, otherwise it will not be visible:
   - Click on the Lat field of the POI above it, copy the entire value and paste into the empty Lat field.
   - Repeat for the Lon. **Click Save**
  
3. Now click on **notitle** ...

. 
![UsingPorpoise_NewPOI-properties](images/UsingPorpoise_NewPOI-properties.png)

**Enter the required values for your new POI:**

1. **URL for asset bundle** must be exactly the same as in the other POIs: 
   - ```hiddenhistoriesjtown.org/artists/ExampleArtist/AssetBundles/hh_examples.ace```
   - (NOTE there is NO https://)
   - ... but **replace "ExampleArtist" with your own porPOIse account name.**
   
2. **Prefab name:** choose one of the names from one of the other POIs.

3. Play around with its properties, placing it where there are no other POIs - otherwise you might not see it! 

. 

## Review of how ARpoise positions layers and POIs

The **GPS Latitute and Longitude positions** and the **Visibility in meters** are REQUIRED for ALL geolocative layers and POIs, whether they use an absolute GPS position, or Relative position with respect to the user. 

**These properties are used by ARpoise in two steps:**

1. Where is the user standing? Is there anything near them to show to the user at all?

2. IF (and only if) there is something to see nearby, then the ARpoise system goes into the details needed for each case: where is it exactly, does it use absolute or relative position, etc.?

In the **ARpoiseDirectory,** the **admin** sets for each layer:

- The "Lat/Lon" GPS position that is the **center** for that layer.

- The "Visibility in meters," that defines an **area around this center.** If the user is not standing in this area, they will not see the layer in the list of the ARpoise app.

- For Hidden Histories, the visibility range is set at 200 Meters from the layer center position. This is only about half a block, so in Japantown you don‘t get confused by seeing too many layers in the list all at once.


The **artist** then defines in **porPOIse**:

- **At the layer level:** the "Visibility in meters" for the **POIs in that layer**. This we suggest leaving at 1500 meters, about a mile, so that it can be found even if the GPS signal is way off.

- **At the POI level** (for both absolute and relative positioning):

  - The GPS and "Visibility in meters" **for that specific POI.** This we also suggest leaving at 1500 meters, about a mile, so that it can be found even if the GPS signal is way off.

  - Even if the artist then decides to use "Relative location (x,y,z)" the ARpoise server stills needs the POIs GPS position to decide whether or not to show the POI at all. (If it is close enough to be shown, it is then shown at the relative position, not the GPS position.)

- So if for instance the artist lives in Oakland and wants to move their POIs to Japantown, they have to ask the admin to move the entire layer to Japantown first. Otherwise, ARpoise thinks:
  - The layer is in Oakland.
  - The POIs are all in Japantown.
  - Japantown is over 200 meters away from Oakland, so I won't show anything at all!

.

## Next Steps

### Creating new content for your layers:

- Unity tutorials: UNDER CONSTRUCTION

- [**Creating AssetBundles for porPOIse**](CreatingAssetBundles.md) tutorial:
  - If you already know how to use create assets (3D models, images, sounds etc.) and how to use the Unity Editor, go through this tutorial to create your own AssetBundle.
  - You will need to use a Mac to make the iOS AssetBundle, and an iOS smartphone to test it.
  - You will need a Windows PC to make the Android AssetBundle, and an Android smartphone to test it.
  - If you only have one type of PC, you will need to send your assets to the admin or team up with another artist to get the other asset bundle.

. 
## Original Documentation - ONLY to set up your own porPOIse!!!

===PorPOISe for Layar===
Portable Point-of-Interest Server for Layar

===Administrative contact===
Jens de Smit, jens@layar.com

===Introduction===
PorPOISe is a server for Layar clients. It converts your data sets of POIs
(Points of Interest) into responses to the Layar client. Things like JSON
formatting and distance calculation are all done for you. PorPOISe supports
XML files as data stores.

===Getting started===
Read INSTALL for installation instructions. Once properly installed, you can
use the dashboard to create your first POIs. The interface is pretty spartan
but this will generate correct output format. Study the format if you intend to
generate your own XML files.

From here on you're on your own. Build a better interface for the dashboard or
expand PorPOISe to have more features if you need more.

===History===
PorPOISe originated at SURFnet in 2009 as a spin-off from a small layer-
building experiment. Over 2010 functionality expanded and feature support
grew with Layar's feature support. In 2011, PorPOISe's primary author moved
from SURFnet to Layar and took the project with him.

===More information===
  * http://www.surfnet.nl/en The home of the creator of PorPOISe
  * http://teknograd.wordpress.com/2009/10/19/augmented-reality-create-your-own-layar-layer/ An explanation on how to build the most minimal of Layar servers. Very useful to get started
  * http://layar.com/ is, of course, the reason this project exists
  
