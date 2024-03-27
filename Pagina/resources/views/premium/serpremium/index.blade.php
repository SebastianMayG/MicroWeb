@extends ('layouts.admin')
@section ('contenido')
<style>
.cardbody {
    font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  background-color: #f8f8f8;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  max-width: 400px;
}

h2 {
  color: #333;
}

p {
  color: #666;
  margin-bottom: 20px;
}

ul {
  text-align: left;
  margin-left: 20px;
}

li {
  color: #444;
}

button {
  background-color:  #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}
</style>

<h1>Ser premium</h1>
<div class="cardbody">
    
    <div class="card">
        <h2>¡Únete a nuestro servicio Premium!</h2>
        <p>Desbloquea funciones exclusivas y beneficios especiales:</p>
        <ul>
            <li>Acceso ilimitado al contenido premium</li>
            <li>Descargas rápidas y sin límites</li>
            <li>Soporte prioritario al cliente</li>
            <li>Ofertas y descuentos exclusivos</li>
        </ul>
        <button>¡Me uno ahora!</button>
    </div>
</div>

@endsection