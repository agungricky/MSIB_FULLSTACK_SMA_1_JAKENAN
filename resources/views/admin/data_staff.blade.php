@extends('admin.index')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Staff</h4>
        <p class="card-description"> Add class <code>.table-striped</code>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No </th>
              <th> Nip </th>
              <th> Gender </th>
              <th> Tanggal Lahir </th>
              <th> Alamat </th>
              <th> No Hp </th>
              <th> details </th>
            </tr>
          </thead>
          <tbody>
            @php $no=1; @endphp
            @foreach ($staff as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nip }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->gender }} </td>
                <td>{{ $row->tanggal_lahir }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->foto }}</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
