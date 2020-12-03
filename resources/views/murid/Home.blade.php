@extends('voyager::master')

@section('content')
    <div class="container-fluid">
        <div class="col-12">
                <table class="table align-items-center " id="data_users_side" width="100%">
                    <thead class="">
                        <tr>
                            <th scope="col" class="sort" >Nama</th>
                            <th scope="col" class="sort" >Mapel</th>
                            <th scope="col" class="sort" >Tugas</th>
                            <th scope="col" class="sort" >Uts</th>
                            <th scope="col" class="sort" >Uas</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai->sortBy('id_murid') as $item)
                            @if($item->muridnya->kelas == "XI" && $item->mapelnya->nama == "Matematika")
                            <tr>
                                <td>{{ $item->muridnya->nama }}</td>
                                <td>{{ $item->mapelnya->nama }}</td>
                                <td>{{ $item->tugas }}</td>
                                <td>{{ $item->uts }}</td>
                                <td>{{ $item->uas }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> --}}

    {{-- <script type="text/javascript">
        $(document).ready(function () {
            $('#data_users_side').DataTable({
                processing: true,
                serverSide: true,
                dom: '<ip>',
                pagingType: "simple",
                oLanguage: {
                    // "sInfo": "Ada _TOTAL_ siswa, yang ditampilkan  _END_ siswa",
                    oPaginate: {
                        sNext: '<i class="page-item fas fa-angle-right" ></i>',
                        sPrevious: '<i class="page-item fas fa-angle-left" ></i>'
                    }
                },
                ajax: "/users_server_side",
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        visible: false
                    },
                    {
                        data: 'muridnya.nama',
                        name: 'muridnya',
                        orderable: false,
                    },
                    {
                        data: 'mapelnya.nama',
                        name: 'mapelnya',
                        orderable: false,
                    },
                    {
                        data: 'tugas',
                        name: 'tugas',
                    },
                    {
                        data: 'uts',
                        name: 'uts',
                    },
                    {
                        data: 'uas',
                        name: 'uas',
                    },
                ]
            });
            var dataTable = $('#data_users_side').dataTable();
            $("#searchbox").keyup(function () {
                dataTable.fnFilter(this.value);
            });
        });
    </script> --}}
@endsection
