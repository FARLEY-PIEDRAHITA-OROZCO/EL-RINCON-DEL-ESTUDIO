@extends('layouts.contacto')
@section('title', 'Contacto')
@section('content')

<div class="content">

    <div class="contact-wrapper animated bounceInUp">
        <div class="contact-form">
            <h3>Contactános</h3>
            <form action="https://formsubmit.co/elrincondelestudio.contacto@gmail.com" method="POST">
                <p>
                    <label>Nombre completo</label>
                    <input type="text" name="fullname">
                </p>
                <p>
                    <label>Correo electrónico</label>
                    <input type="email" name="email">
                </p>
                <p>
                    <label>Número de celular</label>
                    <input type="tel" name="phone">
                </p>
                <p>
                    <label>Asunto</label>
                    <input type="text" name="affair">
                </p>
                <p class="block">
                   <label>Mensaje</label>
                    <textarea name="message" rows="3"></textarea>
                </p>
                <p class="block">
                    <button type="submit" value="enviar">
                        Enviar
                    </button>
                </p>
            </form>
        </div>
        <div class="contact-info">
            <h4>Mas información</h4>
            <ul class="ul-contact">
                <li><i class="fas fa-phone"></i> (+57) 301 254 80 79</li>
                <li>elrincondelestudio.contacto@gmail.com</li>
            </ul>
           <p>¡Hola! Somos EL RINCÓN DEL ESTUDIO y nos encantará conocerte. <br><br> Recuerda que por este canal puedes contactarnos en caso de tener alguna duda e inquietud, también puedes ayudarnos a mantener a flote la página notificando los errores que puedas encontrar en el transcurso de tu estadía en el sitio.</p>
        </div>
    </div>

@endsection
