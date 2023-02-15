var originalUrl = window.location.origin;
var animation = bodymovin.loadAnimation({
    container: document.getElementById('anim'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: originalUrl+"/assets/js/loader_Bagpacker.json"
})
