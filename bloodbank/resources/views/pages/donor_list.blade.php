@extends('layouts.home')

@section('main')

	<div><br>
<br>
<a href='/create' class="type_text_1"> New Donor </a>
<br>
	<table border="2" width="780" class="tble_clr" style="text-align: center;">
			<tr style="text-align: center;">
				<th> Name </th>
				<th> Gender </th>
				<th> DOB </th>
				<th> Blood_type</th>
				<th> Address</th>
				<th> Email</th>
				<th> Mobile Number</th>
			</tr>
	@foreach ($informations as $information)
			<tr style="text-align: center;"> 
				<td>{{$information->Name}} </td>
				<td>{{$information->Gender}} </td>
				<td>{{$information->Date_of_Birth}} </td>
				<td>{{$information->Blood_Type}} </td>
				<td>{{$information->Address}} </td>
				<td>{{$information->Email}} </td>
				<td>{{$information->Mobile_Number}} </td>
			
			</tr>
		@endforeach 
		 </tr>
       
    </table>
    <br>
    <br>
</div>
@endsection
