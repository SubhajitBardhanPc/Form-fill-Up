const checkbox = document.getElementById("enable-link");
const formLink = document.getElementById("form-link");

checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
        formLink.classList.remove("disabled");
        formLink.setAttribute("aria-disabled", "false");
    } else {
        formLink.classList.add("disabled");
        formLink.setAttribute("aria-disabled", "true");
    }
});
