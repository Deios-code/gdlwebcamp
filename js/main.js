(function(){

    "use strict"
        $('.menu-movil a').on('click', function(){
            pushbar.close();
        });
        // codigo formulario de compra
        var regalo = document.getElementById('regalo');

        // Campos Formulario
        var name = document.getElementById('name'),
        lastname = document.getElementById('lastname'),
        mail = document.getElementById('mail');
        // Campos Boletos
        var pase_dia = document.getElementById('pase_dia'),
         pase_tresdia = document.getElementById('pase_tresdia'),
         pase_completo = document.getElementById('pase_completo');
        // Botones y divs
        var div_error = document.getElementById('error'),
         calcular = document.getElementById('calcular'),
         resumen = document.getElementById('resumen'),
         btnRegistro = document.getElementById('btnRegistro'),
         total = document.getElementById('total');
        //  Camisas y etiquetas
        var camisas = document.getElementById('cant-camisas'),
        etiquetas = document.getElementById('etiquetas');

        if(document.getElementById('calcular')){

        calcular.addEventListener('click' , calcularMontos);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_tresdia.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        
        name.addEventListener('blur', validar);
        lastname.addEventListener('blur', validar);
        mail.addEventListener('blur', validar);
        mail.addEventListener('blur', validarMail)
        // Función para validad que se hayan ingresado datos
        function validar() {
            if(this.value == ''){
                this.style.border = '1px solid red';
                div_error.style.display='block';
                div_error.innerHTML = "Este Campo es obligatorio";
            }else{
                this.style.border = '1px solid #d1d1d1';
                div_error.style.display='none';
            }
        }
        // función para validar que haya un caracter especifico
        function validarMail(){
            if(this.value.indexOf("@") > -1){ //se coloca -1 por que el indexOf devuelte un -1 si no se encuentra ese
                //caracter
                div_error.style.display='none';
            } else{
                div_error.style.display='block';
                div_error.innerHTML = "El correo debe contener @"
            }
        }
        // Función para calcular precios
        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === ''){
                alert('Debes elegir un regalo');
                regalo.focus();
            } else{
                var boldia =parseInt(pase_dia.value, 10)||0,
                bol3dias = parseInt(pase_tresdia.value, 10)||0,
                bolcompleto = parseInt(pase_completo.value, 10)||0,
                cami = parseInt(camisas.value, 10)||0,
                eti = parseInt(etiquetas.value, 10)||0;

            var totalPagar = (boldia*30000)+(bol3dias*75000)+(bolcompleto*150000)+((cami*20000)*0.8)+(eti*5000);
            
            var listProductos = [];
            if (boldia >= 1) {
                listProductos.push(boldia+' Pases por Día')
            }
            if (bol3dias >= 1) {
                listProductos.push(bol3dias+' Pases por 3 Días')
            }
            if (bolcompleto >= 1) {
                listProductos.push(bolcompleto+' Pases Completos')
            }
            if (cami >= 1) {
                listProductos.push(cami+' Camisa(s)')
            }
            if (eti >= 1) {
                listProductos.push(eti+' Paquete(s) de etiquetas')
            }
            resumen.innerHTML = ''; //Me sirve por que no recarga todo, solo modifica el valor que yo cambie
            for (var i = 0; i < listProductos.length; i++) {
                resumen.innerHTML += listProductos[i]+'<br>';
            }
            }
            function formatCurrency (locales, currency, fractionDigits, number) {
                var formatted = new Intl.NumberFormat(locales, {
                  style: 'currency',
                  currency: currency,
                  minimumFractionDigits: fractionDigits
                }).format(number);
                return formatted;
            }
            total.innerHTML = formatCurrency("es-CO", "COP", 0, totalPagar);
        }
    // función para mostrar los días según el boleto comprado c                                                                                                                                                                            
        function mostrarDias() {
            var boldia =parseInt(pase_dia.value, 10)||0,
            bol3dias = parseInt(pase_tresdia.value, 10)||0,
            bolcompleto = parseInt(pase_completo.value, 10)||0;

            var diasElegidos = [];

            if(boldia > 0){
                diasElegidos.push('viernes');
            }
            if(bol3dias > 0){
                diasElegidos.push('viernes','sabado');
            }
            if(bolcompleto > 0){
                diasElegidos.push('viernes','sabado','domingo');
            }
            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }
        }
        //agregando clase al menu
        $('body.conferencia .menu-principal a:contains("Conferencia")').addClass('activo');


        document.addEventListener('DOMContentLoaded', function(){

            // codigo para menu fijo
            var windowHeight = $(window).scrollTop();
            var barraAltura = $('.barra').innerHeight()
            $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if(scroll > windowHeight){
                    $('.barra').addClass('fixed');
                    $('body').css({'margin-top': barraAltura+'px'});
                }else{
                    $('.barra').removeClass('fixed');
                    $('body').css({'margin-top':'0px'});
                }
            });
        if(document.getElementById('mapa')){
            //codigo mapa 
            var map = L.map('mapa').setView([5.330074, -72.404312],17);
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
    
        L.marker([5.330074, -72.404312]).addTo(map)
        .bindPopup('Ni tan cerca, ni tan lejos')
        .openPopup()
        .bindTooltip('hey')
        .openTooltip()
        }
    });
})();

$(function(){
    $('.evento .info-curso:first').addClass('activo');
    $('.evento .info-curso:first').show();
    $('.menu-eventos a').on('click', function() {
        $('.menu-eventos a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var hizoClick = $(this).attr('href');
        $(hizoClick).fadeIn();
        return false;
    });
});