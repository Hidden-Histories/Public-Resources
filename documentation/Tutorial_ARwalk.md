
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating an AR walk

## Overview

Various artists have talked about wanting to set up a walk through Japantown, in which the user encounters various content as they walk around a block or down the street.

- This can be done using **Lat/Lon** (Latitude and Longitude) to set the **absolute GPS position of each POI.**

- Because both **position and orientation can vary from minute to minute,** however, there is a certain amount of randomness in where you will see both the POI whose area you are in at the moment, and the other POIs you have set nearby. That may or may not bother you or your user, depending a bit on what your artwork is about! ;-)

Here is how to set up an AR walk at your home base, to test out how it looks and acts while you are walking around the block. Afterwards you can decide if it works for your content, despite the inaccuracy of the positions and orientations of the POIs.

- I created 4 prefabs, each of them being a fenced in area of the same proportions, but with a different number (1, 2, 3, 4) on the fence, so I could tell them apart.

- If you want to use the assets, here is the unitypackage (with both numbered fence textures and one unnumbered, plain fence texture).

- If you want to use the prefabs in your own POI, here are links to the asset bundle and manifest file:
  - URL for asset bundle: www.arpoise.com/AB/fencetest.ace
  - URL for manifest file: www.arpoise.com/AB/fencetest.manifest
