# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# PorPOISe Reference: Layer and POI Properties
<< Go back to [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

For the tutorial on how to use these settings to edit your layers, please see the [ARpoise PorPOISe User Interface tutorial](UsingPorPOIse.md)

. 
## porPOIse Layer Configuration

.  
![UsingPorpoise_ExampleLayer_POIlist](./images/UsingPorpoise_ExampleLayer_POI-list.png)

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

. 

![UsingPorpoise_StripesCubePOI_800w](images/UsingPorpoise_StripesCubePOI_800w.png)

### Explanation:
You can edit the following properties of a POI:
* **Title**: Give the POI a title that helps you identify it in the layer's POI list.
* **Lat/Lon**: You can change the absolute latitude and longitude of the POI here, or click and drag the POI's marker in the Google Map. Notice that mousing over the marker shows you its name in a pop-up window.
* **Is visible**: This combo box defines whether the POI is visible. If you have a lot of POIs and want to turn off some of them to make it easier to work on the others. Just remember to turn it back on!
* **Absolute altitude**: Doesn't really work. It should set the absolute altitude of the POI in meters above sea level, but smartphone GPS does not give good altitude values. This will be overruled anyway if Relative location is set.
* **Relative altitude**: Sets the absolute altitude of the POI relative to the viewer's device. Use this if you are using absolute latitude and longitude. It is overruled if you use Relative location.
* **URL of asset bundle**: The assets that make up the POI will be taken from the Unity asset bundle at this web location. It needs to have the form:  **hiddenhistoriesjtown.org/artists/ExampleArtist/AssetBundles/hh_examples.ace,** where "ExampleArtist" is replaced with your porPOIse account name and "hh_examples.ace" is replaced with the name of your asset bundle. (Note: NO "http://" please!) Please see the tutorial [Creating AssetBundles](CreatingAssetBundles.md) for more information.
* **Prefab name**: The POI's assets are loaded from the asset bundle with this prefab name. Please see the tutorial [Creating AssetBundles](CreatingAssetBundles.md) for more information. 
  * Tip: if you've forgotten the names of the prefabs in your asset bundle, you can view its manifest file simply by pasting the name of the asset bundle into a web brower and **replacing .ace with .manifest**
  * **NOTE: Sound:** An audio file can be a prefab by itself, or be packaged together with other assets, such as a 3D model, as part of a larger prefab. If the sound file should play as soon as the POI is loaded, no other settings are needed. If the sound should play after a delay, or as the result of a user interaction, the POI needs an animation node (see below).
* **Layer name**: If you type in a valid layer name here, that entire layer will be show in addition to the prefab you specified above. That layer will also be subject to the settings of this POI (GPS location, scale, animations, etc.) This enables you to create more complex POIs more easily. (Tutorial under construction.)
* **Relative location**: The location of the POI relative to your body. This is a comma separated list of the x =east-west, y = up-down, z = north-south values. 
  * Your body's position is at 0,0,0 with y=0 being your eye level. 
  * **These values override the Lat/Lon values and the Absolute altitude and Relative altitude values.** 
  * Note however that although the distance from your body is stable, and the distance and orientation of POIs in a layer are stabel *with respect to each other*, the orientation of all the POIs with respect to the cardinal directions is *not* stable. They will rotate around you so that for instance a POI you place at 0,0,5 which should be 5 meters due north of you could be anywhere in a circle of 5 meters radius around you.
* **Scaling factor**: This value scales the POI's geometry in all three dimensions.
* **Vertical rotation**: This value allows you to rotate the POI's geometry around the vertical Y axis.
* **Relative angle**: If this value is set to Yes, the POI's geometry will always be turned so that the front side always faces the user. Useful if you have images that should always face the viewer, no matter where they are.

**Image trigger properties (for use with AR-vos only):** tutorial under construction
* **URL for trigger image:** Used only in AR-vos app. This is the web address of your trigger image in your porPOIse account. 
  * If the **URL of a trigger image file** is entered into this field, the POI will be treated as an image trigger POI. The POI will be shown once the trigger image is detected in the display of the smartphone. 
  * If the URL contains only the word **SLAM**, the POI is treated as SLAM object and will be shown once the user taps on a vertical or horizontal plane detected in the enviroment.
* **Width of trigger image:** Used only in AR-vos app, if a trigger image is entered above. This is the approximate width of your trigger image in real life (e.g. a flyer is roughly 0.2 meters = 8.5" wide, a doorway might be 1 meter = 3 feet wide, a house facade might be 10 meters = 30 feet wide.)

* **New action:** Currently not in use.

#### **Animation properties**
There can be multiple animations simultaneously, for instance you can scale the POI while rotating it as well.

**NOTE: Sound:** If the prefab contains an audio file can be a Prefab by itself, or be packaged together with other assets, such as a 3D model, as part of a larger Prefab. In either case, the POI should have an animation node. When the animation plays, the audio file will play as well.

* **New animation:** Create a new animation.
* **Remove:** Delete the animtion from the POI.

* **Name**: The name is only needed for a chained series of animations, e.g. when one animation finishes, a following animation should start. The following animation needs to have a name, which you then enter in the **Followed by** field of the preceding animation. **The named following animations can be in other POIs in the same layer!"**

![ChainedAnimations](images/UsingPorpoise_ChainedAnimations.PNG)
  
* **Event**: 
  * **onCreate** - the animation is started when the POI is loaded;
  * **onFollow** - This is for chains of animations - when the preceeding animation is finished, the following animation will start. 1) Give your following animation a name in its **Name** field. 2) Then enter the name of this following animation in the **Followed by** field of your preceeding animation. 
  * **onClick** - the animation is started when the POI is clicked by the user. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  * **onFocus** - the animation is started when the viewer focuses (centers) the POI in the middle of the aRpoise app screen. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  * **inFocus** - the animation starts when the POI is centered in the ARpoise display and stops once the POI loses focus. NOTE: In order for this to work, the POI's Unity GameObject needs to include a Collider component (see Unity tutorials).
  
* **Type**: 
  * **rotate**, rotate the POI around an axis.
  * **transform**, transform the POI to another location.
  * **scale**, scale the size of the POI.
  * **fade**, fade the POI between full visibility and invisibility, e.g. the animation shown below fades a POI within 10 seconds from 1 (full visibility) to 0 (invisible) and back again.
  * **destroy**, delete the POI entirely. Don't worry, when you force close the app and then restart it, it will be there again!
  
  ![FadeAnimation](images/UsingPorpoise_FadeAnimation.PNG)
  
  **Note:** In order for a fade animation to work, the rendering mode of the material of the POI's Unity game object needs to be set to 'Fade'.
  
  ![RenderingModeFade](images/UsingPorpoise_RenderingModeFade.PNG)
  * **destroy**, destroy the POI.
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
