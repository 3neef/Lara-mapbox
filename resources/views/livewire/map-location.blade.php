<div>
    <h3>دبل فك</h3>
    <div id='map' style='width: 400px; height: 300px;'></div>

</div>

@push('scripts')

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiM25lZWYiLCJhIjoiY2t0eWswbWU5MzQxMTJvbXBxemNva3pkbCJ9.csVXrNlNdFdX8TmFEt4QHw';
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11'
    });
  </script>
  
    
@endpush