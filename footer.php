	

</div> <!-- end "container" div -->

	<footer>

	<div class="row px-4 py-2">
        <div class="col-lg-12">
			<div class="row">
				<div class="col-lg-3">

				</div>

				<div class="col-lg-6">
					<div class="footerMenu text-center">

						<nav class="navbar navbar-expand-lg navbar-dark py-3">
                            <div class="container-fluid">                                
                                <div id="navbar" class="navbar-collapse collapse">
                                    <?php bootstrap_nav2(); ?>
                                </div><!--/.nav-collapse -->
                            </div><!--/.container-fluid -->
                        </nav>
					</div>
					<span class="text-center">
						<p>&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>&nbsp;<i class="fas fa-globe"></i>	</p>
					</span>
				</div>

				<div class="col-lg-3">	
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
		</div>	
	</div>
	</footer>

	<?php wp_footer(); ?>
	
	
	</body>
</html>