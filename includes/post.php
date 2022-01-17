<div class="mb-5 mt-5">
	
	<hr class="mb-5">

	<h2 id="post">The post() method</h2>

	<h3>
		Sintax:
		<code>
			$.post(URL, callback);
		</code>
	</h3>



	<p>Treinando <code>post()</code> com ajax</p>

	<button class="btn btn-primary" id="btn-post">
		Click me!
	</button>

</div>

<script>

	$('#btn-post').click(function () {

		alert('aqui');

		$.post('includes/demo_text_post.txt', 
		{
			name: 'Tiago Bordin',
			cidade: 'Caxias do Sul', 
			qualidade: 'Extremamente sexy e gostoso'

		}, 
		function(data, status) {
			alert('Data: ' + data + '\nStatus: ' + status);
		});

	}); 
	
</script>