const closeButton = document.getElementById("closeButton");
const openButton = document.querySelector("#open_modal_create");
const cancelButton = document.querySelector("#btn-cancel");

closeButton.addEventListener("click", closeModal);
openButton.addEventListener("click", openModal);
cancelButton.addEventListener("click", closeModal);

function closeModal() {
    document.querySelector("#modal_employee_create").classList.add("fadeOut");
    document.querySelector("#modal_employee_create").classList.remove("fadeIn");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_create")
            .classList.add("hidden");
    }, 500);
}

function openModal() {
    document.querySelector("#modal_employee_create").classList.add("fadeIn");
    document
        .querySelector("#modal_employee_create")
        .classList.remove("fadeOut");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_create")
            .classList.remove("hidden");
    }, 500);
}
