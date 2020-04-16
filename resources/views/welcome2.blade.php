@extends('layouts.homeingelogd')
@section('content')

    <img src="../../../img/textuitleg.png" id="uitleg_1" class="uitleg" title="uitleg enzo" />
    <img src="../../../img/buttonuitleg.png" id="uitleg_2" class="uitleg" title="uitleg enzo" />

<div class="compGrid">
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
                <div class="compHeader">Comp 1</div>
            </div>
            <div class="compSensorContainer">
                <div class="compSensor">
                    <div class="comp1Fill">

                    </div>
                </div>
            </div>

            @foreach($comp_1 as $comp)
                <h1 class="compSelect">{{ $comp->comp_kruid }}</h1>
            @endforeach

            @foreach($comp_1 as $compartiment)
                <a class="update_kruid"
                    href="{{ url('/kruid/kruid_update_comp1/'. $compartiment->comp_nummer) }}">Update</a>

            @endforeach
        </div>
    </div>
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
                <div class="compHeader">Comp 2</div>
            </div>
            <div class="compSensorContainer">
                <div class="compSensor">
                    <div class="comp2Fill">

                    </div>
                </div>
            </div>

            @foreach($comp_2 as $comp)
                <h1 class="compSelect">{{ $comp->comp_kruid }}</h1>
            @endforeach

            @foreach($comp_2 as $compartiment)
                <a class="update_kruid"
                    href="{{ url('/kruid/kruid_update_comp1/'. $compartiment->comp_nummer) }}">Update</a>

            @endforeach
        </div>

    </div>
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
                <div class="compHeader">Comp 3</div>
            </div>
            <div class="compSensorContainer">
                <div class="compSensor">
                    <div class="comp3Fill">

                    </div>
                </div>
            </div>

            @foreach($comp_3 as $comp)
                <h1 class="compSelect">{{ $comp->comp_kruid }}</h1>
            @endforeach

            @foreach($comp_3 as $compartiment)
                <a class="update_kruid"
                    href="{{ url('/kruid/kruid_update_comp1/'. $compartiment->comp_nummer) }}">Update</a>

            @endforeach
        </div>
</div>

<a class="infoButton">&#9432; Info</a>	

<style>
  @foreach($comp_1 as $comp_1)
    .comp1Fill {
      height: {{$comp_1->comp_volheid}}%;
    }
  @endforeach
  @foreach($comp_2 as $comp_2)
    .comp2Fill {
      height: {{$comp_2->comp_volheid}}%;
    }
  @endforeach
  @foreach($comp_3 as $comp_3)
    .comp3Fill {
      height: {{$comp_3->comp_volheid}}%;
    }
  @endforeach
</style>

@endsection

{{--@extends('layouts.home')

@section('content')
    <img src="../../../img/home1.png" id="uitleg_1" class="uitleg uitleg_1" title="uitleg enzo" />
    <img src="../../../img/add1.png" id="uitleg_2" class="uitleg uitleg_2" title="uitleg enzo" />
    <img src="../../../img/mix.png" id="uitleg_3" class="uitleg uitleg_3" title="uitleg enzo" />
    <img src="../../../img/menu.png" id="uitleg_4" class="uitleg uitleg_4" title="uitleg enzo" /> 
@endsection--}}