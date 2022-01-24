@extends('layouts.multi')
@section('content')
<div class="inner">
		<header style="text-align:center;">
			<h1>Намери работа бързо и лесно с нашият сайт!<br />
            <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="http://jobs-php.com/" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" style="width:20px; height:20px;" type="submit" title="Search projects">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                      
                    </div>
                </form>
            </div>
        </div>
    </div>
				
		</header>
	<section class="tiles">
         @foreach($jobs as $job)
           <article class="style1">
             <span class="image">
                 <img src="{{asset($job->companies->image)}}" alt="" />
             </span>
             <a href="{{ route('show', $job->id) }}">
                 <h2>{{$job->position}}</h2>
                 <div class="content">
                      <p>{{$job->cities->name}}</p>
                      <p>{{$job->companies->name}}</p>
                      <p>{{$job->published}}</p>
                 </div>
             </a>
            </article>
        @endforeach
    </section>
    
</div>
@endsection