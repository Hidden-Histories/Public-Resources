# [![Hidden Histories Logo](/images/hiddenhistories-logo.png)](http://hiddenhistoriesjtown.org/documentation) Hidden Histories

# ARpoise Glossary of Terms

These terms are used in the Hidden History technical AR documentation. 

<< Go back to [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).
Puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

. 

## ARpoise app
The ARpoise app is a geolocative AR only app that is part of the **ARpoise** open-source Augmented Reality platform. It runs on pretty much all iOS and Android smartphones and tablets. It will be merged with its newer sister app **AR-vos** at some point in the near future.

Download the ARpoise app from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARpoise&hl=en) Store or the Apple [App Store](https://apps.apple.com/de/app/arpoise/id1451460843). 

. 

## ARpoise Augmented Reality platform
The [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) is an open-source Augmented Reality platform. It was developed by [Peter Graf](http://mission-base.com/peter/) and [Tamiko Thiel](http://tamikothiel.com/) in 2018 to provide an open source AR platform that they could keep alive as the underlying technology changes. Since Tamiko began creating [AR artworks](http://tamikothiel.com/projects.html) in 2010, she has used multiple commercial AR platforms that all have gone out of business. She and Peter created ARpoise to provide a long-term alternative that can evolve with the technology. They will keep the platform alive as long as they live, and with the entry of the work [Unexpected Growth](http://tamikothiel.com/unexpectedgrowth/) into the Whitney Museum of American Art collection, they have a top-rank museum partner also dedicated to preserving the platform. 

The goal is to create a community-supported AR platform for artists and other people who might not be able to develop their own apps, and as an alternative to commercial AR platforms that may go out of business at any time without warning. 

. 

## AR-vos app
The AR-vos app is part of the **ARpoise** open-source Augmented Reality platform. It can do **geolocative**, **SLAM** and **image trigger** AR, but only runs on recent model iOS and Android devices. The AR-vos and ARpoise apps will be merged in the future, when the older devices are not common anymore.

Download the AR-vos app from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store or the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

. 

## Asset
An asset is **Unity3D Editor** terminology for the individual digital files that together make up an AR experience. These can be a 3D model, a 2D image, a sound file, a movie file etc.

. 


## Asset Bundle
An asset bundle is **Unity3D Editor** terminology for a single file that, similar to a zip file, contains multiple **prefabs,** prefabricated **assets** or collections of assets that can be referenced by an artist's **porPOIse** account to provide an AR experience. The asset bundle has to be on a **server** accessible through the web.

.

## Augment
The term augment is a general term that can refer to:
- A single augmented reality artwork installation, also called a **layer**.
- A component of such an installation, also called a **POI** (Point Of Interest). 
View augment layers in the **ARpoise** or **AR-vos** apps on an iOS or Android smartphone by clicking on the name of the layer  in the list shown when you start the app.

.

## Augmented Reality (AR)
Augmented reality is a technology for mobile devices that, when seen in the device's display, seems to overlay your surroundings with computer graphic artworks, such that the artworks seem to be part of your surrounding environment.

. 

## FTP (File Transfer Protocol)
This is an program that runs on your PC and allows you to upload files to your porPOIse account on the web **server.**

.

## Geofencing
On the ARpoise platform, all forms of AR can be restricted to a certain area if desired. Therefore both the **ARpoise** app and the **AR-vos** app always check your device's **GPS** coordinates and sends a request to the ARpoise server to see whether there are any art works near your location. If there are the app will display them; if there are none, a default layer will be shown to you.

. 

## Geolocative AR (in AR-vos app and ARpoise app)
Geolocation is a simpler technology that uses the GPS coordinates of the augments as the sole way to determine whether and where an augment is viewable. Due to the imprecision of civilian GPS systems in smartphones, the location and orientation of the augments can vary by +/- 20 meters. The AR-vos app can do geolocative AR as well as image trigger and SLAM. The ARpoise app can only do geolocative AR, but runs on a very large variety of older smartphones. We expect to merge the two client apps soon, as the older smartphones become defunct. 

. 

## GPS ([Global Positioning System](https://en.wikipedia.org/wiki/Global_Positioning_System))
A global navigation satellite systems developed and owned by the US military. This is the same technology used in Google or Apple maps and in car navigation systems. The civilian version that ARpoise can access has a +/- accuracy of at the best 20 meters (66 feet). When you enable Location Services on your mobile, you are consenting to allow it to read and use your phone's GPS position data in apps on your smartphone.

. 

## Image trigger AR:
Image trigger AR uses A.I. computer vision technology to recognize images (e.g. posters, postcards, or even photos of an outdoor facade, etc.) and place augments relative to those images. 
  - Note that if lighting conditions vary, for instance cast shadows on outdoor trigger images, you will have to set up multiple layers with different trigger images for the different lighting conditions **and test extensively with different types of smartphones!**
  - **Image trigger and SLAM (and therefore the AR-vos app) *only* run on newer models,** as they use Apple's ARKit and Google Android's ARCore technologies.
    - For iPhones, it works on the iPhone SE or iPhone **6s** (NOT on iPhone 6) and higher. See [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html).
    - For Android, it is harder to say, please see [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). In general, a device needs at least Android version 7.0. 

. 

## Layer:
An **ARpoise** layer is an individual AR experience or project. 
- A single location in the real world can have multiple layers at exactly the same site, each of them a separate AR layer. 
- When you stand at that site, the **ARpoise** and **AR-vos** apps will show you a list of layers available for you there. You select one from the list to view it.
- Artists set up and edit their AR layers in the **porPOIse** user interface.

. 

## Manifest
In the ARpoise system, a manifest is a file showing the entire list of available **prefabs** in an **asset bundle.** This is a term taking from shipping terminology: a "ship's manifest" is a list of all the goods being transported by a ship, to be shown to the customs officer in port.

.

## POI (Point Of Interest):
A POI is one of the components that make up an AR **layer**. 
- A single layer can have one or more POIs. 
- You can have many different POIs, but also multiple POIs of the same type.
- In each POI you can define multiple properties such as its scale, location, elevation, simple animations and some simple interactions. These are the properties that you are changing when you edit your layer in porPOIse.
- The actual artwork content of a POI is the **prefab** linked to the POI definition via the **URL** of an **asset bundle**. 

. 

## porPOIse user interface
porPOIse is the web interface that artists use to set up and edit their **ARpoise** **layers.** Within porPOIse, you can do simple interactions and animations. Changes to porPOIse update instantanenously so you can check your revised layer immediately. porPOIse works both on PCs and on mobile smartphones and tablets, so you can stand on site "in the field" and make last minute adjustments to your layers on the spot.

.

## Prefab
Unity terminology for a "prefabricated object" that you can link to and reference from porPOIse. A prefab can itself be a 3D object or a 2D image that may or may not be animated, a sound, a video, etc.

. 

## Server
A computer on the Internet that "serves" you files in a web browser on your PC or mobile device, or "serves" content to you in an app.

.

## SLAM [Simultaneous localization and mapping](https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping):
SLAM based AR (only in **AR-vos**) uses the newest form of A.I. computer vision technology to discover planes in the physical space around the user, and then place augments on these planes. The augments will (pretty much) stay in place, and the user can then walk around them in 3D space.

- SLAM **only** run on newer iOS and Android devices, as they use Apple's ARKit and Google Android's ARCore technologies.
  - For iPhones, it works on the iPhone SE or iPhone **6s** (NOT on iPhone 6) and higher. See [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html).
  - For Android, it is harder to say, please see [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). In general, a device needs at least Android version 7.0, see [Android Versions](https://source.android.com/setup/start/build-numbers).

. 

## Unity (Unity3D Editor)
The [Unity3D Editor](https://unity.com/) is one of the main programs used today to develop computer games, virtual reality and augmented reality. For the ARpoise platform, we use Unity to turn the individual **assets** for an AR experience (**layer**) into **prefabs** and then combine them into a single **asset bundle** file. You then upload the asset bundle file to your **porPOIse** account and reference the prefabs in it from a specific **POI** in order for them to be shown in a specific **layer**.

.

## Unity Hub
Unity is constantly updating its Editor, but does not maintain very good backward compatibility between Editor versions. If you have more than one version of the Editor on your PC, and open a Unity project in the wrong version, the project might not work anymore! The Hub helps you keep track of which Editor version you download, and if you have multiple versions, shows you which Editor version should be used to open each project. **Currently we are using Unity3D Editor Version 2018.3.14.**

.

##URL ([Uniform Resource Locator](https://en.wikipedia.org/wiki/URL))
The technical term for a website address, such as https://hiddenhistoriesjtown.org/.

. 

