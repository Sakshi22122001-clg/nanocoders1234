var a = document.getElementById('bimage1');
var b = document.getElementById('bimage1');
var c = document.getElementById('bimage1');
var j = 0;
var i = setInterval(change, 3000)

function change() {

    j++;
    if (j == 4)
        j = 1;


    if (j == 1) {
        document.getElementById('bimage1').style.zIndex = 2;
        document.getElementById('bimage2').style.zIndex = 1;
        document.getElementById('bimage3').style.zIndex = 1;
    } else if (j == 2) {
        document.getElementById('bimage1').style.zIndex = 1;
        document.getElementById('bimage2').style.zIndex = 2;
        document.getElementById('bimage3').style.zIndex = 1;
    } else {
        document.getElementById('bimage1').style.zIndex = 1;
        document.getElementById('bimage2').style.zIndex = 1;
        document.getElementById('bimage3').style.zIndex = 2;
    }

}
