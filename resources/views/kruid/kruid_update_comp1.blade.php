@extends('layouts.home')
@section('content')



<form method="post" action="/kruid/kruid_update_comp1/{{$compartiment->comp_nummer}}">
    {{csrf_field()}}
    @method('patch')
        <select class="compSelect compSpice" name="kruid">
            @foreach($kruid as $kruid)
                <option value="{{$kruid->kruid}}">{{$kruid->kruid}}</option>	
            @endforeach	
        </select>
        <button type="submit" class="update_kruid">Update</button>

</form>


@endsection