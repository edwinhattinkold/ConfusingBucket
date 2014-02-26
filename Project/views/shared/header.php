<header>
	<div id="map_bar">
		<div id="menu_bar">
			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="show();">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand" onclick="load('home.php');">
							<img id="avans_globe" src="images/Avans_globe.png" alt="avans_globe" />
						</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav nav-stacked">
							<li id="storylistmenu">
								<a href="#" onclick="load('storylist.php');">
									Story List
								</a>
							</li>
							<li id="storylist_detailmenu">
								<a href="#" onclick="load('storylist_detail.php?storyid=1');">
									Story Detail
								</a>
							</li>
							<li id="authtestmenu">
								<a href="#" onclick="load('authtest.php');">
									Admin
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<a href="#">
			<div id="map_button">
				<span id="showhide" class="glyphicon glyphicon-eject"></span>
			</div>
		</a>
	</div>
</header>

