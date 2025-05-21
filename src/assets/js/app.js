const toggleBtn = document.getElementById("toggleBtn");
const sidebar = document.getElementById("sidebar");
const icon = toggleBtn.querySelector("i");
const labels = document.querySelectorAll(".label");

toggleBtn.addEventListener("click", () => {
  sidebar.classList.toggle("w-64");
  sidebar.classList.toggle("w-14");

  labels.forEach((label) => {
    label.classList.toggle("hidden");
  });

  icon.classList.toggle("rotate-180");

  if (icon.classList.contains("fa-bars")) {
    icon.classList.remove("fa-bars");
    icon.classList.add("fa-times");
  } else {
    icon.classList.remove("fa-times");
    icon.classList.add("fa-bars");
  }
});
