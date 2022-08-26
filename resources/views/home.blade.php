@extends('layout.index')

@section('content')

@foreach ($compagnies as $compagnie)
<div style="display:grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: 1fr 1fr 1fr 1fr;border:1px solid silver;margin: 1rem 0; padding: 2rem;">
<div>{{$compagnie -> compagnyName}}</div>
<div>{{$compagnie -> compagnyAddress}}</div>
<div>{{$compagnie -> PostalCode}}</div>
<div>{{$compagnie -> DoorNumber}}</div>
<div>{{$compagnie -> phoneNumber}}</div>
<div>{{$compagnie -> email}}</div>
<div>{{$compagnie -> contactName}}</div>
<div>{{$compagnie -> contactFirstName}}</div>
<div style="grid-row:3"><img src={{$compagnie -> image}} alt=""></div>
<div style="grid-row:4">
    <a href="/{{$compagnie->id}}">
        <button type="submit">
            show
        </button>
    </a>
</div>
<div style="grid-row:4">
    <form action="/{{$compagnie->id}}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</div>
</div>
@endforeach
<form action="/deleteAll" method="POST">
    @csrf
<button type="submit">delete all</button>
</form>
@endsection
