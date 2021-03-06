
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Creating Sub-Layers

## Overview
This tutorial shows you how to use sub-layers to create more complex POIs in **ARpoise** or **AR-vos**.

A **sub-layer:** 
- is *almost* like a regular *geolocative* layer, 
- BUT can be embedded in another **"parent" layer** via the **Layer name** field in one of the parent layer POIs (see [SlamBoxes: POI BellCube image]. 

The entire sub-layer:
- Is **referenced from a single "parent" POI** of the parent layer.
- Is **centered at the position of that parent POI** (i.e. the entire sub-layer's Relative position 0,0,0 = position of parent POI).  
- **Inherits all the properties** (scale, GPS or Relative position, animations etc.) **of the parent POI.**
- **BUT: each POI in the sub-layer can have its own unique animation types and events as well.**

## DO I NEED SUB-LAYERS???

You may not need to use sub-layers at all. Here are two situations where they can help you, however.

Sub-layers are especially useful if you are using **image trigger or SLAM,** and therefore **can only place a single POI,** but want **different parts of that content to each have its own animation type and/or event.** 

### Example: Timeline
  - You want to have a timeline that the user places on the sidewalk with SLAM, or on a wall with image trigger.
  - For each year in the timeline, if the user **clicks on the year,** different content should fade into view.
  - (In geolocative AR this would be easy to do - just set up a lot of POIs, each with its own animation and animation event.)

The problem:
  - For a given **trigger image** you can only have **one POI** - and that's the entire timeline. If the years are part of that POI, if you click on one year, you have clicked on the whole POI. 
  - In **SLAM:** 
    - You can have multiple POIs, but they have to be placed one after another by the user - **you can't control where they will be placed, or their relationship to each other.** 
    - So for instance, each POI could be the number of a year, but you can't compell the user to place them in linear order with respect to each other.

Sub-layer solution:
- The **Timeline layer** contains just one POI, the **Timeline-axis prefab.**
- The **Timeline-axis** POI references the **Date sub-layer** in its **Layer name** property.
- The **Date sub-layer** has a POI for each year of interest (e.g. Year1909 prefab, Year1941 prefab, etc.)
- In the Date sub-layer, with Relative position (x,y,z) you can place each Year POI exactly with respect to the origin 0,0,0, which is also exactly the same as the origin of the parent Timeline-axis layer. 
  - AND: **each Year POI** in the sub-layer can have its **own event** (e.g. onClick) and **own type of animation** (e.g. fade in, scale up, etc.) 

. 

## Example SLAMBoxes: one tap places all these boxes

You already have experienced a layer with sub-layers: the example with the layer title **Example SLAMBoxes** of the [Using the AR-vos app tutorial](UsingAR-vosApp.md#slam-example).
- One tap will place 5 boxes: a yellow center box surrounded by four other boxes. The central yellow cube seems to be static, whereas all the other boxes have various animations. 
- BUT if you click the yellow center box, *all* the cubes start rotating around, with the yellow box rotating around its own axis at the origin. Since the other 4 cubes also have their own animations, it seems that the boxes have a very complex behavior.

. 

## Example SLAMBoxes: layer definition

Please note the following in the porPOIse definition of the layer Example SLAMBoxes:
- The **Layer name** is **Default-SlamBoxes.** 
- This layer name is *above* the form, just under the blue buttons "Log out," "home" and "Copy layers."
- The **Layer title** (the first property in the form) is *not the same* - it is **Example SLAMBoxes.** 
- THIS IS AN IMPORTANT DISTINCTION when we look at the sub-layer!
- The entire layer consists of only a single POI, **BellCube.** 
- This POI is just the single yellow box that is at the center. Of course you can't tell this from the information you have right now, but let's look at the POI properties.

![SubLayers-DefaultSLAMBoxes_LayerDefinition](/documentation/images/SubLayers-DefaultSLAMBoxes_LayerDefinition.png)

. 

## Example SLAMBoxes/BellCube POI definition

In the POI BellCube definition, the **Layer name** references a sub-layer **Slam-Example.** 
- The single, central POI **BellCube** has a rotate animation when clicked (and also a bell sound that is part of the prefab, and gives the prefab its name). 
- As this POI references the sub-layer **Slam-Example,** this sub-layer is shown whenever the parent POI **BellCube** appears.
- When you click the parent POI **BellCube,** the sub-layer **Slam-Example** is rotated along with it. Remember that they still keep their individual animations as well!

![SubLayers-DefaultSLAMBoxes_PoiDefinition2](/documentation/images/SubLayers-DefaultSLAMBoxes_PoiDefinition2.png)

. 

## Sub-Layer Slam-Example: Layer definition

The sub-layer Slam-Example doesn't look much different from a normal layer, but:
- It has no **Layer title,** since it won't show up anywhere anyway.
- The **Refresh interval** is set to 0, so the sub-layer will have the same refresh rate as the main layer. 
- Its POI List contains the four cube POIs that will appear surrounding the parent layer's yellow BellCube POI. 

### IMPORTANT: 
- The **Layer name** you need to identify this as your sub-layer is at the top of the webpage just under the blue links.
- It is NOT the **Layer title,** which we left blank to make this clear. 
- It must be spelled *exactly* as shown on your sub-layer page, otherwise it will not be recognized! (You can select and copy/paste it to make sure you get it right.)

![SubLayers-SubLayerDefinition2](/documentation/images/SubLayers-SubLayerDefinition2.jpg)

. 

## Sub-Layer Slam-Example: POI definition

- Each of the POIs in the sublayer is a simple POI, defined as in the example.
- **Each POI can have an animation of its own, different from all the others and in addition to the animations it might inherit from the parent POI in the parent layer.**

**NOTE:**
- The POI's **Lat and Lon** have to be set to **0.**
- The **Relative location (x,y,z)** of this POI is its **offset from the position of the parent POI in the parent layer.**
- Remember every POI inthe sub-layer will also inherit all the parent POI's properties - such as scale, verticle rotation, etc.
- **Leave the URL for trigger image field blank** - this will be inherited from the parent layer's POI as well.

![SubLayers-SubLayerPoiDefinition](/documentation/images/SubLayers-SubLayerPOIDefinition.png)

. 

## Exercise: Set up your own sub-layer

Decide which of your layers you want to use for your **parent layer,** and which of your layers to use as a **sub-layer.**

For example, if I wanted to surround my SLAM Kini with colorful boxes, I would:
- Use my "TamikoT_AR-SLAM" layer as my parent layer. 
- To get rid of the other POIs (so I just see the Kini POI), I set **Is visible** to "No" for all my other POIs.
- Use my geolocative layer "TamikoT_AR-vosGeo" as my sub-layer. It still has 6 colorful boxes on 4 sides, plus one up and one down. 

**Remember:**
- **If the Kini is rotated in space (in order to be standing correctly on the ground), the sub-layer boxes will be rotated too!**
- **If some of the boxes are now behind the Kini, you won't see them, and therefore can't click on them either!**

In detail:

- In the **parent layer: enter the name of your sub-layer** in the **Layer name** field.
- In the [Sub-Layer: Layer definition example](UsingPorPOIseSubLayers.md#sub-layer-layer-definition-example), set the **Refresh interval** to **0.**
- **For each POI** follow the [Sub-Layer: POI definition example](UsingPorPOIseSubLayers.md#sub-layer-poi-definition-example):
  - Set the **Lat and Lon** to **0**
  - Set the **Relative location (x,y,z)** to be the POI's **offset from the position of the main layer's POI.**
  - **Leave the URL for trigger image field blank** - this will be inherited from the parent layer's POI as well.
  - Give each of the POIs in your sub-layer a different animation. Make them animate onClick, so you can try them out individually.

**Now open your main layer:** 
- You should see the POIs of the sub-layer centered around the POI of the parent layer, but with the offsets you entered as their Relative locations.
- Try clicking on the POIs of your sub-layer - they should animation independently of the other POIs, and independently of the parent layer POI as well.
  
Have fun!
