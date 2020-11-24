
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating an AR walking tour

## Overview

Several artists have talked about wanting to set up a walk through Japantown, in which the user encounters various artworks as they walk around a block or down the street. I developed this tutorial while talking with Takeshi Moro about his concept of following the fence around Heinleinville, and he graciously allowed me to share it with you all.

Here is how to set up an AR walk at your home base. Once you set it up around your own block, walk around the block and see if it works for you artistically, despite the inaccuracy of the positions and orientations of the POIs.

- This can be done using **Lat/Lon** (Latitude and Longitude) to set the **absolute GPS position of each POI.** (You MUST leave the Relative position x,y,z field blank - otherwise the relative position overrules the absolute positions!)

- Because both **position and orientation can vary from minute to minute,** however, there is a certain amount of randomness in where you will see both the POI whose area you are in at the moment, and the other POIs you have set nearby. That may or may not bother you or your user, depending a bit on what your artwork is about! ;-)

### Prefabs for this example
I created 4 prefabs, each of them being a fenced in area of the same proportions, but with a different number on the fence (1, 2, 3, 4), so I could tell them apart.

Use these in your POI (see the [porPOIse: Layer and POI configuration quick reference](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIse_REF-Layer-POI-Properties.md#-hidden-histories) for details):

- **Copy and paste** this URL www.arpoise.com/AB/fencetest.ace into the "URL for asset bundle" field in each of your POIs to be able to access the fence test prefabs.
  - To find out the names of the fence prefabs, click on this link to see the manifest file www.arpoise.com/AB/fencetest.manifest in a browser. 
    - Note that it is simply the URL for the asset bundle, but replacing the file type **.ace** with the file type **.manifest** - this is how you can find out the names of the prefabs in any given asset bundle.
    - If your computer only gives you the option to download the file, download it to your hard drive and then open it in a web browser or any text editor. Don't worry about any warnings, it really is just a text file and cannot harm your computer.

  - You do NOT have to download the asset bundle and upload it to your own account - you can just link to the one on the ARpoise server. 
  - In the same way, if you want to share a prefab with someone else, all you have to do is send them the URL. But of course if you change or delete the prefab and/or your asset bundle, they won't be able to access it anymore!
- If therefore you really do want to make a copy for yourself, you have to do the following:




.
## On the layer webpage:

First set the **Lat/Lon for each POI to the GPS position** you want.
  - The easiest way to do this is to **drag the marker for each POI** to the location you want on the googlemap. (Remember to click **Save** for each POI entry after you move it!)
  - I set one POI at each street corner around my block. The narrow side of my block is about 100 meters long, the long side is about 200 meters long. This is actually pretty equivalent to the size of the Heinleinville block, although the orientation is east-west whereas the Heinleinville block is north-side.
  - **Visibility in meters:** at the layer level, make sure this is around 1500, so when the ARpoise app looks for the POIs, it'll find all of them.
  
.
![ARwalkExample_POIs-4Corners](images/ARwalkExample_POIs-4Corners.jpg)

.
## For each POI, set these properties:

  - Check the position of the POI on the googlemap, to make sure it is where you want it to be.
  
  - **Visibility in meters:** IMPORTANT: set this to around 20 meters, so (ideally) it will not interfere with the other POIs!
  
  - Set **Relative altitude** if desired to raise or lower the height of the POI (remember 0 is eye level).

  - **Relative location (x,y,z) MUST BE EMPTY!!!** If you put in a value here, that overrides everything else, and the POI just moves with you when you walk.
  
  - **Scaling factor:** I found that 5 was a good value so that the nearest POI enclosed me when I came near the street corner, but the next farthest away did not.

.
![ARwalkExample_POIs-4Corners](images/ARwalkExample_POIproperties.jpg)

.
## Testing

Now go outside and walk around the block between the four places where you placed the four fence POIs.

- When you are standing right at a spot where you know you placed a POI, are you inside the fence? If not, you can try to increase the scale. It will look the same size, but it will be more likely to be surrounding you when you are standing at your chosen GPS location.

- Note where the other POIs are. It is quite possible that the orientation of the others will be wrong - e.g. the one that should be north of you is actually in the south, east or west. This is often different for different types of smartphones, and you have to assume that you can't control it for all smartphones. :-(

.
## How to test remotely at the scale that you need for Japantown:

Riffing on Takeshi Moro's concept, say I want to enclose the user in a fence on each of the street corners of Heinleinville. I can't get to San Jose Japantown right now, so how do I know that I am creating a test that would accurately simulate the experience on site?

If you look in the lower right corner of googlemaps, you see a scale indicator (that changes as you zoom in and out). Looking at the outline of the Heinleinville block, you see the short side is about 100 meters, and the long side about 250 meters.

.
![Googlemaps Heinleinville scale](images/googlemaps_Heinleinville_scale.jpg)

Now look at your own area, and choose landmarks (a street corner, a store) that are similar distances apart, and place them there!

