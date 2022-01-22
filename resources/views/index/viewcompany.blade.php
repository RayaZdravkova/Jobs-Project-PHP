@extends('layouts.multi')
@section('content')
<div class="inner">
	<h1>Generic Page</h1>
    <div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
                                                    <th>Описание</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($company as $company)
												<tr>
													<td>{{$company->name}}</td>
                                                    <td>{!!$company->description!!}</td>
												</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
</div>
@endsection