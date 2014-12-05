<!-- structure de la page de présentation principale -->
<!DOCTYPE html>
<html>

	<? require("head.php");?>

	<body>

	    <div class="container">

	        <header class="row">
	        	<div class="col-lg-3">
	        		<?require_once("modules/logo.php");?>
	        	</div>
	        	<div class="col-lg-6">
	        		<?require_once("modules/notifications.php");?>
	        	</div>
	        	<div class="col-lg-3">
	        		<?require_once("modules/connexion.php");?>
	        	</div>        	
		        <div class="col-lg-12">
	        		<?require_once("header.php");?>
	        	</div>
	    	</header>

	    	<div class="row">

		        <div class="col-lg-2">
		          	<div class="row">
			            <aside class="col-lg-12">
			        		<?require("modules/url.php");?>
			            </aside>
			            <aside class="col-lg-12">
			        		<?require("modules/module.php");?>
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
			        		<?require("modules/module.php");?>
		            	</aside>
		            	<aside class="col-lg-12">
			        		<?require("modules/module.php");?>
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


