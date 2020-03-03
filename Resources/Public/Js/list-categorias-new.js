

$(document).ready(function(){

	_iOSDevice = !!navigator.platform.match(/iPhone|iPod|iPad/);
	if (_iOSDevice) {
		$('.fullscreen-button-new').remove();
	}

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

			var uriIframe = $(this).data("iframe");
			var nombreCategoria = $(this).data("nombre");
			var uriProtocolo = $(this).data("uriprotocolo");

			$('#linkDashboardTitle').attr("href",uriProtocolo);						
			$('#iframeDashboard').attr("src",uriIframe);
			
			$('#modalTitle').text(nombreCategoria);

			$("#dashboard").modal();
	});

	$(".fullscreen-button-new").click(
		function(){
			var idFullscreenElement= $(this).data('iframeid');
			FullScreenHelper.toggle(document.getElementById(idFullscreenElement));
	});

	
	var originalEmbedUrl = $('#embed-url-new').val();

	$(".share-button-new").click(
		function(){

			var uriIframe = $('#iframeDashboard').attr("src");
			$('#share-url-new').val(uriIframe);

			var embedUrl = $('#embed-url-new').val();
			var newEmbedUrl = embedUrl.replace('LINK-TOKEN', uriIframe);
			$('#embed-url-new').val(newEmbedUrl);

			var shareSocials=$("#share-socials-new");

			shareSocials.jsSocials({
				showCount: false,
				showLabel: true,
				shareIn: "popup",
				url: uriIframe,
				text:document.title,
				shares: ["email", "twitter", "facebook", "messenger", "linkedin", "whatsapp"]
			});
		
			$("#sharePanel").toggle(500);
		
		
	});

	$('#dashboard').on('hidden.bs.modal', function () {
		$("#sharePanel").hide();
		$('#embed-url-new').val(originalEmbedUrl);
	});
	  
});
