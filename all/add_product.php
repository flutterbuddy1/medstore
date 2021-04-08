<?php
include "header.php";
?>
<!-- Start of product container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Add new Product</h6>
					<p class="card-category d-inline">All fields are mandatory*</p>
					<!-- 					<div class="dropdown">
						<button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
						<i class="tim-icons icon-settings-gear-63"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" name="launch" href="operation/add_product.php">
								<label class="btn btn-sm btn-primary btn-simple active" id="0">
									<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Launch</span>
									<span class="d-block d-sm-none">
															<i class="tim-icons icon-single-02"></i>
									</span>
								</label>
							</a>
							<a class="dropdown-item" name="discard" href="#pablo">
								<label class="btn btn-sm btn-primary btn-simple active" id="0">
									<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Discard</span>
									<span class="d-block d-sm-none">
															<i class="tim-icons icon-single-02"></i>
									</span>
								</label>
							</a>
						</div>
					</div>
				-->				</div>
				<div class="col-lg-12 col-md-12">
					<div class="card-body">
						<div class="table-full-width table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<form method="post" action="add_product.php">
												<div class="form-group">
													<label>Medicine Name</label>
													<input type="text" class="form-control" placeholder="Medicine Name" name="medicine_name" required>
												</div>
												<div class="form-group">
													<label>Description</label>
													<textarea placeholder="Description" class="form-control" name="medicine_description" required></textarea>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="medicine_mrp" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Stock</label>
															<input type="text" class="form-control" placeholder="Medicine Stock" name="medicine_inventory" required>
														</div>
													</div>
												</div>
											</div>
											<button type="submit" class="btn" name="submit">Submit</button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of product container -->
	<?php
	include "footer.php";
	?>
	<?php
	include "../db.php";
	if (isset($_POST['submit'])) {
		$medicine_name = $_POST['medicine_name'] ?? "";
		$medicine_description = $_POST['medicine_description'] ?? "";
		$medicine_mrp = $_POST['medicine_mrp'] ?? "";
			$medicine_inventory = $_POST['medicine_inventory'] ?? "";
		$insert_qry = "INSERT INTO medicines (medicine_name,medicine_description,medicine_mrp,medicine_inventory) VALUES ('$medicine_name','$medicine_description','$medicine_mrp','$medicine_inventory')";
		$insert_qry_run = mysqli_query($con, $insert_qry);
		if($insert_qry_run) {
			echo "successful";
		}
	}
	?>