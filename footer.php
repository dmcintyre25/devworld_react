	

	<footer>

	<div class="row px-4 py-2">
        <div class="col-lg-12">
			<div class="row">
				<div class="col-lg-8">
					<p>
					&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>
					</p>
				</div>

				<div class="col-lg-4">	
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
	
	</div> <!-- end "container" div -->
	</body>
</html>