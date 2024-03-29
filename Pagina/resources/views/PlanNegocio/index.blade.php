<!-- Tu vista -->
@extends ('layouts.admin')
@section ('contenido')
  <h1>Mi Plan de Negocio</h1>
  <div>
    <h3>Pasos para crear tu plan de negocio</h2>
    <h5>Haz click en el icono que aparece en la esquina inferior izquierda es una inteligencia artificial que te ayudara a crear tu plan de negocio</h5>
    <h5>El chatbot le dara la bienvenida, luego de click en el boton <strong>Plan de negocio</strong></h5>
    <h5>Sigue estos pasos y los espacios que encuentes con <strong>[Escribe aqui de acuerdo con tu negocio]</strong> reemplazalos </h5>
    <ol type="1" start="1">
      <li>Quiero crear un plan de negocio para mi empresa llamada [nombre del negocio], que opera en la industria de [tu industria]. Estamos ubicados en [ubicación] y nos especializamos en [productos o servicios principales]. Por favor, ten en cuenta estos detalles mientras desarrollamos el plan de negocio paso a paso. No empieces a desarrollar nada hasta que te de más indicaciones.</li>
      <h3>RESUMEN EJECUTIVO.</h3>
      <li>Escribe un resumen ejecutivo que incluya los principales objetivos, mercado objetivo y ventaja competitiva.</li>
      <h3>DESCRIPCIÓN DEL NEGOCIO</h3>
      <li>Describe la historia, misión, visión, estructura legal y propiedad de la empresa.</li>
      <h3>PRODUCTOS Y SERVICIOS.</h3>
      <li>Describe los productos/servicios ofrecidos, incluyendo características, beneficios, precios y cualquier tecnología o propiedad intelectual única.</li>
      <h3>ANÁLISIS DE MERCADO.</h3>
      <li>Realiza un análisis de mercado, describiendo la industria, mercado objetivo, tendencias, potencial de crecimiento y principales competidores.</li>
      <h3>ESTRATEGIA DE MARKETING Y VENTAS.</h3>
      <li>Desarrolla una estrategia de marketing y ventas, incluyendo actividades promocionales, canales, presupuesto, proceso de ventas y gestión de relaciones con el cliente.</li>
      <h3>PLAN DE OPERACIONES.</h3>
      <li>"Describe un plan de operaciones, incluyendo instalaciones, equipo, cadena de suministro, proceso de producción, control de calidad, gestión de inventario y requerimientos de personal.</li>
      <h3>GESTIÓN Y ORGANIZACIÓN.</h3>
      <li>Presenta el equipo de gestión y la estructura organizativa, incluyendo experiencia, roles y cualquier asesor o socio clave.</li>
      <h3>PROYECCIONES FINANCIERAS.</h3>
      <li>Desarrolla proyecciones financieras, incluyendo ingresos, gastos y rentabilidad. Proporciona estados de resultados, estados de flujo de efectivo y balances para los próximos 3-5 años, así como cualquier supuesto y riesgo.</li>
      <h3>SOLICITUD DE FINANCIAMIENTO (SI CORRESPONDE).</h3>
      <li>Escribe una solicitud de financiamiento, explicando la cantidad necesaria, cómo se utilizarán los fondos y planes para la devolución o rendimientos de los inversores.</li>
      <h3>APÉNDICE (OPCIONAL).</h3>
      <li>Enumera los documentos de respaldo que deben incluirse en el apéndice del plan de negocio.</li>
      <h3> DESARROLLO DE ÍNDICE.</h3>
      <li>Tomando en cuenta la información anterior. Desarrolla un índice para el plan de negocios de [nombre de negocio].</li>
    </ol>

    <h4>Puede llevar nota de lo que dice la IA en un Word para tenerlo a la mano, recuerde que es una idea de como puede ser su plan de negocio.</h4>
  </div>
@endsection


@section ('scripts')
<script type="text/javascript">
  (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      v.onload = function() {
        window.voiceflow.chat.load({
          verify: { projectID: '6605d9bbe773c6d866e27b02' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production'
        });
      }
      v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
  })(document, 'script');
</script>
@endsection
