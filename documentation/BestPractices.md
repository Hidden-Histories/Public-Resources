
# ![Hidden Histories Logo](images/hiddenhistories-logo.png) Hidden Histories

# Best Practices for creating AR content
<< Go back to [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

.

## Overview

In this document we suggest best practices to follow in both your workflow creating AR artworks, and in creating content for the artwork itself. 
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
  
  


