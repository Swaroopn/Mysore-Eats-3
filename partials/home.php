<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	</ol>

<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/best.jpg" alt="Best">
			<div class="carousel-caption">Best</div>
		</div>

		<div class="item">
			<img src="images/global.jpg" alt="Global">
			<div class="carousel-caption">Global</div>
		</div>

		<div class="item">
			<img src="images/vegan.jpg" alt="Vegan">
			<div class="carousel-caption">Vegan</div>
		</div>

        <div class="item">
            <img src="images/desserts.jpg" alt="Best">
            <div class="carousel-caption">Desserts</div>
        </div>
	</div>
</div>

<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">Welcome to Mysore Eats</div>
		<div class="panel-body">Mysore Eats is a webapp dedicated to all hotels in and around Mysore city.</div>
	</div>
<!--
	<button type="button" class="btn btn-primary center-block" ng-click="nearby()">
		<span class="glyphicon glyphicon-record" aria-hidden="true"></span> Hotels Nearby
	</button>
-->
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
		  	interval: 2000
		});
	});
</script>