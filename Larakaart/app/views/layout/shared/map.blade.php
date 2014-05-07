{{HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyB4ofW1mgEVlMIoa48rMP0WkAksHAALU18')}}
{{HTML::script('assets/js/markerclusterer.js')}}
<script type="text/javascript">
    var organizationDetailURL = "{{ URL::route('organizationdetail') }}".split("%7Bid%7D")[0];
    
	var locations = new Array();
	@foreach ($mapLocations as $location)
		@if (isset($location['latitude']) && isset($location['longitude']))
			
			locations.push( {  id:{{$location["id"]}},
								country:"{{$location["country"]}}",
								city:"{{$location["city"]}}",
								street:"{{$location["streetname"]}}",
								number:"{{$location["number"]}}",
								zipcode:"{{$location["zipcode"]}}",
								lat:{{$location["latitude"]}},
								lng:{{$location["longitude"]}},
								title:"{{$location["streetname"]}} {{$location["number"]}}" });
		@endif
	@endforeach
</script>

{{HTML::script('assets/js/mapInit.js')}}

<div id="map-canvas"></div>