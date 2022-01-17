<div class="mt-5 mb-5">
	
	<hr class="mb-5">

	<div id="click">
		<button id="btn1" class="btn btn-primary">Click me</button>
		<button id="btn2" class="btn btn-primary">Click me too</button>
		<p id="p2">This is some text</p>
	</div>

	<script>

		function carrega1() {
			$('#p2').load('includes/new_load2.php', function(responseTxt, statusTxt, xhr) {
				if (statusTxt == 'success') {
					// alert('External content loaded successfully');
				}
				if (statusTxt == 'error') {
					alert('Error: ' + xhr.status + ": " + xhr.statusTxt);
				}
			});			
		}

		function carrega2() {
			$('#p2').load('includes/new_load3.php', function(responseTxt, statusTxt, xhr) {
				if (statusTxt == 'success') {
					// alert('External content loaded successfully');
				}
				if (statusTxt == 'error') {
					alert('Error: ' + xhr.status + ": " + xhr.statusTxt);
				}
			});			
		}

		$('#btn1').click(function() {
			carrega1();
		});

		$('#btn2').click(function() {
			carrega2();
		});

		const element = document.getElementById('body');

		setInterval(function () {
			carrega1();
		}, 300);		

	</script>

</div>