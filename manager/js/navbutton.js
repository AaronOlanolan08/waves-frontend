const dashboard = document.getElementById("dashboard");
const ameneties = document.getElementById("ameneties");
const reservation = document.getElementById("reservation");

dashboard.addEventListener("mouseenter", () => {
  dashboard.classList.add("active");
  ameneties.classList.add("inactive");
  reservation.classList.add("inactive");
});

dashboard.addEventListener("mouseleave", () => {
  dashboard.classList.remove("active");
  ameneties.classList.remove("inactive");
  reservation.classList.remove("inactive");
});

ameneties.addEventListener("mouseenter", () => {
  ameneties.classList.add("active");
  dashboard.classList.add("inactive");
  reservation.classList.add("inactive");
});

ameneties.addEventListener("mouseleave", () => {
  ameneties.classList.remove("active");
  dashboard.classList.remove("inactive");
  reservation.classList.remove("inactive");
});

reservation.addEventListener("mouseenter", () => {
  reservation.classList.add("active");
  ameneties.classList.add("inactive");
  dashboard.classList.add("inactive");
});

reservation.addEventListener("mouseleave", () => {
  reservation.classList.remove("active");
  ameneties.classList.remove("inactive");
  dashboard.classList.remove("inactive");
});