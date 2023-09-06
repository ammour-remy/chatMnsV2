document.addEventListener("DOMContentLoaded", function() {
    let calendarEl = document.querySelector("#calendar");
    let calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: "timeGridWeek",
      firstDay: 1,
      height:500,
      contentWidth: "auto",
      contentHeight:"auto",
      locale: "fr",
      timeZone: "Europe/Paris",
      headerToolbar: {
        start: "prev,next",
        center: "title",
        end: "dayGridMonth,timeGridWeek"
      }
    });
    calendar.render();
  });