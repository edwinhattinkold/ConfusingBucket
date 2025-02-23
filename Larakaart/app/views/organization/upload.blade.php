{{HTML::script('assets/js/geocode.js')}}


<form action="{{ URL::route('Organization-upload-add') }}" method="post" class="form-horizontal">
	<fieldset class="the-fieldset form-margin">
   		<legend class="the-legend text-primary">Organization</legend>		
		
		<div class="form-group">
	    	<label for="name" class="col-sm-2 control-label text-primary">Name: </label>
			<div class="col-sm-8">
			   	{{Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('name', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="type" class="col-sm-2 control-label text-primary">Type: </label>
			<div class="col-sm-8">
			   	{{Form::select('type',$types, Input::old('type'), array('class'=>'form-control'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('type', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	  	<div class="form-group">
	    	<label for="website" class="col-sm-2 control-label text-primary">Website: </label>
	   		<div class="col-sm-8">
	      		{{Form::text('website', null, array('class' => 'form-control','placeholder' => 'Website'))}}
	    	</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('website', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="description" class="col-sm-2 control-label text-primary">Description: </label>
	   		<div class="col-sm-8">
                {{Form::textarea('description', null, array('class' => 'form-control','placeholder' => 'Description'))}}
	    	</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <legend class="the-legend text-primary">Address</legend>
        
        <div class="form-group">
	    	<label for="streetname" class="col-sm-2 control-label text-primary">Street: </label>
			<div class="col-sm-6">
			   	{{Form::text('streetname', null, array('class' => 'form-control address','placeholder' => 'Street','id'=>'streetname'))}}
			</div>
			<label for="number" class="col-sm-1 control-label text-primary">No: </label>
			<div class="col-sm-1">
			   	{{Form::text('number', null, array('class' => 'form-control address','placeholder' => 'Number','id'=>'number'))}}
			</div>
			
			<div class="col-sm-offset-2 col-sm-6 has-error">
				{{ $errors->first('streetname', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>            
			<div class="col-sm-offset-8 col-sm-1 has-error">
				{{ $errors->first('number', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="city" class="col-sm-2 control-label text-primary">City: </label>
			<div class="col-sm-8">
			   	{{Form::text('city', null, array('class' => 'form-control address','placeholder' => 'City','id'=>'city'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('city', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="zipcode" class="col-sm-2 control-label text-primary">Zipcode: </label>
			<div class="col-sm-8">
			   	{{Form::text('zipcode', null, array('class' => 'form-control','placeholder' => 'Zipcode','id'=>'zipcode'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('zipcode', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="country" class="col-sm-2 control-label text-primary">Country: </label>
			<div class="col-sm-8">
			   	{{Form::text('country', null, array('class' => 'form-control address','placeholder' => 'Country','id'=>'country'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('country', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>
        
        <div class="form-group">
	    	<label for="location" class="col-sm-2 control-label text-primary">Location: </label>
			<div class="col-sm-8">
			   	<div id="location-canvas" style="width: 100%; height: 300px;"></div>
            </div>
	  	</div>

	<fieldset>					

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<!--<button type="submit" class="btn btn-danger">Terug</button>-->
	    	<button type="submit" class="btn btn-success">Upload Organization</button>
	    </div>
		{{ Form::token() }}
	</div>
</form>


