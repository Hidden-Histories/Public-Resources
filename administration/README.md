![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories Admins: Getting Started with ARpoise 

## Overview   
This folder contains tutorials for administrators to set up **porPOIse accounts** and **layers** for **Hidden Histories** artists and helpers.

The [**ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment) Overview Document](https://github.com/ARPOISE/ARpoise/blob/master/README.md) gives an overview of the functionality of the entire ARpoise platform. Some of the information is only of interest if you are setting up an ARpoise and porPOIse system of your own, but it gives a good overview of how the system's components fit together. (Note: the ARpoise administrators are managing the ARpoise Directory Front End component.)


The Hidden Histories admin will manage the following two components, which are already set up on the Hidden Histories web server hiddenhistoriesjtown.org.

- **Hidden Histories porPOIse back end user interface**
This is an online web interface that each artist (or helper) uses to set up and edit their own layers, whether geolocative or image trigger, for viewing on the ARpoise or the AR-vos client apps. The admin needs to set up separate copies of the porPOIse back end user interface for each and every artist and helper.

- **Hidden Histories ArpoiseDirectory Back End**
Once the porPOIse account has been set up, the layers have to be registered in the Hidden Histories ArpoiseDirectory, which is managed only by the admin. This registry keeps track of all layers and makes them available within a general GPS defined area. Due to the coronavirus, this will be initially at the artist's home, and then moved to the proper location in San Jose Japantown once the artwork is developed. When a user is standing at the location of their artwork and starts the ARpoise or AR-vos apps, the ArpoiseDirectory reads their GPS location and then displays all layers available at that location in a list on their screen.

**NOTE:** Intially, please use the **ARpoise geolocative app**, as we know it will work on pretty much all smartphones. This makes it easier to do the initial testing and get everyone up and running while having to do everything remotely. The procedure mentioned below also applies to AR-vos geolocative AND image trigger layers.

. 
## Admin workflow for each new artist (or helper):

This workflow MUST be following in order to set up a porPOIse account correctly. The tutorials link to each other in the proper order, but here is an overview so you understand the steps in the process:

### With the artist, agree on:
- A porPOIse **user name and password**. Ideally the same one as their FTP access to the hiddenhistories server, to make it easier for them to remember.
- A **short form of their name** as unique, internal identifier for their layer name(s) for their artwork(s).
- Per artist we will set up one **example layer** to be used for testing, and one **artist layer** that can be used for setting up the artwork itself, e.g. "artistnameExampleLayer"and "artistnameArtistLayer".
- **We need to also discuss backups! Is the hiddenhistories server backed up daily? Sue is investigating...**

### Create a new porPOIse account for each artist or helper.
- We have set up an **ExampleArtist folder template** that can be quickly duplicated to create a new artist account.
- Then **configure** various files for the artist, for instance their login name and password, etc.
- Rename the ExampleLayer and create an ArtistLayer to include the artist's name.
- Note: If the artist needs more layers in the future, the admin has to create them according to the same procedure, and also add them to the directory in the procedure described below.
- The **step by step admin SetupArtistPorpoise tutorial** is here:
        https://github.com/Hidden-Histories/Public-Resources/blob/master/administration/SetupArtistPorpoise.md

### In the ArpoiseDirectory Back End registry, configure the new layers.
- In order to be viewable in the ARpoise (or AR-vos) app, the layers need to be geolocated at a specific GPS location. Right now this should be at the artist's home so they can play around with them without leaving their house. This can be changed later for testing and final placement in Japantown.
- The 2 layers are fully functional with assets (brightly colored primitive shapes, some with porPOIse animations) that gives the artist an immediate check whether their account is working
- Furthermore, by following the artists' tutorials  (to be provided), the artist can modify the layers immediately and learn what they can do in the interface.
- This step by step admin tutorial to register the layers is on the Hidden Histories github page at

Testing your new layers:
- Access in ARpoise: the ExampleArtist folder contains an ExampleLayer which can be used immediately to test whether the layer is visible in the ARpoise app at the proper location.
- NOTE: Please use the ARpoise app now for the initial set-up and testing, and we will get back to you soon with information on using AR-vos for both geolocative AR and image trigger AR.
- Access to porPOIse:
- have the artist log in to porPOIse with their username and password.
- The artist should be able to access AND MODIFY the layers! Can they change the Layer Title that is shown in the ARpoise app list of available layers? (Of course they must be standing at the right location!)

    OR: Testing layers from outside of the San Jose area using Fixed Position:
        In the ARpoise app, double click on the ARpoise icon.
        This brings up input fields for latitude and longitude.
        Enter the desired values, click "Activate Fixed Position" and click OK.
            If you enter the exact same coordinates as the layer, you will be right in the middle.
            If you want to view it from a slight distance, you can go to google maps and right click/What's Here? (on Windows) or long touch and release (on mobiles) will give you the GPS coordinates in decimal form in the seach box.
        REMEMBER TO TURN THIS OFF when testing on site! Real geolocative AR is (more or less) located at specific GPS coordinates. Using Fixed Position, when you walk around they will just moved with you.

## Next steps:
We have basic documents on using porPOIse and making asset bundles, but I want to go over them and link them from a similar "Getting Started for Artists" document that should be accessible on the Hidden Histories website.





## Hidden Histories Admin Tutorials
Please go through the tutorials in the following order:

1. [Setup Artist Porpoise](SetupArtistPorpoise.md).

2. [Setup Artist ArpoiseDirectory](SetupArtistArpoiseDirectory.md).
