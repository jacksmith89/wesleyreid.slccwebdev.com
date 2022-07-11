const panels = document.querySelectorAll(".panel");

// Running the "forEach" method on the "panels" nodelist/array that makes it so each element with a class of "panel" now has a listener event of "click". On click, first the function removeActiveClasses() will run, removing the "active" class from all items in the "panels" nodelist, and then adds the "active" class to the item clicked.
panels.forEach((panel) => {
    panel.addEventListener("click", () => {
        removeActiveClasses();
        panel.classList.add("active");
    })
})

function removeActiveClasses() {
    panels.forEach((panel) => {
        panel.classList.remove('active');
    })
}