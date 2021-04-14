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
													<label>Supplier Name</label>
													<input type="text" class="form-control" placeholder="Supplier Name" name="supplier_name" required>
												</div>
												<div class="form-group">
													<label>Description</label>
													<textarea placeholder="Description" class="form-control" name="purchase_description" required></textarea>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Purchase Price" name="purchase_mrp" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Stock</label>
															<input type="text" class="form-control" placeholder="Purchase Stock" name="purchase_inventory" required>
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
		$supplier_name = $_POST['supplier_name'] ?? "";
		$purchase_description = $_POST['purchase_description'] ?? "";
		$purchase_mrp = $_POST['purchase_mrp'] ?? "";
			$purchase_inventory = $_POST['purchase_inventory'] ?? "";
		$insert_qry = "INSERT INTO purchases (supplier_name,purchase_description,purchase_mrp,purchase_inventory) VALUES ('$supplier_name','$purchase_description','$purchase_mrp','$purchase_inventory')";
		$insert_qry_run = mysqli_query($con, $insert_qry);
		if($insert_qry_run) {
			echo "successful";
		}
	}
	?>