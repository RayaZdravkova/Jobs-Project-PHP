@extends('layouts.multi')
@section('content')
<div class="inner">
	<h1 style="color:crimson">{{$job->position}}</h1>
         <div class="content">
                 <span class="image main"><img style="width: 200px; height: 200px; float:right;"src="{{asset($job->companies->image)}}" alt="" /></span>
         </div>
       <div class="col-sm-6">
                 <div class="content">
                      <p style="font-weight: bold; color: lightseagreen;">Компания: {{$job->companies->name}}</p>
                      <p style="font-weight: bold; color: lightseagreen;">Месторабота: {{$job->cities->name}}</p>
                      </br>
                      <p>{!!$job->description!!}</p>
                      <p style="font-weight: bold;">Дата на публикуване:  {{$job->published}}</p>
                      <a href="{{route('companies')}}" class="button primary fit">КАНДИДАТСТВАЙ</a>
                 </div>
        </div>
</div>
@endsection