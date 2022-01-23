@extends('layouts.multi')
@section('content')
<div class="inner">
	<h1 style="color:crimson">Градове</h1>
    <div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Град</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($city as $city)
												<tr>
													<td>{{$city->name}}</td>
												</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
</div>
@endsection