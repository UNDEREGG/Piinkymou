<?php
    session_start();
    $email = $_SESSION['email'];

    if(isset($email)){

    }else{
        header('Location: salir.php');

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinkyMou-Mouses</title>
    <link href="https://fonts.googleapis.com/css?family=Jomhuria&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="rubik-cube-animation">
    <header>
        <div class="top-bar">
            <h2 class="top-logo">Pinkymou</h2>
            <p class="top-message">Ahorra un 12% en todos los productos pinkymou utilizando nuestro código PINKY</p>
            <p class="top-Latino">Latinoamérica</p>
        </div>
        <nav class="nav-bar">
            <div class="logo">
                <h2 class="top-logo purple">
                    <a href="index.php" style="text-decoration: none;">Pinkymou</a>
                </h2>
            </div>
            <nav class="nav-menu">
                <a href="pagina-mouse.php">MOUSES</a>
                <a href="no_encontrada.php">AUDIFONOS</a>
                <a href="no_encontrada.php">RELOJES</a>
                <a href="no_encontrada.php">PORTATILES</a>
            </nav>
            
            <div class="perfil-user">
              <button><a href="perfil.php"><img src="iconos/usuario.webp" alt="Usuario"></a></button>
            </div>
            <div class="ayuda">
              <button><a href="asistente.php"><img src="iconos/ayuda.webp" alt="Salir"></a></button>
            </div>
            <div class="carrito">
              <button><a href="no_encontrada.php"><img src="iconos\CARRITO@1x.webp" alt="Carrito"></a></button>
            </div>
            <div class="perfil-user">
              <button><a href="salir.php"><img src="iconos\salir.png" alt="Usuario"></a></button>
            </div>
            
        </nav>
    </header>
  </div>
    <section>
        <div class="carousel" aria-label="Carrusel de imágenes full width con botones sutiles">
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="archivos\imagenes\mouses_carrusel.webp" alt="mouses_carrusel" />
            </div>
            <div class="carousel-item">
              <img src="archivos\imagenes\Audifonos_carrusel.webp" alt="Audifonos_carrusel" />
            </div>
            <div class="carousel-item">
              <img src="imagenes carrusel\Relojes_carrusel.png" alt="Relojes_carrusel" />
            </div>
            <div class="carousel-item">
              <img src="imagenes carrusel\Portatiles_carrusel.png" alt="Portatiles_carrusel" />
            </div>
          </div>
          <div class="carousel-nav">
            <button class="prev" aria-label="Anterior">&#10094;</button>
            <button class="next" aria-label="Siguiente">&#10095;</button>
          </div>
          <div class="carousel-indicators" role="tablist" aria-label="Indicadores del carrusel">
            <button aria-label="Ir a la imagen 1" role="tab" aria-selected="true" class="active"></button>
            <button aria-label="Ir a la imagen 2" role="tab" aria-selected="false"></button>
            <button aria-label="Ir a la imagen 3" role="tab" aria-selected="false"></button>
            <button aria-label="Ir a la imagen 4" role="tab" aria-selected="false"></button>
          </div>
        </div>
    </section>
<!--Categorias-->
<div class="home2">
  <h2 class="category-title">Categoría de Productos</h2>
  <div class="product-category">
   <a class="product-item" href="pagina-mouse.php" id="MOUSES_CONTEINER">
     <div class="texto">MOUSES</div>
     <img src="archivos/Archivos_varios/mouse.webp" alt="Mouse Logitech G502" class="imagen">
   </a>
   <a class="product-item" href="no_encontrada.php" id="AUDIFONOS_CONTEINER">
     <div class="texto">AUDIFONOS</div>
     <img src="archivos/Archivos_varios/audifonos.jpg.png" alt="AirPods Max 3ra Generacion" class="imagen">
   </a>
   <a class="product-item" href="no_encontrada.php" id="SMART_WATCHEs_CONTEINER">
     <div class="texto">RELOJES</div>
     <img src="archivos\Archivos_varios\reloj_inteligente.png" alt="Reloj Xiaomi Huawei Q19 P" class="imagen">
   </a>
   <a class="product-item" href="no_encontrada.php" id="PORTÁTILES_CONTEINER">
     <div class="texto">PORTÁTILES</div>
     <img src="archivos/Archivos_varios/portatil.png" alt="Mac Book Pro New Arrival" class="imagen">
   </a>
</div>
<div class="bento-grid">
  <div class="bento-item portables">
    <a href="no_encontrada.php"><img src="archivos/promocion_index/portatiles.webp" alt="Portátiles HP"></a>  
  </div>
  <div class="bento-item reloj">
    <a href="no_encontrada.php"><img src="archivos/promocion_index/reloj.webp" alt="Reloj Inteligente"></a>   
  </div>
  <div class="bento-item varios">
    <a href="no_encontrada.php"><img src="archivos/promocion_index/varios-productos.webp" alt="Lleva varios productos"></a>
  </div>
  <div class="bento-item audifonos">
    <a href="no_encontrada.php"><img src="archivos/promocion_index/audifonos.webp" alt="30% en Audífonos"></a> 
  </div>
  <div class="bento-item mouse">
    <a href="no_encontrada.php"><img src="archivos/promocion_index/mouse.webp" alt="Mouse con más DPI"></a>
  </div>
</div>
<h2>Productos Destacables</h2>
<!-- PRODUCTOS -->
<section class="products">
  <div class="product">
    <div class="product-front" id="Logitech_CONTEINER">
        <img src="archivos\MAUSES\Logitech MX Master blanco 1.webp" alt="Logitech MX Master" class="product-image">
        <h2 class="product-title">Logitech MX Master</h2>
        <h2 class="price">$599.900</h2>
        <div class="brand-colors-container">
            <div class="product-colors">
                <label>
                    <input type="radio" name="color" value="gray" class="color-input">
                    <span class="color-circle color-gray"></span>
                </label>
                <label>
                    <input type="radio" name="color" value="black" class="color-input">
                    <span class="color-circle color-black"></span>
                </label>
                <label>
                    <input type="radio" name="color" value="rose" class="color-input">
                    <span class="color-circle color-rose"></span>
                </label>
            </div>
        </div>
        <div class="buttons">
            <button class="add-to-cart" data-name="Logitech MX Master" data-color="Negro" data-precio="599.900">🛒</button>  
            <button class="details-button">Details</button>
        </div>
    </div>

    <div class="product-back">
        <table>
            <tr>
                <th>Especificación</th>
                <th>Detalle</th>
            </tr>
            <tr>
                <td>Detalle de la condición</td>
                <td>Nuevo y Garantizado</td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td>MX Master 3
                </td>
            </tr>
            <tr>
                <td>País de origen</td>
                <td>Suiza</td>
            </tr>
            <tr>
                <td>Condición del producto</td>
                <td>Nuevo</td>
            </tr>
            <tr>
                <td>Dimensiones</td>
                <td>12.5 cm x 8.4 cm x 4.8 cm</td>
            </tr>
            <tr>
                <td>Detalle de la garantía</td>
                <td>2 años de garantía limitada</td>
            </tr>
            <tr>
                <td>Incluye</td>
                <td>Mouse Inalámbrico Logitech MX Master 3</td>
            </tr>
        </table>
        <button class="button back-button">Back</button>
    </div>
</div>
<div class="product">
  <div class="product-front" id="SONY_WH1000XM4_CONTAINER">
      <img src="https://www.sony.com.co/image/5d02da5df552836db894cead8a68f5f3?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF" alt="Sony WH-1000XM4" class="product-image">
      <h2 class="product-title">Sony WH-1000XM4</h2>
      <h2 class="price">$1.299.000</h2>
      <div class="brand-colors-container">
          <div class="product-colors">
              <label>
                  <input type="radio" name="color" value="black" class="color-input">
                  <span class="color-circle color-black"></span>
              </label>
              <label>
                  <input type="radio" name="color" value="silver" class="color-input">
                  <span class="color-circle color-silver"></span>
              </label>
              <label>
                  <input type="radio" name="color" value="blue" class="color-input">
                  <span class="color-circle color-blue"></span>
              </label>
          </div>
      </div>
      <div class="buttons">
          <button class="add-to-cart" data-name="Sony WH-1000XM4" data-color="Negro" data-precio="1.299.000">🛒</button>  
          <button class="details-button">Details</button>
      </div>
  </div>
  <div class="product-back">
      <table>
          <tr>
              <th>Especificación</th>
              <th>Detalle</th>
          </tr>
          <tr>
              <td>Detalle de la condición</td>
              <td>Nuevo y Garantizado</td>
          </tr>
          <tr>
              <td>Modelo</td>
              <td>WH-1000XM4</td>
          </tr>
          <tr>
              <td>País de origen</td>
              <td>Malasia</td>
          </tr>
          <tr>
              <td>Condición del producto</td>
              <td>Nuevo</td>
          </tr>
          <tr>
              <td>Dimensiones</td>
              <td>25 x 18.5 x 7.7 cm</td>
          </tr>
          <tr>
              <td>Detalle de la garantía</td>
              <td>1 año de garantía oficial</td>
          </tr>
          <tr>
              <td>Incluye</td>
              <td>Auriculares, estuche rígido, cable de carga, adaptador </td>
          </tr>
      </table>
      <button class="button back-button">Back</button>
  </div>
</div>

<div class="product">
  <div class="product-front" id="HUAWEI_D15_CONTAINER">
      <img src="https://www.bazzarbog.com/13089-home_default/portatil-huawei-d15-intel-core-i5-1135g7.jpg" alt="Huawei D15 i5" class="product-image" height ="150">
      <h2 class="product-title">Huawei D15 i5 11va</h2>
      <h2 class="price">$2.599.000</h2>
      <div class="brand-colors-container">
          <div class="product-colors">
              <label>
                  <input type="radio" name="color" value="gray" class="color-input">
                  <span class="color-circle color-gray"></span>
              </label>
              <label>
                  <input type="radio" name="color" value="silver" class="color-input">
                  <span class="color-circle color-silver"></span>
              </label>
          </div>
      </div>
      <div class="buttons">
          <button class="add-to-cart" data-name="Huawei D15 i5" data-price="2599.00">🛒</button>  
          <button class="details-button">Details</button>
      </div>
  </div>
  <div class="product-back">
      <table>
          <tr>
              <th>Especificación</th>
              <th>Detalle</th>
          </tr>
          <tr>
              <td>Detalle de la condición</td>
              <td>Nuevo y Garantizado</td>
          </tr>
          <tr>
              <td>Modelo</td>
              <td>Huawei MateBook D15</td>
          </tr>
          <tr>
              <td>País de origen</td>
              <td>China</td>
          </tr>
          <tr>
              <td>Condición del producto</td>
              <td>Nuevo</td>
          </tr>
          <tr>
              <td>Dimensiones</td>
              <td>35.7 x 22.9 x 1.7 cm</td>
          </tr>
          <tr>
              <td>Detalle de la garantía</td>
              <td>1 año de garantía oficial</td>
          </tr>
          <tr>
              <td>Incluye</td>
              <td>Portátil Huawei, cargador USB-C, manual</td>
          </tr>
      </table>
      <button class="button back-button">Back</button>
  </div>
</div>

<div class="product">
  <div class="product-front" id="APPLE_WATCH_CONTAINER">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_797340-MCO53045010410_122022-T.webp" alt="Apple Watch Series 9" class="product-image">
      <h2 class="product-title">Apple Watch Series 9</h2>
      <h2 class="price">$2.099.000</h2>
      <div class="brand-colors-container">
          <div class="product-colors">
              <label>
                  <input type="radio" name="color" value="midnight" class="color-input">
                  <span class="color-circle color-black"></span>
              </label>
              <label>
                  <input type="radio" name="color" value="starlight" class="color-input">
                  <span class="color-circle color-cream"></span>
              </label>
              <label>
                  <input type="radio" name="color" value="pink" class="color-input">
                  <span class="color-circle color-rose"></span>
              </label>
          </div>
      </div>
      <div class="buttons">
          <button class="add-to-cart" data-name="Apple Watch Series 9" data-color="midnight" data-precio="599.900">🛒</button>  
          <button class="details-button">Details</button>
      </div>
  </div>

  <div class="product-back">
      <table>
          <tr>
              <th>Especificación</th>
              <th>Detalle</th>
          </tr>
          <tr>
              <td>Detalle de la condición</td>
              <td>Nuevo y Garantizado</td>
          </tr>
          <tr>
              <td>Modelo</td>
              <td>Watch Series 9 GPS 41mm</td>
          </tr>
          <tr>
              <td>País de origen</td>
              <td>China</td>
          </tr>
          <tr>
              <td>Condición del producto</td>
              <td>Nuevo</td>
          </tr>
          <tr>
              <td>Dimensiones</td>
              <td>41 mm  / 10.7 mm </td>
          </tr>
          <tr>
              <td>Detalle de la garantía</td>
              <td>1 año de garantía</td>
          </tr>
          <tr>
              <td>Incluye</td>
              <td>Apple Watch, correa, cable de carga magnético</td>
          </tr>
      </table>
      <button class="button back-button">Back</button>
  </div>
</div>

</section>
<!-- JUEGO DE SCRATCH RESPONSIVE-->
<section class="promo-section">
  <div class="promo-container">
    <h2 class="promo-title">¡Desafía tus habilidades y obtén un 20% de descuento!</h2>
    <h3 class="promo-subtitle">O recibe adicionales a tu compra</h3>
  </div>
</section>

<section class="juego-scratch">
  <div class="iframe-desktop">
    <iframe 
      src="https://scratch.mit.edu/projects/1172370592/embed" 
      allowtransparency="true" 
      width="485" 
      height="402" 
      frameborder="0" 
      scrolling="no" 
      allowfullscreen>
    </iframe>
  </div>
  <div class="iframe-mobile">
    <div style="width: 485px; height: 402px; overflow: hidden; position: relative;">
      <iframe 
        src="https://scratch.mit.edu/projects/1172396664/embed" 
        allowtransparency="true" 
        width="402" 
        height="485" 
        frameborder="0" 
        scrolling="no" 
        allowfullscreen
        style="
          transform: rotate(90deg);
          transform-origin: center center;
          position: absolute;
          top: 50%;
          left: 50%;
          margin-left: -201px;
          margin-top: -242.5px;
          border: none;">
      </iframe>
    </div>
  </div>
</section>



<!------------------------------------------------------------------------------------------------------------>
<!-- OPINIONES DE CLIENTES -->
<div class="opiniones-clientes">
  <h2 class="opiniones-title">Opiniones de Nuestros Clientes</h2>
  <div class="carrrousel">
    <div class="arrow left" onclick="prevCard()">&#8592;</div>
    <div class="cards-container">
      <div class="card next">
        <img src="archivos\fotos ia para opiniones\Marco Dias.jpg" alt="Foto de Cliente">
        <h3>Marco Dias</h3>
        <p>"Excelente calidad y atención personalizada. Definitivamente volveré a comprar aquí."</p>
      </div>
      <div class="card prev">
        <img src="archivos\fotos ia para opiniones\Juan Pérez.png" alt="Foto de Cliente">
        <h3>Juan Pérez</h3>
        <p>"Excelente servicio y productos de alta calidad. Muy satisfecho con mi compra."</p>
      </div>
      <div class="card active">
        <img src="archivos\fotos ia para opiniones\María González.jpg" alt="Foto de Cliente">
        <h3>María González</h3>
        <p>"La entrega fue rápida y el producto superó mis expectativas. ¡Totalmente recomendado!"</p>
      </div>
      <div class="card next">
        <img src="archivos\fotos ia para opiniones\Carlos Rodríguez.jpg" alt="Foto de Cliente">
        <h3>Carlos Rodríguez</h3>
        <p>"Atención al cliente excepcional. Resolvieron todas mis dudas de manera eficiente."</p>
      </div>
      <div class="card next">
        <img src="archivos\fotos ia para opiniones\Marlon Lopez.jpg" alt="Foto de Cliente">
        <h3>Marlon Lopez</h3>
        <p>"Me encanto todo y la atención al cliente excepcional. Me ayudaron a resolver todas mis dudas de manera eficiente."</p>
      </div>
    </div>
    <div class="arrow right" onclick="nextCard()">&#8594;</div>
  </div>
</div>
<div class="slider-container">
    <div class="slider">
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 133.png" alt="Image 1"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 134.png" alt="Image 2"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 135.png" alt="Image 3"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 136.png" alt="Image 4"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 137.png" alt="Image 5"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 138.png" alt="Image 6"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 133.png" alt="Image 1"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 134.png" alt="Image 2"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 135.png" alt="Image 3"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 136.png" alt="Image 4"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 137.png" alt="Image 5"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="archivos/MARCAS/Group 138.png" alt="Image 6"></a>
        </div>
        
    </div>
</div>
<footer class="fotter" id="fotter">
        <div class="newsletter">
          <p>Infórmese de nuestras últimas noticias y ofertas especiales</p>
          <div class="newsletter-subscribe">
            <input type="email" placeholder="Su dirección de correo electrónico" />
            <button type="submit">SUSCRIBIRSE</button>
          </div>
          <p class="legal-text">
            Puede darse de baja en cualquier momento. Para ello, consulte nuestra información de contacto en el aviso legal.
          </p>
        </div>
        <button class="footer-toggle" onclick="toggleFooterLinks()">Ver más</button>
        <div class="footer-links">
          <div class="footer-column">
            <h4>NUESTRA EMPRESA</h4>
            <ul>
              <li><a href="no_encontrada.php">Envío</a></li>
              <li><a href="no_encontrada.php">Términos y condiciones</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>PRODUCTOS</h4>
            <ul>
              <li><a href="no_encontrada.php">Ofertas</a></li>
              <li><a href="no_encontrada.php">Novedades</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>SU CUENTA</h4>
            <ul>
              <li><a href="no_encontrada.php">Seguimiento del pedido</a></li>
              <li><a href="no_encontrada.php">Iniciar sesión</a></li>
              <li><a href="no_encontrada.php">Crear una cuenta</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>INFORMACIÓN DE LA TIENDA</h4>
            <p>Bucaramanga</p>
            <p>Colombia</p>
            <p>Envíenos un mensaje de correo electrónico:</p>
            <p><a href="pinkymou@pinky.co">pinkymou@pinky.co</a></p>
          </div>
        </div>
        <div class="footer-bottom">
          <p>© 2024 - Todos los derechos reservados eCommerce MOUSE</p>
        </div>
      </footer>
</body>
<!--Ocultar nav menu en pantallas pequeñas-->
<script> 
    document.getElementById('menuToggle').addEventListener('click', function () {
        const navMenu = document.querySelector('.nav-menu');
        navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
    });
</script>

<!--script del carrusel-->
<script>
  (function(){
    const carousel = document.querySelector('.carousel');
    const inner = carousel.querySelector('.carousel-inner');
    const items = carousel.querySelectorAll('.carousel-item');
    const prevBtn = carousel.querySelector('.prev');
    const nextBtn = carousel.querySelector('.next');
    const indicators = carousel.querySelectorAll('.carousel-indicators button');

    let currentIndex = 0;
    const total = items.length;

    function updateCarousel() {
      inner.style.transform = `translateX(-${currentIndex * 100}%)`;
      indicators.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
        dot.setAttribute('aria-selected', i === currentIndex ? 'true' : 'false');
      });
    }

    function showPrev() {
      currentIndex = (currentIndex - 1 + total) % total;
      updateCarousel();
    }

    function showNext() {
      currentIndex = (currentIndex + 1) % total;
      updateCarousel();
    }

    prevBtn.addEventListener('click', showPrev);
    nextBtn.addEventListener('click', showNext);

    indicators.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
      });
    });

    // Auto slide every 5 seconds
    let autoSlide = setInterval(showNext, 5000);

    // Pause on mouse enter and resume on leave
    carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
    carousel.addEventListener('mouseleave', () => {
      autoSlide = setInterval(showNext, 5000);
    });

    // Initialize carousel position
    updateCarousel();
  })();
</script>
<!--script del details-->
<script>
    document.querySelectorAll('.details-button').forEach(button => {
    button.addEventListener('click', () => {
        const product = button.closest('.product'); // Encuentra el contenedor del producto
        product.classList.add('flipped'); // Agrega la clase para mostrar la parte trasera
    });
});

document.querySelectorAll('.back-button').forEach(button => {
    button.addEventListener('click', () => {
        const product = button.closest('.product'); // Encuentra el contenedor del producto
        product.classList.remove('flipped'); // Elimina la clase para volver a la parte frontal
    });
});
</script>

<!--script del carrusel de opininiones-->
<script>
  // Añade este código al final de tu archivo script.js existente

let currentIndex = 1;

function updateCards() {
  const cards = document.querySelectorAll('.card');
  cards.forEach((card, index) => {
    card.classList.remove('prev', 'active', 'next');
  });
  
  const prevIndex = (currentIndex - 1 + cards.length) % cards.length;
  const nextIndex = (currentIndex + 1) % cards.length;
  
  cards[prevIndex].classList.add('prev');
  cards[currentIndex].classList.add('active');
  cards[nextIndex].classList.add('next');
}

function prevCard() {
  const cards = document.querySelectorAll('.card');
  currentIndex = (currentIndex - 1 + cards.length) % cards.length;
  updateCards();
}

function nextCard() {
  const cards = document.querySelectorAll('.card');
  currentIndex = (currentIndex + 1) % cards.length;
  updateCards();
}

// Inicializa el carrusel
updateCards();
</script>
<!--script de ña función para mostrar/ocultar-->
<script>
  function toggleFooterLinks() {
    const links = document.querySelector('.footer-links');
    links.classList.toggle('show');
  }
</script>
<!--script para enviar los datos a PHP-->
<script>
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
      const name = button.getAttribute('data-name');
      const color = button.getAttribute('data-color');
      const precio = button.getAttribute('data-precio');

      fetch('agregar_producto.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `nombre=${name}&color=${color}&precio=${precio}`
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
      });
    });
  });
</script>
</html>
