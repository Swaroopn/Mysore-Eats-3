<div class="container">
	<img class="wallpaper" ng-src="images/{{hoteldetails.category}}/{{hoteldetails.image}}" width="100%" alt="..."><hr>
	<h2 style="text-align: center;">{{hoteldetails.hotel}}</h2>
    <button type="button" class="btn center-block pull-right like" style="margin-top: -25px;" 
    ng-click='increment_like(hoteldetails.hotel)'>
        <span class="glyphicon glyphicon-heart" aria-hidden="true"> <span class="badge"></span></span> 
        <img src="images/loader.gif" class="like-loader" height="23px" width="23px" /><br>
    </button><hr>
    
    <section ng-init="tab = 1">
        <ul class="nav nav-pills nav-justified">   
            <li ng-class="{ active:tab === 1 }"> <a href ng-click="tab = 1">Menu 
                <span class="glyphicon glyphicon-menu-hamburger"></span></a>
            </li>
            <li ng-class="{ active:tab === 2 }"> <a href ng-click="tab = 2; get_directions(hoteldetails.address)">Contact
                <span class="glyphicon glyphicon-earphone"></span></a>
            </li>
            <li ng-class="{ active:tab === 3 }"> <a href ng-click="tab = 3">Comments
                <span class="glyphicon glyphicon-comment"></span></a>
            </li>
        </ul>           
    </section>

    <div class="panel" ng-show="tab === 1" style="text-indent: 30px; text-align: justify;"><br>
        <p>{{hoteldetails.description}}</p>       
    </div>

    <div class="panel" ng-show="tab === 2" style="text-align: center;"><br>
        <div class="panel panel-default">
            <div class="panel-body">
                {{hoteldetails.address}}<br>
                Contact: <a href="tel:9900037368" data-pageview="call" class="ui-link"><span ng-bind="hoteldetails.telephone"></span></a>
            </div>
        </div>
        <p style="text-align: center;">
            <button type="button" class="btn btn-success">
                <a ng-href="" id="showDirections" style="color: #fff;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Show Directions</a>
            </button>

            <button type="button" class="btn btn-sm" data-toggle="popover" data-placement="top" title="" data-content="Please Enable your Location Access">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            </button>
        </p>       
    </div>

    <div class="panel" ng-show="tab === 3">
    	<br>
    	<div class="form-group">
            <input type="text" class="form-control" id="username" placeholder="Username" ng-model="usermodel.username" ng-minlength="5"><br />
  			<textarea ng-disabled="!usermodel.username" ng-minlength="5" class="form-control" rows="4" ng-model="usermodel.usercomment" placeholder="Write your comment here..."></textarea><br>
  			<button type="button" class="btn btn-success btn-sm center-block submit-comment" ng-click="insert_comment(hoteldetails.hotel)" ng-disabled="(!usermodel.username) || (!usermodel.usercomment)">
        		Submit <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
			</button>
            <div class="ajax-loader" style="text-align: center;margin-bottom: 1em;">
                <img src="images/loader.gif" /><br>
            </div>
        </div>
        <hr style="border-top: dashed 1px;" />
        <div id="comments_column"></div>
	</div>
</div>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
</script>