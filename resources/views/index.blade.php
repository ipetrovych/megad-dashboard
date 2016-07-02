@extends('layouts.app')

@section('content')

<div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="home">
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Weather</dtitle>
                <hr>

            </div>
        </div>

        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>User Profile</dtitle>
                <hr>

            </div>
        </div>

        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>User Profile</dtitle>
                <hr>

            </div>
        </div>

        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>User Profile</dtitle>
                <hr>

            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="light">
        <div class="col-sm-6 col-lg-6">
            <div class="dash-unit">
                <dtitle>Light</dtitle>
                <hr>

                <div class="cont light-container">
                    <img class="plan" src="images/plan1.png" />
                    @foreach ($lights as $light)

                        @if ($light->floor == 1)
                            <div class="switch" data-id="{{ $light->id }}" style="top: {{ $light->top }}px;left: {{ $light->left }}px;"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="dash-unit">
                <dtitle>Light</dtitle>
                <hr>

                <div class="cont light-container">
                    <img class="plan" src="images/plan2.png" />
                    @foreach ($lights as $light)

                        @if ($light->floor == 2)
                            <div class="switch" data-id="{{ $light->id }}" style="top: {{ $light->top }}px;left: {{ $light->left }}px;"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="other1">qwer</div>
    <div role="tabpanel" class="tab-pane" id="other2">asdf</div>
</div>

@endsection