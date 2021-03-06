
# ![Hidden Histories Logo](/images/hiddenhistories-logo.png) Hidden Histories 
<< Need an overview? Go to the [Hidden Histories Artist Documentation Overview](http://hiddenhistoriesjtown.org/documentation).

Or puzzled by the lingo? See the [Glossary of Terms >>>](https://github.com/Hidden-Histories/Public-Resources/blob/master/documentation/ARpoiseGlossary.md#-hidden-histories-artists).

.

# Tutorial: Remote Site Visit and Simulation

These are the steps I go through **before** going to a new site to test out a new AR layer. Right now in the corona lockdown it's even harder to get to the sites in Japantown, if you live far away. Do as much as possible before you go, to make the best use of your time there on site.

If you are creating an AR layer that is to be viewed at a very specific site, it is important to understand the physical site itself. Even if you think you "know" the site:
- **Collect images** and create mockup visualizations of your artwork with photos of the site. 
- Examine the **satellite images of the site on google maps** to understand the site better.
- Use this information to find a somewhat comparable site near where you live, so you can **simulate your new AR layer at home** as much as possible, before you make the time consuming trek in to Japantown.

.

## Create visualizations of your artwork on site in Photoshop

NOTE: I will use the **Issei Building** in San Jose Japantown as an example. I am doing this on my Windows PC, and the commands and behavior of the websites might be different depending on what you are using.

- Collect all the images you have of the site (and ask everybody else if they have good ones too.)
- Go on the Internet, collect all the good-looking images you can find of the site.

### USE IMAGES LIKE THIS TO MAKE PHOTOSHOP MOCKUPS OF YOUR ARTWORK!

Here's an image I stole off the JACL website (no, the Kini never visited there ...):

![JACL-IsseiMemBldg-Kini](images/JACL-IsseiMemBldg-Kini.png)

This is your best way to make a visualization of what your artwork could look like - not just to communicate your idea to other people, but even to communicate with yourself. If your screenshots of your AR layer on site don't look as good as your visualization does, you can use that to figure out how to make the AR layer better! ;-)

### Use these images to plan your AR experience

#### Where should the artwork go?

- You need space for your AR. The lawn to the right is pretty full with the ramp, but the lawn to the left is open.
- Geolocative will of course work fine - if you're OK doing a 360° installation, since some of it will be behind you, whether you like it or not!
- There would be plenty of space on the left lawn to put 3D AR content with SLAM - if they keep their lawn mown, so that the app perceives the lawn as a flat plane.
- With image trigger:
  - Perhap the sign, or the front porches with their details could be used as image triggers. 
  - As always, plants and cast shadows could give you problems - but try it and see if it works at different times of the day.
  - This images gives a nice clear view of the sign and of at least the steps and front doorway. Maybe we can cut out one or both as trigger images for our AR layer?

#### Where should your viewers stand?

- They'll get mad at you if you trample their lawn, or block their pathway!
- So here I would say on the sidewalk in front of the left lawn.
- Also, when we look at the site on Google Maps, you'll see that on the right a tree will create a bottleneck, if viewers are standing here and pedestrians need to get past.

.

## Use Google Maps to measure the site

So how far back is that sign, or the stairs? You can use Google Maps to roughly measure that distance. Later, we'll use that measurement to select a site near you to use for your simulation.

I'll give basic directions on how to use Google Maps, but here is the [Google Maps support page](https://support.google.com/maps/answer/144349).

If I were you, I'd make tons of screenshots as documentation during the process described below!

- Go to [Google Maps](https://www.google.com/maps) in your browser and search for your site.
- Note the **scale bar** - we will need this!
- Click on the **satellite** inset to switch to satellite view.

![googlemaps_SatelliteIcon-ScaleBar](images/googlemaps_SatelliteIcon-ScaleBar.png)

.

This lets you look at the site in a number of ways. **Zoom in** (with the **+/- buttons**, or with mouse wheel) so you are centered on the building or site of interest, but can still see the sidewalk, street, surrounding buildings etc. 

#### Note the orientation of your site

Look at the red/white compass between the rotation arrows. 
- If it's not pointing straight up, click on it so it is pointing due north.
- Now you can see that 5th street does NOT run N - S (surprise!) It is about at a 30° angle, running NW - SE.

![googlemaps_rotate-3D-zoom](images/googlemaps_rotate-3D-zoom.png)

.

Now zoom in, rotate the view so you can see the front lawn of the building.

#### Use that scale bar to measure the distances

- It's roughly 5 meters from sidewalk to the sign, which is at the back edge of the lawn.
- From the sidewalk to the building facade it's about 7m to the steps or the facade.

![googlemaps_2D-measurements](images/googlemaps_2D-measurements.png)

.
## Find a location similar to your site - but near your home base.

An ideal location would be:
- Right by your house, so you can run in and out to use your laptop, charge your batteries, etc.
- The street running in the same orientation as your site, so you could practice using the same orientation in your AR layer.
- With the building about the same size as your site building, in the case of the Issei Mem. Building, 2 stories.
- With the building the same distance back from the sidewalk as your site building, so you can practice using the same distance between viewer and building - and the same amount of space in between.

Go to your own house in Google Maps:
- Zoom in until the scale bar is the same value as the scale bar in your images of your Japantown site. In the case above, this is 10 meters.
- In my neighborhood the front yards are much smaller, and the streets tend to run NE - SW, instead of the opposite like in Japantown.
- Since I know that with geolocative, I have to build 360° installations anyway, I won't worry about the orientation.
- Well, the buildings here are 5 stories, not two! But I can think about that and just measure it by eye two stories up.
- The depth between viewer standing point and the building facade is more critical, since that affects the relative scaling of my artworks with respect to the building.

Finally I found a building in my neighborhood with a similarly sized front lawn.
- Once I get my AR layer set up with a couple of POIs, I can go there and see how they look - remembering that the orientation is different, and that I have to pretend that the building is only 2 stories instead of 5.
- It'll be much easier for you to find a suitable building, since the building styles will be more similar!

![googlemaps_Munich-Measure](images/googlemaps_Munich-Measure.png)

.

## Use Google Maps 3D and Street View to get even more familiar with the site

- Click on the **3D** button to get a bird's eye view of the 3D model of the site.
- Use the **arrows** to the sides of the compass to **rotate** large amounts - or better yet, **Control+Left-Mouse-Drag** (sorry, don't know on a Mac!) to rotate and tilt the view so you can really view the building from all sides.

![googlemaps_3Dview1](images/googlemaps_3Dview1.png)

.

Did you notice the little yellow figure in the lower right hand corner of the above image?
- Click and drag it onto a street on the googlemap to go into Google Street View.
- This gives you a panoramic photographic view of the building.

This is a great way to get photos showing your site! Take screenshots and save for making mockups later.

- Use the +/- buttons on the right hand side to zoom in and out (or on Windows, the mouse wheel)
- NOTE: If you zoom out a lot, you will go back out to 3D satellite map view.

.
![googlemaps_StreetViewDetail](images/googlemaps_StreetViewDetail.png)

.

## Visting the Real Site

Now, when you finally go to your site, you'll have tested out your layer as much as possible at home, at a site that has some spatial simularities with your real site.

We have built porPOIse so you can stand directly at the real site, make changes in the positioning of your POIs and see the results immediately in your app layer.

If you have a tablet or a small laptop, that is the ideal device with which to edit your layers on site. (You can also use a smartphone, but it much more difficult to edit the porPOIse form in a tiny display!)
- If your tablet has a **mobile network chip,** that's all you need. 
- Otherwise, if it has only wifi or if you only have a laptop, set up a **wifi hot spot on your smartphone** and access the Internet that way. (Setting up a wifi hot spot on your phone is different for every device - check in the Internet!)
- **Make sure you have the URL of your porPOIse account with you - AND your password!**
- On site, log in to your porPOIse account as always, make changes in porPOIse, SAVE, then view in the app.




