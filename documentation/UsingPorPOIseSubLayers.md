
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating Sub-Layers

## Overview
This tutorial shows you how to use sub-layers to create more complex POIs in **ARpoise** or **AR-vos**.

POIs in a sub-layer:
- Are referenced from a POI of a **parent layer.** 
- This reference is in that POI's **Layer name** field (see [SlamBoxes: POI BellCube image](UsingPorPOIseSubLayers.md#slamboxes-poi-bellcube) below).
- Are centered at the position of the parent POI (i.e. the entire sub-layer's Relative position 0,0,0 = position of parent POI).  
- Inherit any properties (scale, GPS or Relative position, animations etc.) of the parent POI.
- **BUT each POI in the sub-layer can have its own unique animation types and events.**

## DO I NEED SUB-LAYERS???

Sub-layers are useful **if you are using image trigger or SLAM,** and therefore can only place a single POI, but want **different parts of that POI to each have its own animation type and/or event.** 

For example:
  - You want to place a timeline with SLAM.
  - onClick, each year in the timeline should fade in different content. 
  - In geolocative this would be easy to do - just set up a lot of POIs, each with its own animation.
  - For a given **trigger image** however, **you can only have one POI.** 
  - In **SLAM,** you can have multiple POIs, but they have to be placed one after another by the user - **you can't control where they will be.**
  - With **sub-layers,** you can **control the position exactly** because they are always placed centered at the POI of the parent layer. 
  - AND **each POI** in the sub-layer can have its **own event and type of animation.** 

If you have a complicated form that is composed of prefabs you are also using individually, you could create it by using a sub-layer, instead of building a new prefab in Unity that just increases the size of the asset bundle.

. 

## Example SlamBoxes: one tap places all these boxes

If we look at the layer example **SlamBoxes** of the [Using the AR-vos app tutorial](UsingAR-vosApp.md#slam-example), one tap will place a yellow center box surrounded by four other boxes. The central yellow cube seems to be static, whereas all the other boxes have various animations. 

BUT if you click the yellow BellCube, all the cubes start rotating around, with the yellow BellCube at the origin. Since the other 4 cubes also have their own animations, it seems that the boxes have a very complex behavior.

![AR-vosSLAMBoxes1x_horiz512h](/documentation/images/AR-vosSLAMBoxes1x_horiz512h.png)

. 

## SlamBoxes: layer definition

If we look at the porPOIse definition of the layer Example SlamBoxes, it contains only a single POI, called **BellCube.** This is just the single yellow box that is at the center.

![SubLayers-DefaultSLAMBoxes_LayerDefinition](/documentation/images/SubLayers-DefaultSLAMBoxes_LayerDefinition.png)

. 

## SlamBoxes: POI BellCube

In the POI BellCube definition, the **Layer name** references a sub-layer **Slam-Example.** 
- The single, central POI **BellCube** has a rotate animation when clicked (and also a bell sound). 
- As this POI references the sub-layer **Slam-Example,** this sub-layer is shown whenever the parent POI **BellCube** appears.
- When you click the parent POI **BellCube,** the sub-layer **Slam-Example** is rotated along with it. Remember that they still keep their individual animations as well!

![SubLayers-DefaultSLAMBoxes_PoiDefinition2](/documentation/images/SubLayers-DefaultSLAMBoxes_PoiDefinition2.png)

. 

## Sub-Layer: Layer definition example

The sub-layer Slam-Example doesn't look much different from a normal layer, although we didn't bother to give it a Layer title (since that won't show up anywhere), and the the refresh rate is set to 0 (so it will have the same refresh rate as the main layer). 

It contains the four cube POIs that will appear surrounding the main layer's yellow BellCube POI. 

**NOTE:** The **Layer name** you need to turn this into your sub-layer is at the top of the page just under the links. It is NOT the Layer title! It must be spelled exactly as shown on your layer page, otherwise it will not be recognized!

![SubLayers-SubLayerDefinition2](/documentation/images/SubLayers-SubLayerDefinition2.jpg)

. 

## Sub-Layer: POI definition example

Each of the POIs in the sublayer is a simple POI, defined as in the example.

**It can have an animation of its own, different from that of the parent POI in the main layer.**

**NOTE:**
- The **Lat and Lon** have to be set to **0.**
- The **Relative location (x,y,z)** will be its **offset from the position of the main layer's POI.**
- Remember the sub-layer will also inherit all the other main layer's properties - such as scale, verticle rotation, etc.
- **Leave the URL for trigger image field blank** - this will be inherited from the main layer's POI as well.

![SubLayers-SubLayerPoiDefinition](/documentation/images/SubLayers-SubLayerPOIDefinition.png)

. 

## **Summary: SO WHAT'S THE BIG DEAL???**

Say you have an image trigger or SLAM layer: 

- You want to have a lot of POIs, **each of which is clickable to produce a completely different animation.** In geolocative this would be easy to do - just set up a lot of POIs, each with its own animation.
- For a given **trigger image** however, **you can only have one POI.** 
- In **SLAM,** you can have multiple POIs, but they have to be placed one after another by the user - **you can't control where they will be.**
- With **sub-layers,** you can **control the position exactly** because they are always placed centered at the POI of the parent layer. 
- AND **each POI** in the sub-layer can have its **own event and type of animation.**

. 

## Exercise: Set up your own sub-layer

Decide which of your layers you want to use for your **main layer,** and which of your layers to use as a **sub-layer.**

For example, I could:
- use my TamikoT_AR-SLAM layer as my main layer, 
- set **Is visible** to "No" for all my POIs except my Kini POI,
- use my geolocative layer TamikoT_AR-vosGeo as the sub-layer,
- and then I should have my Kini layer surrounded by the boxes.
- **Remember:**
  - **If the Kini has a rotation, the sub-layer boxes will too!**
  - **If some of the boxes are now behind the Kini, you won't see them, and therefore can't click on them either!**

In detail:

- In the **main layer, enter the name of your sub-layer in the **Layer name** field.**
- In the [Sub-Layer: Layer definition example](UsingPorPOIseSubLayers.md#sub-layer-layer-definition-example), just set the Refresh interval to 0.
- **For each POI** follow the [Sub-Layer: POI definition example](UsingPorPOIseSubLayers.md#sub-layer-poi-definition-example):
  - Set the **Lat and Lon** to **0**
  - Set the **Relative location (x,y,z)** to be the POIs **offset from the position of the main layer's POI.**
  - **Leave the URL for trigger image field blank** - this will be inherited from the main layer's POI as well.
  - Give each of the POIs in your sub-layer a different animation. Make them animate onClick, so you can try them out individually.

**Now open your main layer:** 
- You should see the POIs of the sub-layer centered around the POI of the main layer, but with the offsets you entered as their Relative locations.
- Try clicking on the POIs of your sub-layer - they should animation independently of the other POIs, and the of the main layer POIs.
  
Have fun!
