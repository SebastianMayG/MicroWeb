<!-- Tu vista -->
@extends ('layouts.admin')
@section ('contenido')
  <h1>Mi Plan de Negocio</h1>
  <div>
    <h3>Pasos para crear tu plan de negocio</h2>
    <h5>Haz click en el icono que aparece en la esquina inferior izquierda es un asistente virtual que te ayudara a crear tu plan de negocio</h5>
    <h5>El chatbot le dara la bienvenida, luego de click en el boton <strong>Crear plan</strong></h5>
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
