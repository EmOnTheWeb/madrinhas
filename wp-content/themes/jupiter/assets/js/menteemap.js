var bubble_map = new Datamap({
  element: document.getElementById("bubbles"),
  responsive: true,
  geographyConfig: {
    popupOnHover: false,
    highlightOnHover: false
  },
  fills: {
    defaultFill: '#ABDDA4',
    BAR: 'red',
    KEN: 'red',
    NPL: 'red',
    NGA: 'red',
    PSE: 'blue',
    RWA: 'blue',
    ZAF: 'blue',
    TUN: 'red',
    ZMB: 'red' 
  },
  data: {
        'BAR': {fillKey: 'BRB'},
        'KEN': {fillKey: 'KEN'},
        'NPL': {fillKey: 'NPL'},
        'NGA': {fillKey: 'NGA'},
        'PSE': {fillKey: 'PSE'},
        'RWA': {fillKey: 'RWA'},
        'ZAF': {fillKey: 'ZAF'},
        'TUN': {fillKey: 'TUN'},
        'ZMB': {fillKey: 'ZMB'}
  }
});
bubble_map.bubbles([
  {
    name: 'Kenya',
    radius: 25,
    centered: 'KEN',
    fillKey: 'KEN',
  },
  {
    name: 'Nepal',
    radius: 25,
    country: 'NPL',
    centered: 'NPL',
    fillKey: 'NPL'
  },
  {
    name: 'Nigeria',
    radius: 20,
    country: 'NGA',
    centered: 'NGA',
    fillKey: 'NGA'
  },
  {
    name: 'Palestine',
    radius: 35,
    country: 'PSE',
    centered: 'PSE',
    fillKey: 'PSE'
  },
  {
    name: 'Rwanda',
    radius: 30,
    country: 'RWA',
    centered: 'RWA',
    fillKey: 'RWA'
  },
  {
    name: 'South Africa',
    radius: 40,
    country: 'ZAF',
    centered: 'ZAF',
    fillKey: 'ZAF' 
  },
  {
    name: 'Tunisia',
    radius: 25,
    country: 'TUN',
    centered: 'TUN',
    fillKey: 'TUN' 


  },
    {
    name: 'Zambia',
    radius: 20,
    country: 'ZMB',
    centered: 'ZMB',
    fillKey: 'ZMB' 
  }
], {
  
});

window.addEventListener('resize', function() {
    bubble_map.resize();
});
     