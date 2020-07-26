
# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# Best Practices/Troublingshooting for creating AR content
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
- ALWAYS open your project via Unity Hub, not by clicking on the Unity3d Editor icon itself. If we have to switch to another version soon, this allows you to check which version you are using to open the project. Using the wrong project can destroy it completely for ever. :-(

Using Unity:
- Save early and often! Otherwise, it'll crash just after you spent hours perfecting your project!


.
 
## Assets/asset bundles Best Practices

A deleted asset in Unity is forever gone:
- Keep your original files **outside of your Unity folder** because anything you delete in Unity is gone forever. :-(
- **Keep your original files at their original resolution,** and make lower resolution versions to use in Unity.

### How many MB is your asset bundle??? 
- Young people often balk at downloading the ARpoise app because its 40MB exceeds the storage space left on their phone.
- If they are doing a Hidden Histories tour, they have to download the asset bundles for each and every layer as well. 

- Best practices:
  - If at all possible, keep each prefab to under 1 MB.
  - Obviously videos and some audio files will have to be larger - but maybe standing on a noisy street corner is not the right place to view your masterpiece of video or sound editing???

- Look at your prefabs on your hard drive: 
  - How big is each prefab?
  - If it is more than 1 MB, look at the images, models, video, sound files that make it up. Where can you reduce its size?

### Images:
- Use **jpgs** if you need the entire image.
- Use **pngs** ONLY if you have transparency or cutouts! A cutout of your Aunt Mitsuko can look great standing in front of her store! :-)
- The **maximum size Unity will allow is 2048 x 2048 pixels**
  - Remember that your user's smartphone screen might not be that big anyway!
  - Try 1024 x 1024 pixels and see if that looks fine.

### Audio:
- Use **mp3** or even **ogg** in Unity. Use wav files *only* for your originals. 
- Does it have to be that long? Or can you loop it?
- Think of your user! 
  - They are standing on a street corner with cars driving by ... can they really hear Obaa-chan's story of her life, or is that better streamed from the Hidden Histories website?
  - Do they even have their sound turned up? What if they don't - do they miss the point of your artwork completely?

### Models/geometry:
- Use **fbx.** If you have an obj, convert it to fbx.
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

- If ARpoise can't find your asset bundle, make sure:
 - You named the asset bundle name correctly (Android: just the name; iOS: the same name but with an "i" on the end).
 - You have uploaded asset bundles for both Android and iOS.
 - You spelled the name of the asset bundle URL correctly in porPOIse (without "http://", your account not the Hidden Histories ExampleLayer account, the Android version of the name e.g. without the "i" ...).
 - You spelled the name of the prefab correctly - check the manifest file!
 

- The POI is not in the right place:
  - Did you zero the assets in Unity?
  - Are you using absolute GPS position, in which you place the POI exactly at the GPS position your want?
  - Or are you using relative position, in which the POI is at an x,y,z offset from where the user is standing?

