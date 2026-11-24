<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieve & Magia - Heladería</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
</head>
<body>

    <header id="inicio">
        <h1>🍦 Nieve & Magia</h1>
        <p>Helados ricos para alegrar tu día 💜</p>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#sabores">Nuestros helados</a>
            <a href="#promocion">Promoción</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <section class="presentacion">
        <h2>¡Bienvenidos a nuestra heladería!</h2>
        <p>En Nieve & Magia encontrarás helados deliciosos de diferentes sabores. Tenemos opciones para todos los gustos y queremos que disfrutes cada cucharada.</p>
        <p>📍 Estamos en Pasto.</p>
    </section>

    <section class="datos">
        <h2>Conoce nuestro negocio 🍨</h2>
        <p><strong>Nombre:</strong> Nieve & Magia</p>
        <p><strong>Administradora:</strong> Mayra Catalina Caipe Botina</p>
        <p><strong>Ubicación:</strong> Pasto, Nariño</p>
        <p><strong>Horario:</strong> Lunes a Domingo de 10:00 a.m. a 8:00 p.m.</p>
    </section>

    <section class="mensaje">
        <h2>Hechos con amor y los mejores ingredientes</h2>
        <p>Cada sabor se prepara diariamente para brindarte frescura, cremosidad y dulzura en cada visita.</p>
    </section>

    <div class="bloque-sabores">
        <h2 id="sabores" class="titulo">Nuestros Sabores</h2>
        <p class="subtitulo">Elige tu favorito y disfruta una experiencia única</p>

        <div class="contenedor-helados">
            @foreach ($helados as $helado)
                <div class="helado">
                    <img src="{{ asset('img/' . $helado->imagen) }}" alt="{{ $helado->nombre }}">
                    <h3>{{ $helado->nombre }}</h3>
                    <p>{{ $helado->descripcion }}</p>
                    <h4>${{ number_format($helado->precio, 0, ',', '.') }}</h4>
                    <p class="{{ $helado->disponible ? 'disponible' : 'agotado' }}">
                        {{ $helado->disponible ? 'Disponible' : 'Agotado' }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <section id="promocion" class="promocion">
        <h2>🎉 Promoción Especial</h2>
        <p>¡Lleva 2 helados de cualquier sabor y recibe toppings gratis los fines de semana!</p>
    </section>

    <section class="disponibilidad">
        <h2>Estado de nuestros productos</h2>
        <p><span class="disponible">● Disponible:</span> Listo para pedir en tienda o domicilio.</p>
        <p><span class="agotado">● Agotado:</span> En preparación para el próximo lote.</p>
    </section>

    <footer id="contacto">
        <h2>Contáctanos</h2>
        <p>📍 Pasto, Nariño - Colombia</p>
        <p>📱 Pedidos y reservas: +57 300 000 0000</p>
        <p>✉️ contacto@nieveymagia.com</p>
        <p class="final">© 2026 Nieve & Magia - Todos los derechos reservados.</p>
    </footer>

</body>
</html>