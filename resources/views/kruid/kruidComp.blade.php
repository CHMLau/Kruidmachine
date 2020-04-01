@extends('kruid.layout')
@section('content')
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
            <button class="dispense">Dispense</button>
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
            <button class="dispense">Dispense</button>

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
            <button class="dispense">Dispense</button>

        </div>

    </div>

</div>

<style>
@foreach($comp as $compa)
  .comp1Fill {
    height: {{$comp_1->comp_volheid}}%;
  }

  .comp2Fill {
    height: {{$comp_2->comp_volheid}}%;
  }

  .comp3Fill {
    height: {{$comp_3->comp_volheid}}%;
  }
@endforeach
</style>

@endsection
