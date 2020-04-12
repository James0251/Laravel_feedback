@extends('layouts.app')

@section('title', 'Все сообщения')

@section('content')
    <h1>Все сообщения</h1>

    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->name }}</h3>
            <p>{{ $elem->email }}</p>
            <p><small>{{ $elem->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection

