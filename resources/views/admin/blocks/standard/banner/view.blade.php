@extends('layouts.app', ['page' => __('View Banner Management'), 'pageSlug' => 'View Banner Management'] )

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('banner-management.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 
</div>
@endsection
