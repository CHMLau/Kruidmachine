@extends('layouts.home')
@section('content')
	

<form method="post" action="/kruid/kruid_update_comp1/{{$compartiment->comp_nummer}}">
    {{csrf_field()}}
    @method('patch')
        <h1>Compartiment {{$compartiment->comp_nummer}}</h1>
        <select class="compSelect compSpice" name="kruid">
            @foreach($kruid as $kruid)
                <option value="{{$kruid->kruid}}">{{$kruid->kruid}}</option>	
            @endforeach	
        </select>
        <button type="submit" class="update_kruid update_kruid2">Update</button>

</form>

<div class="btn_plus_footer">
	<a href="{{ url()->previous() }}" class="back_btn_phone">&#10094; Back</a>	
</div>


@endsection