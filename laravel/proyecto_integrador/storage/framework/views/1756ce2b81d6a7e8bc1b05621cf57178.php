<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Dolce Banana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #0F172B;
            color: #FEA116;
            text-align: center;
            padding: 20px;
        }
        .email-header h1 {
            background-color: #0F172B;
            margin: 0;
            font-size: 24px;
        }
        .email-content {
            padding: 20px;
            color: #000000;
        }
        .email-content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 15px;
        }
        .email-logo {
            text-align: center;
            margin: 20px 0;
        }
        .email-logo img {
            width: 400px;
            border: none;
        }
        .email-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #666666;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <h1>¡Bienvenido a Dolce Banana!</h1>
    </div>
    <div class="email-content">
        <p>Hola <?php echo e($datos['nombre']); ?>,</p>
        <p>¡Nos alegra que formes parte de nuestra comunidad en Dolce Banana!</p>
        <p>Visita nuestra tienda para descubrir ofertas exclusivas y productos que te encantarán.</p>
        <div class="email-logo">
            <img src="https://i.ibb.co/SN99zzq/Captura.png" alt="Logo Dolce Banana">
        </div>
        <p>Saludos cordiales,<br>El equipo de Dolce Banana</p>
    </div>
    <div class="email-footer">
        <p>&copy; 2024 Dolce Banana. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/emails/bienvenida.blade.php ENDPATH**/ ?>