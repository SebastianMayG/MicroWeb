@extends('layouts.admin')
@section('contenido')
    <script src="{{ asset('js/agenda.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        var baseURL = {!! json_encode(url('/')) !!}
    </script>


    <div class="container">
        <div id="agenda">

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dato del evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">

                        {!! csrf_field() !!}

                        <div class="form-group d-none" style="display: none;">
                            <label for="id">ID</label>
                            <textarea class="form-control" name="id" id="id" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="helpId" placeholder="Escribe el título del evento">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start" style="display: none;">start</label>
                            <label for="inicio">Inicio</label>
                            <input type="date" class="form-control" name="start" id="start"
                                aria-describedby="help text"></input>
                        </div>
                        <div class="form-group">
                            <label for="end" style="display: none;">end</label>
                            <label for="fin">Fin</label>
                            <input type="date" class="form-control" name="end" id="end"
                                aria-describedby="help papu"></input>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success"id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning"id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger"id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


                </div>
            </div>
        </div>
    </div>
@endsection
