<table class='table table-bordered' cellspacing="0" cellpadding="2" align="center" border="1" width="100%">
    <thead>
        <tr>
            <th rowspan="2" scope="col" class="text-center m-5">Nama</th>
            {{-- <th class="sort">Mapel</th> --}}
            <th colspan="3" class="sort text-center" >Tugas</th>
            <th colspan="3" class="sort text-center">Ulangan Harian</th>
            <th rowspan="2" class="sort text-center" >Nilai Harian</th>
            <th colspan="3" class="sort text-center" >UTS</th>
            <th colspan="3" class="sort text-center">UAS</th>
            <th rowspan="2" class="sort text-center">Nilai Rapot</th>
        </tr>
        <tr>
            {{-- <th class="text-center">KD1</th>
            <th class="text-center">KD2</th>
            <th class="text-center">KD3</th>
            <th class="text-center">KD4</th>
            <th class="text-center">KD5</th>
            <th class="text-center">KD6</th>
            <th class="text-center">KD7</th> --}}
            <th class="text-center">Rata Rata</th>
            <th class="text-center">Bobot</th>
            <th class="text-center">Total</th>
            {{-- <th class="text-center">UH1</th>
            <th class="text-center">UH2</th>
            <th class="text-center">UH3</th>
            <th class="text-center">UH4</th>
            <th class="text-center">UH5</th>
            <th class="text-center">UH6</th>
            <th class="text-center">UH7</th> --}}
            <th class="text-center">Rata Rata</th>
            <th class="text-center">Bobot</th>
            <th class="text-center">Total</th>
            <th class="text-center">P8</th>
            <th class="text-center">Bobot</th>
            <th class="text-center">Total</th>
            <th class="text-center">P8</th>
            <th class="text-center">Bobot</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nilai as $item)
            {{-- @if($item->muridnya->kelas == "XII") --}}
            @php
            $tambahkd = $item->kd1 + $item->kd2 + $item->kd3 + $item->kd4 + $item->kd5 + $item->kd6 + $item->kd7;
            $ratakd = $tambahkd/7;
            $tambahuh = $item->uh1 + $item->uh2 + $item->uh3 + $item->uh4 + $item->uh5 + $item->uh6 + $item->uh7;
            $ratauh = $tambahuh/7;
            $harian = number_format($ratakd+($ratauh*3))/4;
            @endphp

            <tr style="text-align: center">
                <td>{{ $item->muridnya->nama }}</td>
                {{-- <td>{{ $item->kd1 }}</td>
                <td>{{ $item->kd2 }}</td>
                <td>{{ $item->kd3 }}</td>
                <td>{{ $item->kd4 }}</td>
                <td>{{ $item->kd5 }}</td>
                <td>{{ $item->kd6 }}</td>
                <td>{{ $item->kd7 }}</td> --}}
                <td class="text-center">{{ number_format($ratakd) }}</td>
                <td class="text-center">1</td>
                <td class="text-center">{{ number_format($ratakd) }}</td>
                {{-- <td>{{ $item->uh1 }}</td>
                <td>{{ $item->uh2 }}</td>
                <td>{{ $item->uh3 }}</td>
                <td>{{ $item->uh4 }}</td>
                <td>{{ $item->uh5 }}</td>
                <td>{{ $item->uh6 }}</td>
                <td>{{ $item->uh7 }}</td> --}}
                <td class="text-center">{{ number_format($ratauh) }}</td>
                <td class="text-center">3</td>
                <td class="text-center">{{ number_format($ratauh*3) }}</td>
                <td class="text-center">{{ number_format($harian) }}</td>
                <td>{{ $item->uts }}</td>
                <td class="text-center">2</td>
                <td>{{ number_format($item->uts*2) }}</td>
                <td>{{ $item->uas }}</td>
                <td class="text-center">2</td>
                <td>{{ number_format($item->uas*2) }}</td>
                <td class="text-center">{{ number_format((($harian*2)+$item->uts+$item->uas)/4) }}</td>
            </tr>
            {{-- @endif --}}
        @endforeach
    </tbody>
</table>
