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
<body class="bg-[#0C0D0D] relative">

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
            @include('marketing.widgets.content.features')
        </div>
    </div>
    @include('marketing.widgets.content.howwedoit')
    @include('marketing.widgets.content.benefits')
    @include('marketing.widgets.content.whatyouget')
    @include('marketing.widgets.content.bottomcta')
    @include('marketing.widgets.content.footer')
</body>
</html>
