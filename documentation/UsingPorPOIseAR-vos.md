# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# ARpoise PorPOISe - create AR-vos image trigger and SLAM layers

## Overview

As we mentioned in the tutorial [Using the AR-vos App to view image trigger and SLAM based AR artworks](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingAR-vosApp.md#-hidden-histories), AR-vos is a more advanced AR app that can do not only **geolocative AR,** but also **image trigger** and **SLAM AR.** 

**If you haven't used image trigger and SLAM recently in AR-vos, PLEASE go through that tutorial so you understand how to use both types of AR.**

You create geolocative AR content for the AR-vos app in exactly the same way you do for the ARpoise app. If you need to practice, please see the tutorial [Using porPOIse: Set up and modify ARpoise app layers](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIse.md#-hidden-histories).

This tutorial shows how to create image trigger and SLAM layers for the AR-vos app, 

**NOTE:** Before you do this tutorial, you should have already be comfortable creating **geolocative AR,** using the porPOIse user interface, with either the ARpoise app or the AR-vos app. This is covered by the tutorials on the [Hidden Histories documentation page](http://hiddenhistoriesjtown.org/documentation/), including:
- All the tutorials under "Viewing augments on your smartphone in the ARpoise and AR-vos apps." 
- All the other, preceding tutorials under the same heading as this one, "Editing augments with the ARpoise porPOIse interface."

**AR-vos** is an open source app that can do **geolocative**, **SLAM** and **image trigger** AR. It is part of the [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) open-source Augmented Reality platform.

**Download the AR-vos app** from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store and the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

- **Image trigger AR (only in AR-vos)** uses A.I. computer vision technology to recognize images (e.g. posters, postcards, or even photos of an outdoor facade, etc.) and place augments relative to those images. 
  - Note that if lighting conditions vary, for instance cast shadows on outdoor trigger images, you will have to set up multiple layers with different trigger images for the different lighting conditions **and test extensively with different types of smartphones!**

- **SLAM based AR (only in AR-vos)** uses the newest form of A.I. computer vision technology, [Simultaneous localization and mapping](https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping), to discover planes in the physical space around the user, and then place augments on these planes. The augments will (pretty much) stay in place, and the user can then walk around them in 3D space.

- **Image trigger and SLAM (and therefore the AR-vos app) *only* run on newer models,** as they use Apple's ARKit and Google Android's ARCore technologies.
  - For iPhones, it works on the iPhone SE or iPhone **6s** (NOT on iPhone 6) and higher. See [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html).
  - For Android, it is harder to say, please see [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). In general, a device needs at least Android version 7.0, see [Android Versions](https://source.android.com/setup/start/build-numbers).
    
- **Geolocative AR (in both the AR-vos app and the ARpoise app)** is a simpler technology that uses the GPS coordinates of the augments as the sole way to determine whether and where an augment is viewable. Due to the imprecision of civilian GPS systems in smartphones, the location and orientation of the augments can vary by +/- 20 meters. The AR-vos app can do geolocative AR as well as image trigger and SLAM. The ARpoise app can only do geolocative AR, but runs on a very large variety of older smartphones. We expect to merge the two client apps soon, as the older smartphones become defunct. 

- **Geofencing:** all these forms of AR can be restricted to a certain area if desired. Therefore both the ARpoise app and the AR-vos app always check your device's GPS coordinates and sends a request to the **ARpoise** back end server to see whether there are specific art works at your location. If there are you will see them; if there are none, a default layer will be shown to you. We will change this default layer periodically.

## Overview
