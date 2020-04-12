<?php echo "<b>Выберите нужное время визита: </b><br><br>";?>
<table width="100%" cellspacing="0" cellpadding="10" border="3">
    @foreach (array_chunk($thursdays->toArray(), 5) as $thursdaysChunk)
        {{--        {{dd($thursdaysChunk)}}--}}
        <tr>
            @foreach ($thursdaysChunk as $thursday)
                {{--                {{dd($thursday['time'])}}--}}
                <td style='color: gray; text-align: center'><a href="/form">{{ $thursday['time'] }}</a></td>
            @endforeach
        </tr>
    @endforeach
</table>
