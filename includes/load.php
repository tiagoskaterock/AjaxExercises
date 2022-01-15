<h2 id="load">The load() method</h2>

<h3>
	Sintax:
	<code>
		$(selector).load(URL, data, callback);
	</code>
</h3>


<br>

<p>jQuery and Ajax is FUN!!!</p>

<p id="p1">
	This is some text in a paragraph.
</p>

<script>
	// $(selector).load(URL, data, callback);
	$('#p1').load('includes/new_load.php #chosen-id');
</script>
