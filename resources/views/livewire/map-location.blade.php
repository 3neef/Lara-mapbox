<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>My Map</h2>
                </div>
                <div class="card-body">
                    <div id='map' style=' width:100%; height:80vh; '></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    My shit
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')

<script>
    mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/dark-v10'
    });
    map.addControl(new mapboxgl.NavigationControl());
  </script>
  
    
@endpush