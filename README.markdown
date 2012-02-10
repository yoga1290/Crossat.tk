
More exciting than my old dots game,<a href="http://yoga1290.appspot.com/dots">yoga1290.appspot.com/dots</a><br>
1st,It was <a href="http://pastebin.com/QTHuKmrj">C# school course project</a> that was ported to <a href="http://github.com/yoga1290/AppEngine/blob/master/yoga1290/dots.py">AppEngine Python</a>.
It used Flood fill to calculate the area of polygons in some certain fixed patterns.
***
<img src="http://a.yfrog.com/img877/4268/jqq.png">
## what was cool in dots,
It saves time creating player accounts,instead it uniquely identify players by their IP Addresses
...which was little hard to debug,may require other machine or virtual machines

## what was wrong with dots,
It would work fine on localhost,however,it doesn't uses any kind of database or GQL or whatever and this made it fail in the real world,where the game is loaded on multiple CPUs!

***

<img src="http://a.yfrog.com/img877/4568/5cgg.png">
## How different is <a href="http://crossat.tk">Crossat.tk</a>,
is players are free to draw points anywhere around a certain canvas & the winner will be the one who can fill/make the biggest Polygon....
...well, that was my idea at first,however, I thought counting the interesction points per play is much easier (& with less debugging :D)!
so,the winner here is the one who do more interesctions...

## what makes it better,<br>
<img src="http://a.yfrog.com/img532/3404/jfceu.png"><br>
It doesn't save any unnecessary information about a game
	...saves only the last played position (x,y) per game.

## It's open!
...It doesn't prevent cheaters to cheat!...doesn't do any IP checking like dots.
And this makes it free to be played on 1 single machine :)

## Some cute Geometry Tutorials:
- <a href="http://paulbourke.net/geometry/lineline2d/"> Intersection point of two lines </a>
- <a href="http://www.mathopenref.com/coordpolygonarea2.html"> Algorithm to find the area of a polygon </a>
