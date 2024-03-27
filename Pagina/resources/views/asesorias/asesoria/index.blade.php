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

      /* Estilos CSS para el modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        border-radius: 10px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Estilos para el botón de comprar dentro del modal */
    .btn-comprar {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-comprar:hover {
        background-color: #0056b3;
    }

    /* Estilos para la imagen del asesor dentro del modal */
    .imagen-asesor {
        max-width: 100%;
        border-radius: 10px;
        margin-top: 20px;
    }

</style>
<div id="asesores">
    <div class="card">
      <img class="asesor" src="https://mx.web.img2.acsta.net/pictures/21/06/22/00/08/0630388.jpg" alt="Imagen del profesional" width="200">
      <h2>Arturo Elías Ayub</h2>
      <p>Director de alianzas estratégicas</p>
      <p>Contenidos de America Móvil Director de Fundacion Telmex</p>
      <a href="#" class="compra_asesoria" onclick="mostrarModal('Arturo Elías Ayub', 'Costo de la asesoría: 500 MXN')">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://th.bing.com/th/id/OIP.CG_2Eiz_oF7eRJ9cIRMyygAAAA?rs=1&pid=ImgDetMain" alt="Imagen del profesional" width="200">
      <h2>BaiJavier</h2>
      <p>Asesor en finanzas</p>                                
      <a href="#" class="compra_asesoria" onclick="mostrarModal('BaiJavier', 'Costo de la asesoría: 800 MXN')">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://th.bing.com/th/id/OIP.Eo_yhWC-BucjHwsMqA3B0gAAAA?rs=1&pid=ImgDetMain" alt="Imagen del profesional" width="200">
      <h2>"El temach"</h2>
      <p>Asesor en crecimiento personal</p>
      <a href="#" class="compra_asesoria" onclick="mostrarModal('Arturo Elías Ayub', 'Costo de la asesoría')">Comprar Asesoría</a>
    </div>
</div>
<div id="asesores">
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-4.fna.fbcdn.net/v/t1.6435-9/78362406_1413060782202739_6503602873044041728_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGiCtevpGR3i6oZy8JnlrR0XYA8AVbRWGldgDwBVtFYaQEtltTjMdigkwtGUULUBjcPah6SoRG1tCaP5hd4yYwa&_nc_ohc=TlTDpK_pLi0AX8H_BcI&_nc_ht=scontent.fmid1-4.fna&oh=00_AfBzOp8qZCbE66yEkFap10nhZDGy_Fuw_V5gHkQmi8B5hg&oe=662ADF5D" alt="Imagen del profesional" width="200">
      <h2>Sebastian Aldair May Góngora</h2>
      <p>Asesor en dar lata</p>
      <a href="#" class="compra_asesoria" onclick="mostrarModal('Arturo Elías Ayub', 'Costo de la asesoría')">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-3.fna.fbcdn.net/v/t39.30808-6/414813169_2318261301699051_6105760577809374900_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHNYHIqsAS1_ywh1goo3nAOBlEdcVijmsIGUR1xWKOawnCTNBp8wRGRCnyL1dZvzRhVFYP1T0oaf5YGdy4bVXXF&_nc_ohc=q8L3tkeFHsUAX_fy-t1&_nc_ht=scontent.fmid1-3.fna&oh=00_AfDped_xVpCSWJWq1XANOwujoQt35SXd7pV4eqvvMCs6FQ&oe=66081FC3" alt="Imagen del profesional" width="200">
      <h2>Oscar Esteban Ortiz Jimenez</h2>
      <p>Asesor en fotografia</p>
      <a href="#" class="compra_asesoria" onclick="mostrarModal('Arturo Elías Ayub', 'Costo de la asesoría')">Comprar Asesoría</a>
    </div>
    <div class="card">
      <img class="asesor" src="https://scontent.fmid1-4.fna.fbcdn.net/v/t39.30808-6/238829638_4297416387014723_2406900381801649096_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHK0JGDNYDibBTnKlFXsLXTGOV0tBiuMBkY5XS0GK4wGVvJ-KExlvOymJ77k_fGfLHqMXucn8Q-ELqTHLK_r7Xw&_nc_ohc=chK-8RXzzZMAX_ym8cD&_nc_ht=scontent.fmid1-4.fna&oh=00_AfCpWgCKFs_iop7L7kC9w0TEhyOLd9ho2d1kJjDytIy0eA&oe=6608960B" alt="Imagen del profesional" width="200">
      <h2>Luis Alberto Gil Ortega</h2>
      <p>Asesor en programacion avanzada y desarrollo personal</p>
      <a href="#" class="compra_asesoria" onclick="mostrarModal('Arturo Elías Ayub', 'Costo de la asesoría')">Comprar Asesoría</a>
    </div>
    </div>
      </div>
  </div> 

<!-- Modal -->
<div id="myModal" class="modal">
  <!-- Contenido del modal -->
  <div class="modal-content">
    <span class="close" onclick="cerrarModal()">&times;</span>
    <h2 id="modalAsesor"></h2>
    <p id="modalCosto"></p>
    <!-- Puedes agregar más información del asesor aquí si lo deseas -->
  </div>
</div>

<script>
    // Función para mostrar el modal con información del asesor y el costo
    function mostrarModal(nombreAsesor, costoAsesoria, urlFotoAsesor) {
        var modal = document.getElementById("myModal");
        var modalAsesor = document.getElementById("modalAsesor");
        var modalCosto = document.getElementById("modalCosto");
        var imagenAsesor = document.getElementById("imagenAsesor");

        modal.style.display = "block"; // Mostrar modal
        modalAsesor.textContent = "Asesor: " + nombreAsesor; // Mostrar nombre del asesor
        modalCosto.textContent = "Costo: " + costoAsesoria; // Mostrar costo de la asesoría
        imagenAsesor.src = urlFotoAsesor; // Mostrar imagen del asesor
    }

    // Función para cerrar el modal
    function cerrarModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none"; // Ocultar modal
    }

    // Función para realizar la compra (puedes implementarla según tus necesidades)
    function realizarCompra() {
        // Aquí puedes agregar la lógica para procesar la compra
        alert("Compra realizada correctamente");
    }
</script>
@endsection
