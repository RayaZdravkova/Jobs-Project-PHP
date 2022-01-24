@extends('layouts.multi')
@section('content')
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #F0FFFF;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: lightseagreen;}

#customers tr:hover {background-color: #F0FFFF;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: lightseagreen;
  color: white;
}
</style>
</head>
<body>

<div class="inner" id="customers">
	<h1 style="color:crimson">Градове</h1>
    <br>
    <div class="table-wrapper" style="border: 3px solid lightseagreen;">
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