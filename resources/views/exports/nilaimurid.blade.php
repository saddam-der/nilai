<table class="table align-items-center">
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
