![Hidden Histories Logo](images/hiddenhistories-logo.png)
# Hidden Histories
# ARpoise PorPOISe User Interface tutorial

## Overview


In this tutorial learn how to use porPOIse with your own AR **layers** to place and adjust the **POI**s making up the AR experience.

- **Layer:** An ARpoise "layer" is an individual AR experience or project. A single location in the real world can have multiple layers at exactly the same site, each of them a separate AR experience. When you stand at that site, the ARpoise app will show you a list of layers available for you there.

- **POI:** A "POI" (Point Of Interest) is an asset or a group of assets (such as 3D models, images, sounds etc.), that all together make up your AR experience.

### Workflow (see below for details on how to do all of this!):

Initial work at home:

- Due to the coronavirus lockdown, we have positioned your layers **at your home,** so you can do the main work of **setting up, modifying and testing** your layer in porPOIse at home on your PC. 

- Once you understand this tutorial on how to use porPOIse to set up and modify your layer, go to the [**Next Steps**](#next-steps) section at the bottom of this page. to learn how to add new **assets** (2d images, 3D models, sounds, etc.) to your layer.

Refining your layers once they are moved to Japantown:

- When your layer is ready for testing, both you and the admin will need to move it to the desired position: first they have to change the position in the ARpoise directory registry, and then you need to change the position in your own porPOIse account. 

- Once your layer is positioned in Japantown, you can still change and test it from home using [remote testing with Fixed Location](UsingARpoiseApp.md#remote-viewing-arpoises-fixed-position-feature). You should have already learned this in the [Using ARpoise App: Remote Viewing with Fixed Position](UsingARpoiseApp.md#remote-viewing-arpoises-fixed-position-feature) tutorial.

- For the real testing, **go to the site** where your layer is positioned and view it on your smartphone. (If you have been using Fixed Position to test from home, don't forget to **unclick** it first!). 

- But **before you leave your house, make sure you can access your porPOIse account on your smartphone!** Then you can make changes on site. Remember to save the changes, then **close and reopen the ARpoise app** in order to immediately see the effects of the changes in your layer.

. 
## porPOIse Layers List

Log in  to your porPOIse account. The URL to access it has the form below, but replace ExampleArtist with the porPOIse account name that the admin created for you. (no blanks!):

https://hiddenhistoriesjtown.org/artists/ExampleArtist/php/web/dashboard/

When you log in to your porPOIse account, you will see a list of the layers that the Hidden Histories admin has set up for you. (If you ever need more layers, please ask your admin to add them for you.) Here we  use the fictitous artist Bruce Lee for the example images. Your own pages will show your assigned nickname.

- The **ExampleLayer** is meant as a test layer where you can play around and try out new features. 
- The **ArtistLayer** is where you should slowly build up the final artwork, as you find assets and functionality to your liking.

Click on the name of your example layer to open it for editing.

![UsingPorpoise_BruceLeeStartPage](images/UsingPorpoise_BruceLeeStartPage.png)

. 
## porPOIse Layer Configuration

The layer configuration holds properties that apply to the entire layer. 

**FOR A DESCRIPTION OF ALL THE PROPERTIES SEE [porPOIse_Reference: Layer Properties](UsingPorPOIse_REF-Layer-POI-Properties#porpoise-layer-configuration)**

- Feel free to change the **Layer title**, which is shown in the ARpoise app (don't forget to click "Save" to save your changes!) It is displayed by the ARpoise app on a white background in the top center of the screen. The white background is very short however!
- Otherwise please leave these properties at the default values, or discuss with the admin before you change them. 
- Scroll down to read explanations of all the properties.

Beneath the properties menu is a list of all the POIs that make up the AR experience of your layer. If you have created new assets for a completely new POI, you add it with the New POI link.

**For now however, let's modify our existing POIs:**

- Select the **StripesCube** POI.
- Then skip to the next section [porPOIse POI Configuration](UsingPorPOIse.md#porpoise-poi-configuration), where you will change its properties.

. 
![UsingPorpoise_ExampleLayer_POIlist](images/UsingPorpoise_ExampleLayer_POI-list.png)

### Explanation:

**Layer configuration:**

* **Layer title**: The layer title is optional (default is no title). If given, the title is displayed by the ARpoise app on a white background in the top center of the screen. The white background is very short, so keep your layer title short as well.
* **Refresh interval**: The refresh interval is optional (default is no refresh). If given, it defines the seconds after which the ARpoise app will update the layer. NOTE: when you make a change in your layer with porPOIse, you MUST force close the ARpoise app completely by [swiping it out of the recent apps list](https://support.apple.com/en-us/HT201330) and restart ARpoise. Otherwise the change will not show!
* **Redirect to layer**: Currently not used. The redirection layer is optional (default is no redirect). if given, the layer will redirected to a different layer. 
* **Visibility in meters**: Please leave at 1500. The admin has probably set the visibility of your layer itself in the ARpoise directory to a distance of about 200-250 meters, or about 1/2 block. This value here does not have much of an effect, but if you set it to be small, the ARpoise app might not find it at all.
* **Area size in meters**: Optional, please do not set without conferring with the admin. If the POIs are set at absolute GPS coordinates (see below), this value confines them to a north-south area around the viewer to which the POIs should be constrained if the viewer is walking around. If this is given, and the POIs are given an absolute geo-location in the POI settings, then as the viewer is moving the POIs are automatically reshuffled to fit inside the moving boundaries. If it is not set, the POIs stay at (more or less) at their set positions.
* **Area width in meters**: Optional, please do not set without conferring with the admin. If the POIs are set at absolute GPS coordinates (see below), this value confines them to an east-west area around the viewer to which the POIs should be constrained if the viewer is walking around. If this is given, and the POIs are given an absolute geo-location in the POI settings, then as the viewer is moving the POIs are automatically reshuffled to fit inside the moving boundaries. If it is not set, the POIs stay more or less at their set positions.
* **Show menu button**: Please leave on. This combo box defines whether the ARpoise logo menu button is shown in the app. If the logo menu button is on, the viewer can click on it to get out of a layer and back to the list of available layers, or click twice to enter a Fixed Position when they want to view a layer that is far away from them.
* **Apply Kalman filter**: Currently not used.
* **Is a default layer** Currently not used.
* **No pois message**: Please leave on. This message is shown by the ARpoise app if there are no POIs within the range given by "Visibility in meters."
* **Action: Label**: Currently not used.
* **Action: Show information**: Currently not used.
* **Action: Information message**: Currently not used.
* **Save** button: If you make changes to these properties, you MUST save them!

**Google map box:** (Note: "Find place" field is defunct)

- Each marker represents one POI. 
- Mouse over a marker to see the Title of the POI it represents. Watch out: there may be several on top of each other!
- Click and drag on a marker to change that POI's GPS position in the map. As you drag it, you will see the latitude and longitute (Lat/Lon) of that POI changing in the list as well. 
- Note which POI was changing: if you move a marker, you MUST click **Save** in the POI list next to the POI you have moved, otherwise it will revert to its previous position!
- If you move a marker but still see a marker in that location, there were more than one markers at the exact same locations.


**POIs list:**

* **New POI** link: Click to add a new POI to the layer.
* **Id**: Internal number to identify the POI. 
* **Title**: Name of the POI - click to open the POI and edit its properties. 
* **Lat**: Allows you to change the latitude of the POI. 
* **Lon**: Allows you to change the longitude of the POI. 
* **Save**: Save changes to the POI's location to the layer's xml file.
* **DEL**: Delete the POI from the layer.

. 
## porPOIse POI Configuration

We will now practice changing the configuration of the POIs, and view the layer in the ARpoise app to see what effect they have. Scroll down for a description of the properties in your POI description page.

### Location properties of POI:

There are two ways you can place POIs in the real world:

- **Absolute GPS (Lat/Lon fields):** theoretically this is at a fixed GPS position, but the inaccuracy of GPS means that this can vary from time to time.
- **Relative location (x,y,z):** This is relative to where the viewer is standing, and overrules the Lat/Lon (unless you put it too far away from the GPS position of the layer, in which case ARpoise will not be able to find it at all). If you use relative location, the assets will always be at the same distance from the user. (Note that the orientation around the user can change - we have no control over this).
- With relative location, if the viewer goes for a walk with the ARpoise app on, the POIs go with them! The viewer has to refresh or restart the app to have the locations and availablity of the layer updated to their changed location.

**NOTE:** We have placed all the POIs in the ExampleLayer using Relative location, so that you are certain to see them. In Japantown, since the layers are often located very, very close together, [Brush the Sky](http://tamikothiel.com/brushthesky/PR/BrushTheSky_AR-tourSanJoseJapantown.pdf) also uses Relative location to put the augments directly around you, and relies on you to select the correct layer for where you are standing.

#### EXERCISE POI location: change the following values **one after another**, testing in between:

See the properties description below. If you can't find the StripesCube after changing values, change them back to as depicted in the image below, and try again.

Note: Solid forms have outsides but no insides: if you make the cube so big that you are inside it, you will not see it anymore!

- **Relative location:** you yourself (or rather your smartphone) are at 0,0,0. The x value is side to side, y is + up/- down, z is closer/further away.
- **Google Map:** After testing your changes, delete the Relative location completely - your layer will now be placed using the absolute location in the Lat/Lon fields. Change them by clicking and dragging on the marker. Note that when you mouse over the marker, a pop up window tells you the name of the POI, and that as you drag the marker, the Lat/Lon values in the form change too. 
- **Save, close and restart ARpoise app** and view your layer. If you moved it too far away, it might be invisible!
- In porPOIse, click **Back to your ExampleLayer page:** the Google Map on that page will be the same as  the StripesCube, because the first POI in the list defines what is shown on that map.
- Zoom out a bit and you should see two markers now. Before, they were all on top of each other.
- Drag the markers around and note that the Lat and Lon in the POI list change as you drag. If you reposition a POI here, you MUST click Save for that POI, otherwise the change will be lost.
- Remember however if you moved the marker of another POI that had a Relative location set, that overrules the Lat/Lon and it will not have changed in the ARpoise app!
- **Relative altitude:** This only works if you are using absolute location as well, otherwise it is overruled by the y value in Relative location. Zero is at wherever your smartphone is - usually at your eye level! Plus values are above and minus values are below eye level.

#### EXERCISE: Change other properties:
- **Scaling factor:** try 0.5 and then try 2.
- **Vertical rotation:** try 30° (since they are cubes, 90° and 180° will look the same!)
- **Animation properties:** read the properties list below!
- **Add Animation to a static POI:** Once you understand the animation properties, select a different POI, click **New animation** and fill out the fields to animate it as well.

**Save / close ARpoise app / restart ARpoise app** after every change!

**NEXT EXERCISE:** When you feel comfortable with these exercises, go to the [Create a NEW POI] section.

. 

![UsingPorpoise_StripesCubePOI_800w](images/UsingPorpoise_StripesCubePOI_800w.png)

### Explanation:
You can edit the following properties of a POI:
* **Title**: Give the POI a title that helps you identify it in the layer's POI list.
* **Lat/Lon**: You can change the absolute latitude and longitude of the POI here, or click and drag the POI's marker in the Google Map. Notice that mousing over the marker shows you its name in a pop-up window.
* **Is visible**: This combo box defines whether the POI is visible. This will be useful when many people are testing their apps close together in Japantown! 
* **Absolute altitude**: Doesn't really work. It should set the absolute altitude of the POI in meters above sea level, but smartphone GPS does not give good altitude values. This will be overruled anyway if Relative location is set.
* **Relative altitude**: Sets the absolute altitude of the POI relative to the viewer's device. Use this if you are using absolute latitude and longitude. It is overruled if you use Relative locatino.
* **URL of asset bundle**: The assets that make up the POI will be taken from the Unity asset bundle at this web location. It needs to have the form:  **hiddenhistoriesjtown.org/artists/ExampleArtist/AssetBundles/hh_examples.ace,** where "ExampleArtist" is replaced with your porPOIse account name and "hh_examples.ace" is replaced with the name of your asset bundle. (Note: NO "http://" please! Please see the tutorial [Creating AssetBundles](CreatingAssetBundles.md) for more information.
* **Prefab name**: The POI's assets are loaded from the asset bundle with this prefab name. Please see the tutorial [Creating AssetBundles](CreatingAssetBundles.md) for more information.
* **Layer name**: If this value is set, the entire layer will be loaded instead of the POI.
* **Relative location**: The location of the POI relative to the user's device. Comma separated list of the X-east-west, Y-up-down, Z-north-south values. These values override the Lat/Lon values and the Absolute altitude and Relative altitude values. See above for description of how these work.
* **Scaling factor**: This value scales the POI's geometry in all three dimensions.
* **Vertical rotation**: This value allows you to rotate the POI's geometry around the vertical Y axis.
* **Relative angle**: If this value is set to Yes, the POI's geometry will always be turned so that the front side always faces the user. Useful if you have images that should always face the viewer, no matter where they are.

**Image trigger properties (for use with AR-vos only):**

* **URL for trigger image:** Used only in AR-vos app. To be described later.
* **Width of trigger image:** Used only in AR-vos app. To be described later.

* **New action:** Currently not in use.

**Animation properties**
There can be multiple animations simultaneously, for instance you can scale the POI while rotate it as well.

**NOTE: Sound:** An audio file can be a Prefab by itself, or be part of a large Prefab. In either case, the POI should have an animation node. When the animation plays, the audio file will play as well.

* **New animation:** Create a new animation.
* **Remove:** Delete the animtion from the POI.

* **Name**: The name is optional. If you have multiple animations and this one should be executed when another animation finishes, enter this name in the **Followed by** field of the preceding animation.
* **Event**: 
  * **onCreate** - the animation is started when the POI is loaded;
  * **onFollow** - the animation is started when its predecessor animation ends. Its name must be entered in the **Followed by** field fo the preceding animation.
  * **onClick** - the animation is started when the POI is clicked by the user. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  * **onFocus** - the animation is started when the viewer focuses (centers) the POI in the middle of the aRpoise app screen. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  * **inFocus** - the animation starts when the POI is centered in the ARpoise display and stops once the POI loses focus. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  
* **Type**: **rotate**, **transform**, **scale**.
* **Length**: Length of the animation in seconds.
* **Delay**: Delay of the animation in seconds. onCreate-animations will only start after this delay.
* **Interpolation**:
  * **linear** - the value changes linearly from **From** to **To**;
  * **cyclic** - the value changes linearly from **From** to **To** and then back to **From**;
  * **sine** - the value swings between **From** and **To** like a pendulum;
  * **halfsine** - the value is changed from **From** to **To** and then back to **From,** but with a slowdown before changing.
* **Persist**:
  * **Yes** - at the end of the animation the POI will remain at the final value of the animation;
  * **No** - at the end of the animation the POI will snap back to its original state.
* **Repeat**:
  * **Yes** - the animation is repeated forever;
  * **No** - the animation is only run once.
* **From**: Start value of the animation.
* **To**: End or middle value of the animation, depending on the **Interpolation**.
* **Axis (x,y,z)**: Axis to apply the animation to, e.g.: A rotation with Axis 1,0,0 is only around the X axis.
* **Followed by**: If one or more comma separated animation names are given in this field, the animations mentioned are started once this animation ends. Animation names are global for all POIs of a layer. So the end of an animation of one POI can start an animation of the same POI or of another POI.

NOTE: If an animation is started and the Unity Prefab of the POI contains an AudioSource component, the audio source is played.

* **Save** button: Saves any changes you made to the POI properties. NOTE: to see the changes in your layer, you MUST close the ARpoise app and restart it!

. 
## Create a new POI

Now create a new POI, reusing one of the assets from the example asset bundle.

- Go **Back to the ExampleLayer.**
- Click the **New POI** link above the POI list.
- In the next screen, ignore the warning and click **Create.**

. 
![UsingPorpoise_NewPOI-Create](images/UsingPorpoise_NewPOI-Create.png)

. 
- A new, blank POI will be created at the end of the list.

. 

![UsingPorpoise_notitle](images/UsingPorpoise_notitle.png)

- Leave the Title at **notitle** for now.
- Move the POI to the same GPS as the other POIs, otherwise it will not be visible:
  - Click on the Lat field of the POI above it, copy the entire value and paste into the empty Lat field.
  - Repeat for the Lon. **Click Save**
  
Now click on **notitle** ...

. 
![UsingPorpoise_NewPOI-properties](images/UsingPorpoise_NewPOI-properties.png)

**Required value for your new POI:**

- **URL for asset bundle** must be exactly the same as in the other POIs.
- **Prefab name:** choose one of the names from one of the other POIs.
- Otherwise play around with the properties, placing it where there is no other POIs - otherwise you might not see it! 


## Next Steps

### Creating new content for your layers:

- Unity tutorials: UNDER CONSTRUCTION

- [**Creating AssetBundles for porPOIse**](CreatingAssetBundles.md) tutorial:
  - If you already know how to use create assets and use the Unity Editor, go through this tutorial to create your own AssetBundle.
  - You will need to use a Mac to make the iOS AssetBundle, and an iOS smartphone to test it.
  - You will need a Windows PC to make the Android AssetBundle, and an Android smartphone to test it.
  - If you only have one type of PC, you will need to send your assets to the admin or team up with another artist to get the other asset bundle.

. 
## Original Documentation - ONLY if you want to set up your own porPOIse!!!

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
  
