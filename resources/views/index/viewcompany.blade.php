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
	<h1 style="color:crimson">Компании</h1>
    <h3 style="text-align:centre; color: lightseagreen;">Тук ще намериш компаниите, предлагащи работа както и малко повече информация за тях</h3>
    <br>
    <div class="table-wrapper" style="border: 3px solid lightseagreen;">
										<table class="alt">
											<thead>
												<tr>
													<th>Име</th>
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