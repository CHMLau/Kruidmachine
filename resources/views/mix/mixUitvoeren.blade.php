@extends('mix.layout')
@section('content')
    @foreach($mix as $mix)
        <form method="post" action="/mix/update/{{$mix->naam}}">
            {{csrf_field()}}
            @method('patch')

            <button class="makeMix" type="submit" name="button">Make</button>
        </form>
    @endforeach
@endsection