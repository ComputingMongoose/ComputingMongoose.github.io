var currentEnlargedImage=false;

function enlargeImage(ev){
	if(currentEnlargedImage!==false){
		currentEnlargedImage.style.width="200px";
	}
	if(currentEnlargedImage==ev.srcElement){
				currentEnlargedImage=false;
	}else{
		ev.srcElement.style.width="100%";
		ev.srcElement.style.height="auto";
		ev.srcElement.style.transition="width 0.5s ease";
		currentEnlargedImage=ev.srcElement;
	}
}
