@extends('layout.index')

@section('content')
<form action="/compagnieEdit/{{$id_show->id}}/update" method="POST">
    @csrf
    @method('PUT')
<input type="text" value={{$id_show->compagnyName}} name="compagnyName">
<input type="text" value={{$id_show->compagnyAddress}} name="compagnyAddress">
<input type="number" value={{$id_show->PostalCode}} name="PostalCode">
<input type="number" value={{$id_show->DoorNumber}} name="DoorNumber">
<input type="number" value={{$id_show->phoneNumber}} name="phoneNumber">
<input type="email" value={{$id_show->email}} name="email">
<input type="text" value={{$id_show->contactName}} name="contactName">
<input type="text" value={{$id_show->contactFirstName}} name="contactFirstName">
<input type="url" value={{$id_show->image}} name="image">
<button type="submit">edit</button>
</form>
@endsection
