<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Model Name</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	$i = 1;
	foreach ($model_list as $val) { ?>
	<tr class="model_details" data_id="<?=$val->model_id?>" data-toggle="modal" data-target="#model_detail_<?=$val->model_id?>">
		<td><?=$i?></td>
		<td class="text-success"><?=$val->model_name?></td>
	</tr>
	<div id="model_detail_<?=$val->model_id?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> Modal Details</div>
				<div class="tbl-row"><strong>Model Name:</strong> <?=$val->model_name?></div>
				<div class="tbl-row"><strong>Model Color:</strong> <?=$val->color_name?></div>
				<div class="tbl-row"><strong>Manufacturing Year:</strong> <?=$val->year?></div>
			</div>
		</div>
	</div>
	<?php $i++; } ?>
    
</table>