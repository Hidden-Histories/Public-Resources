![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories Artists: Getting Started with ARpoise 

## Overview

### What is ARpoise and why is Hidden Histories using it?

**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment) is an open-source Augmented Reality platform. It was developed by Peter Graf and Tamiko Thiel to provide an open source AR platform that they could keep alive as the underlying technology changes. Since Tamiko began creating AR artworks in 2010, she has used multiple AR platforms that now no longer exist. The goal of ARpoise is to provide an open-source, community-supported AR app for artists and other people who might not be able to develop their own apps, and as an alternative to commercial AR platforms that may go out of business at any time without warning.

Two different client applications have both been implemented for Android and iOS. (Add a section explaining geolocative, image trigger and SLAM AR???)

- The **ARpoise** client is a geolocative AR app running on most available phones.
The **ARpoise** app can be downloaded from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARpoise) Store and the Apple [App Store](https://itunes.apple.com/de/app/arpoise/id1451460843). ARpoise runs on most all iOS and Android smartphones.

- The **AR-vos** client app provides both geolocative and image trigger AR functionality, and will be extended to provide the newer SLAM AR functionality. To do this it must use [ARKit supporting iOS devices](https://developer.apple.com/library/archive/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/DeviceCompatibilityMatrix/DeviceCompatibilityMatrix.html) and [ARCore supporting Android devices](https://developers.google.com/ar/discover/supported-devices). We hope to merge the two client apps at some point, when the majority of smartphones support ARKit and ARCore technology. The **AR-vos** app can be downloaded from the [Google Play](https://play.google.com/store/apps/details?id=com.arpoise.ARvos) Store and the Apple [App Store](https://apps.apple.com/us/app/ar-vos/id1483218444). 

## Artist workflow

### First Steps

In order to use ARpoise, you should already have the following. If you don't, please contact the Hidden Histories administrator. 

- Understand how to view augmented reality artworks with the ARpoise app. See the [Using the ARpoise App](UsingARpoiseApp.md) tutorial.

- Be able to access your own **ARpoise porPOIse user account**, set up by the Hidden Histories administrator. You will use porPOIse to set up your "AR experiences.
- Be able to access your own **ARpoise porPOIse user account**, set up by the Hidden Histories administrator. You will use porPOIse to set up your **layers** (AR experiences).

- Successfully been able to view your **example layer** and the duplicate **artist layer** on ARpoise. **Testing: make sure the artist knows how to access the layers within the San Jose area and from outside of the San Jose area,**

**NOTE** Intially, we will only talk about the **ARpoise geolocative app**, as we know it will work on pretty much all smartphones. This makes it easier to do the initial testing and get everyone up and running while having to do everything remotely. The procedure mentioned below also applies to AR-vos geolocative AND image trigger layers.

Sue should have gotten information from you on the make and model of your device(s), so we know who might have problems, and can decide how to work around the problems. Now that we cannot meet in person it is of course more difficult.


The tutorials link to each other in a specific order that should help you go progressively deeper into using APpoise.


### Steps in learning to use porPOIse

- Log in to your porPOIse account and practice modifying your ExampleLayer. LINK??? porPOIse POI set-up, animation

- Test your changes/Troubleshooting

- Unity Basics: Create or download assets in order to form your own ARpoise layer.

- Use Unity to put the assets together into an AR experience, AssetBundle creation and upload

- Successfully been able to upload files via **FTP access** to your artist's folder on the Hidden Histories server. FTP howto - can Sue help people who might not have an app? (Corinne, Susan, artists) FTP client set up:   make sure they have one that is properly configured, and know how to use it!     make sure they understand where to upload their AssetBundles


### In the ArpoiseDirectory Back End registry, configure the new layers.
- In order to be viewable in the ARpoise (or AR-vos) app, the layers need to be **geolocated** at a specific GPS location. Right now this should be at the artist's home so they can play around with them without leaving their house. This can be changed later for testing and final placement in Japantown.
- The 2 layers should then be fully functional, with assets (brightly colored primitive shapes, some with porPOIse animations) that give the artist an immediate check whether their account is working, and allow them to follow the artist's tutorials to learn how to use porPOIe to set up their augments.
- Please follow the [**step by step admin SetupArtistArpoiseDirectory tutorial**](SetupArtistArpoiseDirectory.md)

. 

## Next Steps

### Admin tutorials: Next steps
Complete the following steps:

1. **Getting Started: ARpoise Admins**
2. [Setup Artist Porpoise](SetupArtistPorpoise.md).
3. [Setup Artist ArpoiseDirectory](SetupArtistArpoiseDirectory.md).
