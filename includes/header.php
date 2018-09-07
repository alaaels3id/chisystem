<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fuild">
		<div class="navbar-header">
			<!--Collapse Button in Mobile-->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#OurNavBar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/CHISystem">CHIS<span>.Inc</span></a>
		</div>
		<div class="collapse navbar-collapse" id="OurNavBar">
			<ul class="nav navbar-nav">
				<li><a class="btn btn-lg" href="/CHISystem/Students">Students</a></li>
				<li><a class="btn btn-lg" href="/CHISystem/Terms">Terms</a></li>
				<li><a class="btn btn-lg" href="/CHISystem/About">About</a></li>
				<li><a class="btn btn-lg" href="/CHISystem/Contact">Contact</a></li>
			</ul>
			<div id="usernamelogo">
				<?php 
					if($_SESSION['username']){
						echo "<span id=\"logo\">#Welcome_".ucfirst($_SESSION['username'])."</span>";
					}
				?> 
			</div>
		</div>
	</div>
</nav>