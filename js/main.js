$(function() {
	clickMenu();
	deleteMembros();

	function clickMenu() {
		scroll();
		$('#menu-principal a, #menu-lateral a').click(function() {
			return false;
		});

		$('#menu-principal a, #menu-lateral a').click(function() {
			$('#menu-lateral a').parent().removeClass('bg-info');
			$('#menu-principal a').parent().removeClass('active');
			$('#menu-principal a[ref-sys='+$(this).attr('ref-sys')+']').parent().addClass('active');
			$('#menu-lateral a[ref-sys='+$(this).attr('ref-sys')+']').parent().addClass('bg-info');
		});
	};



	function scroll() {
  		let scrollLink = $('.scroll');

		// smooth scrolling
        scrollLink.click(function(e) {
        	e.preventDefault();
        	e.stopPropagation();
        	$('body,html').animate({
        		scrollTop: $(this.hash).offset().top
       		}, 1000);

        	// close menu after clicking
            setTimeout(function() {
                $('.navbar-toggler-icon').click();
            }, 200);
       	});
	};



	function deleteMembros() {
			$('.deletar-membro').click(function () {
				var id_membro = $(this).attr('id_membro');
				var tr = $(this).parent().parent();

				$.ajax({
					method: 'POST',
					data:{'id_membro': id_membro},
					url: 'delete.php'
				}).done(function() {
					tr.fadeOut(function() {
						tr.remove();
					});
				})
		});
	};


});