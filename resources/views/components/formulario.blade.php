<form style="display: flex; flex-direction: column; gap: 15px; max-width: 500px; background: white; padding: 25px; border-radius: 8px; border: 1px solid #eee;">
    
    <div style="display: flex; flex-direction: column; gap: 5px;">
        <label style="font-weight: 600; font-size: 14px; color: #1b365d;">Nombre completo</label>
        <input type="text" placeholder="Ej. Juan Pérez" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-family: 'Inter', sans-serif;">
    </div>

    <div style="display: flex; flex-direction: column; gap: 5px;">
        <label style="font-weight: 600; font-size: 14px; color: #1b365d;">Correo electrónico</label>
        <input type="email" placeholder="tu@correo.com" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-family: 'Inter', sans-serif;">
    </div>

    <div style="display: flex; flex-direction: column; gap: 5px;">
        <label style="font-weight: 600; font-size: 14px; color: #1b365d;">Mensaje</label>
        <textarea rows="4" placeholder="Escribe tu duda aquí..." style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-family: 'Inter', sans-serif; resize: vertical;"></textarea>
    </div>

    <button type="button" style="background-color: #1b365d; color: white; font-weight: bold; padding: 12px; border: none; border-radius: 6px; cursor: pointer; transition: 0.3s; margin-top: 10px;">
        Enviar Mensaje
    </button>
    
</form>