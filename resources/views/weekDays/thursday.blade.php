@php
    foreach($thursdays as $thursday){
        $something[] = $thursday['time'];
    }
@endphp

<table width="100%" cellspacing="0" cellpadding="10" border="3">
    @foreach(array_chunk($something, 5) as $times)
        <tr>
            @foreach($times as $time)
                @php
                    $query = http_build_query(compact('day', 'month', 'time'));
                @endphp
                <td style = 'color: gray; text-align: center'><a href="/form?{{ $query }}">{{ $time }}</a></td>
            @endforeach
        </tr>
    @endforeach
</table>
