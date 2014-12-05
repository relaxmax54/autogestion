<!-- structure de la page de présentation principale -->
<!DOCTYPE html>
<html>

	<? require("head.php");?>

	<body>

	    <div class="container">

	        <header class="row">
	        	<div class="col-lg-3">
	        		<?$application->afficheModule("logo");?>
	        	</div>
	        	<div class="col-lg-6">
	        		<?$application->afficheModule("notifications");?>
	        	</div>
	        	<div class="col-lg-3">
	        		<?$application->afficheModule("connexion");?>
	        	</div>        	
		        <div class="col-lg-12">
	        		<?require_once("header.php");?>
	        	</div>
	    	</header>

	    	<div class="row">

		        <div class="col-lg-2">
		          	<div class="row">
			            <aside class="col-lg-12">
	        				<?$application->afficheModule("url");?>
			            </aside>
			            <aside class="col-lg-12">
	        				<?$application->afficheModule("module");?>
			            </aside>
		          	</div>
		        </div>

		        <section class="col-lg-8">
		        	<div class="row">
			        	<div class="col-lg-12">
				        	<?require_once("menu.php");?>
				        </div>
				        <div class="col-lg-12">
				        	<?require_once("section.php");?>
				        </div>
			        </div>
		        </section>

		        <div class="col-lg-2">
		          	<div class="row">
		            	<aside class="col-lg-12">
	        				<?$application->afficheModule("module");?>
		            	</aside>
		            	<aside class="col-lg-12">
	        				<?$application->afficheModule("module");?>
		            	</aside>
		            </div>
		        </div>

		    </div>

		    <footer class="row">
		        <div class="col-lg-12">
			    	<?require_once("footer.php");?>
		        </div>
		    </footer>

	    </div>
	</body>
</html>


