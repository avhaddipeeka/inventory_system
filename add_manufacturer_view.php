<div class="add_manufacturer col-md-6">
	<div class="alert"></div>
	<form id="add_manufacturer" action="<?=base_url()?>manufacturer/addManufacturer" method="POST">
		<label for="manufacturer_name" class="col-form-label">Manufacturer Name</label>
		<input type="text" id="manufacturer_name" name="manufacturer_name" class="form-control" placeholder="Enter the Manufacturer Name">
		<br>
		<label class="error"></label>
		<button type="submit" name="Save" class="btn btn-primary btn-add-manufacturer">Save</button>
	</form>
</div>