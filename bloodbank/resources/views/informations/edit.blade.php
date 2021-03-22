@extends('layouts.home')

@section('main')

@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div > 
	<br>
	<br>

	<form action="{{route('informations.update',$information->id) }}" method="POST">
		
 	 	@csrf
		@method('PUT')
 	    <label for="id" style="margin-left: 449px" class="cr_text">Name:</label>
		 <input type="text" name="Name"  value="{{$information->Name}}"> 
		
		<br>
          <label for="id" style="margin-left: 449px" class="cr_text">Gender: </label>
		  <input type="text" name="Gender" value="{{$information->Gender}}">
        <br>
          <label for="id" style="margin-left: 449px" class="cr_text">Date of Birth: </label>
		  <input type="text" name="Date_of_Birth" value="{{$information->Date_of_Birth}}">
  		<br>
           <label for="id" style="margin-left: 449px" class="cr_text">Blood Type:</label>
		  <input type="text" name="Blood_Type" value="{{$information->Blood_Type}}">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Mobile Number:</label>
		  <input type="text" name="Mobile_Number" value="{{$information->Mobile_Number}}">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Email:</label>
		  <input type="text" name="Email" value="{{$information->Email}}">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Address:</label>
		  <input type="text" name="Address" value="{{$information->Address}}">
        
		<br>
		<br>
		
		<button type="submit" style="margin-left: 580px">Update</button>
		<br>
		<br>
    
	</form>



</div>
@endsection