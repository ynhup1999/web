var i=0;
var images=[];
var time=2000;

images[0] = 'img/gympic1.jpg';
images[1] = 'img/gympic2.jpg';
images[2] = 'img/gympic3.jpg';
images[3] = 'img/gympic4.jpg';
images[4] = 'img/gympic5.jpg';

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

img[0] = 'img/ptgympic1.jpg';
img[1] = 'img/ptgympic2.jpg';
img[2] = 'img/ptgympic3.jpg';
img[3] = 'img/ptgympic4.jpg';

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