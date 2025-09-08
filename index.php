<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
        }
        
        nav {
            background-color: #333;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            border-radius: 8px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #575757;
        }
        
        /* Contenido de la pagina */
        .content-section {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .content-section h2 {
            text-align: center;
            color: #555;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        /* Estilos específicos para historias de usuario */
        .card-user-story .card-header {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        
        .card-user-story .card-body p {
            margin: 5px 0;
            line-height: 1.5;
        }
        
        .card-user-story .card-body .keyword {
            font-weight: bold;
            color: #007BFF;
        }

        /* Estilos específicos para diseño de interfaces */
        .card-design-interface {
            text-align: center;
        }

        .card-design-interface img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .card-design-interface .card-description {
            font-style: italic;
            color: #777;
            margin-bottom: 5px;
        }

        .card-design-interface .card-author {
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>

    <header>
        <h1>Sistema de Comercio Universitario Transacción Interna</h1>
        <nav>
            <a href="#" onclick="showSection('user-stories')">Historias de usuario</a>
            <a href="#" onclick="showSection('interfaces')">Diseño de interfaces</a>
        </nav>
    </header>

    <main class="content-section" id="main-content">
    </main>
    
    <script>
        const userStoriesHTML = `
            <h2>Historias de usuario</h2>
            <div class="cards-grid">
                <!--Paul Lopez-->
                <div class="card card-user-story"><div class="card-header">Paul Lopez1</div><div class="card-body"><p><span class="keyword">Como</span> estudiante,</p><p><span class="keyword">Quiero</span> acceder a los materiales de clase en línea,</p><p><span class="keyword">Para</span> estudiar desde cualquier lugar.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Paul Lopez2</div><div class="card-body"><p><span class="keyword">Como</span> usuario,</p><p><span class="keyword">Quiero</span> recibir notificaciones de descuentos,</p><p><span class="keyword">Para</span> aprovechar promociones universitarias.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Paul Lopez3</div><div class="card-body"><p><span class="keyword">Como</span> cliente frecuente,</p><p><span class="keyword">Quiero</span> generar reportes de mis compras,</p><p><span class="keyword">Para</span> analizar mis hábitos de consumo.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Paul Lopez4</div><div class="card-body"><p><span class="keyword">Como</span> estudiante,</p><p><span class="keyword">Quiero</span> programar recordatorios de pago,</p><p><span class="keyword">Para</span> no olvidar fechas importantes.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Paul Lopez5</div><div class="card-body"><p><span class="keyword">Como</span> usuario,</p><p><span class="keyword">Quiero</span> recibir confirmación por email de mis pedidos,</p><p><span class="keyword">Para</span> tener un respaldo de mis transacciones.</p></div></div>

                <!--Martinez carlos-->
                <div class="card card-user-story"><div class="card-header">Martinez carlos1</div><div class="card-body"><p><span class="keyword">Como</span> administrador,</p><p><span class="keyword">Quiero</span> revisar estadísticas de ventas,</p><p><span class="keyword">Para</span> tomar decisiones informadas.</p></div></div>
                <div class="card card-user-story"><div class="card-header"> Martinez carlos2</div><div class="card-body"><p><span class="keyword">Como</span> encargado de inventario,</p><p><span class="keyword">Quiero</span> recibir alertas de stock bajo,</p><p><span class="keyword">Para</span> reponer productos a tiempo.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Martinez carlos3</div><div class="card-body"><p><span class="keyword">Como</span> administrador,</p><p><span class="keyword">Quiero</span> gestionar roles de usuarios,</p><p><span class="keyword">Para</span> mantener la seguridad del sistema.</p></div></div>
                <div class="card card-user-story"><div class="card-header"> Martinez carlos4</div><div class="card-body"><p><span class="keyword">Como</span> supervisor,</p><p><span class="keyword">Quiero</span> monitorear el historial de actividad,</p><p><span class="keyword">Para</span> detectar irregularidades a tiempo.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Martinez carlos5</div><div class="card-body"><p><span class="keyword">Como</span> administrador,</p><p><span class="keyword">Quiero</span> configurar promociones especiales,</p><p><span class="keyword">Para</span> aumentar las ventas de temporada.</p></div></div>

                <!-- Ortiz  Nicole -->
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> visitante,</p><p><span class="keyword">Quiero</span> filtrar productos por precio,</p><p><span class="keyword">Para</span> encontrar opciones dentro de mi presupuesto.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> cliente,</p><p><span class="keyword">Quiero</span> recibir recomendaciones personalizadas,</p><p><span class="keyword">Para</span> descubrir productos de mi interés.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> usuario,</p><p><span class="keyword">Quiero</span> ver las reseñas de otros usuarios,</p><p><span class="keyword">Para</span> tomar decisiones informadas antes de comprar.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> visitante,</p><p><span class="keyword">Quiero</span> registrarme rápidamente,</p><p><span class="keyword">Para</span> poder hacer compras sin complicaciones.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> estudiante,</p><p><span class="keyword">Quiero</span> acceder al historial académico,</p><p><span class="keyword">Para</span> comparar mi desempeño con mis compras.</p></div></div>
  
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> usuaria,</p><p><span class="keyword">Quiero</span> tener un chat de soporte en línea,</p><p><span class="keyword">Para</span> resolver dudas rápidamente.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> cliente,</p><p><span class="keyword">Quiero</span> guardar mis productos favoritos,</p><p><span class="keyword">Para</span> comprarlos más tarde fácilmente.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> usuaria,</p><p><span class="keyword">Quiero</span> recibir alertas de disponibilidad,</p><p><span class="keyword">Para</span> no perder ofertas limitadas.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> desarrolladora,</p><p><span class="keyword">Quiero</span> integrar un sistema de pagos seguro,</p><p><span class="keyword">Para</span> proteger los datos de los clientes.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> administrador,</p><p><span class="keyword">Quiero</span> generar reportes de errores del sistema,</p><p><span class="keyword">Para</span> mejorar la plataforma continuamente.</p></div></div>
  
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> cliente,</p><p><span class="keyword">Quiero</span> recibir confirmaciones de envío,</p><p><span class="keyword">Para</span> seguir mi pedido en tiempo real.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> usuario,</p><p><span class="keyword">Quiero</span> filtrar productos por popularidad,</p><p><span class="keyword">Para</span> ver los más comprados.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> visitante,</p><p><span class="keyword">Quiero</span> ver ofertas del día,</p><p><span class="keyword">Para</span> aprovechar descuentos rápidos.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> cliente,</p><p><span class="keyword">Quiero</span> recibir un historial de mis reseñas,</p><p><span class="keyword">Para</span> tener control de mi actividad.</p></div></div>
                <div class="card card-user-story"><div class="card-header">Nombre</div><div class="card-body"><p><span class="keyword">Como</span> visitante,</p><p><span class="keyword">Quiero</span> ver ofertas del día,</p><p><span class="keyword">Para</span> aprovechar descuentos rápidos.</p></div></div>
            </div>
        `;

        const interfacesHTML = `
            <h2>Diseño de interfaces</h2>
            <div class="cards-grid">
                <div class="card card-design-interface" style="background-color: lightblue;">
                    <img src="login.png" alt="Diseño de interfaz de login">
                    <div class="card-description">Un diseño de interfaz simple y moderno para la página de inicio de sesión.</div>
                    <div class="card-author">Autor: Juan Pérez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página principal">
                    <div class="card-description">Página principal con un enfoque minimalista para mejorar la navegación.</div>
                    <div class="card-author">Autor: Sofía Rodríguez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página de productos">
                    <div class="card-description">Diseño de la galería de productos, optimizado para la búsqueda por categorías.</div>
                    <div class="card-author">Autor: Luis González</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de carrito de compras">
                    <div class="card-description">Una vista detallada del carrito de compras, con opciones de pago seguras.</div>
                    <div class="card-author">Autor: Ana Martínez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño del perfil de usuario">
                    <div class="card-description">Interfaz del perfil de usuario con acceso rápido a su historial y configuraciones.</div>
                    <div class="card-author">Autor: David Sánchez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de notificaciones">
                    <div class="card-description">Un diseño claro para las notificaciones del sistema y mensajes de confirmación.</div>
                    <div class="card-author">Autor: Elena Fernández</div>
                </div>
            </div>
        `;
        
        function showSection(section) {
            const mainContent = document.getElementById('main-content');
            if (section === 'user-stories') {
                mainContent.innerHTML = userStoriesHTML;
            } else if (section === 'interfaces') {
                mainContent.innerHTML = interfacesHTML;
            }
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            showSection('user-stories');
        });

    </script>
</body>
</html>
