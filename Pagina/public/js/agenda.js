document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.querySelector("form");
    console.log(formulario);
    console.log(formulario.start);
    var calendarEl = document.getElementById("agenda");
    var datos;
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "Es",
        displayEventTime: false,
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,listWeek",
        },
        events: baseURL + "/organizador/calendario/show",

        dateClick: function (info) {
            formulario.reset();
            //formulario.start.value = info.date;
            //formulario.end.value = info.date;
            $("#evento").modal("show");
        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);
            axios
                .post(
                    "/organizador/calendario/" + info.event.id + "/edit",
                    datos
                )
                .then((respuesta) => {
                    console.log(respuesta);
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    formulario.descripcion.value = respuesta.data.descripcion;

                    $("#evento").modal("show");
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
    });

    calendar.render();

    document
        .getElementById("btnGuardar")
        .addEventListener("click", function () {
            enviarDataos("/organizador/calendario/add");
        });
    document
        .getElementById("btnEliminar")
        .addEventListener("click", function () {
            enviarDataos(
                "/organizador/calendario/delete/" + formulario.id.value
            );
        });
    document
        .getElementById("btnModificar")
        .addEventListener("click", function () {
            enviarDataos(
                "/organizador/calendario/update/" + formulario.id.value
            );
        });
    function enviarDataos(url) {
        datos = new FormData(formulario);
        const nuevaURL = baseURL + url;
        axios
            .post(nuevaURL, datos)
            .then((repuesta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            })
            .catch((error) => {
                if (error.response) {
                    console.log(error.response.data);
                }
            });
    }
});
