<form>
          <!-- Campo Nome -->
          <div class="mb-3">
            <label for="nomeInput" class="form-label">Nome</label>
            <input type="text" class="form-control form-input" id="nomeInput" placeholder="Digite seu nome completo" required>
          </div>

          <!-- Campo E-mail -->
          <div class="mb-3">
            <label for="emailInput" class="form-label">E-mail</label>
            <input type="email" class="form-control form-input" id="emailInput" placeholder="Digite seu e-mail" required>
          </div>

          <!-- Campo WhatsApp -->
          <div class="mb-3">
            <label for="whatsappInput" class="form-label">WhatsApp</label>
            <input type="tel" class="form-control form-input" id="whatsappInput" placeholder="Digite seu número com DDD" required>
          </div>

          <!-- Campo de Atuação -->
          <div class="mb-3">
            <label for="atuacaoSelect" class="form-label">Campo de Atuação</label>
            <select class="form-select form-input" id="atuacaoSelect" required>
              <option value="" disabled selected>Selecione sua área</option>
              <option value="cabeleireiro">Cabeleireiro</option>
              <option value="distribuidor">Distribuidor</option>
              <option value="dono-cosmeticos">Dono de Cosméticos</option>
            </select>
          </div>
        </form>
      </div>

      <!-- Rodapé do modal -->
      <div class="modal-footer justify-content-center">
        <button type="submit" class="btn-custom">Cadastrar</button>
      </div>