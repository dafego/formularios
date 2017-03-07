


function buscar(){
    var pattern = document.getElementById('buscar').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'buscar.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datos');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('buscar').addEventListener('input', buscar, false);
}, false);





function buscarus(){
    var pattern = document.getElementById('buscarus').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'buscaruser.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datosus');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('buscarus').addEventListener('input', buscarus, false);
}, false);




function buscarpro(){
    var pattern = document.getElementById('buscarpro').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'buscarprod.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datospro');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('buscarpro').addEventListener('input', buscarpro, false);
}, false);



function buscarPru(){
    var pattern = document.getElementById('buscarPru').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'buscarprueba.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datosPru');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('buscarPru').addEventListener('input', buscarPru, false);
}, false);




function buscarTrans(){
    var pattern = document.getElementById('buscarTrans').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'buscartrans.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datostrans');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('buscarTrans').addEventListener('input', buscarTrans, false);
}, false);

