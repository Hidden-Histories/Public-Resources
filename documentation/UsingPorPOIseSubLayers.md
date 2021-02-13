
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating Sub-Layers

## Overview
This a tutorial detailing an example of how sub layers can be used with POIs in **ARpoise** or **AR-vos**.

Sub-layers allow constructing POIs to be shown in **ARpoise** or **AR-vos** from sets of simple POIs and make sure they appear and react synchronously.

The layer **Example-SlamBoxes** of the [AR-vos-examples](/unity/AR-vos-examples.md#slam-example) builds it's POIs of five boxes from a single POI with one box and a sub-layer with four more boxes. The single center POI **BellCube** has a rotate animation when clicked. As this POI references the sub-layer **Slam-Example**, this sub-layer is shown whenever the center POI appears and the sub-layer is rotated whenever the POI is rotated. 

## Layer Definition
The layer Example-SlamBoxes is defined as follows, it contains only a single POI, called BellCube.
### Image - Layer "Example-SlamBoxes":
![SubLayers-LayerDefinition](/documentation/images/SubLayers-LayerDefinition.png)

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
