
$(document).ready(function(){

	$('#add_manufacturer').submit(function(event){
		var manufacturer_name = $('#manufacturer_name').val();
		if(manufacturer_name != '' )
		{
			$.ajax({
		    	url: _base_url+"manufacturer/addManufacturer"
		    	,type: 'POST'
		    	,data: {'manufacturer_name': manufacturer_name}
		    	,datatype: 'json'
		    	,success: function(data)
		    	{
		    		$(".alert").html(data);
		    		$('#manufacturer_name').val(' ')
			    }
			});
		}
		else
		{
			$('.error').html('Enter the Manufacturer Name');
		}
		event.preventDefault();
	});


	$('#add_model').submit(function(event){

		var manufacturer_id = $('#manufacturer_id').val();
		var model_name = $('#model_name').val();
		var color_name = $('#color_name').val();
		var year = $('#year').val();
		var error = false;

		if(manufacturer_id == '' )
		{
			$('.error').append('Enter the Manufacturer Name');
			error = true;
		}

		if(model_name == '' )
		{
			$('.error').append('Enter the Model Name');
			error = true;
		}

		if(manufacturer_id == '' )
		{
			$('.error').append('Enter the Manufacturer Name');
			error = true;
		}

		if(model_name == '' )
		{
			$('.error').append('Enter the Model Name');
			error = true;
		}

		if(	!error )
		{
			$.ajax({
		    	url: _base_url+"manufacturer/addModel"
		    	,type: 'POST'
		    	,data: {'manufacturer_id': manufacturer_id, 'model_name':model_name,'color_name':color_name,'year':year}
		    	,datatype: 'json'
		    	,success: function(data)
		    	{
		    		$(".alert").html(data);
		    		$('#manufacturer_name').val(' ')
			    }
			});
		}
		
		event.preventDefault();
	});

	/*$('.model_details').click(function(){
		var model_id = $(this).attr('id');
		$.ajax({
	    	url: _base_url+"manufacturer/getModeldetails"
	    	,type: 'POST'
	    	,data: {'model_id': model_id}
	    	,datatype: 'json'
	    	,success: function(data)
	    	{
	    		$(".alert").html(data);
	    		$('#manufacturer_name').val(' ')
		    }
		});
	})*/

})
