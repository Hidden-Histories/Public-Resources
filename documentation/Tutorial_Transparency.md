# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# Tutorial: Transparent materials in Unity and porPOIse

**NOTE:** More background documentation is linked from the [Hidden Histories Artist Documentation Overview Page](http://hiddenhistoriesjtown.org/documentation).

- For general tutorials on **using Unity,** see the section **"How to create your own AR artworks".**
- For tutorials on **using porPOIse,** see the section **"Editing augments with the ARpoise porPOIse interface".**
- This tutorial assumes you know how to use Photoshop or other image editing programs to create PNG files with partial or cutout transparency.

.
## Overview

This document covers how to set up transparent and semi-transparent Materials in Unity and porPOIse:
- How to create a prefab that can use the **fade animation in porPOIse.**
- How to create a 1-sided or 2-sided **cutout image** (for paned windows, floating text, cutout figures of people, etc.)

. 
## Unity Material transparency for fade animation in porPOIse

For the animation Type "fade," the prefab must have its Unity Material Rendering Mode set to Fade or Transparent. 
- This applies to solid materials, semi-transparent materials or material textures with transparent areas or cutouts.
- Read the differences between Fade and Transparent in the Unity Manual section on [Rendering Mode](https://docs.unity3d.com/Manual/StandardShaderMaterialParameterRenderingMode.html).
- NOTE: If there is still a ghost image when you thought it would be completely invisible:
  - use the Rendering Mode "Fade" instead of "Transparent,"
  - ... or uncheck Forward Rendering Options "Specular Highlights" and Reflections."
- For the Fade animation in porPOIse, see [Animation settings](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/UsingPorPOIse_REF-Layer-POI-Properties.md#animation-settings) in the document "PorPOISe Reference: Layer and POI Properties."

(Click on image to see larger version.)

![RenderingModeFade](images/UsingPorpoise_UnityTransparency1.png)

.

## How to create a prefab with a cutout image in Unity, and use it in porPOIse

![Kini asset](images/Kini_cutout390x512.png)

### Download Kini cutout .png image texture asset:
- We will use the cutout image of King Ludwig II of Bavaria, affectionately called "the Kini" by his subjects.
- You can download the image here: http://www.arpoise.com/images/Kini_cutout390x512.png. In the browser the background will look white, but it is in fact transparent.

### Best practice: Resize the image (in Photoshop or another image editor) to a power of 2:
- The image is 390x512 pixels, but Unity will rerender it to a power of 2, e.g. 256x256, 512x512, 1024x1024, etc. 
- In Unity the image will often be distorted to a square image anyway, such as when you map a texture image to a Quad or cube etc. 
- So it is best practice to only use square images that are a power of 2: change the canvas size in Photoshop to 512 x 512 while preserving the Kini's proportions.

![Kini_changeCanvasSize](images/Kini_changeCanvasSize.png)

.
### Download the "2-sidedQuad" model asset

You may have noticed that Unity Quads have only one side - if you see them from the back, they are invisible. Often we need a Quad that looks the same from the front and the back. We have therefore created a 3D FBX model with two sides, so you can easily have the same texture on both front and back sides.

- Click here to download the model [2-sidedQuad.FBX](hiddenhistoriesjtown.org/documentation/sampleassets/2-sidedQuad.FBX).

- Open your Unity Asset Bundle Template. Remember to first open the Unity Hub, and then open the Asset Bundle Template from within Unity.
- NOTE: If you need to **refresh your Unity skills** see [Prof. Rhonda's "Introduction to Unity3D Editor" slide deck](https://docs.google.com/presentation/d/1CzzGu4zK2a9VsXfM0WVPNGqtQfGEr30u67TTrWYI8qU/edit#slide=id.g7f6e1f9622_0_516), linked from the Hidden Histories documentation page.

- In the Project window, under Assets, create a folder and name it Kini. 
- Drag your Kini texture and the 2-sidedQuad.FBX into the folder. (Remember to **keep the original copies in a non-Unity folder!** Otherwise, if you delete the only existing copy from Unity, it is gone forever!)

- In your Kini folder, click on the 2-sidedQuad model.

- Then **drag the Kini texture onto the KiniQuad.** If you are not allow to drag it onto the Quad, or can't see the texture, you're looking at the back side! Rotate your view until you see the texture - but it's not cutout. :-(


- Create a Quad 3D GameObject and name it "KiniQuad." 
- Make sure its transform is **zeroed at 0,0,0 in both Position and Rotation!**
- Can't see KiniQuad - even though it's selected in the Hierarchy window, and all its components appear in the Inspector? 
  - Make sure you are looking at the Scene window.
  - With KiniQuad selected in the Hierarchy window, move your cursor into the Scene window and press "f" on your keyboard to "focus" KiniQuad into the middle of the Scene window.
  - If you still can't see it, make sure the Gizmo/Selection Outline is on, so the KiniQuad has an orange outline, even if you are looking at it from behind.

![UnityTransparency_FindingTheQuad](images/UnityTransparency_FindingTheQuad.png)

.
  - STILL can't see it, even though the axes are in the middle of your Scene window? Quads are one-sided, and you're probably looking at the back side! Rotate your view in the Scene window - you can click on the X or Z axes. (DON'T rotate the KiniQuad itself - its transform should stay zeroed.)

.
![UnityTransparency_FindingTheQuad1](images/UnityTransparency_FindingTheQuad1.png)

.

### Set Material properties in Inspector to make background transparent:
- In the Project window, under Assets, create a folder and name it Kini. Drag your Kini texture into the folder.
- Then **drag the Kini texture onto the KiniQuad.** If you are not allow to drag it onto the Quad, or can't see the texture, you're looking at the back side! Rotate your view until you see the texture - but it's not cutout. :-(
- In the Inspector, the Material for the KiniQuad now is named after the texture file and includes the texture under Main Maps/Albedo.
- In the Inspector window, change the **Rendering Mode to "Fade."** The background of the Kini texture will now be transparent now in Scene window.
- In the Forward Rendering Options, also **unclick Specular Highlights and Reflections.** (These options are useful if you want to make window glass panes that are transparent but still reflect light. If these are checked, you may see a ghost image when the texture is supposed to be fully transparent.)

(Click on image to see larger version.)

![UnityTransparency_KiniQuad1](images/UnityTransparency_KiniQuad1.png)

.

Make sure the Cutout Quad’s Transform is still zeroed, and then duplicate it by selecting it in the Hierarchy window and clicking Ctrl-D (or Apple-D). Cutout (1) will be right on top of the first one, so you can’t see it yet.
Change the y rotation of the duplicate Quad to 180°. Now both sides should look the same, showing the cutout image.
Create an empty GameObject, make sure it is zeroed, rename it CutoutGroup, and drag both Cutout and Cutout (1) into the group.
Create a prefab out of the CutoutGroup, add it to your asset bundle and upload it to your account.
Use the CutoutGroup as a prefab in one of your POIs.
NOTE: you could also just use a single Quad and then check Use Relative angle in porPOIse, but I wanted you to go through the process of creating a 2-sided cutout object, as they are often useful.
