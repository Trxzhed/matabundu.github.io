<script>
		$(document).ready(function() {
			// untuk menyembunyikan atau menampilkan  button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});

			// animasi scroll
			$('.go-top').click(function(event) {
				event.preventDefault();

				$('html, body').animate({scrollTop: 0}, 200);
			})
		});
	</script>
