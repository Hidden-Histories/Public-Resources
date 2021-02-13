
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating Sub-Layers

## Overview
This a tutorial on how to use sub-layers to create more complex POIs in **ARpoise** or **AR-vos**.

- The POIs in the sub-layer inherit the same properties, animations etc. of the POI from which they are linked.

- Especially in image trigger and SLAM layers, in which only one POI can be triggered by a image or placed in SLAM at one time, sub-layers allow you to create much more complex interations. 



### Example SlamBoxes: one tap places these boxes

If we look at the layer example **SlamBoxes** of the [Using the AR-vos app tutorial](UsingAR-vosApp.md#slam-example), one tap will place a center box surrounded by several other boxes. 

![AR-vosSLAMBoxes1x_horiz](/documentation/images/AR-vosSLAMBoxes1x_horiz.png)

. 

### SlamBoxes: layer definition

However if you look at the porPOIse definition of the layer Example SlamBoxes, it contains only a single POI, called **BellCube,** which is just the single box that is in the center.

![SubLayers-DefaultSLAMBoxes_LayerDefinition](/documentation/images/SubLayers-DefaultSLAMBoxes_LayerDefinition.png)

. 

### POI "BellCube":

SlamBoxes builds its POIs out the **BellCube** containing one box, plus a sub-layer **Slam-Example** that contains four more boxes placed around the origin. 
- The single, central POI **BellCube** has a rotate animation when clicked. 
- As this POI references the sub-layer **Slam-Example,** this sub-layer is shown whenever the parent POI **BellCube** appears.
- The sub-layer **Slam-Example** is rotated whenever the parent POI **BellCube** is rotated. 

The POI BellCube contains only a single prefab **BellCube,** but its **Layer name** parameter references the sub-layer **Slam-Example.**

![SubLayers-DefaultSLAMBoxes_PoiDefinition](/documentation/images/SubLayers-DefaultSLAMBoxes_PoiDefinition.png)

## Sub-Layer Definition
The sub-layer Slam-Example is defined as follows, it contains four simple cube prefabs.
### Image - Sub-Layer "Slam-Example":
![SubLayers-SubLayerDefinition](/documentation/images/SubLayers-SubLayerDefinition.png)

## Sub-Layer POI Definition
Each of the POIs in the sublayer is a simple POI, defined as in the example.
### Image - Sub-Layer POI "StripesCube":
![SubLayers-SubLayerPoiDefinition](/documentation/images/SubLayers-SubLayerPoiDefinition.png)
