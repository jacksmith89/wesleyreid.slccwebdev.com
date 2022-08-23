const panels = document.querySelectorAll(".panel");
const closeBtn = document.querySelectorAll(".btn-close");

panels.forEach((panel) => {
    panel.addEventListener("click", () => {
        removeActiveClasses();
        panel.classList.add("active");
    })
})

closeBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        removeActiveClasses();
        event.stopImmediatePropagation()
    })
})

function removeActiveClasses() {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    })
}
