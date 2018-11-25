(function() {
    "use strict";
    document.addEventListener('DOMContentLoaded',function(){
        var regalo=document.getElementById('regalo');
        //campos datos de usuario
        var nombre=document.getElementById('nombre');
        var apellido=document.getElementById('apellido');
        var email=document.getElementById('email');

        //campos pases
        var pase_dia=document.getElementById('pase_dia');
        var pase_dosdias=document.getElementById('pase_dosdias');
        var pase_completo=document.getElementById('pase_completo');

        //botones y divs
        var calcular=document.getElementById('calcular');
        var errorDiv=document.getElementById('error');
        var botonRegistro=document.getElementById('btnRegistro');
        var lista_productos=document.getElementById('lista-productos');
        var suma=document.getElementById('suma-total');

        //Extras
        var camisas=document.getElementById('camisa_evento');
        var etiquetas=document.getElementById('etiquetas');

/*       var map = L.map('mapa').setView([-12.068542, -77.085636], 20);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-12.068542, -77.085636]).addTo(map)
            .bindPopup('Aca es la conferencia!!!<br> Nos vemos pronto.')
            .openPopup();*/
        
        calcular.addEventListener('click', calcularMontos);

        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarCampos);
        email.addEventListener('blur', validarEmail);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        function validarEmail() {
            if (this.value.indexOf('@')>-1) {
                errorDiv.style.display='none';
                this.style.border='1px solid #cccccc';
            } else {
                errorDiv.style.display='block';
                errorDiv.innerHTML='debe tener al menos un @';
                this.style.border='1px solid red';
                errorDiv.style.border='1px solid red';
            }
        }

        function validarCampos() {
            if (this.value =='') {
                errorDiv.style.display='block';
                errorDiv.innerHTML='este campo es obligatorio';
                this.style.border='1px solid red';
                errorDiv.style.border='1px solid red';
            } else {
                errorDiv.style.display='none';
                this.style.border='1px solid #cccccc';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value==='') {
                alert('Debes elegir un regalo');
                regalo.focus();
            } else {
                var boletosDia=parseInt(pase_dia.value,10) || 0;
                var boletos2Dias=parseInt(pase_dosdias.value,10) || 0;
                var boletoCompleto=parseInt(pase_completo.value,10) || 0;
                var cantCamisas=parseInt(camisas.value,10) || 0;
                var cantEtiquetas=parseInt(etiquetas.value,10) || 0;
                
                var totalPagar=(boletosDia*30)+(boletos2Dias*45)+(boletoCompleto*50)+(cantCamisas*10)*0.93+(cantEtiquetas*2);
                console.log('el pago total es: '+totalPagar);
                var listaProductos=[];

                if (boletosDia >=1) {
                    listaProductos.push(boletosDia+' Pase por un dia');
                }
                if (boletos2Dias >=1) {
                    listaProductos.push(boletos2Dias+' Pase por 2 dias');
                }
                if (boletoCompleto >=1) {
                    listaProductos.push(boletoCompleto+' Pases completos');
                }
                if (cantCamisas >=1) {
                    listaProductos.push(cantCamisas+'  Camisas');
                }
                if (cantEtiquetas >=1) {
                    listaProductos.push(cantEtiquetas+' Etiquetas');
                }

                lista_productos.style.display="block";
                lista_productos.innerHTML='';
                for (var i=0; i<listaProductos.length; i++) {
                    lista_productos.innerHTML+=listaProductos[i] + '<br>';
                }
                suma.innerHTML='$'+totalPagar.toFixed(2);

            }
        }
        function mostrarDias() {
            var boletosDia=parseInt(pase_dia.value,10) || 0;
            var boletos2Dias=parseInt(pase_dosdias.value,10) || 0;
            var boletoCompleto=parseInt(pase_completo.value,10) || 0;
            
            var diasElegidos=[];
            if (boletosDia>0) {
                diasElegidos.push('viernes');

            } else {
                document.getElementById('viernes').style.display='none';
            }
            if (boletos2Dias>0) {
                diasElegidos.push('viernes','sabado');

            } else {
                document.getElementById('viernes').style.display='none';
                document.getElementById('sabado').style.display='none';
            }
            if (boletoCompleto>0) {
                diasElegidos.push('viernes','sabado','domingo');

            } else {
                document.getElementById('viernes').style.display='none';
                document.getElementById('sabado').style.display='none';
                document.getElementById('domingo').style.display='none';
            }
            for (var i=0; i<diasElegidos.length;i++) {
                document.getElementById(diasElegidos[i]).style.display="block";
            }
        }

    });    
})();

$(function() {
    //Animacion letras 
    $('.nombre-sitio').lettering();

    //Agregar clase a menu
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //Menu fijo
    var windowHeight =$(window).height();
    console.log(windowHeight);
    var barraAltura=$('.barra').innerHeight();
    console.log(barraAltura);

    $(window).scroll(function() {
        var scroll=$(window).scrollTop();
        console.log(scroll);
        if (scroll>windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':barraAltura+'px'});
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
        }
    });

    //Menu responsive
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //Programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');

        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace=$(this).attr('href');
        $(enlace).fadeIn(100);
        return false;
    });

    //Animaciones para los numeros
    var resumenLista=jQuery('.resumen-evento');
    if (resumenLista.length>0) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({number:6},1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({number:15},1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number:3},1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number:9},1500);
        
        }, {
            offset:'60%'
        });
    }

    //Cuenta regresiva

    $('.cuenta-regresiva').countdown('2018/12/24 23:59:59', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //colorbox
    $('.invitado-info').colorbox({inline:true, width:"50%"});

});