var position = $(window).scrollTop();

function listener (e) {
    var scroll = $(window).scrollTop();
    var screen = $(document).width();
    e.preventDefault();
    if (screen >= 1183) {
		if (scroll > 0) {
		    if(scroll > position) {
		    	//console.log('scrollDown');
			    document.getElementById("barra-topo").style.display = "none";
			    document.getElementById("logo").style.width = "125px";
			    document.getElementById("menu-principal").style.background = "#FFFFFF";
		    } else {
		    	//console.log('scrollUp');
			    document.getElementById("barra-topo").style.display = "block";
			    document.getElementById("barra-topo").className = "container-fluid estilo2";
			    document.getElementById("menu-principal").style.background = "#FFFFFF";
		    }
	  	} else {
	    	document.getElementById("barra-topo").style.display = "block";
	    	document.getElementById("barra-topo").className = "container-fluid estilo1";
	    	document.getElementById("logo").style.width = "195px";
	    	document.getElementById("menu-principal").style.background = "transparent";
	  	}
	} else {
		document.getElementById("barra-topo").style.display = "none";
		document.getElementById("logo").style.width = "125px";
		document.getElementById("menu-principal").style.background = "#FFFFFF";
	}

	position = scroll;
}
$(window).scroll(listener);
$(window).resize(listener);