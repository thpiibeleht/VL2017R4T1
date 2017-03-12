<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />

<body>

<!--
To whom it may concern:
currently, this screen does not have any kind of error throws, when, for example,
a text box is left unfilled. However, it most certainly would benefit from such
a thing, therefore, this needs to eventually be implemented, using either
JavaScript, or PHP, whichever strikes your fancy more.
-->

<form action= "/action_page.php"> <!--Needs an actual separate webpage for this-->
<fieldset>
<legend>Poll search</legend>
	<div id="nameEntry">
		<label for="keyword">Search by keywords: </label>
		<input type="text" id="keyword" name="keyword" value=""><br>
		<label for="author">Search by author: </label>
		<input type="text" id="author" name="author" value=""><br><br>
	</div>
	
	
	<div id="catType">
		<label for="category">Category:</label> 
		<select id="category">
		<option value="volvo">My favourite car</option>
		<option value="saab">Saab</option>
		<option value="opel">Opel</option>
		<option value="audi">Audi</option>
		</select>
		
		<label for="type">Type:</label> 
		<select id="type">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="opel">Opel</option>
		<option value="audi">length</option>
		</select>
		
	</div>
	
	<div>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="../../js/datepick.js">
		</script>
	</div>
	<div>
		<label for="ageFilter">Filter by age: </label>
		<label for="from">From </label>
		<input type="text" id="from" name="from">
		<label for="to">to</label>
		<input type="text" id="to" name="to">
		 
	</div>
	
	<div id="newOrOld">
		<label for="timeSearch">Search by time: </label>
		<input type="radio" name="pollAge" id="newer" value="1" checked="checked">
		<label for="newer">Newer first</label>
		<input type="radio" name="pollAge" id="older" value="2">
		<label for="older">Older first</label>
	</div>
	
	<div id="popularityFilter">
	<label for="popularityFilter">Filter by popularity: </label>
	<input type="radio" name="pollPopularity" id="more" value="1" checked="checked">
	<label for="more">More popular first</label>
	<input type="radio" name="pollPopularity" id="less" value="2">
	<label for="less">Less popular first</label>
	</div>
	
	<div id="pollActivity">
	<label for="pollActivity">Poll activity: </label>
	<input type="radio" name="pollActivity" id="active" value="1">
	<label for="active">Active</label>
	<input type="radio" name="pollActivity" id="closed" value="2">
	<label for="closed">Closed</label>
	<input type="radio" name="pollActivity" id="all" value="3" checked="checked">
	<label for="all">All</label>
	</div>
	
	</fieldset>
	
	<input type="submit" value="Search">
</form>
</body>
