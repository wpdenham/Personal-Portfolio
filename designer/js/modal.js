// PORTFOLIO MODAL OVERLAY SCRIPT 

function isVisible(id){
	var isHidden = document.getElementById(id);
	isHidden.classList.toggle("hidden");
	};

function blankOpacity(id){
	var isHidden = document.getElementById(id);
	isHidden.classList.toggle("hidden");
	};

// PORTFOLIO VIEW MORE PROJECTS SCRIPT 

function onDOMload(){

	function showextraproj(){
		var projhide = document.querySelectorAll('.hide');
		var projhidearr = Array.from(projhide);
		
		for(i=0; i<3; i++){
			projhidearr[i].classList.remove('hide');
		};

		};

	var showmorebtn = document.getElementById('showmorebtn');
	showmorebtn.addEventListener('click', showextraproj);

}
