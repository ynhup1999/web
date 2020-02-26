var i=0;
var images=[];
var time=2000;

images[0] = 'img/monanpic1.jpg';
images[1] = 'img/monanpic2.jpg';
images[2] = 'img/monanpic3.jpg';
images[3] = 'img/monanpic4.jpg';
images[4] = 'img/monanpic5.jpg';
images[5] = 'img/monanpic6.jpg';

function changeImage()
{
	document.slide.src = images[i];
	
	if (i < images.length-1)
	{
		i++;
	}
	else
	{
		i=0;
	}
	setTimeout("changeImage()",time);
}
changeImage();



var x=0;
var img=[];

img[0] = 'img/khonggiannhahangpic1.jpg';
img[1] = 'img/khonggiannhahangpic2.jpg';
img[2] = 'img/khonggiannhahangpic3.jpg';
img[3] = 'img/khonggiannhahangpic4.jpg';

function changeImages()
{
	document.slide1.src = img[x];
	
	if (x < img.length-1)
	{
		x++;
	}
	else
	{
		x=0;
	}
	setTimeout("changeImages()",time);
}
changeImages();