<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Smash Padel Shop - E-commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            background: #0c0c0c;
            color: #f5f5f5;
        }

        header {
            background: #000;
            border-bottom: 2px solid #ff5300;
            padding: 12px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #111;
            border: 2px solid #ff5300;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: #ff5300;
            font-weight: 800;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .logo-text span:first-child {
            color: #ff5300;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .logo-text span:last-child {
            font-size: 11px;
            color: #cccccc;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        nav a {
            color: #f5f5f5;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 4px 8px;
            border-radius: 4px;
            transition: background .2s, color .2s;
        }

        nav a:hover {
            background: #ff5300;
            color: #0c0c0c;
        }

        nav .btn-cta {
            background: #ff5300;
            color: #0c0c0c;
            padding: 6px 12px;
            border-radius: 999px;
            font-weight: 600;
        }

        #user-name {
            font-size: 13px;
            color: #ff5300;
            font-weight: 600;
            margin-left: 6px;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 22px 16px 40px;
        }

        .hero {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            padding: 20px;
            background: radial-gradient(circle at top left, #ff5300 0, #111 45%, #000 80%);
            border-radius: 14px;
            box-shadow: 0 0 24px rgba(0, 0, 0, .7);
            margin-bottom: 26px;
        }

        .hero-text {
            flex: 1 1 260px;
        }

        .hero-text h1 {
            font-size: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 8px;
        }

        .hero-text h1 span {
            color: #ff5300;
        }

        .hero-text p {
            font-size: 14px;
            color: #f0f0f0;
            max-width: 430px;
            margin-bottom: 12px;
        }

        .hero-tag {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ffd4b1;
            margin-bottom: 14px;
        }

        .hero-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            border: none;
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 999px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .btn-primary {
            background: #ff5300;
            color: #0c0c0c;
        }

        .btn-primary:hover {
            background: #ffa154;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #f5f5f5;
            color: #f5f5f5;
        }

        .btn-outline:hover {
            background: #f5f5f5;
            color: #0c0c0c;
        }

        .hero-side {
            flex: 0 0 260px;
            min-height: 150px;
            background: #111;
            border-radius: 14px;
            border: 1px solid #333;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 12px;
        }

        .hero-side-top {
            font-size: 12px;
            color: #cccccc;
        }

        .hero-badge {
            align-self: flex-start;
            background: #ff5300;
            color: #0c0c0c;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-side-bottom {
            font-size: 11px;
            color: #999;
        }

        section {
            margin-bottom: 26px;
        }

        .section-title {
            display: flex;
            justify-content:space-between;
            align-items:flex-end;
            margin-bottom:10px;
        }

        .section-title h2 {
            font-size:18px;
            text-transform:uppercase;
            color:#ff5300;
        }

        .section-title span {
            font-size:12px;
            color:#aaaaaa;
        }

        .categories {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:12px;
            margin-bottom:8px;
        }

        .cat-card {
            background:#111;
            border-radius:10px;
            padding:12px;
            border:1px solid #222;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
        }

        .cat-card h3 {
            font-size:15px;
            margin-bottom:4px;
        }

        .cat-card p {
            font-size:12px;
            color:#cccccc;
            margin-bottom:8px;
        }

        .cat-tag {
            font-size:11px;
            color:#ff5300;
        }

        .products-grid {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:16px;
        }

        .product-card {
            background:#111;
            border-radius:10px;
            border:1px solid #222;
            padding:12px;
            display:flex;
            flex-direction:column;
            gap:6px;
            box-shadow:0 0 12px rgba(0,0,0,.5);
        }

        .product-thumb {
            height:130px;
            border-radius:8px;
            background:linear-gradient(135deg,#1a1a1a,#000);
            border:1px solid #333;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:11px;
            color:#888;
            text-transform:uppercase;
        }

        .product-card h3 {
            font-size:15px;
            text-transform:uppercase;
        }

        .product-card p {
            font-size:12px;
            color:#cccccc;
        }

        .product-meta {
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-top:4px;
        }

        .price {
            color:#ff5300;
            font-weight:700;
            font-size:15px;
        }

        .badge {
            font-size:10px;
            text-transform:uppercase;
            letter-spacing:.5px;
            padding:2px 6px;
            border-radius:999px;
        }

        .badge-new {
            background:#ff5300;
            color:#0c0c0c;
        }

        .badge-hot {
            background:#ffffff;
            color:#0c0c0c;
        }

        .product-actions {
            margin-top:6px;
            display:flex;
            gap:6px;
        }

        .cart-summary {
            background:#111;
            border-radius:10px;
            padding:12px;
            border:1px solid #222;
        }

        .cart-summary table {
            width:100%;
            border-collapse:collapse;
            font-size:12px;
            margin-top:6px;
        }

        .cart-summary th,
        .cart-summary td {
            border-bottom:1px solid #222;
            padding:4px 2px;
            text-align:left;
        }

        .cart-summary th {
            color:#ff5300;
            text-transform:uppercase;
            font-size:11px;
        }

        .cart-total {
            display:flex;
            justify-content:space-between;
            margin-top:6px;
            font-size:13px;
        }

        .cart-note {
            font-size:11px;
            color:#aaaaaa;
            margin-top:4px;
        }

        .benefits {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:12px;
        }

        .benefit {
            background:#111;
            border-radius:10px;
            padding:10px 12px;
            border:1px solid #222;
        }

        .benefit h3 {
            font-size:14px;
            margin-bottom:4px;
        }

        .benefit p {
            font-size:12px;
            color:#cccccc;
        }

        input,
        button {
            font-family:'Montserrat',Arial,Helvetica,sans-serif;
        }

        input {
            width:100%;
            background:#111;
            border:1px solid #333;
            border-radius:6px;
            padding:6px 8px;
            font-size:13px;
            color:#f5f5f5;
        }

        input:focus {
            outline:none;
            border-color:#ff5300;
        }

        button {
            border:none;
            cursor:pointer;
        }

        footer {
            border-top:1px solid #222;
            padding:12px 16px;
            font-size:11px;
            color:#aaaaaa;
            text-align:center;
            background:#000;
            margin-top:20px;
        }

        @media (max-width:720px){
            header{
                flex-direction:column;
                align-items:flex-start;
                gap:10px;
            }
            nav{
                justify-content:flex-start;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo-box">
        <div class="logo-icon">⚡</div>
        <div class="logo-text">
            <span>Smash Padel</span>
            <span>Power on court</span>
        </div>
    </div>
    <nav>
        <a href="#productos">Productos</a>
        <a href="#categorias">Categorías</a>
        <a href="#carrito">Carrito</a>
        <a href="#perfil" class="btn-cta">Mi cuenta</a>
        <span id="user-name"></span>
    </nav>
</header>

<main>

    <section class="hero">
        <div class="hero-text">
            <h1>Domina la pista con <span>Smash Padel</span></h1>
            <p>Equipamiento de padel diseñado para jugadores que buscan potencia, control y estilo. Raquetas, pelotas y accesorios listos para tu proximo partido.</p>
            <p class="hero-tag">Coleccion 2025 · Edicion limitada · Envíos a todo el pais</p>
        </div>
        <div class="hero-side">
            <div class="hero-side-top">
                <div class="hero-badge">Nuevo</div>
                <p>Raqueta Smash Thunder Pro con nucleo de carbono y balance ofensivo. Ideal para jugadores que quieren mas velocidad en cada golpe.</p>
            
    </section>

    <section id="categorias">
        <div class="section-title">
            <h2>Categorías</h2>
            <span>Informacion por tipo de producto</span>
        </div>
        <div class="categories">
            <div class="cat-card">
                <h3>Raquetas</h3>
                <p>Modelos de potencia, control y equilibrio para todos los niveles.</p>
                <span class="cat-tag">Smash Series · Carbon Pro</span>
            </div>
            <div class="cat-card">
                <h3>Pelotas</h3>
                <p>Mayor durabilidad y rebote constante en cada partido.</p>
                <span class="cat-tag">Energy Padel Balls</span>
            </div>
            <div class="cat-card">
                <h3>Accesorios</h3>
                <p>Grips, overgrips, paleteros y más para completar tu equipación.</p>
                <span class="cat-tag">Power Padel Gear</span>
            </div>
        </div>
    </section>

    <section id="productos">
        <div class="section-title">
            <h2>Productos destacados</h2>
            <span>Ideal para comenzar tu carrito</span>
        </div>
        <div class="products-grid">

            <article class="product-card">
                <div class="product-thumb">
                    <img src="https://www.elneverazo.com/wp-content/uploads/2025/03/Fenix-Black-Leo-1.jpg" alt="Raqueta Thunder Pro" style="width:100%;height:100%;object-fit:cover;border-radius:8px;">
                </div>
                <h3>Raqueta Thunder Pro</h3>
                <p>Marco de carbono, balance ofensivo y gran punto dulce para golpes potentes.</p>
                <div class="product-meta">
                    <span class="price">$159.99</span>
                    <span class="badge badge-hot">Top ventas</span>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary add-cart" data-id="1" data-name="Raqueta Thunder Pro" data-price="159.99">
                        Agregar al carrito
                    </button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-thumb">
                    <img src="https://justpadel.com/cdn/shop/files/427989824_781506747343327_5435887916175475402_n.jpg?v=1707909634&width=896" alt="Raqueta Control Pro" style="width:100%;height:100%;object-fit:cover;border-radius:8px;">
                </div>
                <h3>Raqueta Control Pro</h3>
                <p>Mayor control y precision para jugadores que dominan la estrategia.</p>
                <div class="product-meta">
                    <span class="price">$139.99</span>
                    <span class="badge badge-new">Nuevo</span>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary add-cart" data-id="2" data-name="Raqueta Control Pro" data-price="139.99">
                        Agregar al carrito
                    </button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-thumb">
                    <img src="https://cdn.almacen.do/2024/08/Pelotas-de-Padel-Wilson-Padel-Premier-Speed-Raw-600x583.jpg" alt="Pelotas Smash Pack x3" style="width:100%;height:100%;object-fit:cover;border-radius:8px;">
                </div>
                <h3>Pelotas Smash Pack x3</h3>
                <p>Pelotas de alta visibilidad con presion duradera, perfectas para torneos.</p>
                <div class="product-meta">
                    <span class="price">$12.50</span>
                    <span class="badge badge-new">Pack</span>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary add-cart" data-id="3" data-name="Pelotas Smash Pack x3" data-price="12.50">
                        Agregar al carrito
                    </button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-thumb">
                    <img src="https://www.padelnuestro.com/media/catalog/product/B/K/BKOR_OP_1200_12000_0762.jpg" alt="Paletero Smash Pro" style="width:100%;height:100%;object-fit:cover;border-radius:8px;">
                </div>
                <h3>Paletero Smash Pro</h3>
                <p>Paletero de excelente calidad con espacios para ropa, paletas, pelotas y zapatos.</p>
                <div class="product-meta">
                    <span class="price">$69.90</span>
                    <span class="badge badge-hot">Club</span>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary add-cart" data-id="4" data-name="Paletero Smash Pro" data-price="69.90">
                        Agregar al carrito
                    </button>
                </div>
            </article>

        </div>
    </section>

    <section id="carrito">
        <div class="section-title">
            <h2>Carrito</h2>
            <span>Se llena al hacer clic en "Agregar al carrito"</span>
        </div>
        <div class="cart-summary">
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cant.</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody id="cart-body">
                </tbody>
            </table>
            <div class="cart-total">
                <span>Total</span>
                <strong id="cart-total">$0.00</strong>
            </div>
            <div class="cart-note">
                Este carrito es solo de prueba en el navegador. Al recargar la pagina se limpia.
            </div>
            <div style="margin-top:8px;">
                <button class="btn btn-primary" onclick="procesarPago()">Procesar pago</button>
            </div>
        </div>
    </section>

    <section>
        <div class="section-title">
            <h2>Por que Smash Padel</h2>
            <span>Ventajas para tus clientes</span>
        </div>
        <div class="benefits">
            <div class="benefit">
                <h3>Envíos rapidos</h3>
                <p>Entregas en 24-48h para que no esperes tu proximo partido.</p>
            </div>
            <div class="benefit">
                <h3>Materiales premium</h3>
                <p>Carbono, EVA y textiles de alta calidad pensados para jugadores exigentes.</p>
            </div>
            <div class="benefit">
                <h3>Soporte al jugador</h3>
                <p>Asesoria para ayudarte a elegir la raqueta que mejor se adapte a tu estilo.</p>
            </div>
        </div>
    </section>

    <section id="perfil">
        <div class="section-title">
            <h2>Mi cuenta</h2>
            <span>Zona de usuario</span>
        </div>
        <div class="benefits">
            <div class="benefit">
                <h3>Iniciar sesión</h3>
                <p style="margin-bottom:4px;">Nombre</p>
                <input type="text" id="login-name" placeholder="Tu nombre">
                <p style="margin:6px 0 4px;">Correo</p>
                <input type="email" id="login-email" placeholder="usuario@smashpadel.com">
                <p style="margin:6px 0 4px;">Contraseña</p>
                <input type="password" id="login-password" placeholder="••••••••">
                <button class="btn btn-primary" style="margin-top:8px;" onclick="iniciarSesion()">Entrar</button>
            </div>
            <div class="benefit">
                <h3>Crear cuenta</h3>
                <p style="margin-bottom:4px;">Nombre y apellido</p>
                <input type="text" id="reg-name" placeholder="Nombre Apellido">
                <p style="margin:6px 0 4px;">Correo</p>
                <input type="email" id="reg-email" placeholder="email">
                <p style="margin:6px 0 4px;">Contraseña</p>
                <input type="password" id="reg-pass" placeholder="Nueva contraseña">
                <p style="margin:6px 0 4px;">Confirmar contraseña</p>
                <input type="password" id="reg-pass2" placeholder="Repetir contraseña">
                <button class="btn btn-outline" style="margin-top:8px;" onclick="registrarUsuario()">Registrarse</button>
            </div>
            <div class="benefit">
                <h3>Perfil (ejemplo)</h3>
                <p>Usuario: <strong>Diego Costa</strong></p>
                <p>Nivel: Intermedio · Rol: Usuario</p>
                <p style="margin-top:6px;">
                    Miembro oficial de Smash Padel<br>
                    Compras rápidas y seguras<br>
                    Seguimiento de pedidos en tiempo real<br>
                    Acceso a descuentos especiales<br>
                    Cuenta protegida con autenticacion
                </p>
            </div>
        </div>
    </section>

</main>

<footer>
    Smash Padel Shop - Proyecto academico de e-commerce
</footer>

<script>
    const cart = [];

    function renderCart() {
        const tbody = document.getElementById('cart-body');
        const totalEl = document.getElementById('cart-total');
        tbody.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const tr = document.createElement('tr');

            const tdName = document.createElement('td');
            tdName.textContent = item.name;
            tr.appendChild(tdName);

            const tdQty = document.createElement('td');
            tdQty.textContent = item.qty;
            tr.appendChild(tdQty);

            const tdPrice = document.createElement('td');
            tdPrice.textContent = '$' + item.price.toFixed(2);
            tr.appendChild(tdPrice);

            const sub = item.price * item.qty;
            const tdSub = document.createElement('td');
            tdSub.textContent = '$' + sub.toFixed(2);
            tr.appendChild(tdSub);

            const tdAction = document.createElement('td');
            const btnDel = document.createElement('button');
            btnDel.textContent = 'Eliminar';
            btnDel.className = 'btn btn-outline';
            btnDel.onclick = () => {
                const index = cart.findIndex(p => p.id === item.id);
                if (index !== -1) {
                    cart.splice(index, 1);
                    renderCart();
                }
            };
            tdAction.appendChild(btnDel);
            tr.appendChild(tdAction);

            tbody.appendChild(tr);
            total += sub;
        });

        totalEl.textContent = '$' + total.toFixed(2);
    }

    function procesarPago() {
        if (cart.length === 0) {
            alert("Tu carrito esta vacio.");
            return;
        }

        alert("Pago confirmado correctamente. ¡Gracias por tu compra!");
        cart.length = 0;
        renderCart();
    }

    function registrarUsuario() {
        const name = document.getElementById('reg-name').value.trim();
        const email = document.getElementById('reg-email').value.trim();
        const pass = document.getElementById('reg-pass').value;
        const pass2 = document.getElementById('reg-pass2').value;

        if (!name || !email || !pass || !pass2) {
            alert("Por favor completa todos los campos de registro.");
            return;
        }

        if (pass !== pass2) {
            alert("Las contraseñas no coinciden.");
            return;
        }

        alert("Registro exitoso. Tu cuenta ha sido creada correctamente.");

        document.getElementById('reg-name').value = '';
        document.getElementById('reg-email').value = '';
        document.getElementById('reg-pass').value = '';
        document.getElementById('reg-pass2').value = '';

        document.getElementById('login-name').value = name;
        document.getElementById('login-email').value = email;
    }

    function iniciarSesion() {
        const name = document.getElementById('login-name').value.trim();
        const email = document.getElementById('login-email').value.trim();
        const pass = document.getElementById('login-password').value;

        if (!name || !email || !pass) {
            alert("Por favor completa todos los campos para iniciar sesion.");
            return;
        }

        document.getElementById('user-name').textContent = "Hola, " + name;
        alert("Sesión iniciada como " + name + ".");
    }

    document.querySelectorAll('.add-cart').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = parseInt(btn.dataset.id);
            const name = btn.dataset.name;
            const price = parseFloat(btn.dataset.price);

            const existing = cart.find(p => p.id === id);
            if (existing) {
                existing.qty += 1;
            } else {
                cart.push({
                    id,
                    name,
                    price,
                    qty: 1
                });
            }
            renderCart();
        });
    });
</script>

</body>
</html>
