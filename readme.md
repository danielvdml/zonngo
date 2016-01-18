<H1>ZONNGO</H1>
Calculadora inteligente de Precios en tiempo real

<h3>Installación</h3>

<ul>
  <li>
    <b>Requisitos</b>
    <ul>
      <li>Xammp</li>
      <li>composer</li>
    </ul>
  </li>
  <li>
    <b>Paso 1</b>
    <p>Crear un repositorio Local</p>
  </li>
  <li>
    <b>Paso 2</b>
    <p>Instalar las dependencias con composer</p>
    <b><s>"sudo composer update"</s></b>
  </li>
  <li>
    <b>Paso 3</b>
    <p>Configurar el archivo .env (Nombre de base de datos, user, pass)</p>
  </li>
  <li>
    <b>Paso 4</b>
    <p>Generar APP_KEY con el siguiente comando</p>
    <b><s>php artisan key:generate/</s></b>
    <p>Copiarlo en .env</p>
  </li>
  <li>
    <b>Paso 5</b>
    <p>Dar permisos de escritura y lectura a toda la carpeta</p>
    <b><s>chmod -R 777 zonngo/</s></b>
  </li>
  
</ul>
