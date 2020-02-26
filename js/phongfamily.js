var i=0;
var images=[];
var time=2000;

images[0] = 'img/phongfamily1.jpg';
images[1] = 'img/phongfamily2.jpg';
images[2] = 'img/phongfamily3.jpg';
images[3] = 'img/phongfamily4.jpg';
images[4] = 'img/phongfamily5.jpg';
images[5] = 'img/phongfamily6.jpg';
images[6] = 'img/phongfamily7.jpg';

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
