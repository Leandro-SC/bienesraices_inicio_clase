<?php 
require 'includes/funciones.php';

incluirTemplate('header');

?>

  <section class="contacto-contact-section">
    <!-- Dark overlay to dim the background image -->
    <div class="contacto-bg-overlay"></div>
    
    <!-- Main container -->
    <div class="contacto-contact-container">

      <!-- Left column: Contact info -->
      <div class="contacto-contact-left">
        <div class="contacto-badge">PÓNGASE EN CONTACTO CON NOSOTROS</div>
        <h1 class="contacto-main-title">¿LISTO PARA EMPEZAR SU PROYECTO?</h1>
        <h2 class="contacto-subtitle">Su mejor opción certificada</h2>
        <p class="contacto-description">
          Estamos aquí para responder a sus preguntas y hacer realidad su proyecto,
          un servicio amable y fiable.<br><br>
          Póngase en contacto con nosotros hoy mismo para una consulta o presupuesto acerca de su próxima vivienda
        </p>
      </div>

      <!-- Right column: Contact form -->
      <div class="contacto-contact-right">
        <form id="contactForm" class="contacto-form">
          <!-- Row 1: First & Last Name -->
          <div class="form-row">
            <div class="input-group">
              <label for="firstName">Nombre</label>
              <input type="text" id="firstName" name="firstName" placeholder="Nombres *" required>
            </div>
            <div class="input-group">
              <label for="lastName">Apellido</label>
              <input type="text" id="lastName" name="lastName" placeholder="Apellidos *" required>
            </div>
          </div>
  
          <!-- Row 3: Mobile & Email -->
          <div class="form-row">
            <div class="input-group">
              <label for="phone">Teléfono móvil</label>
              <input type="tel" id="phone" name="phone" placeholder="912 345 678" required>
            </div>
            <div class="input-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="youremail@example.com *" required>
            </div>
          </div>
          <!-- Row 4: Service Inquiry -->
          <div class="form-row">
            <div class="input-group full-width">
              <label for="service">Consulta de servicio</label>
              <select id="service" name="service" required>
                <option value="">- Seleccione una opción -</option>
                <option value="Alquiler Departamento">Alquiler Departamento</option>
                <option value="Alquiler Casa">Alquiler Casa</option>
                <option value="Compra Casa">Compra Casa</option>
                <option value="Compra Departamento">Compra Departamento</option>
              </select>
            </div>
          </div>
          <!-- Row 5: Optional Message -->
          <div class="form-row">
            <div class="input-group full-width">
              <label for="message">Mensaje (opcional)</label>
              <textarea id="message" name="message" rows="4" placeholder="Escriba su solicitud por aquí..."></textarea>
            </div>
          </div>
          <!-- Row 6: Terms & Conditions -->
          <div class="form-row">
            <div class="checkbox-group">
              <input type="checkbox" id="terms" name="terms" required>
              <label for="terms">
                He leído y acepto el
                <a href="#" target="_blank" rel="noopener noreferrer">Condiciones generales</a> y
                <a href="#" target="_blank" rel="noopener noreferrer">Política de privacidad</a>.
              </label>
            </div>
          </div>
          <!-- Row 7: Submit Button -->
          <div class="form-row">
            <button type="submit" class="submit-btn">Enviar solicitud</button>
          </div>
          <!-- Response message (hidden by default) -->
          <div id="formMessage" class="form-message"></div>
        </form>
      </div>

    </div>
</section>


<?php incluirTemplate('footer'); ?>