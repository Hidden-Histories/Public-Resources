![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories
# --ARpoise PorPOISe User Interface--

## Overview


In this tutorial learn how to work with your own AR **layers** to place and adjust the **POI**s making up the AR experience.
- Each individual AR experience or project exists on a separate ARpoise **layer.** In the ARpoise app, a single location in the real world can have multiple projects at exactly the same site, but if each one is in a separate layer, they will not interfere with each other and will show up in the ARpoise app as separate entries in a list of available projects.
- A **POI** (Point Of Interest) is an asset or a group of assets (such as 3D models, sounds etc.), that make up your AR experience.
- If you are standing at the location where your layer is positioned, you can then immediately reopen the **ARpoise app** and you will see the changes in your AR experience.
- Once you understand how to use porPOIse to set up and modify your layer, go to the [**Next Steps**](#next-steps) section at the bottom of this page. to learn how to add new **assets** (2d images, 3D models, sounds, etc.) to your layer.

. 
## porPOIse Layers List

When you log in to your porPOIse account, you will see a list of the layers that the Hidden Histories admin has set up for you. (If you want more layers, please ask your admin to add them for you.)

Click on the name of your test or example layer to open it for editing.

![ExampleArtistStartPage_porPOIse](/images/ExampleArtistStartPage_porPOIse.png)

. 
## porPOIse Layer Configuration

The layer configuration holds properties that apply to the entire layer. 
- Feel free to change the **Layer title**, which is shown in the ARpoise app (click "Save" to save your changes). 
- Otherwise we recommend leaving these properties at the default values, or discussing with the admin before you change them.

Beneath the properties menu is a list of all the POIs that make up the AR experience of your layer, and a **New POI** link with which you can add new POIs to the layer.

![ExampleArtist-ExampleLayer_POIlist](/images/ExampleArtist-ExampleLayer_POIlist.png)

### Explanation:

**Layer configuration:**

* **Layer title**: The layer title is optional (default is no title). If given, the title is displayed by the ARpoise app in the top center of the screen.
* **Refresh interval**: The refresh interval is optional (default is no refresh). If given, it defines the seconds after which the ARpoise app will update the layer. (Mostly useful if a developer changes the POIs via code.)
* **Redirect to layer**: The redirection layer is optional (default is no redirect). if given, the layer will redirected to a different layer. Currently not used.
* **Visibility in meters**: The layer is visible only if a viewer is standing within this distance of the GPS position of one of the POIs. The maximum distance is 1500m = 1.5 kilometers 0 ~ 5000 feet, or almost a mile. (1 meter ~ 3 feet.) NOTE: Please discuss with the admin where you want the layer to appear, as they also need to set a GPS position and visibility range for your layer in an ARpoise directory. If your POIs are outside of the area set by the admin for your layer, they might not be visible. If you want the viewer to only see your layer when they are close to the actual location, you can set a smaller range in the POI configuration discussed below.
* **Area size in meters**: Optional north-south bounds around the viewer in which the POIs should be constrained if the viewer is moving. If this is given, and the POIs are given an absolute geo-location in the POI settings, then as the viewer is moving the POIs are automatically reshuffled to fit inside the moving boundaries. If it is not set, the POIs stay at their set positions.
* **Area width in meters**: Optional east-west bounds around the viewer in which the POIs should be constrained if the viewer is moving. If this is given, and the POIs are given an absolute geo-location in the POI settings, then as the viewer is moving the POIs are automatically reshuffled to fit inside the moving boundaries. If it is not set, the POIs stay at their set positions.
* **Show menu button**: This combo box defines whether the ARpoise logo menu button is shown in the app. If the logo menu button is on, the viewer can click on it to get out of a layer and back to the list of available layers, or click twice to enter a Fixed Position when they want to view a layer that is far away from them.
* **Apply Kalman filter**: Currently not used.
* **Is a default layer** Currently not used.
* **No pois message**: This message is shown by the ARpoise app if there are no POIs within the range given by "Visibility in meters."
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

## ARpoise Back-End POI Configuration
### Screen Shot:
![BackEndImg3](/images/BackEnd3.png)
### Explanation:
You can edit the following properties of a POI:
* **Title**: The title is optional, it is not used by the client application.
* **Lat/Lon**: Allows to change the latitude and longitude of the POI. The POI's location can also be changed by dragging the POI's marker in the placement map.
* **Is visible**: This combo box defines whether the POI is visible.
* **Absolute altitude**: Allows to set the absolute altitude of the POI.
* **Relative altitude**: Allows to set the altitude of the POI relative to the user's device.
* **URL of asset bundle**: The POI's geometry will be taken from a Unity asset bundle downloaded from this web location. One thing we found is, asset bundles created for either Android or iOS do not work on the "other" platform.
Therefore you need to provide **two** asset bundles, one for Android and one for iOS.
As you can only enter one asset bundle url in the ARpoise PorPOISe configuration, 
ARpoise assumes that the asset bundle name given is the one of the Android asset bundle.
The name of the iOS asset bundle has to be the Android name followed by 'i'.
* **Prefab name**: The POI's geometry is loaded from the asset bundle with this prefab name.
* **Layer name**: If this value is set, the entire layer will be loaded instead of the POI.
* **Relative location**: The location of the POI relative to the user's device. Comma separated list of the X-east-west, Y-up-down, Z-north-south values.
* **Scaling factor**: This values allows to scale the POI's geometry in all three dimensions.
* **Vertical rotation**: This values allows to rotate the POI's geometry around the Y axis.
* **Relative angle**: If this value is set to Yes, the POI's geometry will always be turned so that the same side always faces the user.
* Animation-list-**Remove**: Delete the animtion from the POI.
* **New animation** button: Allows to add a new animation to the POI.
* **Save** button: Saves the POI's attributes to the layer's xml file.

The following properties of an animation can be edited:
* **Name**: The name is optional, it is used when one animation specifies that it should be followed by other animations.
* **Event**: 
  * **onCreate** - the animation is started when the POI is loaded;
  * **onFollow** - the animation is started when it's predecessor animation ends.
  * **onClick** - the animation is started when the POI is clicked by the user; In order for the **onClick**, **onFocus**, and **inFocus** animations to work, the POI's Unity game object needs to include a Collider component.
  * **onFocus** - the animation is started when the POI is looked at by the user;
  * **inFocus** - the animation is started when the POI is looked at by the user and is stopped once the POI loses the focus;
  
* **Type**: **rotate**, **transform**, **scale**.
* **Length**: Length of the animation in seconds.
* **Delay**: Delay of the animation in seconds, onCreate-animations will only start after this delay.
* **Interpolation**:
  * **linear** - the value is changed linearly from **From** to **To**;
  * **cyclic** - the value is changed linearly from **From** to **To** and then back to **From**;
  * **sine** - the value swings between **From** and **To** like a pendulum;
  * **halfsine** - the value is changed from **From** to **To** and then back to **From**.
* **Persist**:
  * **Yes** - at the end of the animation the POI will stay as the animation leaves it;
  * **No** - at the end of the animation the POI will snap back to its original state.
* **Repeat**:
  * **Yes** - the animation is repeated forever;
  * **No** - the animation is only run once.
* **From**: Start value of the animation.
* **To**: End or middle value of the animation, depending on the **Interpolation**.
* **Axis (x,y,z)**: Axis to apply the animation to. E.g.: A rotation with Axis 1,0,0 is only around the X axis.
* **Followed by**: If one or more comma separated animation names are given in this field. The animations mentioned are started once this animation ends. Animation names are global for all POIs of a layer. So the end of an animation of one POI can start an animation of the same POI or of another POI.

If an animation is started and the Unity-prefab of the POI contains an AudioSource component, the audio source is played.

## Next Steps

- See our tutorial on creating AssetBundles for porPOIse here: https://github.com/ARPOISE/ARpoise/blob/master/documentation/CreatingAssetBundles.md

NOTES: (This should be moved to the AssetBundle tutorial):
- The content of each of the **POI**s of your layer needs to be created as a Unity prefab and needs to be put into an Unity asset bundle made available on the web. The asset bundle is referenced by the **POI**'s definition in your layer.
- One thing we found is that asset bundles created for Android do not work on iOS and vice versa. Therefore you need to provide **two** asset bundles, one for Android and one for iOS. As you can only enter one asset bundle url in the ARpoise PorPOISe configuration of any POI, ARpoise assumes that the asset bundle name given is the one of the Android asset bundle. The name of the iOS asset bundle has to be the Android name followed by the letter 'i'. 
- Thus if the file name in the url of your Android asset bundle is, e.g. ".../MyAssetBundle", you also need to create and make available the iOS asset bundle with the url ".../MyAssetBundlei". 
- **Note: you HAVE to make assets for both Android and iOS, otherwise your layer will not work!**
- **Note: The asset bundles and trigger images you make available on the web and reference in the POI definitions need to be accessable via https**.

## Original Documentation

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
  
