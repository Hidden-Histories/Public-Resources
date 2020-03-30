![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories Artists: Getting Started with ARpoise 

## Overview

### What is ARpoise and why is Hidden Histories using it?

The [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment)](http://arpoise.com/) is an open-source Augmented Reality platform. It was developed by [Peter Graf](http://mission-base.com/peter/) and [Tamiko Thiel](http://tamikothiel.com/) in 2018 to provide an open source AR platform that they could keep alive as the underlying technology changes. Since Tamiko began creating AR artworks in 2010, she has used multiple commercial AR platforms that all have gone out of business. She and Peter created ARpoise to provide a long-term alternative that can evolve with the technology. They will keep the platform alive as long as they live, and with the entry of the work [Unexpected Growth](http://tamikothiel.com/unexpectedgrowth/) into the Whitney Museum of American Art collection, they have a top-rank museum partner also dedicated to preserving the platform. The goal of ARpoise is to foster it as a community-supported AR app for artists and other people who might not be able to develop their own apps, and as an alternative to commercial AR platforms that may go out of business at any time without warning. 

Two different client applications have both been implemented for Android and iOS. (Needs a section explaining geolocative, image trigger and SLAM AR.)

- The **ARpoise** client is a geolocative AR app running on most available phones.
The **ARpoise** app can be downloaded from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARpoise) Store and the Apple [App Store](https://itunes.apple.com/de/app/arpoise/id1451460843). ARpoise runs on most all iOS and Android smartphones.

- The **AR-vos** client app provides both geolocative and image trigger AR functionality, and will be extended to provide the newer SLAM AR functionality. To do this it must use [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html) and [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). We hope to merge the two client apps at some point, when the majority of smartphones support ARKit and ARCore technology. The **AR-vos** app can be downloaded from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store and the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

## Artist workflow

### First Steps

As the ARpoise app will work on most smartphones, we will focus on using it first, and deal with AR-vos later.

In order to use ARpoise, you should already have the following. If you don't, please contact the Hidden Histories administrator. 

- Please go through the [**Using the ARpoise App**](UsingARpoiseApp.md) tutorial to understand how to view augmented reality artworks with the ARpoise app. 

- The Hidden Histories administrator should have set up a **ARpoise porPOIse user account** for you, and you should be able to log in to it. This is the user interface for setting up and editing your AR experiences ("layers") so that they can be accessed by the ARpoise app.

- You should be able to view the **example layer** and a (for now identical) **artist layer** that the admin set up for you in porPOIse. They should be geolocated at your home so when you are there, you see them immediately when you open up the ARpoise app.

**NOTE** that initially, we will only talk about the **ARpoise geolocative app**, as we know it will work on pretty much all smartphones. This makes it easier to do the initial testing and get everyone up and running while in social isolation due to the coronavirus. The procedure mentioned below also applies to the AR-vos, with a few extensions.

### Next Steps

The tutorials link to each other in a specific order that should help you go progressively deeper into using ARpoise.

1. [**porPOIse**](UsingPorPOIse.md) tutorial: Modify your existing layers to learn how to use porPOIse.

2. **Unity 3D Editor:** Learn to put together your own assets (3D models, images, sound files etc.) in the Unity3D Editor to construct the basics of your AR experience. UNDER CONSTRUCTION

3. **AssetBundles:** Export the assets in a Unity asset bundle and upload to your porPOIse account UNDER CONSTRUCTION

4. Set up your final AR experience in porPOIse. Test, modify, repeat! ;-)

5. Place AR artwork on site: Ask the admin to move your augment to the desired location for the final artwork. UNDER CONSTRUCTION

