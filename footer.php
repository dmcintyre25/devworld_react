	

</div> <!-- end "container" div -->

	<footer>
		<div class="container-fluid py-3">
			<div class="row justify-content-end align-items-start">
						
				<div class="col-sm-12 col-md-4 text-center">
					
					<span class="pt-3">
						<p>&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>&nbsp;<i class="fas fa-globe"></i>	</p>
					</span>
				</div>			


			<div class="col-sm-12 col-md-4 text-center pb-2">	
					<div class="owner">				
						<div class="ownerText">
							<p>DevWorld <i class="fas fa-globe"></i> Creator.</p>
							<p>Daniel McIntyre</p>
							<button type="button" class="btn btn-primary btn-sm"><a href="https://twitter.com/dmcintyre25">Follow @dmcintyre25</a></button>
						</div>
						<div class="ownerImage">													
								<?php echo get_avatar( 'dmcintyre25@gmail.com', 75 ); ?>
						</div>
					</div>
			</div>
	
		</div>	
		<div class="row justify-content-center">
				<div class="footerMenu">
						<nav class="navbar navbar-expand-sm navbar-dark">
                            <div class="container-fluid">
                                <div id="navbar" class="navbar-collapse collapse">
                                    <?php bootstrap_nav2(); ?>
                                </div><!--/.nav-collapse -->
                            </div>
                        </nav>
					</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	
	
	</body>
</html>