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

        calcular.addEventListener('click', calcularMontos);

        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarCampos);
        email.addEventListener('blur', validarEmail);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        function validarEmail {
            if (this.value.indexOf('@')>-1) {
                errorDiv.style.display='none';
                this.style.display='1px solid #cccccc';
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
                this.style.display='1px solid #cccccc';
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