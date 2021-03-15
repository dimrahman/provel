@extends("/layout/main")

@section('judul','Main')

@section('isi') 

<hr>
<hr>
<hr>

    <table class="table text-white">

      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Ketua</th>
          <th scope="col">Divisi</th>
          <th scope="col">Status</th>
        </tr>
      </thead>

      <tbody>
        @foreach($divisions as $data)
        <tr>
          <td scope="row">{{$data -> id}}</td>
          <td>{{$data -> ketua}}</td>
          <td>{{$data -> divisi}}</td>
          <td>{{$data -> status}}</td>
        </tr>
         @endforeach
      </tbody>

    </table>

@endsection