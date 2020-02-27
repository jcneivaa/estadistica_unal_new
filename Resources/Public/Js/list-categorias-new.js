

$(document).ready(function(){


    $('[data-toggle="tooltip"]').tooltip();

    $(".colour-shifter").hover(
    	function(){ //mouseover
    		var img = $(this).find('img')
    		uri_altbadge=img.data("altbadge")
    		img.attr("src",uri_altbadge)
        },
        function(){ //mouseout
        	var img = $(this).find('img')
        	var uri_badge = img.data("badge")
        	img.attr("src",uri_badge)
    	}
	);
	
		
	$(".categoriaLink").click(
		function(){

			var linkIframe = $(this).data("iframe");
			var nombreCategoria = $(this).data("nombre");
			$('#iframeDashboard').attr("src",linkIframe);
			$('#modalTitle').text(nombreCategoria);

			$("#dashboard").modal();
	  });
});
