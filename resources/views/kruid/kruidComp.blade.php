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

            <select name="hoeveelheid">
				        <option value="theelepel">Theelepel</option>
                <option value="1/2 theelepel">1/2 Theelepel</option>
		      	</select>

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

            <select name="hoeveelheid">
				        <option value="theelepel">Theelepel</option>
                <option value="1/2 theelepel">1/2 Theelepel</option>
		      	</select>

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

            <select name="hoeveelheid">
				        <option value="theelepel">Theelepel</option>
                <option value="1/2 theelepel">1/2 Theelepel</option>
		      	</select>

            <button class="dispense">Dispense</button>

        </div>
    </div>

</div>

{{-- <style>
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
</style> --}}

@endsection
