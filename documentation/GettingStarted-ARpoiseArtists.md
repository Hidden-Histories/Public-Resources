![Hidden Histories Logo](/images/hiddenhistories-logo.png)
# Hidden Histories Artists: Getting Started with ARpoise 

## Overview - What is ARpoise and why is Hidden Histories using it?

**TEXT**

The **ARpoise** (**A**ugmented **R**eality **p**oint **o**f **i**nterest **s**ervice **e**nvironment) [Overview Document](https://github.com/ARPOISE/ARpoise/blob/master/README.md) gives a thorough overview of the functionality of the entire ARpoise platform. Some of the information is only of interest if you are setting up an ARpoise and porPOIse system of your own, but it is  a good overview of how the system's components fit together. 

This folder contains tutorials for **Hidden Histories artists and helpers** on how to use the **ARpoise Augmented Reality platform** to create artworks. In order to use it, you should have:

- An **ARpoise user account**, set up by the Hidden Histories administrator.

- Understand how to view augmented reality artworks with the ARpoise app.

**NOTE** Intially, please use the **ARpoise geolocative app**, as we know it will work on pretty much all smartphones. This makes it easier to do the initial testing and get everyone up and running while having to do everything remotely. The procedure mentioned below also applies to AR-vos geolocative AND image trigger layers.

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
- Please follow the [**step by step admin SetupArtistPorpoise tutorial**](SetupArtistPorpoise.md). (It will also link to the ArpoiseDirectory tutorial mentioned below.)

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
