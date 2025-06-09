
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Tienda Premium de Videojuegos - Compra juegos de acción, aventura, deportes y más." />
  <meta name="theme-color" content="#f0a500" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="styles.css" />
  <title>Tienda De Videojuegos</title>
</head>

<body>
  <h1>Tienda De Videojuegos</h1>

  <!-- Botón para mostrar carrito -->
  <div id="cart-info">
    🛒 Carrito <span id="cart-count">0</span>
  </div>

  <!-- Productos -->
  <section id="productos">
    <!-- Hollow Knight -->
    <div class="producto-info" data-category="indie">
      <img src="juego3.png" alt="Hollow Knight" />
      <div class="producto-details">
        <h3>Hollow Knight</h3>
        <p>Una aventura épica a través de un vasto reino de insectos y héroes que se encuentra en ruinas.</p>
        <div class="producto-price">
          <span>COL$ 37.500 / USD $8.94</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>

    <!-- Celeste -->
    <div class="producto-info" data-category="indie">
      <img src="juego4.png" alt="Celeste" />
      <div class="producto-details">
        <h3>Celeste</h3>
        <p>Ayuda a Madeline a sobrevivir a los demonios de su interior en su viaje hasta la cima de la montaña Celeste.</p>
        <div class="producto-price">
          <span>COL$ 47.500 / USD $8.94</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>

    <!-- Hades -->
    <div class="producto-info" data-category="indie">
      <img src="juego5_Hades.png" alt="Hades" />
      <div class="producto-details">
        <h3>Hades</h3>
        <p>Desafía al dios de los muertos y protagoniza una salvaje fuga del Inframundo.</p>
        <div class="producto-price">
          <span>COL$ 58.800 / USD $14.27</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>

    <!-- Doom Eternal -->
    <div class="producto-info" data-category="shooters">
      <img src="juego1Doom_Eternal_.png" alt="Doom Eternal" />
      <div class="producto-details">
        <h3>Doom Eternal</h3>
        <p>Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones para detener la destrucción definitiva de la humanidad.</p>
        <div class="producto-price">
          <span>COL$ 120.000 / USD $29.13</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>

    <!-- Metal Gear Solid -->
    <div class="producto-info" data-category="shooters">
      <img src="Juego10Metal_gearsolid.png" alt="METAL GEAR SOLID - Master Collection Version" />
      <div class="producto-details">
        <h3>METAL GEAR SOLID - Master Collection Version</h3>
        <p>La primera entrega en 3D de la serie METAL GEAR introduce una trama de acción y sigilo.</p>
        <div class="producto-price">
          <span>COL$ 86.600 / USD $21.02</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>

    <!-- Battlefield 2042 -->
    <div class="producto-info" data-category="shooters">
      <img src="juego9battlefield.png" alt="Battlefield™ 2042" />
      <div class="producto-details">
        <h3>Battlefield™ 2042</h3>
        <p>Battlefield™ 2042 es un shooter en primera persona que marca el regreso a la emblemática guerra total de la franquicia.</p>
        <div class="producto-price">
          <span>COL$ 234.999 / USD $57.05</span>
          <button class="btn-secondary">Agregar al Carrito</button>
        </div>
      </div>
    </div>
    <!-- Little Nightmares -->
<div class="producto-info" data-category="indie">
  <img src="juego1.png" alt="Little Nightmares" />
  <div class="producto-details">
    <h3>Little Nightmares</h3>
    <p>Embárcate en un inquietante viaje a través de un mundo oscuro y surrealista lleno de misterios.</p>
    <div class="producto-price">
      <span>COL$ 45.000 / USD $10.70</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Undertale -->
<div class="producto-info" data-category="indie">
  <img src="juego2.png" alt="Undertale" />
  <div class="producto-details">
    <h3>Undertale</h3>
    <p>Un RPG único donde tus decisiones afectan el mundo y las relaciones con sus peculiares personajes.</p>
    <div class="producto-price">
      <span>COL$ 39.000 / USD $9.26</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>
<!-- Assassin’s Creed Shadows -->
<div class="producto-info">
  <img src="Assasins creed.jpg" alt="Assassin’s Creed Shadows" />
  <div class="producto-details">
    <h3>Assassin’s Creed Shadows</h3>
    <p>Explora el Japón feudal como shinobi y samurái en esta nueva entrega de la saga Assassin’s Creed.</p>
    <div class="producto-price">
      <span>COL$ 240.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- The Legend of Zelda: Tears of the Kingdom -->
<div class="producto-info">
  <img src="zelda tears of the kingdom.jpg" alt="The Legend of Zelda: Tears of the Kingdom" />
  <div class="producto-details">
    <h3>The Legend of Zelda: Tears of the Kingdom</h3>
    <p>Acompaña a Link en una épica aventura por los cielos y las profundidades de Hyrule.</p>
    <div class="producto-price">
      <span>COL$ 250.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Marvel's Spider-Man 2 -->
<div class="producto-info">
  <img src="spiderman.jpg" alt="Marvel's Spider-Man 2" />
  <div class="producto-details">
    <h3>Marvel's Spider-Man 2</h3>
    <p>Peter Parker y Miles Morales unen fuerzas para enfrentar nuevos villanos en Nueva York.</p>
    <div class="producto-price">
      <span>COL$ 280.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Ghost of Tsushima -->
<div class="producto-info">
  <img src="Ghost_of_Tsushima.jpg" alt="Ghost of Tsushima" />
  <div class="producto-details">
    <h3>Ghost of Tsushima</h3>
    <p>Conviértete en Jin Sakai y defiende tu tierra de la invasión mongola en este hermoso mundo abierto.</p>
    <div class="producto-price">
      <span>COL$ 180.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Red Dead Redemption 2 -->
<div class="producto-info">
  <img src="red dead 2.jpg" alt="Red Dead Redemption 2" />
  <div class="producto-details">
    <h3>Red Dead Redemption 2</h3>
    <p>Vive el salvaje oeste como Arthur Morgan en una historia épica de forajidos y lealtad.</p>
    <div class="producto-price">
      <span>COL$ 210.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Star Wars Jedi: Survivor -->
<div class="producto-info">
  <img src="star wars.jpg" alt="Star Wars Jedi: Survivor" />
  <div class="producto-details">
    <h3>Star Wars Jedi: Survivor</h3>
    <p>Continúa la aventura de Cal Kestis en su lucha por sobrevivir y restaurar la Orden Jedi.</p>
    <div class="producto-price">
      <span>COL$ 260.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Alan Wake II -->
<div class="producto-info">
  <img src="Alan wake.jpg" alt="Alan Wake II" />
  <div class="producto-details">
    <h3>Alan Wake II</h3>
    <p>Una experiencia narrativa y de horror psicológico donde el escritor lucha por escapar de la oscuridad.</p>
    <div class="producto-price">
      <span>COL$ 220.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Horizon Forbidden West -->
<div class="producto-info">
  <img src="Horizon.jpg" alt="Horizon Forbidden West" />
  <div class="producto-details">
    <h3>Horizon Forbidden West</h3>
    <p>Acompaña a Aloy en un mundo postapocalíptico lleno de criaturas mecánicas y secretos por descubrir.</p>
    <div class="producto-price">
      <span>COL$ 240.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- A Plague Tale: Requiem -->
<div class="producto-info">
  <img src="plague.jpg" alt="A Plague Tale: Requiem" />
  <div class="producto-details">
    <h3>A Plague Tale: Requiem</h3>
    <p>Una intensa aventura de sigilo y emoción en un mundo devastado por la peste y la guerra.</p>
    <div class="producto-price">
      <span>COL$ 190.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Uncharted: Legacy of Thieves Collection -->
<div class="producto-info">
  <img src="uncharted legacy.jpg" alt="Uncharted: Legacy of Thieves Collection" />
  <div class="producto-details">
    <h3>Uncharted: Legacy of Thieves Collection</h3>
    <p>Revive dos grandes aventuras con Nathan Drake y Chloe Frazer en esta colección remasterizada.</p>
    <div class="producto-price">
      <span>COL$ 200.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>
<!-- The Witcher 3: Wild Hunt -->
<div class="producto-info">
  <img src="The witcher 3.jpg" alt="The Witcher 3: Wild Hunt" />
  <div class="producto-details">
    <h3>The Witcher 3: Wild Hunt</h3>
    <p>Conviértete en Geralt de Rivia, un cazador de monstruos en busca de su hija adoptiva en un mundo lleno de magia y guerra.</p>
    <div class="producto-price">
      <span>COL$ 95.000 / USD $24.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Baldur’s Gate 3 -->
<div class="producto-info">
  <img src="baldurs 3.jpg" alt="Baldur’s Gate 3" />
  <div class="producto-details">
    <h3>Baldur’s Gate 3</h3>
    <p>Vive una experiencia RPG basada en Dungeons & Dragons con decisiones que moldean tu destino y el del mundo.</p>
    <div class="producto-price">
      <span>COL$ 245.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Elden Ring -->
<div class="producto-info">
  <img src="Elden Ring.jpg" alt="Elden Ring" />
  <div class="producto-details">
    <h3>Elden Ring</h3>
    <p>Explora las Tierras Intermedias en un mundo abierto desafiante creado por Hidetaka Miyazaki y George R.R. Martin.</p>
    <div class="producto-price">
      <span>COL$ 210.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Cyberpunk 2077: Phantom Liberty -->
<div class="producto-info">
  <img src="Cyberpunk.jpg" alt="Cyberpunk 2077: Phantom Liberty" />
  <div class="producto-details">
    <h3>Cyberpunk 2077: Phantom Liberty</h3>
    <p>Expande la historia de Night City con esta gran expansión llena de acción, espionaje y nuevas posibilidades.</p>
    <div class="producto-price">
      <span>COL$ 165.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Dragon’s Dogma 2 -->
<div class="producto-info">
  <img src="Dragons.jpg" alt="Dragon’s Dogma 2" />
  <div class="producto-details">
    <h3>Dragon’s Dogma 2</h3>
    <p>Embárcate en una aventura de fantasía épica con un sistema de combate dinámico y compañeros controlados por IA.</p>
    <div class="producto-price">
      <span>COL$ 230.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Persona 5 Royal -->
<div class="producto-info">
  <img src="persona5.jpg" alt="Persona 5 Royal" />
  <div class="producto-details">
    <h3>Persona 5 Royal</h3>
    <p>Forma parte de los Ladrones Fantasma y cambia los corazones de los corruptos mientras llevas una vida escolar en Tokio.</p>
    <div class="producto-price">
      <span>COL$ 160.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Final Fantasy VII Rebirth -->
<div class="producto-info">
  <img src="ff7.jpg" alt="Final Fantasy VII Rebirth" />
  <div class="producto-details">
    <h3>Final Fantasy VII Rebirth</h3>
    <p>Continúa la épica historia de Cloud y sus amigos en esta reimaginación moderna del clásico de culto.</p>
    <div class="producto-price">
      <span>COL$ 270.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Divinity: Original Sin II -->
<div class="producto-info">
  <img src="divinity.jpg" alt="Divinity: Original Sin II" />
  <div class="producto-details">
    <h3>Divinity: Original Sin II</h3>
    <p>Una de las mejores experiencias RPG tácticas con libertad total para jugar solo o en cooperativo.</p>
    <div class="producto-price">
      <span>COL$ 120.000 / USD $29.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Octopath Traveler II -->
<div class="producto-info">
  <img src="octopath.jpg" alt="Octopath Traveler II" />
  <div class="producto-details">
    <h3>Octopath Traveler II</h3>
    <p>Vive ocho historias únicas en un mundo en 2D-HD lleno de encanto y estrategia por turnos.</p>
    <div class="producto-price">
      <span>COL$ 200.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Starfield -->
<div class="producto-info">
  <img src="starfield.jpg"Starfield" />
  <div class="producto-details">
    <h3>Starfield</h3>
    <p>Explora más de 1,000 planetas en esta ambiciosa aventura espacial de Bethesda Game Studios.</p>
    <div class="producto-price">
      <span>COL$ 250.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>
<!-- Microsoft Flight Simulator 2025 -->
<div class="producto-info">
  <img src="Flight simulator.jpg" alt="Microsoft Flight Simulator 2025" />
  <div class="producto-details">
    <h3>Microsoft Flight Simulator 2025</h3>
    <p>Surca los cielos con el simulador de vuelo más realista, con datos meteorológicos en tiempo real y mapas globales detallados.</p>
    <div class="producto-price">
      <span>COL$ 285.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- The Sims 4 -->
<div class="producto-info">
  <img src="Sims4.jpg" alt="The Sims 4" />
  <div class="producto-details">
    <h3>The Sims 4</h3>
    <p>Crea personajes, construye hogares y controla cada aspecto de sus vidas en este simulador social icónico.</p>
    <div class="producto-price">
      <span>COL$ 0 / USD $0.00</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Cities: Skylines II -->
<div class="producto-info">
  <img src="Cities skylines.jpg" alt="Cities: Skylines II" />
  <div class="producto-details">
    <h3>Cities: Skylines II</h3>
    <p>Diseña y gestiona la ciudad de tus sueños con sistemas urbanos complejos y un realismo mejorado.</p>
    <div class="producto-price">
      <span>COL$ 210.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Farming Simulator 22 -->
<div class="producto-info">
  <img src="Farming.jpg" alt="Farming Simulator 22" />
  <div class="producto-details">
    <h3>Farming Simulator 22</h3>
    <p>Administra tu propia granja con cultivos, maquinaria real y ciclos estacionales en este popular simulador agrícola.</p>
    <div class="producto-price">
      <span>COL$ 180.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Planet Zoo -->
<div class="producto-info">
  <img src="Planet zoo.jpg" alt="Planet Zoo" />
  <div class="producto-details">
    <h3>Planet Zoo</h3>
    <p>Construye y gestiona un zoológico con hábitats realistas y un enfoque en la conservación animal.</p>
    <div class="producto-price">
      <span>COL$ 160.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Train Sim World 4 -->
<div class="producto-info">
  <img src="train4.jpg" alt="Train Sim World 4" />
  <div class="producto-details">
    <h3>Train Sim World 4</h3>
    <p>Conduce trenes reales en rutas detalladas y realistas alrededor del mundo con simulación avanzada.</p>
    <div class="producto-price">
      <span>COL$ 170.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- PC Building Simulator -->
<div class="producto-info">
  <img src="pcbuilding.jpg" alt="PC Building Simulator" />
  <div class="producto-details">
    <h3>PC Building Simulator</h3>
    <p>Construye y repara computadoras en un entorno detallado, ideal para aficionados del hardware.</p>
    <div class="producto-price">
      <span>COL$ 75.000 / USD $19.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Two Point Hospital -->
<div class="producto-info">
  <img src="twopoint.jpg" alt="Two Point Hospital" />
  <div class="producto-details">
    <h3>Two Point Hospital</h3>
    <p>Dirige un hospital con enfermedades divertidas y mecánicas de gestión detalladas y adictivas.</p>
    <div class="producto-price">
      <span>COL$ 95.000 / USD $24.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- SimAirport -->
<div class="producto-info">
  <img src="simairport.jpg" alt="SimAirport" />
  <div class="producto-details">
    <h3>SimAirport</h3>
    <p>Diseña, construye y administra tu propio aeropuerto en este detallado simulador de transporte aéreo.</p>
    <div class="producto-price">
      <span>COL$ 85.000 / USD $19.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- House Flipper -->
<div class="producto-info">
  <img src="house flipper.jpg" alt="House Flipper" />
  <div class="producto-details">
    <h3>House Flipper</h3>
    <p>Compra, renueva y vende casas para obtener ganancias en este relajante simulador de remodelación.</p>
    <div class="producto-price">
      <span>COL$ 105.000 / USD $24.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>
<!-- EA Sports FC 25 -->
<div class="producto-info">
  <img src="fc25.jpg" alt="EA Sports FC 25" />
  <div class="producto-details">
    <h3>EA Sports FC 25</h3>
    <p>La evolución del clásico FIFA. Vive el fútbol con nuevas mecánicas de juego, equipos licenciados y modos mejorados.</p>
    <div class="producto-price">
      <span>COL$ 285.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- NBA 2K25 -->
<div class="producto-info">
  <img src="2k25.jpg" alt="NBA 2K25" />
  <div class="producto-details">
    <h3>NBA 2K25</h3>
    <p>La simulación definitiva de baloncesto con gráficos realistas, jugabilidad pulida y modos carrera y online.</p>
    <div class="producto-price">
      <span>COL$ 270.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- eFootball 2025 -->
<div class="producto-info">
  <img src="e football.jpg" alt="eFootball 2025" />
  <div class="producto-details">
    <h3>eFootball 2025</h3>
    <p>Una experiencia gratuita de fútbol competitivo con enfoque en el realismo y torneos online.</p>
    <div class="producto-price">
      <span>COL$ 0 / USD $0.00</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- MLB The Show 25 -->
<div class="producto-info">
  <img src="the show.jpg" alt="MLB The Show 25" />
  <div class="producto-details">
    <h3>MLB The Show 25</h3>
    <p>Disfruta del béisbol profesional con licencias oficiales de la MLB, modos realistas y simulación precisa.</p>
    <div class="producto-price">
      <span>COL$ 255.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Madden NFL 25 -->
<div class="producto-info">
  <img src="maddden.jpg" alt="Madden NFL 25" />
  <div class="producto-details">
    <h3>Madden NFL 25</h3>
    <p>Conviértete en leyenda del fútbol americano con mecánicas actualizadas, física realista y modos completos.</p>
    <div class="producto-price">
      <span>COL$ 270.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- NHL 25 -->
<div class="producto-info">
  <img src="nhl25.jpg" alt="NHL 25" />
  <div class="producto-details">
    <h3>NHL 25</h3>
    <p>La acción del hockey sobre hielo llevada al límite con gráficos mejorados, licencias completas y nuevos modos.</p>
    <div class="producto-price">
      <span>COL$ 260.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Tennis World Tour 2 -->
<div class="producto-info">
  <img src="tennis.jpg"Tennis World Tour 2" />
  <div class="producto-details">
    <h3>Tennis World Tour 2</h3>
    <p>Enfrenta a los mejores tenistas del mundo en canchas realistas con física de pelota precisa y control táctico.</p>
    <div class="producto-price">
      <span>COL$ 145.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Cricket 24 -->
<div class="producto-info">
  <img src="cricket24.jpg" alt="Cricket 24" />
  <div class="producto-details">
    <h3>Cricket 24</h3>
    <p>El simulador de cricket más completo, con licencias oficiales, torneos internacionales y jugabilidad auténtica.</p>
    <div class="producto-price">
      <span>COL$ 195.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Fight Night Champion -->
<div class="producto-info">
  <img src="Fight.jpg" alt="Fight Night Champion" />
  <div class="producto-details">
    <h3>Fight Night Champion</h3>
    <p>Una experiencia de boxeo cruda y cinematográfica con controles precisos y una historia intensa.</p>
    <div class="producto-price">
      <span>COL$ 85.000 / USD $19.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- UFC 5 -->
<div class="producto-info">
  <img src="ufc5.jpg" alt="UFC 5" />
  <div class="producto-details">
    <h3>UFC 5</h3>
    <p>Peleas mixtas realistas con animaciones fluidas, física de daño mejorada y modos competitivos.</p>
    <div class="producto-price">
      <span>COL$ 270.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>
<!-- Forza Horizon 5 -->
<div class="producto-info">
  <img src="forza.jpg" alt="Forza Horizon 5" />
  <div class="producto-details">
    <h3>Forza Horizon 5</h3>
    <p>Explora un mundo abierto vibrante en México con cientos de autos y eventos de carreras dinámicos.</p>
    <div class="producto-price">
      <span>COL$ 235.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Gran Turismo 7 -->
<div class="producto-info">
  <img src="gran.jpg" alt="Gran Turismo 7" />
  <div class="producto-details">
    <h3>Gran Turismo 7</h3>
    <p>Simulación de carreras de alta precisión con una amplia colección de autos, circuitos legendarios y personalización avanzada.</p>
    <div class="producto-price">
      <span>COL$ 270.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Assetto Corsa Competizione -->
<div class="producto-info">
  <img src="asseto.jpg" alt="Assetto Corsa Competizione" />
  <div class="producto-details">
    <h3>Assetto Corsa Competizione</h3>
    <p>La experiencia definitiva del GT World Challenge con realismo total y simulación de física profesional.</p>
    <div class="producto-price">
      <span>COL$ 155.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- F1 24 -->
<div class="producto-info">
  <img src="f124.jpg" alt="F1 24" />
  <div class="producto-details">
    <h3>F1 24</h3>
    <p>Vive la emoción de la Fórmula 1 con todos los equipos, pilotos y circuitos de la temporada oficial.</p>
    <div class="producto-price">
      <span>COL$ 285.000 / USD $69.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Need for Speed Unbound -->
<div class="producto-info">
  <img src="nfs.jpg" alt="Need for Speed Unbound" />
  <div class="producto-details">
    <h3>Need for Speed Unbound</h3>
    <p>Corre en las calles con estilo único, personalización profunda y un modo historia cargado de adrenalina.</p>
    <div class="producto-price">
      <span>COL$ 240.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- WRC Generations -->
<div class="producto-info">
  <img src="w2c.jpg" alt="WRC Generations" />
  <div class="producto-details">
    <h3>WRC Generations</h3>
    <p>El juego oficial del World Rally Championship con física realista, todos los equipos y nuevos desafíos híbridos.</p>
    <div class="producto-price">
      <span>COL$ 190.000 / USD $49.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- The Crew Motorfest -->
<div class="producto-info">
  <img src="the crew.jpg" alt="The Crew Motorfest" />
  <div class="producto-details">
    <h3>The Crew Motorfest</h3>
    <p>Un festival de velocidad en Hawái. Conduce autos, motos y más en un mundo abierto lleno de acción.</p>
    <div class="producto-price">
      <span>COL$ 245.000 / USD $59.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- iRacing -->
<div class="producto-info">
  <img src="racing.jpg" alt="iRacing" />
  <div class="producto-details">
    <h3>iRacing</h3>
    <p>El simulador competitivo online más preciso del automovilismo. Ideal para entusiastas y profesionales.</p>
    <div class="producto-price">
      <span>COL$ 0 / USD $0.00 (Suscripción requerida)</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Project CARS 3 -->
<div class="producto-info">
  <img src="project cars.jpg" alt="Project CARS 3" />
  <div class="producto-details">
    <h3>Project CARS 3</h3>
    <p>Una experiencia accesible con carreras emocionantes, autos personalizables y progresión estilo arcade.</p>
    <div class="producto-price">
      <span>COL$ 155.000 / USD $39.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

<!-- Dirt Rally 2.0 -->
<div class="producto-info">
  <img src="dirt rally 2.0.jpg" alt="Dirt Rally 2.0" />
  <div class="producto-details">
    <h3>Dirt Rally 2.0</h3>
    <p>Domina terrenos extremos con autos de rally en una simulación intensa que pone a prueba tus reflejos.</p>
    <div class="producto-price">
      <span>COL$ 125.000 / USD $29.99</span>
      <button class="btn-secondary">Agregar al Carrito</button>
    </div>
  </div>
</div>

  </section>

  <!-- Panel carrito -->
  <div id="cart-panel">
    <h3>Carrito de Compras</h3>
    <ul id="cart-items"></ul>
    <p id="cart-total"></p>
    <button id="buy-btn">Comprar</button>
    <button id="close-cart-btn">Cerrar</button>
  </div>

  <script>
    let cartCount = 0;
    let totalCOP = 0;
    const cartBtn = document.getElementById('cart-info');
    const cartPanel = document.getElementById('cart-panel');
    const closeCartBtn = document.getElementById('close-cart-btn');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotalText = document.getElementById('cart-total');
    const cartCountElem = document.getElementById('cart-count');
    const addToCartButtons = document.querySelectorAll('.btn-secondary');
    const buyBtn = document.getElementById('buy-btn');

    // Guardamos los productos en un array
    const cartProducts = [];

    function updateCartDisplay() {
      cartCount = cartProducts.length;
      cartCountElem.textContent = cartCount;

      // Limpiamos lista
      cartItemsList.innerHTML = '';

      totalCOP = 0;

      cartProducts.forEach((product, index) => {
        totalCOP += product.priceCOP;
        const li = document.createElement('li');

        li.textContent = `${product.name} - COL$ ${product.priceCOP.toLocaleString('es-CO')}`;

        // Botón eliminar
        const removeBtn = document.createElement('button');
        removeBtn.textContent = '×';
        removeBtn.className = 'remove-btn';
        removeBtn.title = 'Eliminar producto';
        removeBtn.addEventListener('click', () => {
          cartProducts.splice(index, 1);
          updateCartDisplay();
        });

        li.appendChild(removeBtn);
        cartItemsList.appendChild(li);
      });

      cartTotalText.textContent = `Total: COL$ ${totalCOP.toLocaleString('es-CO')}`;
    }

    addToCartButtons.forEach(button => {
      button.addEventListener('click', () => {
        const priceText = button.parentElement.querySelector('span').textContent;
        const copMatch = priceText.match(/COL\$ ([0-9.,]+)/);
        let priceCOP = 0;
        if (copMatch) {
          priceCOP = parseFloat(copMatch[1].replace(/\./g, '').replace(',', '.'));
        }
        const productName = button.closest('.producto-info').querySelector('h3').textContent;

        cartProducts.push({ name: productName, priceCOP });
        updateCartDisplay();
      });
    });

    cartBtn.addEventListener('click', () => {
      cartPanel.style.display = cartPanel.style.display === 'block' ? 'none' : 'block';
    });

    closeCartBtn.addEventListener('click', () => {
      cartPanel.style.display = 'none';
    });

    buyBtn.addEventListener('click', () => {
      if(cartProducts.length === 0){
        alert('Tu carrito está vacío.');
        return;
      }
      // Redirigir a la página de compra
      window.location.href = 'pagina de compra.html';
    });
  </script>
  <script>
  const showRegisterBtn = document.getElementById('show-register');
  const showLoginBtn = document.getElementById('show-login');
  const registerForm = document.getElementById('register-form');
  const loginForm = document.getElementById('login-form');

  showRegisterBtn.addEventListener('click', () => {
    registerForm.style.display = 'block';
    loginForm.style.display = 'none';
    showRegisterBtn.style.backgroundColor = '#f0a500';
    showLoginBtn.style.backgroundColor = '#444';
    showLoginBtn.style.color = '#bbb';
    showRegisterBtn.style.color = 'black';
  });

  showLoginBtn.addEventListener('click', () => {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
    showLoginBtn.style.backgroundColor = '#f0a500';
    showRegisterBtn.style.backgroundColor = '#444';
    showRegisterBtn.style.color = '#bbb';
    showLoginBtn.style.color = 'black';
  });

  // Opcional: Validación simple y prevent default (aquí solo para que no recargue la página)
  registerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('¡Registro enviado! (Aquí procesarías los datos)');
  });

  loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('¡Inicio de sesión enviado! (Aquí validarías el usuario)');
  });
</script>
<!-- Botones para abrir modales -->
<div style="text-align:center; margin: 20px 0;">
  <button id="open-register" style="background:#f0a500; color:black; padding:10px 20px; border:none; border-radius:5px; cursor:pointer; font-weight:bold; margin-right:10px;">Registrarse</button>
  <button id="open-login" style="background:#f0a500; color:black; padding:10px 20px; border:none; border-radius:5px; cursor:pointer; font-weight:bold;">Iniciar Sesión</button>
</div>

<!-- Modal Registro -->
<div id="modal-register" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close" data-target="modal-register">&times;</span>
    <h2 style="color:#f0a500; text-align:center;">Registrarse</h2>
    <form id="register-form" action="procesar_registro.php" method="POST">
      <label>Nombre*</label><br />
      <input type="text" name="nombre" required /><br />
      
      <label>Apellido*</label><br />
      <input type="text" name="apellido" required /><br />
      
      <label>Edad*</label><br />
      <input type="number" name="edad" min="1" max="120" required /><br />
      
      <label>Correo Electrónico*</label><br />
      <input type="email" name="correo" required /><br />
      
      <label>Teléfono*</label><br />
      <input type="tel" name="telefono" required pattern="[0-9]{7,15}" placeholder="Solo números" /><br />
      
      <label>Contraseña*</label><br />
      <input type="password" name="password" required /><br />
      
      <label>Usuario (opcional)</label><br />
      <input type="text" name="usuario" /><br />
      
      <button type="submit">Registrar</button>
    </form>
  </div>
</div>
<?php
if(isset($_POST[Registrar])){
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono']; 
$password=$_POST['password'];
$usuario=$_POST['usuario'];
	
$query=mysqli_query ($conect,"INSERT INTO usuarios VALUES('','$nombre','$apellido','$edad','$correo','$telefono','$password','$usuario')");

$ejecutarinsertar
}
?>
<!-- Modal Login -->
<div id="modal-login" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close" data-target="modal-login">&times;</span>
    <h2 style="color:#f0a500; text-align:center;">Iniciar Sesión</h2>
    <form id="login-form" action="procesar_login.php" method="POST">
      <label>Correo Electrónico</label><br />
      <input type="email" name="correo" required /><br />
      
      <label>Contraseña</label><br />
      <input type="password" name="password" required /><br />
      
      <button type="submit">Iniciar Sesión</button>
    </form>
  </div>
</div>

<style>
  /* Modal fondo */
  .modal {
    position: fixed;
    z-index: 1200;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(18, 18, 18, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Contenido del modal */
  .modal-content {
    background-color: #222;
    padding: 20px;
    border-radius: 8px;
    width: 320px;
    box-shadow: 0 0 15px #f0a500;
  }

  /* Inputs estilos */
  .modal-content input {
    width: 100%;
    padding: 8px;
    margin: 6px 0 12px 0;
    border: none;
    border-radius: 5px;
    font-size: 1em;
  }

  /* Botones dentro del modal */
  .modal-content button {
    width: 100%;
    padding: 10px;
    background: #f0a500;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    color: black;
    font-size: 1.1em;
    transition: background-color 0.3s ease;
  }
  .modal-content button:hover {
    background-color: #cf8c00;
  }

  /* Botón cerrar */
  .close {
    color: #f0a500;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }
</style>

<script>
  // Abrir modales
  document.getElementById('open-register').onclick = () => {
    document.getElementById('modal-register').style.display = 'flex';
  };
  document.getElementById('open-login').onclick = () => {
    document.getElementById('modal-login').style.display = 'flex';
  };

  // Cerrar modales
  document.querySelectorAll('.close').forEach(closeBtn => {
    closeBtn.onclick = () => {
      const target = closeBtn.getAttribute('data-target');
      document.getElementById(target).style.display = 'none';
    };
  });

  // Cerrar modal si clic fuera del contenido
  window.onclick = function(event) {
    ['modal-register', 'modal-login'].forEach(id => {
      const modal = document.getElementById(id);
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  };


  document.getElementById('login-form').onsubmit = (e) => {
    e.preventDefault();
    alert('¡Inicio de sesión enviado!');
    document.getElementById('modal-login').style.display = 'none';
  };
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
</script>

</body>
</html>
