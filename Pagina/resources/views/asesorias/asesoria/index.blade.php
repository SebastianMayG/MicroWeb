@extends ('layouts.admin')
@section ('contenido')
<style>

        #asesores {
          display: flex;
        }

        .card {
            background-color: #fff; /* Color de fondo de la tarjeta */
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-align: center;
        }
        .asesor {
            max-width: 100%;
            border-radius: 50%;
        }
        a {
          style: none;
        }
        .compra_asesoria {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .compra_asesoria:hover {
            background-color: #0056b3;
            cursor: pointer;
        }
</style>
  <div id="asesores">
    <div class="card">
      <img class="asesor" src="https://mx.web.img2.acsta.net/pictures/21/06/22/00/08/0630388.jpg" alt="Imagen del profesional" width="200">
      <h2>Arturo Elías Ayub</h2>
      <p>Director de alianzas estratégicas</p>
      <p>Contenidos de America Móvil Director de Fundacion Telmex</p>
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://th.bing.com/th/id/OIP.CG_2Eiz_oF7eRJ9cIRMyygAAAA?rs=1&pid=ImgDetMain" alt="Imagen del profesional" width="200">
      <h2>BaiJavier</h2>
      <p>Asesor en finanzas</p>                                
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://th.bing.com/th/id/OIP.Eo_yhWC-BucjHwsMqA3B0gAAAA?rs=1&pid=ImgDetMain" alt="Imagen del profesional" width="200">
      <h2>"El temach"</h2>
      <p>Asesor en crecimiento personal</p>
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
</div>
<div id="asesores">
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-4.fna.fbcdn.net/v/t1.6435-9/78362406_1413060782202739_6503602873044041728_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGiCtevpGR3i6oZy8JnlrR0XYA8AVbRWGldgDwBVtFYaQEtltTjMdigkwtGUULUBjcPah6SoRG1tCaP5hd4yYwa&_nc_ohc=TlTDpK_pLi0AX8H_BcI&_nc_ht=scontent.fmid1-4.fna&oh=00_AfBzOp8qZCbE66yEkFap10nhZDGy_Fuw_V5gHkQmi8B5hg&oe=662ADF5D" alt="Imagen del profesional" width="200">
      <h2>Sebastian Aldair May Góngora</h2>
      <p>Asesor en dar lata</p>
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-3.fna.fbcdn.net/v/t39.30808-6/414813169_2318261301699051_6105760577809374900_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHNYHIqsAS1_ywh1goo3nAOBlEdcVijmsIGUR1xWKOawnCTNBp8wRGRCnyL1dZvzRhVFYP1T0oaf5YGdy4bVXXF&_nc_ohc=q8L3tkeFHsUAX_fy-t1&_nc_ht=scontent.fmid1-3.fna&oh=00_AfDped_xVpCSWJWq1XANOwujoQt35SXd7pV4eqvvMCs6FQ&oe=66081FC3" alt="Imagen del profesional" width="200">
      <h2>Oscar Esteban Ortiz Jimenez</h2>
      <p>Asesor en fotografia</p>
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-4.fna.fbcdn.net/v/t39.30808-6/238829638_4297416387014723_2406900381801649096_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHK0JGDNYDibBTnKlFXsLXTGOV0tBiuMBkY5XS0GK4wGVvJ-KExlvOymJ77k_fGfLHqMXucn8Q-ELqTHLK_r7Xw&_nc_ohc=chK-8RXzzZMAX_ym8cD&_nc_ht=scontent.fmid1-4.fna&oh=00_AfCpWgCKFs_iop7L7kC9w0TEhyOLd9ho2d1kJjDytIy0eA&oe=6608960B" alt="Imagen del profesional" width="200">
      <h2>Luis Alberto Gil Ortega</h2>
      <p>Asesor en programacion avanzada y desarrollo personal</p>
      <a href="https://www.ejemplo.com/comprar-asesoria" class="compra_asesoria" target="_blank">Comprar Asesoría</a>
    </div>
    </div>
      </div>
  </div> 

@endsection