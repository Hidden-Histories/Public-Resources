# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories Artists
# ARpoise Glossary of Terms


## ARpoise Augmented Reality platform

The [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) is an open-source Augmented Reality platform. It was developed by [Peter Graf](http://mission-base.com/peter/) and [Tamiko Thiel](http://tamikothiel.com/) in 2018 to provide an open source AR platform that they could keep alive as the underlying technology changes. Since Tamiko began creating AR artworks in 2010, she has used multiple commercial AR platforms that all have gone out of business. She and Peter created ARpoise to provide a long-term alternative that can evolve with the technology. They will keep the platform alive as long as they live, and with the entry of the work [Unexpected Growth](http://tamikothiel.com/unexpectedgrowth/) into the Whitney Museum of American Art collection, they have a top-rank museum partner also dedicated to preserving the platform. 

The goal of [ARpoise](http://arpoise.com/) is to foster it as a community-supported AR app for artists and other people who might not be able to develop their own apps, and as an alternative to commercial AR platforms that may go out of business at any time without warning. 



## AR-vos app

The AR-vos app is part of the [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) open-source Augmented Reality platform.

It can do **geolocative**, **SLAM** and **image trigger** AR, but only runs on recent model iOS and Android devices.

**Download the AR-vos app** from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store and the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

- **Image trigger AR (only in AR-vos)** uses A.I. computer vision technology to recognize images (e.g. posters, postcards, or even photos of an outdoor facade, etc.) and place augments relative to those images. 
  - Note that if lighting conditions vary, for instance cast shadows on outdoor trigger images, you will have to set up multiple layers with different trigger images for the different lighting conditions **and test extensively with different types of smartphones!**

- **SLAM based AR (only in AR-vos)** uses the newest form of A.I. computer vision technology, [Simultaneous localization and mapping](https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping), to discover planes in the physical space around the user, and then place augments on these planes. The augments will (pretty much) stay in place, and the user can then walk around them in 3D space.


- **Image trigger and SLAM (and therefore the AR-vos app) *only* run on newer models,** as they use Apple's ARKit and Google Android's ARCore technologies.
  - For iPhones, it works on the iPhone SE or iPhone **6s** (NOT on iPhone 6) and higher. See [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html).
  - For Android, it is harder to say, please see [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). In general, a device needs at least Android version 7.0, see [Android Versions](https://source.android.com/setup/start/build-numbers).
  
  Now try this photo of a doorway below, which we set as a trigger image for King Ludwig II of Bavaria. Of course the photo is always the same and should always work. But the real life doorway is trickier:
- Note that this is a north-facing facade, and therefore has constant lighting with no shadows. 
- Also, although there are reflections on the glass panes, they are small relative to the rest of the doorway and therefore should not disturb the overall reading of the trigger image. A glass door - or even worse, a glass facade - makes for very difficult trigger image, as the reflections change constantly.
- This trigger image will probably only work during the day. To also use this doorway as a trigger during the night, we would have to set up another layer with a photo of the doorway under those lighting conditions.
  
  
  
- **Geolocative AR (in both the AR-vos app and the ARpoise app)** is a simpler technology that uses the GPS coordinates of the augments as the sole way to determine whether and where an augment is viewable. Due to the imprecision of civilian GPS systems in smartphones, the location and orientation of the augments can vary by +/- 20 meters. The AR-vos app can do geolocative AR as well as image trigger and SLAM. The ARpoise app can only do geolocative AR, but runs on a very large variety of older smartphones. We expect to merge the two client apps soon, as the older smartphones become defunct. 

- **Geofencing:** all these forms of AR can be restricted to a certain area if desired. Therefore both the ARpoise app and the AR-vos app always check your device's GPS coordinates and sends a request to the **ARpoise** back end server to see whether there are specific art works at your location. If there are you will see them; if there are none, a default layer will be shown to you. We will change this default layer periodically.

