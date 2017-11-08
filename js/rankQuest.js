$(document).ready(function(){
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$("#container-fluid").toggleClass("container-fluid");
		$("#container-fluid").toggleClass("container-fluid-toggled");
	});
})