<style type="text/css">
    .list-group-item img {
        border-radius: 2px;
        border: 1px solid #18BC9C;
    }
</style>
<div class="container">
	<ul class="list-group">
	  	<li class="list-group-item" ng-repeat="hotel in hotels">
	  		<a ng-href="#/hotels/{{hotel.url}}">
		  		<div class="media">
		  			<div class="media-left">		    		
			      		<img class="media-object" ng-src="images/thumbnails/{{hotel.image}}" height="64px" width="64px" alt="...">
		  			</div>		  			

					<div class="media-body">
						<h4 class="media-heading"><span ng-bind="hotel.name"></span></h4>
					</div>
				</div>
	    	</a>
	  	</li>
	</ul>
</div>
