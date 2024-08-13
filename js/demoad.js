(function() {
    
    var filename = 'https://tympanus.net/codrops/adpacks/demoad.css?' + new Date().getTime();
    var fileref = document.createElement("link");
    fileref.setAttribute("rel", "stylesheet");
    fileref.setAttribute("type", "text/css");
    fileref.setAttribute("href", filename);
    document.getElementsByTagName("head")[0].appendChild(fileref);

    let cdaSpots = ['ad1','ad2'];
    let cdaSpot = cdaSpots[Math.floor(Math.random() * cdaSpots.length)];

    switch (cdaSpot) {
        case "ad1":
            var cdaLink = 'https://srv.buysellads.com/ads/long/x/TH4K2UIHTTTTTT3CKIZCPTTTTTTFXW5UKWTTTTTTE3SRA7VTTTTTTO4W5HFCN5ZLPHWWNOPFKMKUWJIE5MWD4AI2CJYE';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/uploads/2024/02/MDN-260x200_Deploy-Now-1.jpg';
            var cdaImgAlt = 'IONOS';
            var cdaText = "Deploy in a breeze, where coding meets ease — introducing Deploy Now by IONOS.";
            break;
        case "ad2":
            var cdaLink = 'https://codux.hopp.to/codrops_demo';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/uploads/2024/03/260x200.png';
            var cdaImgAlt = 'Codux';
            var cdaText = "Meet Codux—the all-in-one visual development environment where design and code are always in sync.";
            break;
        case "ad3":
            var cdaLink = 'https://tympanus.net/codrops/collective/';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/uploads/2023/11/TheCollective_small.jpg';
            var cdaImgAlt = 'The Codrops Collective';
            var cdaText = "Stay at the forefront of frontend creativity with our bi-weekly newsletter. Subscribe now.";
            break;
        case "ad4":
            var cdaLink = 'https://bit.ly/codrops-diviai';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/banners/Divi_Carbon.jpg';
            var cdaImgAlt = 'Divi AI';
            var cdaText = "Transform content, code, images, and websites on demand with DIVI AI.";
            break;
        case "ad5":
            var cdaLink = 'https://bit.ly/codrops-readymag';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/uploads/2024/02/ReadyMag-1.png';
            var cdaImgAlt = 'Readymag';
            var cdaText = "Get into notable designers’ heads: stories about leadership, burnout, and more, produced by Readymag and You Creative Media.";
            break;
        default:
            var cdaLink = 'https://www.elegantthemes.com/affiliates/idevaffiliate.php?id=17972_5_1_16';
            var cdaImg = 'https://tympanus.net/codrops/wp-content/banners/Divi_Carbon.jpg';
            var cdaImgAlt = 'Divi';
            var cdaText = "From our sponsor: Divi is more than just a WordPress theme, it's a completely new website building platform. Try it.";
    }

    var cda = document.createElement('div');
    cda.id = 'cdawrap';
    cda.style.display = 'none';
    cda.innerHTML = '<a href="'+cdaLink+'" class="carbon-img" target="_blank" rel="noopener"><img src="'+cdaImg+'" alt="'+cdaImgAlt+'" border="0" height="100" width="130"></a><a href="'+cdaLink+'" class="carbon-text" target="_blank" rel="noopener">'+cdaText+'</a><div class="cda-footer"><a class="carbon-poweredby" href="https://tympanus.net/codrops/advertise/" target="_blank" rel="noopener">Become a sponsor</a><span class="cda-remove" id="cda-remove">Close</span></div>';
    document.getElementsByTagName('body')[0].appendChild(cda);

    setTimeout(function() {
        cda.style.display = 'block';
    }, 1000);

    document.getElementById('cda-remove').addEventListener('click', function(e) {
        cda.style.display = 'none';
        e.preventDefault();
    });
    
})();