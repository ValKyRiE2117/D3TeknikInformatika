document.querySelectorAll(".delete-button").forEach((button) => {
    button.addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        const name = this.getAttribute("data-name");

        // Update modal text
        document.getElementById("delete-item-name").textContent = name;

        // Update form action
        const form = document.getElementById("delete-form");
        form.action = `/matakuliah/${id}`; // Adjust route URL as necessary
    });
});
