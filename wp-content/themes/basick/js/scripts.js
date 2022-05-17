const actionButton = document.querySelector(".action-button")
const circles = document.querySelector(".section")

actionButton.addEventListener("mouseover", (e) => {
  circles.classList.add("animate")
  circles.classList.remove("pause")
})

actionButton.addEventListener("mouseout", (e) => {
  circles.classList.add("pause")
})
