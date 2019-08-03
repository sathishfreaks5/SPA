@extends('layouts.app', ['page' => __('CreateBanner Management'), 'pageSlug' => 'Create Banner Management'] )

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('banner-management.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('banner-management.store') }}" enctype="multipart/form-data">

	@csrf
 
	<div class="form-group">
		<div class="col-md-4">
			<label class="text-right">Select Profile Image:</label>
		</div>
		
 
		<div class="col-md-8">
			<input type="file" name="image" class="form-control" />
		</div>
	</div>

	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



