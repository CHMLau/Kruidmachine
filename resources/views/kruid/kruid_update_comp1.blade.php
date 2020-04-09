@extends('layouts.home')
@section('content')

<a href="{{ url()->previous() }}" class="backButton">&#10094; back</a>	

<form method="post" action="/kruid/kruid_update_comp1/{{$compartiment->comp_nummer}}">
    {{csrf_field()}}
    @method('patch')
        <h1>Compartiment {{$compartiment->comp_nummer}}</h1>
        <select class="compSelect compSpice" name="kruid">
            @foreach($kruid as $kruid)
                <option value="{{$kruid->kruid}}">{{$kruid->kruid}}</option>	
            @endforeach	
        </select>
        <button type="submit" class="update_kruid">Update</button>

</form>


@endsection