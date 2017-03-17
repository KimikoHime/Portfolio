$(document).ready(function(){

    // Wrapper full height
    var windowWidth = isNaN(window.innerWidth) ? window.clientWidth : window.innerWidth;
    var windowHeight = isNaN(window.innerHeight) ? window.clientHeight : window.innerHeight;
    var ua = navigator.userAgent;
    var isiPad = /iPad/i.test(ua) || /iPhone OS 3_1_2/i.test(ua) || /iPhone OS 3_2_2/i.test(ua);

    if(windowWidth>1024){
        $(".wrapper").height(windowHeight-50);
    }

     // Refresh wrapper height when changing orientation
    window.onorientationchange = function() {
        var orientation = window.orientation;
        switch(orientation) {
            case 0:
            case 90:
            case -90: window.location.reload();
                break; }
    };

    // Highlight nav
    var aChildren = $("#menu li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values


	if(document.getElementById("banner")){
	            function resize()
	            {
	                var heights = window.innerHeight-60;
	                document.getElementById("banner").style.height = heights + "px";
	            }
	            resize();
	            window.onresize = function() {
	                resize();
	            };
	        }

	})