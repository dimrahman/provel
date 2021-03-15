@extends("/layout/main")

@section('judul','Anggota')

@section('isi') 
<center><h1 style="font-family: Times New Roman">Anggota</h1></center>

<div class="row" style="font-family: Times New Roman">
	<div class="card ml-5" style="width: 18rem;">
	  <img height="400px" src="{{ asset('images/Dimass.jpeg')}}" class="card-img-top img-fluid" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Dimas Rahman Prasetyo</h5>
	    <p class="card-text">SMK Telkom Jakarta</p>
	    <p class="card-text">XII TEL 12</p>
	    <p class="card-text">RPL</p>
  	</div>
  </div>

	<div class="card ml-5" style="width: 18rem;">
 	 <img height="400px" src="{{ asset('images/Ok.jpeg')}}" class="card-img-top img-fluid" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">OK Zahran</h5>
	    <p class="card-text">SMK Telkom Jakarta</p>
	    <p class="card-text">XII TEL 10</p>
	    <p class="card-text">RPL</p>
	  </div>
	</div>

	<div class="card ml-5" style="width: 18rem;">
 	 <img height="400px" src="{{ asset('images/Mega.jpeg')}}" class="card-img-top img-fluid" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Mega Osama</h5>
	    <p class="card-text">SMK Telkom Jakarta</p>
	    <p class="card-text">XII TEL 8</p>
	    <p class="card-text">TKJ</p>
	  </div>
	</div>

	<div class="card ml-5" style="width: 18rem;">
 	 <img height="400px" src="{{ asset('images/Melati.jpeg')}}" class="card-img-top img-fluid" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Melati Kusumaningrum</h5>
	    <p class="card-text">SMK Telkom Jakarta</p>
	    <p class="card-text">XII TEL 1</p>
	    <p class="card-text">TR</p>
	  </div>
	</div>
</div>

@endsection