<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación Premium</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 30px;
            color: #333333;
        }
        .content h2 {
            color: #667eea;
            margin-top: 0;
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            margin: 20px 0;
        }
        .info-row {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .info-value {
            color: #333;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666666;
            font-size: 14px;
        }
        .benefits {
            background-color: #e8f5e9;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
        }
        .benefits ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        .benefits li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Bienvenido a Premium! 🎉</h1>
        </div>
        
        <div class="content">
            <h2>Hola {{ $username }},</h2>
            <p>Gracias por suscribirte a nuestro plan Premium. Tu cuenta ha sido actualizada exitosamente.</p>
            
            <div class="info-box">
                <h3 style="margin-top: 0; color: #667eea;">Detalles de tu compra</h3>
                <div class="info-row">
                    <span class="info-label">Usuario:</span>
                    <span class="info-value">{{ $username }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Fecha de compra:</span>
                    <span class="info-value">{{ $purchaseDate }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Costo:</span>
                    <span class="info-value">${{ $cost }}</span>
                </div>
            </div>
            
            <div class="benefits">
                <h3 style="margin-top: 0; color: #2e7d32;">✨ Beneficios Premium incluidos:</h3>
                <ul>
                    <li>Multiplicador premium en ganancias de apuestas</li>
                    <li>Acceso a estadísticas detalladas</li>
                    <li>Contenido exclusivo y análisis avanzados</li>
                    <li>Sin publicidad</li>
                    <li>Soporte prioritario</li>
                </ul>
            </div>
            
            <p>Ahora puedes disfrutar de todas las ventajas de ser miembro Premium. ¡Que disfrutes de tu experiencia mejorada!</p>
        </div>
        
        <div class="footer">
            <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos.</p>
            <p style="margin-top: 15px; font-size: 12px; color: #999;">
                Este es un correo automático, por favor no respondas a este mensaje.
            </p>
        </div>
    </div>
</body>
</html>
