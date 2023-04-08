<script>
document.addEventListener('DOMContentLoaded', () => {

  const initialState = {
    isAdd: false
  }
  
  const addButton = document.getElementById('addButton')
  const mapEl = document.getElementById('map')
  const selectMap = document.getElementById('select-map')

  let isAddingMarker = false;
  
  function setIsAdd(state){
    state.isAdd = !state.isAdd
    isAddingMarker = state.isAdd;
    
  }
  
  let state = initialState
  
  addButton?.addEventListener('click',()=> {
    setIsAdd(state)
    if(isAddingMarker){
      addButton.innerHTML = 'Close'
      mapEl.classList.add('overlay')
      selectMap.style.display = 'flex'
    }else{
      addButton.innerHTML = 'Tambah'
      mapEl.classList.remove('overlay')
      selectMap.style.display = 'none'
    }

    console.log(state.isAdd)
    
  })
  
  var map = L.map('map').setView([-9.546622, 124.8656249], 13);
  map.on('click', (e)=>{
    if(isAddingMarker){
      data = e.latlng
      latitude = data.lat
      longitude = data.lng
      window.location = `form-lokasi-laporan.php?lat=${latitude}&lng=${longitude}`;
    }
  })
  
  var locations = <?php echo json_encode($data); ?>;
  
  
  googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
  }).addTo(map);

  
  
  for (var i = 0; i < locations.length; i++) {
    marker = new L.marker([locations[i].latitude, locations[i].longitude])
      .bindPopup(locations[i].alamat)
      .addTo(map)
      .setPopupContent(
      `<div style="padding: 5px; width: 300px;">
        <h1 style="font-size: 24px;">${locations[i].jenis_kejahatan}</h1>
        <p>${locations[i].alamat}, ${locations[i].kelurahan}, ${locations[i].kecamatan}</p>
      </div>`
      );
  }
})

const menu = document.getElementById('menu')
  const sidebar = document.getElementsByClassName('sidebar')
  menu.addEventListener('click',()=>{
    sidebar[0].classList.toggle('open')
  })
  
  const closeButton = document.getElementById('closeButton')
  closeButton.addEventListener('click',()=>{
    console.log('click')
  })
</script>