
# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# Best Practices/Troublingshooting
<< Go back to [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

.

## Overview

In this document we suggest best practices to follow in both your workflow creating AR artworks, and in creating content for the artwork itself. These notes can apply to the entire workflow, from creating your assets, to putting them together in Unity to create a prefab, to setting them up as POIs in porPOIse.
- Remember: computers and smartphones are stupid, you have to think for them!
- One misplaced letter/number/space can make your artwork fail to work. Read the directions carefully!

.
 
## Workflow Best Practices

Download Unity: 
(See [Tamiko's Creating porPOIse Asset Bundles in Unity]( https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/CreatingAssetBundles.md#-hidden-histories) or [Prof. Rhonda's "Introduction to Unity3D Editor" slide deck](https://docs.google.com/presentation/d/1CzzGu4zK2a9VsXfM0WVPNGqtQfGEr30u67TTrWYI8qU/edit#slide=id.g7f6e1f9622_0_516)
- ALWAYS first install the **Unity Hub,** and download versions to it, not directly onto your computer.
- ONLY use Unity3D Editor version **2018.3.14** as asset bundle creation does not work in other versions. (Think of "pi": 2018.π)
  - This version can only be downloaded from the [Unity Download Archive](https://unity3d.com/get-unity/download/archive):
  - Click on the Unity 2018.x tab,
  - scroll down to Unity 2018.3.14, 26 Apr, 2019,
  - and then click on Unity Hub to download it to your Unity Hub.

**ALWAYS open your project via Unity Hub,** *not* by clicking on the Unity3d Editor icon itself! The Unity Hub remember which version you last used to open a project. 
- Using the wrong version to open a project can corrupt it completely for ever, even if you realize your mistake and tell Unity not to open the project in that wrong version. :-(
- If I just spent hours or days getting a version of my assets that I want, I will often make a zip file of the project and add the date to the name, so I have a backup just in case. 

Using Unity:
- Save early and often! Otherwise, it'll crash just after you spent hours perfecting your project!


.
 
## Assets/asset bundles Best Practices

A deleted asset in Unity is forever gone:
- Keep your original files **outside of your Unity folder** because anything you delete in Unity is gone forever. :-(
- **Keep your original files at their original resolution,** and make lower resolution versions to use in Unity.

### How many MB is your asset bundle??? 
- An asset bundle that is over 5 MB might not download over the mobile network, and then the layer will not work at all. :-(
- Testing your layer at home:
 -  Usually means you are using wifi to download the asset bundles, so they will download quickly with no problem.
 -  TURN OFF your wifi and try your layer using your mobile network, and see if that works as well.
 -  Remember that other people might have much slower download rates than you do, if they have a cheap contract.
- Young people often balk at downloading the ARpoise app because its 40MB (!!!) exceeds the storage space left on their phone!
- Remember that any visitor doing a Hidden Histories tour will be downloading the asset bundles for each and every layer as well!

- Best practices: Look at your prefabs and asset bundle(s) on your hard drive: 
  - Keep each asset bundle under 5 MB. 
  - Split up larger asset groups into several different asset bundles.
  - If at all possible, keep each prefab to under 1 MB.
  - Obviously videos and some audio files will have to be larger - but maybe standing on a noisy street corner is not the right place to view your audio or video masterpiece???


### Images:
- Use **jpgs** if you need the entire image. The smaller the better!
- Use **pngs** ONLY if you have transparency or cutouts! A cutout of your Aunt Mitsuko can look great standing in front of her store! :-)
- The **maximum size Unity will allow is 2048 x 2048 pixels** and this is WAY to be for AR!
  - Remember that your user's smartphone screen might not be that big anyway!
  - Try 1024 x 1024 pixels and see if that looks fine. If it does, make it even smaller, say 512x512 or 256x256 or ... ;-)

### Audio:
- Use **mp3** or even **ogg** in Unity. Use wav files *only* for your originals. 
- Does it have to be that long? Or can you loop it?
- Think of your user! 
  - They are standing on a street corner with cars driving by ... can they really hear Obaa-chan's story of her life, or is that better streamed from the Hidden Histories website?
  - Do they even have their sound turned up? What if they don't - do they miss the point of your artwork completely?

### Models/geometry:
- An **fbx** model can contain "internal" animations that can't be done in porPOIse, for instance the way a fish or dragon bends its body while moving. An **obj** cannot, and in general is larger in size than an fbx version of the same model. If your obj is larger than 1 MB, try converting it to fbx.
- Mapping a texture to a complex model has to be done in a 3rd party program (Blender, Maya, etc.). When you import the model, the texture mapping coordinates will be preserved, so when you drag the texture onto it in Unity, it should map correctly. 
- How large is it? 
  - Many models gotten from the web have been modeled at maximum resolution for use in films.
  - We need low polygon models created for games - but look at the size of it in MB, and use that as your metric.
  - There are programs that reduce high poly models to lower poly versions (to be researched ...)
  
### Units/Scaling/Transform/Rotation problems: 
 - Unity uses meters, whereas many 3D modeling systems use inches or centimeters
 - Use scale consciously: Can you see the whole object in the ARpoise app? Do you want to see all of it? If not, scale it!
 - Does it rotate in a funny way? Then either you did not zero it in Unity, or the pivot point is in the wrong place.
 
- If you can't see it at all:
  - You might be *inside* it - "solid" objects are invisible if you are inside them.
  - It might be so far away that you can't see it.
  - Did you remember to zero it in Unity? If not, it might be somewhere else than where you thought it would be!
  
### porPOIse troubleshooting

* If ARpoise can't find your asset bundle, make sure:
   * You named the asset bundle name correctly (Android: just the name; iOS: the same name but with an "i" on the end).
   * You have uploaded asset bundles for both Android and iOS.
   * You spelled the name of the asset bundle URL correctly in porPOIse (without "http://", your account not the Hidden Histories ExampleLayer account, the Android version of the name e.g. without the "i" ...).
   * You spelled the name of the prefab correctly - check the manifest file!
 

- The POI is not in the right place:
  - Did you zero the assets in Unity?
  - Are you using absolute GPS position, in which you place the POI exactly at the GPS position your want?
  - Or are you using relative position, in which the POI is at an x,y,z offset from where the user is standing?

