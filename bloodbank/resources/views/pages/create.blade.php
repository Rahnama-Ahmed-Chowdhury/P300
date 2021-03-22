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
		<form action="{{route('pages.store')}}" method="POST">
 	 	@csrf
 	
 	    <label for="id" style="margin-left: 449px" class="cr_text">Name:</label>
		 <input type="text" name="Name" placeholder="Full Name"> 
		
		<br>
          <label for="id" style="margin-left: 449px" class="cr_text">Gender: </label>
		  <input type="text" name="Gender" placeholder="Male/Female">
        <br>
          <label for="id" style="margin-left: 449px" class="cr_text">Date of Birth: </label>
		  <input type="text" name="Date_of_Birth" placeholder="date-month-year">
  		<br>
           <label for="id" style="margin-left: 449px" class="cr_text">Blood Type:</label>
		  <input type="text" name="Blood_Type" placeholder="A+|A+|AB+|AB-|B+|B-|O+|O-">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Mobile Number:</label>
		  <input type="text" name="Mobile_Number" placeholder="xxxxxxxxxxx">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Email:</label>
		  <input type="text" name="Email" placeholder="xxxxx@gmail.com">
        
		<br>
		 <label for="id" style="margin-left: 449px" class="cr_text">Address:</label>
		  <input type="text" name="Address" placeholder="Address">
        
		<br>
		<br>
		
		<button type="submit" style="margin-left: 580px">Add</button>
		<br>
		<br>
    
	</form>



</div>
@endsection