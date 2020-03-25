![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories
# -- Setup Artist in ArpoiseDirectory Back End --

## Overview

**ARpoise porPOIse** requires a directory back end as registry for all the AR projects ("layers") that it services. The directory keeps track of which layers exist, and where in the world they can be viewed.

The **Hidden Histories ARpoiseDirectory Back End Directory Service** is located here, accessible only to the admin: https://hiddenhistoriesjtown.org/ArpoiseDirectory/php/web/dashboard/index.php

- The ArpoiseDirectory contains two **metalayers**, one for the ARpoise app and one for the AR-vos app, each of which contain all layers around the world that are serviced by that respective app. For now, we will discuss only the ARpoise metalayer in this document, but the AR-vos metalayer is similar.

- A metalayer is made up of a list of all the individual layers that are accessible through that particular app. The listing for a layer includes an approximate GPS location and area where it is visible, which allows the app to quickly find which layers are relevant given the location of a user who has called up the app.

## Functionality
When the [ARpoise Directory Front End](https://github.com/ARPOISE/ARpoise/tree/master/ArpoiseDirectory#arpoisedirectory) receives a request from a client ARpoise or AR-vos app, it contacts the ARpoise Directory Back End web service with the client's GPS location as parameter, e.g. where the viewer who just opened the app is standing in the world.
- The **ARpoiseDirectory Back End service** then returns a list of all layers within a specified range of the client's GPS location, and displays them in the app.
- If there are no layers within range of the client's location, an empty list of layer definitions is returned.
- NOTE: If the same augment should be visible in different locations around the world, a separate copy of that layer needs to be created and placed at the desired GPS locations.

. 
![ARpoise layer List JAMsj](/images/ARpoise_layerList_JAMsj_1024w.png)

. 
## Documentation:

. 
## ARpoiseDirectory Back End Layer Configuration

. 
### Screen Shot: Arpoise Directory Service - metalayers list

When you log in to the ARpoiseDirectory Back End, you will see one link to the geolocative layers serviced by the **ARpoise 
app**, and another link to the layers (both geolocative and image trigger) serviced by the **AR-vos app**. The older ARpoise 
app runs on all iOS and Android smartphones, whereas the newer AR-vos app only runs on recent smartphones that support the 
AR functionality of [Android ARCore](https://developers.google.com/ar/discover/supported-devices) or [Apple ARKit](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html). 

For now, we will discuss only the ARpoise metalayer in this document, but the AR-vos metalayer is similar.
We expect to merge the two apps in the future when the newer smartphone hardware is widespread.

![DirectoryImg0](/images/Directory0.png)

.
### Screen Shot: Arpoise Directory Service - Arpoise-Directory

Click on the Arpoise-Directory link to view the metalayer list of all layers serviced by the Hidden Histories ARpoise app. This currently includes:

- All of Tamiko's Brush the Sky layers in San Jose Japantown.
- The ExampleLayer template (please do NOT change or delete!)
- Tamiko's ExampleLayer (please do NOT change or delete!)
- When you add new layers, they will also appear in this list.

![Hidden Histories Arpoise-Directory metalayer list](/images/HH_Arpoise-Directory_metalayerList.png)

### Explanation:

For each layer, the registry specifies a base GPS position that defines the area of the world in which the layer is visible. If the same augment should be visible in different locations around the world, a separate copy of that layer needs to be created and placed at each of the desired GPS locations.

.
### Screen Shot: Add new layer


To add a new layer, click on the "New Layer" link above the list of current layers.

In the next screen just click on "Create" ...

![Arpoise-Directory ExampleLayer](/images/Arpoise-Directory_ExampleLayer.png)

### Screen Shot: New empty layer added to directory

... and a new empty layer will be added to the directory.

Click on the new layer name "no title" to configure the new layer.

![DirectoryImg0c](/images/Directory0c.png)

### Screen Shot: Configure new layer

See the description of possible attributes beneath this example image.

Enter the configuration for the new layers and then click the "Save" button

![DirectoryImg1](/images/Directory1.png)
### Explanation:
The following attributes of a layer can be edited.
* **Layer Name**: The name of the layer, for internal purposes only.
* **Lat/Lon**: The base GPS location of the layer **in decimal form only.** Can be changed by typing in the latitude and longitude, or by dragging the layer's marker in the placement map. If the same augment should be visible in different locations around the world, a separate copy of that layer needs to be created and placed at each of the desired GPS locations.
* **Is visible**: Use this box to turn the augment on or off for testing purposes.
* **Porpoise URL**: The URL of the ARpoise PorPOISe Back End serving the layer.
* **Layer Title**: The title of the layer shown in the client application when a list of layers is displayed for selection. Please give this a unique name to make it easier for the public to identify which artist and artwork it is!
* **Line 2**: The second line of text shown in the client application when a list of layers is displayed for selection.
* **Line 3**: The third line of text shown in the client application when a list of layers is displayed for selection.
* **Icon name**: The name of the icon shown in the client application when a list of layers is displayed for selection. This can only be done by the ARpoise adminstrators - please contact us at public@arpoise.com.
* **Save** button: Saves the layers's attributes to the ARpoise Directory's xml file.

.
## Testing 

Stand at the GPS location where you set the new layer, open the ARpoise app and see if you can see it there. Make sure "Is visible" is YES! ;-)

.
## Next Steps

### Play around in porPOIse with the assets in your test layer
To learn what you can do in porPOIse, including animations, play around with your existing test layer using the tutorial on the ARpoise porPOISe Back End:
https://github.com/ARPOISE/ARpoise/blob/master/php/porpoise/README.md

### Exporting Unity assets into AssetBundles for ARpoise:
To create a new AR experience for your layer, you need to set up the assets in Unity (2D and 3D objects, sounds) and then export them into asset bundles. Learning to use Unity goes beyond the scope of our tutorials, but here is our tutorial for turning Unity assets into AssetBundles:
https://github.com/ARPOISE/ARpoise/blob/master/documentation/CreatingAssetBundles.md

.

