var i=0;
var images=[];
var time=2000;

images[0] = 'img/1bed1.jpg';
images[1] = 'img/1bed2.jpg';
images[2] = 'img/1bed3.jpg';
images[3] = 'img/1bed4.jpg';
images[4] = 'img/1bed5.jpg';
images[5] = 'img/1bed6.jpg';
images[6] = 'img/1bed7.jpg';

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

window.onload = changeImage;
