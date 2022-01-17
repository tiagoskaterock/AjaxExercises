<div class="mb-5 mt-5">
	
	<hr class="mb-5">

	<h2 id="get">The get() method</h2>

	<h3>
		Sintax:
		<code>
			$.get(URL, callback);
		</code>
	</h3>



	<p>Treinando <code>get()</code> com ajax</p>

	<button class="btn btn-primary" id="btn-get">
		Click me!
	</button>

</div>

<script>
	$('#btn-get').click(function() {

		$.get('includes/demo_test.txt', function(data, status) {

			alert('Data: ' + data + "\nStatus: " + status);

		});

	});
</script>