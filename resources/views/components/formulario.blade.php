<form class="fca-form-modern">
    <div class="fca-form-row">
        <div class="fca-input-group">
            <label>Nombre completo</label>
            <input type="text" placeholder="Ej. Juan Pérez">
        </div>

        <div class="fca-input-group">
            <label>Correo electrónico</label>
            <input type="email" placeholder="tu@correo.com">
        </div>
    </div>

    <div class="fca-input-group full-width">
        <label>Mensaje</label>
        <textarea rows="5" placeholder="Escribe tu duda o mensaje detalladamente aquí..."></textarea>
    </div>

    <div class="fca-button-container">
        <button type="button" class="fca-btn-submit">
            Enviar Mensaje <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i>
        </button>
    </div>
</form>

<style>

    .fca-form-modern {
        display: flex;
        flex-direction: column;
        gap: 30px;
        width: 100%;
        background: #ffffff;
        padding: 40px;
        border-radius: 15px;
    }

   
    .fca-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    .fca-input-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
        text-align: left;
    }

    .fca-input-group label {
        font-weight: 700;
        font-size: 14px;
        color: #1b365d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Estilo de los Campos */
    .fca-input-group input, 
    .fca-input-group textarea {
        padding: 15px 20px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }

    .fca-input-group input:focus, 
    .fca-input-group textarea:focus {
        outline: none;
        border-color: #1b365d;
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(27, 54, 93, 0.05);
    }

   
    .fca-button-container {
        display: flex;
        justify-content: flex-end; 
    }

    .fca-btn-submit {
        background-color: #1b365d;
        color: white;
        font-weight: 700;
        padding: 16px 45px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 16px;
        box-shadow: 0 4px 12px rgba(27, 54, 93, 0.15);
    }

    .fca-btn-submit:hover {
        background-color: #cda043;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(205, 160, 67, 0.25);
    }

  
    @media (max-width: 768px) {
        .fca-form-row {
            grid-template-columns: 1fr;
        }
        .fca-btn-submit {
            width: 100%;
        }
    }
</style>