@extends('layouts.multi')
@section('content')
<div class="inner">
		<header style="text-align:center;">
			<h1 style="text-align:centre; color: lightseagreen;">Намери работа бързо и лесно с нашият сайт!</h1>
            <br>
            <div>
            <div class="form-group">
        <form action="{{ route('job') }}" method="GET" role="search">
        <input type="text" class="form-control mr-2" name="term" placeholder="Търси работа" id="term">
            <div style="margin:15px 10px 0px">
                <button class="button success icon solid fa-search" style=" border-radius: 6px;font-size: 0.5em;font-weight: 100;height:3em;letter-spacing: 0.25em;line-height: 1em;padding: 0 1.1em 0 1em;" type="submit" title="Търси работа">
                    <span class="">Търси</span>
                </button>
                <a href="{{ route('job') }}"></a>
                    <button class="button icon solid fa-sync-alt" style=" border-radius: 6px;font-size: 0.5em;font-weight: 100;height: 3em;letter-spacing: 0.25em;line-height: 1em;padding: 0 1.1em 0 1em;" type="submit" title="Refresh page" style="margin-left:10px">
                        <span class="">Презареждане</span>
                    </button>
                </a>
            </div>
        </form>
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