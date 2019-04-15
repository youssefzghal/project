
function photoAdd() {


    var photo = document.getElementById('photouploaded');
    var place = document.getElementById('selectedphoto');
   var path = document.getElementById('inputphoto').value.replace(/\\/g, "/");
   path = path.replace("C:/fakepath/","../resources/images/Chauffeurs/");
   place.src = path;
    photo.style.display = 'block';
}