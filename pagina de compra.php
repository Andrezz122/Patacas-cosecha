<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Finalizar Compra</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    /* Reset básico */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #14141f);
      color: #f0f0f5;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .container {
      background-color: #2a2a3d;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.6);
      max-width: 420px;
      width: 100%;
      padding: 30px 35px;
      transition: background-color 0.3s ease;
    }

    .container:hover {
      background-color: #3a3a57;
    }

    h1 {
      text-align: center;
      font-weight: 600;
      font-size: 2.4rem;
      margin-bottom: 25px;
      color: #f0a500;
      text-shadow: 0 0 8px #f0a500a0;
    }

    form label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
      color: #ddd;
      font-size: 0.95rem;
      letter-spacing: 0.03em;
    }

    form input {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 18px;
      border-radius: 8px;
      border: 1.5px solid #555;
      background-color: #1e1e2f;
      color: #eee;
      font-size: 1rem;
      transition: border-color 0.25s ease, box-shadow 0.25s ease;
      outline: none;
      font-weight: 400;
      letter-spacing: 0.02em;
    }

    form input::placeholder {
      color: #888;
      font-style: italic;
    }

    form input:focus {
      border-color: #f0a500;
      box-shadow: 0 0 8px #f0a500a0;
      background-color: #27273d;
    }

    button {
      width: 100%;
      padding: 14px 0;
      background: linear-gradient(45deg, #f0a500, #cf8500);
      border: none;
      border-radius: 10px;
      color: #000;
      font-weight: 700;
      font-size: 1.15rem;
      cursor: pointer;
      box-shadow: 0 6px 12px rgba(240,165,0,0.7);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    button:hover {
      background: linear-gradient(45deg, #cf8500, #a96c00);
      box-shadow: 0 8px 18px rgba(171,119,0,0.9);
    }

    /* Responsive */
    @media (max-width: 480px) {
      .container {
        padding: 25px 20px;
      }

      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Finalizar Compra</h1>
    <form id="payment-form" novalidate>
      <label for="card-name">Nombre en la tarjeta</label>
      <input type="text" id="card-name" name="card-name" required placeholder="Juan Pérez" />

      <label for="card-number">Número de tarjeta</label>
      <input type="text" id="card-number" name="card-number" pattern="\d{16}" placeholder="1234 5678 9012 3456" required />

      <label for="expiry-date">Fecha de expiración (MM/AA)</label>
      <input type="text" id="expiry-date" name="expiry-date" pattern="(0[1-9]|1[0-2])\/?([0-9]{2})" placeholder="MM/AA" required />

      <label for="cvv">CVV</label>
      <input type="text" id="cvv" name="cvv" pattern="\d{3}" placeholder="123" required />

      <button type="submit">Pagar</button>
    </form>
  </div>

  <script>
    document.getElementById('payment-form').addEventListener('submit', function(e) {
      e.preventDefault();

      if (!this.checkValidity()) {
        alert('Por favor, complete todos los campos correctamente.');
        return;
      }

      alert('Pago realizado con éxito. ¡Gracias por su compra!');
      // Aquí podrías redirigir o limpiar carrito, etc.
    });
  </script>
</body>
</html>
