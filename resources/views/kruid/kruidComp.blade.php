@extends('kruid.layout')
@section('content')
<div class="compGrid">
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
            <div class="compHeader">Comp 1</div>
        </div>
            <div class="compSensorContainer">
                <div class="compSensor"></div>
            </div>
            <button class="dispense btn">Dispense</button> 
        </div>

    </div>
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
                <div class="compHeader">Comp 2</div>
            </div>
            <div class="compSensorContainer">
                <div class="compSensor"></div>
            </div>
            <button class="dispense btn">Dispense</button>

        </div>
        
    </div>
    <div class="compCard">
        <div class="compContent">
            <div class="compHeaderContainer">
                <div class="compHeader">Comp 3</div>
            </div>
            <div class="compSensorContainer">
                <div class="compSensor"></div>
            </div>
            <button class="dispense btn">Dispense</button>

        </div>
        
    </div>

</div>
@endsection