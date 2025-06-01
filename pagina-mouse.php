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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jomhuria&display=swap" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles-pag-mouse.css">
    <link rel="icon" href="archivos\iconos\icono pinki.png">
</head>
<body>
    <header>
        <div class="top-bar">
            <h2 class="top-logo">Pinkymou</h2>
            <p class="top-message">Ahorra un 12% en todos los productos pinkymou utilizando nuestro código PINKY</p>
            <p class="top-Latino">Latinoamérica</p>
        </div>
        <nav>
            <div class="logo">
                <h2 class="top-logo purple">
                    <a href="principal.php" style="text-decoration: none;">Pinkymou</a>
                </h2>
            </div>
            <nav class="nav-menu">
                <a href="pagina-mouse.php">MOUSES</a>
                <a href="no_encontrada.php">AUDIFONOS</a>
                <a href="no_encontrada.php">RELOJES</a>
                <a href="no_encontrada.php">PORTATILES</a>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Buscar...">
            </div>
            <div class="dark_mode">
                <button id="darkModeToggle" class="dark-mode-btn">
                    <img id="darkModeIcon" src="archivos/iconos/luna.png" alt="Dark Mode Toggle">
                </button>
            </div>
            <div class="carrito-cart">
                <a href="#"><img src="archivos/iconos/carrito.png" id="carrito-icon"></a>
                <span class="cart-count">0</span>
                <div class="cart-dropdown">
                    <ul id="cart-items"></ul>
                    <p>Total: $<span id="cart-total">0</span></p>
                </div>
            </div>
        </nav>
    </header>
    <!-- img publicidad  mouse-->
    <img id="img_publicidad_mouse"src="archivos\imagenes\img_publicidad_mouse.png" alt="img_publicidad_mouse">
    <section class="products">
      <div class="product">
        <div class="product-front" id="Logitech_CONTEINER">
            <button class="view-3d-button" data-name="Logitech_btn_3d">3D</button>
            <img src="archivos\MAUSES\Logitech MX Master blanco 1.webp" alt="Logitech MX Master">
            <h2 class="product-title">Logitech MX Master</h2>
            <h2 class="price">$99.99</h2>
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
                <button class="add-to-cart" data-name="Logitech MX Master" data-price="99.99">🛒</button>  
                <button class="button details-button">Details</button>
            </div>
        </div>
        <button id="stopButtonLogitech" style="display: none;">X</button>
        <h2 id="product_title_animacion_Logitech">Logitech MX Master</h2>
    
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
      <div class="product-front" id="APPLE_CONTEINER">
          <button class="view-3d-button" data-name="APPLE_btn_3d">3D</button>
          <img src="archivos\MAUSES\Apple Magic Mouse Apple.webp" alt="APPLE MAGIC MOUSE" class="product-image">
          <h2 class="product-title">APPLE MAGIC MOUSE</h2>
          <h2 class="price">$99.99</h2>
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
              <button class="add-to-cart" data-name="APPLE MAGIC MOUSE" data-price="79.00">🛒</button>  
              <button class="button details-button">Details</button>
          </div>
      </div>
      <button id="stopButtonAPPLE" style="display: none;">X</button>
      <h2 id="product_title_animacion_APPLE">Apple Magic</h2>
  
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
                  <td>Magic Mouse 2
                </td>
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
                  <td>16.5 cm x 6.2 cm x 1.0 cm</td>
              </tr>
              <tr>
                  <td>Detalle de la garantía</td>
                  <td>1 año de garantía limitada</td>
              </tr>
              <tr>
                  <td>Incluye</td>
                  <td>Mouse Inalámbrico Apple Magic Mouse 2</td>
              </tr>
          </table>
          <button class="button back-button">Back</button>
      </div>
  </div>
  <div class="product">
    <div class="product-front" id="LUOM_CONTEINER">
        <button class="view-3d-button" data-name="Redragon_btn_3d">3D</button>
        <img src="archivos\MAUSES\luom g10.png" alt="LUOM G10" class="product-image">
        <h2 class="product-title">Luom G10</h2>
        <h2 class="price">$29.99</h2>
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
            <button class="add-to-cart" data-name="Luom G10" data-price="29.99">🛒</button>  
            <button class="button details-button">Details</button>
        </div>
    </div>
    <button data-name="LUOM_btn_stopButton" id="stopButton" style="display: none;">X</button>
    <h2 id="product_title_animacion_LUOM">Luom G10</h2>

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
                <td>001</td>
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
                <td>12cm x 7cm x 4cm</td>
            </tr>
            <tr>
                <td>Detalle de la garantía</td>
                <td>Solo por daños de fábrica</td>
            </tr>
            <tr>
                <td>Incluye</td>
                <td>Mouse Alambrico Gamer De Juego Onikuma Cw902 Negro</td>
            </tr>
        </table>
        <button class="button back-button">Back</button>
    </div>
</div>
<div class="product">
  <div class="product-front" id="Onikuma_CONTEINER">
      <button class="view-3d-button" data-name="Onikuma_btn_3d">3D</button>
      <img src="archivos\Archivos_varios\mouse1.png" alt="Onikuma CW902" class="product-image">
      <h2 class="product-title">ONIKUMA CW902</h2>
      <h2 class="price">$99.99</h2>
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
          <button class="add-to-cart" data-name="ONIKUMA CW902" data-price="9.99">🛒</button>  
          <button class="button details-button">Details</button>
      </div>
  </div>
  <button id="stopButtonONIKUMA" style="display: none;">X</button>
  <h2 id="product_title_animacion_ONIKUMA">ONIKUMA CW902</h2>
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
              <td>001</td>
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
              <td>12cm x 7cm x 4cm</td>
          </tr>
          <tr>
              <td>Detalle de la garantía</td>
              <td>Solo por daños de fábrica</td>
          </tr>
          <tr>
              <td>Incluye</td>
              <td>Mouse Alambrico Gamer De Juego Onikuma Cw902 Negro</td>
          </tr>
      </table>
      <button class="button back-button">Back</button>
  </div>
</div>
    </section>
    <!--footer-->
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
      
        <div class="footer-links">
          <div class="footer-column">
            <h4>NUESTRA EMPRESA</h4>
            <ul>
              <li><a href="#">Envío</a></li>
              <li><a href="#">Términos y condiciones</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>PRODUCTOS</h4>
            <ul>
              <li><a href="#">Ofertas</a></li>
              <li><a href="#">Novedades</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>SU CUENTA</h4>
            <ul>
              <li><a href="#">Seguimiento del pedido</a></li>
              <li><a href="#">Iniciar sesión</a></li>
              <li><a href="#">Crear una cuenta</a></li>
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
    <!-- segunda seccion de products-->
    

<script src="script.js"></script>

<!-- dark button-->
 <script>
    document.getElementById('darkModeToggle').addEventListener('click', function () {
    const body = document.body;
    body.classList.toggle('dark-mode');
    
    // Cambiar el icono del botón
    const darkModeIcon = document.getElementById('darkModeIcon');
    if (body.classList.contains('dark-mode')) {
        darkModeIcon.src = "archivos/iconos/sol.png";
    } else {
        darkModeIcon.src = "archivos/iconos/luna.png";
    }
});

 </script>

    <!-- Importamos Three.js, el OBJLoader y OrbitControls -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/loaders/OBJLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/controls/OrbitControls.js"></script>
<!-- animaciones -->

<script>
document.querySelector('.view-3d-button[data-name="Logitech_btn_3d"]').addEventListener('click', function() {    
    const container = document.getElementById('Logitech_CONTEINER');
    const stopButton = document.getElementById('stopButtonLogitech');
    const product_title_animacion = document.getElementById('product_title_animacion_Logitech');
    let originalContent;

    // Guarda el contenido original
    originalContent = container.innerHTML;

// Oculta el contenido original
container.innerHTML = '';

// Muestra el botón de detener
stopButton.style.display = 'block';

product_title_animacion.style.display = 'block';
// Muestra el botón de detener el título con id product_title_animacion_Logitech

// Crea y muestra la animación 3D
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    // Configurar el fondo utilizando una textura
    const loader = new THREE.TextureLoader();
    loader.load('archivos/imagenes/fondo obj.png', function(texture) {
        scene.background = texture;
    });

    // Posicionar la cámara
    camera.position.z = 2;
    camera.position.y = 2;  // Elevar la cámara

    // Luz para iluminar el objeto
    const ambientLight = new THREE.AmbientLight(0xffffff, 1);
    scene.add(ambientLight);

    // Cargar el objeto .obj usando el OBJLoader
    const objLoader = new THREE.OBJLoader();
    objLoader.load('OBJETOS_3D/LOGI_2.obj', function (object) {
        object.scale.set(1, 1, 1);
        object.position.set(0, 0, 0);

        object.traverse(function (child) {
            if (child.isMesh) {
                child.material = new THREE.MeshStandardMaterial({
                    color: 0xAAAAAA,
                    metalness: 0.3,
                    roughness: 0.8
                });
            }
        });
        
        scene.add(object);
    }, 
    function (xhr) {
        console.log((xhr.loaded / xhr.total * 100) + '% cargado');
    },
    function (error) {
        console.error('Error al cargar el objeto', error);
    });

    // Añadir controles orbitales
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;
    controls.autoRotate = true;
    controls.autoRotateSpeed = 2.0;

    let animationId;

    function animate() {
        animationId = requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();

    // Ajustar la cámara cuando se cambia el tamaño de la ventana
    window.addEventListener('resize', function () {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    });

    // Maneja el clic en el botón de detener
    stopButton.onclick = function() {
        cancelAnimationFrame(animationId);
        
        // Restaura el contenido original
        container.innerHTML = originalContent;

        // Oculta el botón de detener
        stopButton.style.display = 'none';

        // Oculta el titulo 
        product_title_animacion.style.display = 'none';

        // Elimina el event listener de resize
        window.removeEventListener('resize', onWindowResize);
    };
});
</script><!-- Logitech  -->
 
<script>
    document.querySelector('.view-3d-button[data-name="APPLE_btn_3d"]').addEventListener('click', function() {
        const container = document.getElementById('APPLE_CONTEINER');
        const stopButton = document.getElementById('stopButtonAPPLE');
        const product_title_animacion = document.getElementById('product_title_animacion_APPLE');
        let originalContent;
    
        // Guarda el contenido original
        originalContent = container.innerHTML;
    
        // Oculta el contenido original
        container.innerHTML = '';
    
        // Muestra el botón de detener
        stopButton.style.display = 'block';

        // Muestra el botón de detener el título con id product_title_animacion_Logitech
        product_title_animacion.style.display = 'block';
    
        // Crea y muestra la animación 3D
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
    
        // Configurar el fondo utilizando una textura
        const loader = new THREE.TextureLoader();
        loader.load('archivos/imagenes/fondo obj.png', function(texture) {
            scene.background = texture;
        });
    
        // Posicionar la cámara
          camera.position.z = 95;
    
        // Luz para iluminar el objeto
        const ambientLight = new THREE.AmbientLight(0xffffff, 1);
        scene.add(ambientLight);
    
        // Cargar el objeto .obj usando el OBJLoader
        const objLoader = new THREE.OBJLoader();
        objLoader.load('OBJETOS_3D/apple mouse.obj', function (object) {
            object.scale.set(1, 1, 1);
            object.position.set(0, 0, 0);
    
            object.traverse(function (child) {
                if (child.isMesh) {
                    child.material = new THREE.MeshStandardMaterial({
                        color: 0xAAAAAA,
                        metalness: 0.3,
                        roughness: 0.8
                    });
                }
            });
            
            scene.add(object);
        }, 
        function (xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% cargado');
        },
        function (error) {
            console.error('Error al cargar el objeto', error);
        });
    
        // Añadir controles orbitales
        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 2.0;
    
        let animationId;
        function animate() {
            animationId = requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }
    
        animate();
    
        // Función para ajustar el tamaño
        function onWindowResize() {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }
    
        // Ajustar la cámara cuando se cambia el tamaño de la ventana
        window.addEventListener('resize', function () {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
        });
    
        // Maneja el clic en el botón de detener
        stopButton.onclick = function() {
            cancelAnimationFrame(animationId);
            
            // Restaura el contenido original
            container.innerHTML = originalContent;
    
            // Oculta el botón de detener
            stopButton.style.display = 'none';

            // Oculta el titulo 
            product_title_animacion.style.display = 'none';
    
            // Elimina el event listener de resize
            window.removeEventListener('resize', onWindowResize);
        };
    });
</script><!-- APPLE  -->

<script>
    document.querySelector('.view-3d-button[data-name="Redragon_btn_3d"]').addEventListener('click', function() {
        const container = document.getElementById('LUOM_CONTEINER');
        const stopButton = document.getElementById('stopButton');
        const product_title_animacion = document.getElementById('product_title_animacion_LUOM');
        let originalContent;
    
        // Guarda el contenido original
        originalContent = container.innerHTML;
    
        // Oculta el contenido original
        container.innerHTML = '';
    
        // Muestra el botón de detener
        stopButton.style.display = 'block';
        
        // Muestra el botón de detener el título con id product_title_animacion_Logitech
        product_title_animacion.style.display = 'block';

        // Crea y muestra la animación 3D
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
    
        // Configurar el fondo utilizando una textura
        const loader = new THREE.TextureLoader();
        loader.load('archivos/imagenes/fondo obj.png', function(texture) {
            scene.background = texture;
        });
    
        // Posicionar la cámara
        camera.position.z = 96; // Posicionar la cámara 12 veces más lejos
        camera.position.y = 200;  // Elevar la cámara

        // Luz para iluminar el objeto
        const ambientLight = new THREE.AmbientLight(0xffffff, 1);
        scene.add(ambientLight);
    
        // Cargar el objeto .obj usando el OBJLoader
        const objLoader = new THREE.OBJLoader();
        objLoader.load('OBJETOS_3D/LOUM G10.obj', function (object) {
            object.scale.set(1, 1, 1);
            object.position.set(0, 0, 0);
    
            object.traverse(function (child) {
                if (child.isMesh) {
                    child.material = new THREE.MeshStandardMaterial({
                        color: 0xAAAAAA,
                        metalness: 0.3,
                        roughness: 0.8
                    });
                }
            });
            
            scene.add(object);
        }, 
        function (xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% cargado');
        },
        function (error) {
            console.error('Error al cargar el objeto', error);
        });
    
        // Añadir controles orbitales
        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 2.0;
    
        let animationId;
    
        function animate() {
            animationId = requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }
    
        animate();
    
        // Función para ajustar el tamaño
        function onWindowResize() {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }
    
        // Ajustar la cámara cuando se cambia el tamaño de la ventana
        window.addEventListener('resize', onWindowResize);
    
        // Maneja el clic en el botón de detener
        stopButton.onclick = function() {
            cancelAnimationFrame(animationId);
            
            // Restaura el contenido original
            container.innerHTML = originalContent;
    
            // Oculta el botón de detener
            stopButton.style.display = 'none';

            // Oculta el titulo 
            product_title_animacion.style.display = 'none';
    
            // Elimina el event listener de resize
            window.removeEventListener('resize', onWindowResize);
        };
    });
</script><!-- Luom  -->
<script>
    document.querySelector('.view-3d-button[data-name="Onikuma_btn_3d"]').addEventListener('click', function() {
        const container = document.getElementById('Onikuma_CONTEINER');
        const stopButton = document.getElementById('stopButtonONIKUMA');
        const product_title_animacion = document.getElementById('product_title_animacion_ONIKUMA');
        let originalContent;
    
        // Guarda el contenido original
        originalContent = container.innerHTML;
    
        // Oculta el contenido original
        container.innerHTML = '';
    
        // Muestra el botón de detener
        stopButton.style.display = 'block';
        
        // Muestra el botón de detener el título con id product_title_animacion_Logitech
        product_title_animacion.style.display = 'block';

        // Crea y muestra la animación 3D
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
    
        // Configurar el fondo utilizando una textura
        const loader = new THREE.TextureLoader();
        loader.load('archivos/imagenes/fondo obj.png', function(texture) {
            scene.background = texture;
        });
    
        // Posicionar la cámara
        camera.position.z = 1; // Posicionar la cámara 12 veces más lejos
        camera.position.y = 2;  // Elevar la cámara

        // Luz para iluminar el objeto
        const ambientLight = new THREE.AmbientLight(0xffffff, 1);
        scene.add(ambientLight);
    
        // Cargar el objeto .obj usando el OBJLoader
        const objLoader = new THREE.OBJLoader();
        objLoader.load('OBJETOS_3D/ONIKUMA CW902.obj', function (object) {
            object.scale.set(1, 1, 1);
            object.position.set(0, 0, 0);
    
            object.traverse(function (child) {
                if (child.isMesh) {
                    child.material = new THREE.MeshStandardMaterial({
                        color: 0xAAAAAA,
                        metalness: 0.3,
                        roughness: 0.8
                    });
                }
            });
            
            scene.add(object);
        }, 
        function (xhr) {
            console.log((xhr.loaded / xhr.total * 100) + '% cargado');
        },
        function (error) {
            console.error('Error al cargar el objeto', error);
        });
    
        // Añadir controles orbitales
        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 2.0;
    
        let animationId;
    
        function animate() {
            animationId = requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }
    
        animate();
    
        // Función para ajustar el tamaño
        function onWindowResize() {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }
    
        // Ajustar la cámara cuando se cambia el tamaño de la ventana
        window.addEventListener('resize', onWindowResize);
    
        // Maneja el clic en el botón de detener
        stopButton.onclick = function() {
            cancelAnimationFrame(animationId);
            
            // Restaura el contenido original
            container.innerHTML = originalContent;
    
            // Oculta el botón de detener
            stopButton.style.display = 'none';

            // Oculta el titulo 
            product_title_animacion.style.display = 'none';
    
            // Elimina el event listener de resize
            window.removeEventListener('resize', onWindowResize);
        };
    });
</script><!-- Onikuma  -->


<!-- restaura el contenido original del contenedor-->
<script>
    stopButton.onclick = function() {
    cancelAnimationFrame(animationId);
    container.innerHTML = originalContent;
    stopButton.style.display = 'none';
    product_title_animacion.style.display = 'none';
    window.removeEventListener('resize', onWindowResize);
};
</script>
</body>
</html>
</body>















