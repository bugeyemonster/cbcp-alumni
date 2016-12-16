@extends('layouts.app')

@push('stylesheets')
    <link href="/css/homepage.css" rel="stylesheet">
@endpush

@section('content')

<div id="map"></div>
<script>
    function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&amp;callback=initMap"></script>

@endsection