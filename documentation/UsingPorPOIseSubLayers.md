
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating Sub-Layers

## Overview
This a tutorial on how to use sub-layers to create more complex POIs in **ARpoise** or **AR-vos**.

- The POIs in the sub-layer inherit the same properties, animations etc. of the POI from which they are linked.

- Especially in image trigger and SLAM layers, in which only one POI can be triggered by a image or placed in SLAM at one time, sub-layers allow you to create much more complex interations. 

If we look at the layer **Example SlamBoxes** of the [Using the AR-vos app tutorial](UsingAR-vosApp.md#slam-example), one tap will place a center box surrounded by several other boxes. 

## Placing Example SlamBoxes
The layer Example-SlamBoxes is defined as follows, it contains only a single POI, called BellCube.
### Image - Placing Example SlamBoxes:
![AR-voxSLAMBoxes1x_horiz](/documentation/images/AR-voxSLAMBoxes1x_horiz.png)

But if you look at the porPOIse settings for Example SlamBoxes shown below, the layer itself contains only one POI, **BellCube**. 

## Layer Definition
The layer Example-SlamBoxes is defined as follows, it contains only a single POI, called BellCube.
### Image - Layer "Example-SlamBoxes":
![SubLayers-LayerDefinition](/documentation/images/SubLayers-LayerDefinition.png)

builds its POIs of five boxes from a single POI with one box and a sub-layer with four more boxes. The single center POI **BellCube** has a rotate animation when clicked. As this POI references the sub-layer **Slam-Example**, this sub-layer is shown whenever the center POI appears and the sub-layer is rotated whenever the POI is rotated. 


## POI Definition
The POI BellCube is defined as follows, it contains only a single prefab, called BellCube and with it's parameter **Layer name** it references the sub-layer **Slam-Example**.
### Image - POI "BellCube":
![SubLayers-PoiDefinition](/documentation/images/SubLayers-PoiDefinition.png)

## Sub-Layer Definition
The sub-layer Slam-Example is defined as follows, it contains four simple cube prefabs.
### Image - Sub-Layer "Slam-Example":
![SubLayers-SubLayerDefinition](/documentation/images/SubLayers-SubLayerDefinition.png)

## Sub-Layer POI Definition
Each of the POIs in the sublayer is a simple POI, defined as in the example.
### Image - Sub-Layer POI "StripesCube":
![SubLayers-SubLayerPoiDefinition](/documentation/images/SubLayers-SubLayerPoiDefinition.png)
