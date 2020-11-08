# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# Tutorial: Transparent materials in Unity and porPOIse

**NOTE:** More background documentation is linked from the [Hidden Histories Artist Documentation Overview Page](http://hiddenhistoriesjtown.org/documentation).

- For general tutorials on **using Unity,** see the section **"How to create your own AR artworks".**
- For tutorials on **using porPOIse,** see the section **"Editing augments with the ARpoise porPOIse interface".**

.
## Overview

This document covers how to use transparent and semi-transparent Unity Materials in porPOIse:
- How to create a prefab that can use the **fade animation in porPOIse.**
- How to create a 1-sided or 2-sided **cutout image** (for paned windows, floating text, cutout figures of people, etc.)

. 
## Unity Material transparency for fade animation in porPOIse

For the animation Type "fade," the prefab must have its Unity Material Rendering Mode set to Fade or Transparent. 
- This applies to solid materials, semi-transparent materials or material textures with transparent areas or cutouts.
- Read the differences between Fade and Transparent in the Unity Manual section on the [Rendering Mode](https://docs.unity3d.com/Manual/StandardShaderMaterialParameterRenderingMode.html).
- For the Fade animation in porPOIse, see [Animation settings](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIse_REF-Layer-POI-Properties.md#animation-settings) in the document "PorPOISe Reference: Layer and POI Properties."

![RenderingModeFade](images/UsingPorpoise_fadeAnim_UnityRenderingMode.png)

.
## How to create a cutout image in Unity, and use it in porPOIse

Kini cutout .png asset:
- We will use the cutout image of King Ludwig II of Bavaria, affectionately called "the Kini" by his subjects.
- You can download the image here: http://www.arpoise.com/images/Kini_cutout390x512.png In the browser the background will look white, but it is in fact transparent.
- The image is 390x512 pixels, but it is best to only use square images that are a power of 2, e.g. 256x256, 512x512, 1024x1024, etc. So resize the image in Photoshop:
  - 


In Unity:
- Create a Quad 3D GameObject and name it "Kini." 
- Make sure its transform is zeroed at 0,0,0 in both Position and Rotation!
- Create a folder for this asset and drag your texture into the folder
- Create a Material that:
     * Uses a cutout .png texture in the Main Maps/Albedo field. This could be useful for a text, a figure of a person, a fence ...
Allow the transparency to show by setting the Rendering Mode to Fade.
Drag the Material onto your Cutout Quad and scale the Quad as needed so the image has the correct proportions.
Rotate the scene so you can see the backside of the Cutout Quad - it will be invisible, since Quads only have one side.
Make sure the Cutout Quad’s Transform is still zeroed, and then duplicate it by selecting it in the Hierarchy window and clicking Ctrl-D (or Apple-D). Cutout (1) will be right on top of the first one, so you can’t see it yet.
Change the y rotation of the duplicate Quad to 180°. Now both sides should look the same, showing the cutout image.
Create an empty GameObject, make sure it is zeroed, rename it CutoutGroup, and drag both Cutout and Cutout (1) into the group.
Create a prefab out of the CutoutGroup, add it to your asset bundle and upload it to your account.
Use the CutoutGroup as a prefab in one of your POIs.
NOTE: you could also just use a single Quad and then check Use Relative angle in porPOIse, but I wanted you to go through the process of creating a 2-sided cutout object, as they are often useful.
