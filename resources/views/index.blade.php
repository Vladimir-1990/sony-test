@extends('partials.header')

@section('body')

    <div class="container">
        <div class="content">
            <h1>Boat Calculation</h1>
            <form>
                <div class="row">
                    <label for="hull-length">Hull Length</label>
                    <input type="text" class="input-box" id="hull-length" placeholder="Hull Length" />
                    <span class="message error"></span>
                </div>
                <div class="row">
                    <label for="buttoc-angle">Button Angle</label>
                    <input type="text" class="input-box" id="buttoc-angle" placeholder="Buttoc Angle" />
                    <span class="message error"></span>
                </div>
                <div class="row">
                    <label for="displacement">Displacement</label>
                    <input type="text" class="input-box" id="displacement" placeholder="Displacment" />
                    <span class="message error"></span>
                </div>
                <a href="#" class="button large" id="calculate">Calculate</a>
                <div class="row">
                    <label for="hull-speed">Hull speed</label>
                    <input type="text" class="input-box" id="hull-speed" readonly />
                    <span class="message error"></span>
                </div>
                <div class="row">
                    <label for="hp">HP required for 30 kts</label>
                    <input type="text" class="input-box" id="hp" readonly />
                </div>
            </form>
        </div>

    </div>

@stop