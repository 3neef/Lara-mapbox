<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h2>My Map</h2>
                </div>
                <div class="card-body">
                    <div id='map' style=' width:100%; height:80vh; '></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    My shit
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input  wire:model="long" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input wire:model="lat" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')

<script>
    document.addEventListener('livewire:load', ()=>{
        const defaultlocation = [32.48134141930012, 15.64275642504424]

        mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
        var map = new mapboxgl.Map({
        container: 'map',
        center: defaultlocation,
        zoom: 11.15,
        style: 'mapbox://styles/mapbox/dark-v10'
        });
        map.addControl(new mapboxgl.NavigationControl());


        map.on('click', (e) => {
            const maz = e.lngLat.lng
            const zax = e.lngLat.lat

            @this.long = maz 
            @this.lat = zax
        })
    })
        
</script>
  
    
@endpush