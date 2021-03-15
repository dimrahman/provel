@extends("/layout/main")

@section('judul','Sejarah')

@section('isi')
<div class="row"> 
	<div class="card ml-5" style="width: 18rem; margin-top: 70px">
	  <img src="{{ asset('images/maulid.jpeg')}}" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Maulid Nabi Muhammad SAW</h5>
	    <p class="card-text">peringatan hari lahir Nabi Muhammad ﷺ, yang di Indonesia perayaannya jatuh pada setiap tanggal 12 Rabiul Awal dalam penanggalan Hijriyah. Kata maulid atau milad dalam bahasa Arab berarti hari lahir.</p>
	    <a href="#" class="btn btn-primary">Lanjut >></a>
	  </div>
	</div>

	<div class="card ml-5" style="width: 18rem; margin-top: 70px">
	  <img src="{{ asset('images/Qurban.jpeg')}}" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Idhul Adha</h5>
	    <p class="card-text">sebuah hari raya Islam. Pada hari ini diperingati peristiwa kurban, yaitu ketika Nabi Ibrahim, yang bersedia untuk mengorbankan putranya Ismail untuk Allah, kemudian sembelihan itu digantikan oleh-Nya dengan domba.</p>
	    <a href="#" class="btn btn-primary">Lanjut >></a>
	  </div>
	</div>

	<div class="card ml-5" style="width: 18rem; margin-top: 70px">
	  <img src="{{ asset('images/Israa.jpg')}}" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Isra Miraj</h5>
	    <p class="card-text">bagian kedua dari perjalanan yang dilakukan oleh Nabi Muhammad ﷺ dalam waktu satu malam saja. Kejadian ini merupakan salah satu peristiwa penting bagi umat Islam, karena pada peristiwa inilah dia mendapat perintah untuk menunaikan salat lima waktu sehari semalam.</p>
	    <a href="#" class="btn btn-primary">Lanjut >></a>
	  </div>
	</div>

	<div class="card ml-5" style="width: 18rem; margin-top: 70px">
	  <img src="{{ asset('images/Pesantren.jpeg')}}" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Pesantren Kilat</h5>
	    <p class="card-text">Pesantren kilat adalah salah satu kegiatan yang hanya berlangsung saat bulan Ramadhan. Gampangnya, pesantren kilat itu semacam 'short course' bagi kamu yang ingin memperdalam ilmu agama. Biasanya, pesantren kilat ini berlangsung selama 2 minggu dan diperuntukkan bagi anak-anak sekolah.</p>
	    <a href="#" class="btn btn-primary">Lanjut >></a>
	  </div>
	</div>

</div>


@endsection