<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor seccion">

        <h1>Contacto</h1>

        <picture>
            <source srcset="/bienesraices/build/img/destacada3.webp" type="image/webp">
            <source srcset="/bienesraices/build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="/bienesraicesbuild/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <!--Información Formulario-->

        <h2>Complete el Formulario de Contacto</h2>

        <form  class="formulario">

            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="correo">E-mail</label>
                <input type="email" placeholder="Tu Email" id="correo">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Mensaje: </label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <div class="forma-contacto-propiedad">
                    
                    <label for="opciones">Vende o Compra:</label>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>-- Selecione --</option>
                        <option value="Compra">Compra</option>
                        <option value="Vende">Vende</option>
                    </select>
    
                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" min="0">
                </div>
                

            </fieldset>

            <fieldset>

                <legend>Información de la Propiedad</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contactar-telefono" >

                    <label for="contactar-correo">Email</label>
                    <input type="radio" name="contactar-correo" >

                </div>

                <p>Si eligió telefóno, elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>


    </main>

    <?php

    include './includes/templates/footer.php';
?>