function slideUp(){

	const element = document.querySelectorAll('.anim');
	
	document.addEventListener('scroll', checkPosition)
	
	function checkPosition(){
	
	for (i = 0; i < element.length; i++){
			const elementHeight = element[i].clientHeight;
			let winHeight = window.innerHeight;
			let yPos = window.scrollY;
			let scrollPos = yPos + winHeight;
			let elPos = element[i].getBoundingClientRect().top + yPos + elementHeight;

			if (scrollPos > elPos - 750){
				element[i].classList.add('fadeInUp');
			}	

		}

	}

	
}

function expandForm(){
	const form = document.querySelector('.form');
	
	const letsTalkBtn = document.getElementById('letsTalk');
	
	letsTalkBtn.addEventListener('click', function(){
		form.classList.toggle('formhidden')});
	
}






