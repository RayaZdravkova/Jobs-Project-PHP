@extends('layouts.multi')
@section('content')
<div class="inner">
		<header>
			<h1>This is Phantom, a free, fully responsive site<br />
				template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
			   <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
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