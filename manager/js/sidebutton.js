const dashboard = document.getElementById("dashboard");
const ameneties = document.getElementById("ameneties");

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