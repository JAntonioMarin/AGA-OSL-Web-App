(function(window, document){
    // Abreviar document.getElementById
    function $(id){
        return document.getElementById(id);
    }

    //Variables para evitar acceder al DOM muchas veces y abreviar
    
    var form = $('formulario'),
        referencia = $('referencia'),
        revisado = $('revisado'),
        tipo = $('tipo'),
        cpu = $('cpu'),
        mhz = $('mhz');
        ram = $('ram');
        discoduro = $('discoduro');
        cddvd = $('cddvd');
        floppy = $('floppy');
        ethernet = $('ethernet');
        fuenteAlimentacion = $('fuenteAlimentacion');
        notas = $('notas');
        campañaNumero = $('campañaNumero');
        puntuacionCPU = $('puntuacionCPU');
        puntuacionRam = $('puntuacionRam');
        puntuacionDD = $('puntuacionDD');
        puntuacion = $('puntuacion');

    function estaVacio(valor){
        return valor === "";
    }

    //Ocurre al enviar el formulario
    function onsubmit(e){
        var data = {
            referencia: referencia.value,           
            cpu: cpu.value,
            mhz: mhz.value,            
            ram: ram.value,
            discoduro: discoduro.value,
            cddvd: cddvd.value,            
            fuenteAlimentacion: fuenteAlimentacion.value,
            campañaNumero: campañaNumero.value,
            puntuacionCPU: puntuacionCPU.value,
            puntuacionRam: puntuacionRam.value,
            puntuacionDD: puntuacionDD.value,
            puntuacion: puntuacion.value            
        },
        errores = [];

        e = e || window.event;

        // Evitamos redireccionar
        if( typeof e.preventDefault === 'function'){
            e.preventDefault()
        } else {
            e.returnValue = false;
        }

        // comprobamos errores (prefiero mostrarlos normalmente quitando el required)
        if( estaVacio(data.referencia)){
            errores.push("El campo referencia no puede estar vacío")
        }       
        if( estaVacio(data.cpu) ){
            errores.push("El campo cpu no puede estar vacío")
        }
        if( estaVacio(data.mhz) ){
            errores.push("El campo mhz no puede estar vacío")
        }
        if( estaVacio(data.ram) ){
            errores.push("El campo ram no puede estar vacío")
        }
        if( estaVacio(data.discoduro) ){
            errores.push("El campo disco duro no puede estar vacío")
        }
        if( estaVacio(data.cddvd) ){
            errores.push("El campo CD/DVD no puede estar vacío")
        }
        if( estaVacio(data.fuenteAlimentacion) ){
            errores.push("El campo fuente de alimentacion no puede estar vacío")
        }
        if( estaVacio(data.campañaNumero) ){
            errores.push("El campo campaña numero no puede estar vacío")
        }
        if( estaVacio(data.puntuacionCPU) ){
            errores.push("El campo puntuacion CPU no puede estar vacío")
        }
        if( estaVacio(data.puntuacionRam) ){
            errores.push("El campo puntuacion Ram no puede estar vacío")
        }
        if( estaVacio(data.puntuacionDD) ){
            errores.push("El campo puntuacion DD no puede estar vacío")
        }
        if( estaVacio(data.puntuacion) ){
            errores.push("El campo puntuacion no puede estar vacío")
        }

        // Si hay errores no enviamos el formulario
        if(errores.length){
            error.innerHTML = '<ul><li>' + errores.join('</li><li>') + '</li></ul>';
            return false;
        }

        // Si no hay errores, ponemos la lista de errores vacíos
        error.innerHTML = '';

        // Enviamos el formulario, pero evitamos redireccionar
        enviarform(data);
        return false;
    }

    // Función mediante la que enviamos el formulario
    function enviarform(data){
        var request = createRequest(),
        params = convertirObjeto(data);

        request.open("POST", 'post.php', false);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.onreadystatechange = function(){
            if( request.readyState === 4 ){
                if( request.responseText !== "SUCCESS" ){
                    return error.innerHTML = "<ul><li>Hubo un error al enviar el formulario</li></ul>"
                }
                // Si está todo correcto mostramos el mensaje y ocultamos el formulario
                correcto.innerHTML = "Se han enviado los datos";
                form.style.display = "none";
            }
        }
        request.send(params);
    }

    // Creamos una solicitud AJAX
    function createRequest(){
        // IE7 no implementó bien XMLHttpRequest, así que intentamos usar el nativo
        if( window.ActiveXObject ){
            try{
                return new window.ActiveXObject("Microsoft.XMLHTTP"); 
            } catch(ex){
                alert("Usas un navegador demasiado antiguo (IE5), actualízalo para poder disfrutar de la web")
                return null
            }
        }
        return new window.XMLHttpRequest();
    }

    // Convierte un objeto en una cadena de texto preparada para ser enviada al servidor
    function convertirObjeto(obj){
        var ret = '',
        key, current = 0;
        for (key in obj){
            ret += ((current === 0 ? '' : '&') + key + '=' + encodeURIComponent(obj[key]) );
            current++
        }
        return ret;
    }

    /*
        Si no está javascript activado y es un navegador moderno, el navegador comprobará los campos por nosotros
        Si sí lo está, prefiero comprobarlos y mostrar los errores en conjunto.
    */
    //nombre.required = email.required = mensaje.required = false;
    //email.type = "text";


    // Añadimos el evento cuando el formulario va a ser enviado
    form.addEventListener ? form.addEventListener('submit', onsubmit, false): form.attachEvent('onsubmit', onsubmit)

})(window, document, undefined)