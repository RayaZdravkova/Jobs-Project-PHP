@extends('layouts.multi')
@section('content')
<div class="inner">
	<h1>Generic Page</h1>
		<span class="image main"><img src="{{asset($job->companies->image)}}" alt="" /></span>
                 <h2>{{$job->position}}</h2>
                 <div class="content">
                 <p>{{$job->companies->name}}</p>
                      <p>{{$job->cities->name}}</p>
                      <p>{!!$job->description!!}</p>
                      <p>{{$job->published}}</p>
                 </div>
</div>
@endsection