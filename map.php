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
    console.log(e)
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

  // create a red polygon from an array of LatLng points
    var latlngs = [
      [// besikama
        [-9.637138243592798, 124.97909545898439],
        [-9.687398430760611, 124.94733810424806],
        [-9.686890789660739, 124.92184638977052],
        [-9.649661685670575, 124.89120483398439],
        [-9.61835220911148, 124.92279052734376],
        [-9.610397447382105, 124.95471954345705],
        [-9.637138243592798, 124.97909545898439],
      ],
      [
        [-9.633922690203264, 124.88699913024904],
        [-9.60531984210661, 124.90270614624025],
      ]
  ];

    // var polygon = L.polyline(latlngs, {color: 'red'}).addTo(map);

    // zoom the map to the polygon
    // map.fitBounds(polygon.getBounds());

  
  
  for (var i = 0; i < locations.length; i++) {

    let a = locations[i].jenis_kejahatan
    console.log(a)
    let b = a.split(", ")
    console.log(b)
    let c = b.map(r=>`<h4 style="font-size: 18px; padding-bottom:2px">${r === ',' ? '' : r}</h4>`)
      console.log(c)
    marker = new L.marker([locations[i].latitude, locations[i].longitude])
      .bindPopup(locations[i].alamat)
      .addTo(map)
      .setPopupContent(
      `<div style="padding: 5px; width: 300px;">
        ${c.toString().replace(/,/g,"")}
        <p style="font-size: 18px;">${locations[i].alamat !== '' ? locations[i].alamat + ',' : ""} ${locations[i].kelurahan !== '' ?  locations[i].kelurahan + ',' : ""} Kecamatan ${locations[i].kecamatan}</p>
        <span class='status-kasus'>Terselesaikan</span>
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