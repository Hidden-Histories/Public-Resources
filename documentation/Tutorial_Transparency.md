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
### Download the "2-sidedQuad" model asset and import into Unity Asset Bundle template project.

You may have noticed that Unity Quads have only one side - if you see them from the back, they are invisible. Often we need a Quad that looks the same from the front and the back. We have therefore created a 3D FBX model with two sides, so you can easily have the same texture on both front and back sides.

- Click here to download the model [2-sidedQuad.FBX](hiddenhistoriesjtown.org/documentation/sampleassets/2-sidedQuad.FBX).

- Open your Unity Asset Bundle Template. 
  - Remember to first open the Unity Hub, and then open the Asset Bundle Template from within Unity.
  - NOTE: If you need to **refresh your Unity skills** see [Prof. Rhonda's "Introduction to Unity3D Editor" slide deck](https://docs.google.com/presentation/d/1CzzGu4zK2a9VsXfM0WVPNGqtQfGEr30u67TTrWYI8qU/edit#slide=id.g7f6e1f9622_0_516), linked from the Hidden Histories documentation page.

- In the Project window, under Assets, create a folder and name it Kini. 
- Drag your Kini texture and the 2-sidedQuad.FBX into the folder. (Remember to **keep the original copies in a non-Unity folder!** Otherwise, if you delete the only existing copy from Unity, it is gone forever!)

- In your Kini folder, click on the 2-sidedQuad model and look at the Import Settings in the Inspector.
  - In Materials, UNCHECK "Import Materials."
  - In Animation, UNCHECK "Import Animation."
  - In Model, UNCHECK "Import Cameras" and "Import Lights."
  - **Then click "Apply" to save the changes.**

![UnityTransparency_Kini_2-sidedQuad](images/UnityTransparency_Kini_2-sidedQuad1.png)

.

### Map your Kini texture to the "2-sidedQuad" model

- Then **drag the 2-sidedQuad into the Scene or Hierarchy window** to create a new GameObject. 
  - In the Hierarchy window, rename it something like 2-sidedKini.
  - Make sure to **zero its transform to 0,0,0 in both Position and Rotation!**
  - If it disappears out of the window: make sure the 2-sidedKini is selected in the Hierarchy window, move your cursor into the Scene window and press "f" on your keyboard to "focus" the 2-sidedKini back into the middle of the Scene window.

- Now **drag the Kini texture onto the 2-sidedKini GameObject.** It will look horrible and will not be cut out.

(Click on image to see larger version.)

![UnityTransparency_Create2-sidedKini](images/UnityTransparency_Create2-sidedKini1.png)

.

### Set Material properties in Inspector to make background transparent:

- In the Inspector, the Material for the KiniQuad now is named after the texture file and includes the texture under Main Maps/Albedo.
- In the Inspector window, change the **Rendering Mode to "Fade."** The background of the Kini texture will now be transparent now in Scene window.
- In the Forward Rendering Options, also **unclick Specular Highlights and Reflections.** (These options are useful if you want to make window glass panes that are transparent but still reflect light. If these are checked, you may see a ghost image when the texture is supposed to be fully transparent.)
- Your 2-sided Kini is finished!
  - Drag it into your Project/Assets/Kini folder to turn it into a prefab.
  - Assign it to your asset bundle, re-build the asset bundle, upload it to your Hidden Histories account and use it in porPOIse as usual.
  - Forgot how to do this? Go to the Hidden Histories documentation and re-read [Tamiko's official ARpoise guide to Creating AssetBundles in Unity](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/CreatingAssetBundles.md#-hidden-histories).

![UnityTransparency_SetKiniMaterialToFade](images/UnityTransparency_SetKiniMaterialToFade.png)

.


