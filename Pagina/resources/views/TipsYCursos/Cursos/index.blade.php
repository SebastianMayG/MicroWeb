@extends ('layouts.admin')
@section ('contenido')
<style>

  #cursos 
  {
    display: flex;
  }

  .card{
    background-color: #fff;
    max-width: 300px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  .asesor {
      max-width: 100%;
      border-radius: 50%;
    }
      a {
        style: none;
      }
      .Reservar {
          margin-top: 10px;
          padding: 10px 20px;
          font-size: 16px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 5px;
          transition: background-color 0.3s;
      }
      .Reservar:hover {
          background-color: #0056b3;
          cursor: pointer;
      }
</style>
  <div id="cursos">
        <div class="card">
          <img class="cursos" src="https://mipymes.economia.gob.mx/wp-content/uploads/2022/05/HEADER_BannerMIPYMES-MX.png" alt="Imagen del curso" width="200">
          <h2>Capacitación digital</h2>
          <p>Costo: Gratis</p>
          <p>Ofrecido por Gobierno de México</p>
          <br></br>
          <a href="https://mipymes.economia.gob.mx/" class="Reservar" target="_blank">Ir</a>
        </div>
        <div class="card">
          <img class="asesor" src="https://mx.web.img2.acsta.net/pictures/21/06/22/00/08/0630388.jpg" alt="Imagen del profesional" width="200">
          <h2>Arturo Elías Ayub</h2>
          <p>Director de alianzas estratégicas y Contenidos de America Móvil Director de Fundacion Telmex</p>
          <p>Costo: $</p>
          <a href="#" class="Reservar">Comprar Curso</a>
        </div>
        <div class="card">
          <img class="cursos" src="https://assets-global.website-files.com/62c407b65c4f6ef40a66d8b4/6322beef299e7f3bc41c88a5_contabilidad-basica-destacada.jpg" alt="Imagen del curso" width="200">
          <h2>Contabilidad básica</h2>
          <p>Costo: Gratis</p>
          <p>duración 12 horas aprox</p>
          <p>Via youtube</p>
          <br></br>                
          <a href="https://www.youtube.com/watch?v=iSNMvzR8-8U&list=PLzsP80HPQJ61cvyNvChaeaQOuEooCstlc" class="Reservar" target="_blank">Ir</a>
        </div>
      </div>
      <div class="card">
          <h2>Coppel Emprende</h2>
          <br></br>
          <a href="https://www.enko.org/mx/encoppel/inicio" class="Reservar" target="_blank">Ir</a>
      </div>
  </div> 
@endsection