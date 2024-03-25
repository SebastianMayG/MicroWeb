document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.querySelector("form");
    var calendarEl = document.getElementById('agenda');
    var datos;
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "Es",
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek',
        },
        events: "http://localhost:8000/organizador/calendario/show",

        dateClick: function (info) {
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show");
        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);
            axios.post("/organizador/calendario/" + info.event.id + "/edit", datos).then(
                (respuesta) => {
                    console.log(respuesta);
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    formulario.descripcion.value = respuesta.data.descripcion;

                    $("#evento").modal("show");
                }
            ).catch(
                error => {
                    console.log(error.response.data);
                }
            )
        }
    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function () {
        datos = new FormData(formulario);
        console.log(datos);
        console.log(formulario.title.value);
        axios.post("http://localhost:8000/organizador/calendario/agregar", datos).then(
            (repuesta) => {
                $("#evento").modal("hide");
            }
        ).catch(
            error => {
                console.log(error.response.data);
            }
        )
        calendar.refetchEvents();
    });
});
