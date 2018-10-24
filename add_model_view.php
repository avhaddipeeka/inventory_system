<div class="add_model col-md-6">
	<form id="add_model" action="<?=base_url()?>manufacturer/addModel" method="POST">
		<div class="row">
			<div class="col-sm-6">
				<label for="manufacturer_name" class="col-form-label">Manufacturer Name</label>
				<select class="form-control" id="manufacturer_id" name="manufacturer_id">
					<?php foreach ($manufacturer_list as $val) { ?>
						<option value="<?=$val->manufacturer_id?>"><?=$val->manufacturer_name?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-6">
				<label for="model_name" class="col-form-label">Model Name</label>
				<input type="text" id="model_name" name="model_name" class="form-control" placeholder="Enter the Model Name">
			</div>
		</div>
		<label for="color_name" class="col-form-label">Color</label>
		<input type="text" id="color_name" name="color_name" class="form-control" placeholder="Enter the Color Name">
		<label for="year" class="col-form-label">Manufacturing Year</label>
		<input type="text" id="year" name="year" class="form-control" placeholder="Enter the Manufacturing Year">
		<br>
		<button type="submit" name="Save" class="btn btn-primary">Save</button>
	</form>
</div>