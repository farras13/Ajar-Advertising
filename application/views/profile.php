<div data-include="header"> <?php include 'include/header.php'; ?> </div>
<div class="bg-light">
	<div class="container w-50 py-5">
		<div class="card mx-auto">
			<h5 class="card-header text-center">Update Profile</h5>
			<div class="card-body bg-white text-center">
				<img width="100" src="<?php echo base_url() ?>assets/img/avatar.png" alt="profile-image">
				<div class="px-5 my-4">
					<div class="custom-file bg-success">
						<input id="image-profile" class=" custom-file-input" type="file" name="image">
						<label for="image-profile" class="custom-file-label">Change Avatar</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-control my-3" name="email" id="email" aria-describedby="helpId"
							placeholder="email">
						<input type="text" class="form-control my-3" name="username" id="username"
							aria-describedby="helpId" placeholder="username">

						<input type="password" class="form-control my-3" name="password" id="password"
							aria-describedby="helpId" placeholder="password">

						<input type="password" class="form-control my-3" name="password" id="password"
							aria-describedby="helpId" placeholder="new password">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div data-include="footer-2"> <?php include 'include/footer.php'; ?> </div>
