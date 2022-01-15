<hr>

<div>
	<button id="btn1" class="btn btn-primary">Click me</button>
	<button id="btn2" class="btn btn-primary">Click me too</button>
	<p id="p2">This is some text</p>
</div>

<script>
	$('#btn1').click(function() {
		$('#p2').load('includes/new_load2.php', function(responseTxt, statusTxt, xhr) {
			if (statusTxt == 'success') {
				alert('External content loaded successfully');
			}
			if (statusTxt == 'error') {
				alert('Error: ' + xhr.status + ": " + xhr.statusTxt);
			}
		});
	});

	$('#btn2').click(function() {
		$('#p2').load('includes/new_load3.php', function(responseTxt, statusTxt, xhr) {
			if (statusTxt == 'success') {
				alert('External content loaded successfully');
			}
			if (statusTxt == 'error') {
				alert('Error: ' + xhr.status + ": " + xhr.statusTxt);
			}
		});
	});
</script>