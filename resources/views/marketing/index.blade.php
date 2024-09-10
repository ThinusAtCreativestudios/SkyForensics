<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sky Forensics</title>
    <meta name="description" content="Sky Forensics | Polygraph and Lie detection tests in the Garden Route">
    @vite('resources/css/app.css')
</head>

@php
    $popupIds = ['handleDiscreetly', 'uncoverHiddenThreats', 'confirmSuspicios'];
@endphp

<body data-overflow="true" class="bg-[#0C0D0D] relative data-[overflow=false]:overflow-hidden">

    <script>
        window.app = {
            route: "{{ Route::currentRouteName() }}",
            active: {},
        }
    </script>

    @include('marketing.widgets.content.popups.discreetpopup', ['id' => $popupIds[0]])
    @include('marketing.widgets.content.popups.hiddenthreatspopup', ['id' => $popupIds[1]])
    @include('marketing.widgets.content.popups.suspicionpopup', ['id' => $popupIds[2]])

    <div class="relative overflow-hidden">
        <div class="absolute top-0 left-0 pointer-events-none">
            @include('marketing.widgets.vectors.landinglight', ['class' => 'w-[1440px] h-[1402px]'])
        </div>
        @include('marketing.widgets.structural.topnav')
        @include('marketing.widgets.content.landingpagehero')
    </div>

    <div class="relative overflow-hidden">
        @include('marketing.widgets.content.brands')

        <div class="relative">
            <div class="absolute -top-[80px] -left-[50px] blur-[50px] h-[150px] w-full z-[2] blur-divider"></div>
            @include('marketing.widgets.content.features', ['ids' => $popupIds])
        </div>
    </div>
    @include('marketing.widgets.content.howwedoit')
    @include('marketing.widgets.content.benefits')
    @include('marketing.widgets.content.whatyouget')
    @include('marketing.widgets.content.bottomcta')
    @include('marketing.widgets.content.footer')
    @vite('resources/js/app.js')
</body>
</html>
