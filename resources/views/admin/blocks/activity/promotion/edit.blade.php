@extends('layouts.app', ['page' => __('Edit Banner Management'), 'pageSlug' => 'Edit Banner Management'] )

@section('content')
<div align="right">
	<a href="{{ route('banner-management.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('banner-management.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	 
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



