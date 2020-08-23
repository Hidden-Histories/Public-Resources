
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating an AR walk

## Overview

Several artists have talked about wanting to set up a walk through Japantown, in which the user encounters various artworks as they walk around a block or down the street.

Here is how to set up an AR walk at your home base, to test out how it looks and acts while you are walking around the block. Afterwards you can decide if it works for your content, despite the inaccuracy of the positions and orientations of the POIs.

- This can be done using **Lat/Lon** (Latitude and Longitude) to set the **absolute GPS position of each POI.** (You MUST leave the Relative position x,y,z field blank - otherwise the relative position overrules the absolute positions!)

- Because both **position and orientation can vary from minute to minute,** however, there is a certain amount of randomness in where you will see both the POI whose area you are in at the moment, and the other POIs you have set nearby. That may or may not bother you or your user, depending a bit on what your artwork is about! ;-)

.

## How to set up the POIs

I created 4 prefabs, each of them being a fenced in area of the same proportions, but with a different number (1, 2, 3, 4) on the fence, so I could tell them apart.

- If you want to use the assets, here is the **unitypackage** (with 4 numbered fence exclosures and one unnumbered, plain fence element).
http://hiddenhistoriesjtown.org/documentation/templates/FenceTest.unitypackage

- If you want to use the prefabs in your own POI, here are links to the **asset bundle and manifest files:**
  - URL for asset bundle: www.arpoise.com/AB/fencetest.ace
  - URL for manifest file: www.arpoise.com/AB/fencetest.manifest

.
### Which POI properties to set

You MUST use absolute position (so they are more or less at the GPS location where you put them) as opposed to using Relative locations x,y, z (with which they are centered around the viewer and will always maintain the same distance to the viewer). 

.
![ARwalkExample_POIs-4Corners](images/ARwalkExample_POIs-4Corners.jpg)

- Set the Lat/Lon for the POI to the GPS position you want.
  - The easiest way to do this is to drag the marker for that POI to the location you want on the googlemap. (Remember to SAVE!)
  - I set these around my block - the narrow side is about 100 meters long, the long side is about 200 meters long. This is actually pretty equivalent to the size of the Heinleinville block, although the orientation is east-west whereas the Heinleinville block is north-side.
  - Visibility in meters:
  - Set Relative altitude if desired to raise or lower the height of the POI (remember 0 is eye level).

  - Relative location x,y,z HAS TO BE EMPTY!!! If you put in a value here, that overrides everything else, and the POI just moves with you when you walk.

