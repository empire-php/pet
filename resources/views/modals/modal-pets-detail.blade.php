<div id="pet-detail" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="dog-content modal-content clearfix">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <div class="modal-body">
      <div class="pet-detail-left">
        <div class="pet-detail-image">
          <img src="{{ asset('images/report_detail_image.png') }}" />
        </div>
        <div class="pet-detail-data">
          <p><label></label><span class="pet-detail-location"></span></p>
        </div>
        <div id="pet-detail-map"></div>        
        <div id='pet-detail-map-overlay'></div>
      </div>
      <div class="pet-detail-right">
        <div class="pet-detail-info-group">
          <h3 id="is-owner"></h3>
          <p><label>Nombre</label><span class="owner-detail-name"></span></p>
          <p><label>Contacto</label><span class="owner-detail-phone"></span></p>
          <p><label>Email</label><span class="owner-detail-email"></span></p>
          <p><label>Recompensa</label><span class="owner-detail-reward"></span></p>
        </div>
        <div class="pet-detail-info-group">
          <h3>Mascota</h3>
          <p><label>Nombre</label><span class="pet-detail-name"></span></p>
          <p><label>Raza</label><span class="pet-detail-race"></span></p>
          <p><label>Género</label><span class="pet-detail-gender"></span></p>
          <p><label>Descripción</label><span class="description pet-detail-description"></span></p>
          <!--<p class="description pet-detail-description"></p>-->
        </div>
        <div class="pet-detail-info-group">
          <h3>Reporte</h3>
          <p><label>Fecha</label><span class="report-detail-date"></span></p>
          <p><label>Hora</label><span class="report-detail-hour"></span></p>
          <p><label>dirección</label><span class="report-detail-address"></span></p>
          <p><label>Descripción</label><span class="description report-detail-description"></span></p>
          
        </div>
      </div>
    </div>
  </div>
</div>
