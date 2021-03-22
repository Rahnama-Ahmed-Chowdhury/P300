@extends('layouts.home')

@section('main')


				<div class="text-center">
					<br>
<br>
<br>
<br>
<br>
<br>
					<h2 class="text-center">Search by blood group </h2>
				<form action="{{ route('search') }}" method="GET">
				    <input type="text" name="search" required/>
				    <button type="submit">Search</button>
				</form>
				<br>
<br>
<br>
<br>
<br>
				</div>
				<hr>
				<hr>
				<hr>
<br><br><br><br><br>
		<div>
		@if($informations->isNotEmpty())
		   <table border="2" width="780" class="tble_clr" style="text-align: center;">
			<tr style="text-align: center;">
				<th> Name </th>
				<th> Gender </th>
				<th> DOB </th>
				<th> Blood_type</th>
				<th> Address</th>
				<th> Email</th>
				<th> Mobile Number</th>
				@auth
				<th> Action </th>
				@endauth
				
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
						@auth
						<td>
							<center><button type="submit" > <a href="{{ route('informations.edit', $information->id)}}"style="text-decoration:none;"> Edit </a> </button>
							<form action="{{ route('informations.destroy', $information->id)}}" method="POST">				
							@csrf
		                    @method('DELETE') 

							<button type="submit" > Delete </button></center>
							</form>
							</center>
						</td>
						@endauth
					</tr>

				@endforeach 
		 
       
    				</table>
		@else 
		    <div>

		<br><br><br><br><br>
		        <h2 >No Blood group of this type  found</h2>
		    </div>
		@endif	
	</div>

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>


@endsection