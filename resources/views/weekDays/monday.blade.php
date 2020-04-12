<?php echo "<b>Выберите нужное время визита: </b><br><br>";?>
<table width="100%" cellspacing="0" cellpadding="10" border="3">
    @foreach (array_chunk($mondays->toArray(), 5) as $mondaysChunk)
        {{--        {{dd($mondaysChunk)}}--}}
        <tr>
            @foreach ($mondaysChunk as $monday)
                {{--                {{dd($monday['time'])}}--}}
                <td style='color: gray; text-align: center'><a href="/form">{{ $monday['time'] }}</a></td>
            @endforeach
        </tr>
    @endforeach
</table>
