@extends("/layout/main")

@section('judul','index')

@section('isi') 

<div class="container" style="margin-top: 250px">
	<div class="row">
		<div class="col text-white" style="font-family: Times New Roman">
			<h2>ROHIS</h2>
			<p>Rohani Islam adalah sebuah organisasi memperdalam dan memperkuat ajaran Islam. Rohis sering disebut juga sebagai IREMA atau Dewan Keluarga Masjid. Rohis biasanya dikemas dalam bentuk ekstrakurikuler di sekolah menengah pertama dan sekolah menengah atas.</p>
		</div>
		<div class="col">
			<img class="img-fluid" src="{{ asset('images/Rohis.jpeg') }}" height="300" width="500">
		</div>
	</div>
</div>

@endsection