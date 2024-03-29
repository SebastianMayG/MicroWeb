@extends ('layouts.admin')
@section ('contenido')

<style>
  #tips-slider {
    width: 100%;
    overflow: hidden;
  }

  #tips {
    width: 500%;
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .tips_alone {
    width: 20%;
    flex: 0 0 auto;
    border: 1px solid black;
  }

  .tips_alone img {
  display: block;
  margin: 0 auto;
  border-radius: 50px;
}
  
  header{
    margin-left: 10px;
  }

  p {
    margin-left: 10px;
    font-size: 25px;
  }
</style>

<h1>Tips para crecer</h1>
<div id="tips-slider">
  <div id="tips">
    <div class="tips_alone">
      <header><h1> Define claramente tu visión y objetivos: </h1></header>
      <p>Antes de comenzar, ten una idea clara de lo que quieres lograr con tu negocio a corto y largo plazo. Esto te ayudará a mantenerte enfocado y a establecer metas alcanzables.</p>
      <img src="https://th.bing.com/th/id/OIP.YdsGwyxB_RF14A7CKd6bEAHaFP?rs=1&pid=ImgDetMain" alt="" width="200px">
    </div>
    <div class="tips_alone">
      <header><h1> Conoce a tu público objetivo: </h1></header>
      <p>Entender las necesidades y deseos de tus clientes potenciales es fundamental para el éxito de tu negocio. Realiza investigaciones de mercado para identificar quiénes son tus clientes ideales y cómo puedes satisfacer sus necesidades de manera efectiva.</p>
      <img src="https://th.bing.com/th/id/OIP.P3uTZSz8kquBmVPHZMAwBAHaD4?rs=1&pid=ImgDetMain" alt="" width="200px">
    </div>
    <div class="tips_alone">
      <header><h1> Ofrece un producto o servicio único: </h1></header>
      <p>Diferénciate de la competencia ofreciendo algo único o especial. Esto puede ser a través de la calidad del producto, un excelente servicio al cliente o una propuesta de valor única.</p>
      <img src="https://st.depositphotos.com/2036511/2995/v/950/depositphotos_29953777-stock-illustration-red-new-product-sticker.jpg" alt="" width="200px">
    </div>
    <div class="tips_alone">
      <header><h1> Mantén un control financiero riguroso: </h1></header>
      <p>Lleva un registro detallado de tus ingresos y gastos desde el principio. Esto te permitirá tener una visión clara de la salud financiera de tu negocio y tomar decisiones informadas.</p>
      <img src="https://th.bing.com/th/id/OIP.ncDp56CZBvQaN32wMZ9h8gHaE8?rs=1&pid=ImgDetMain" alt="" width="200px">
    </div>
    <div class="tips_alone">
      <header><h1> Invierte en marketing y promoción: </h1></header>
      <p>Asegúrate de que tu público objetivo conozca tu negocio y lo que tienes para ofrecer. Utiliza estrategias de marketing efectivas, como las redes sociales, el marketing por correo electrónico y la publicidad digital, para aumentar la visibilidad de tu marca.</p>
      <img src="https://th.bing.com/th/id/OIP.OIWCQmgdXwcLrYScyPK2oAHaE8?rs=1&pid=ImgDetMain" alt="" width="200px">
    </div>
  </div>
</div>

<script>
  let tipsIndex = 0;
  const tipsSlider = document.getElementById('tips');

  function nextTip() {
    tipsIndex++;
    if (tipsIndex > 4) {
      tipsIndex = 0;
    }
    updateSlider();
  }

  function prevTip() {
    tipsIndex--;
    if (tipsIndex < 0) {
      tipsIndex = 4;
    }
    updateSlider();
  }

  function updateSlider() {
    tipsSlider.style.transform = `translateX(-${tipsIndex * 20}%)`;
  }

  // Función para cambiar automáticamente los slides cada 5 segundos
  setInterval(nextTip, 5000);
</script>

@endsection
