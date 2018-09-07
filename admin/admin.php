<?php $session = $_SESSION['adminname'];?>
<section>
	<div class="modal fade" id="imagemodal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-info">Admin Image</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12" id="updating-info">
							<h2>Update Your Info:</h2>
							<form method="post" action="update.php" enctype="multipart/form-data">
								<div class="form-group">
									<input required type="password" class="input-lg form-control" name="new-password" placeholder="New Password">
								</div>
								<div class="form-group">
									<input required type="phone" class="input-lg form-control" name="new-phone" placeholder="New Mobilephone">
								</div>
								<div class="form-group">
									<input required type="number" class="input-lg form-control" name="new-age" placeholder="New age">
								</div>
								<div class="form-group">
									<input required type="file" name="image" class="btn-warning form-control">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="update" class="btn btn-lg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>