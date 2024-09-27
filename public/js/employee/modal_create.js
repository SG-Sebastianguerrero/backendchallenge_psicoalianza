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

/**
 * Insert on db
 */
document
    .querySelector("#form_employee_create")
    .addEventListener("submit", createEmployee);

async function createEmployee(e) {
    e.preventDefault();
    let formData = Object.fromEntries(new FormData(e.target));
    let res = await fetch("/employee", {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": document.querySelector(
                '#form_employee_create [name="_token"]'
            ).value,
        },
        method: "post",
        credentials: "same-origin",
        body: JSON.stringify(formData),
    });

    if (!res?.ok) {
        alert("Ocurrió un error en la creación");
    }

    alert("Se creó satisfactoriamente");
    closeModal();
    // EMPLOYEE_DATATABLE.row
    //     .add([Object.fromEntries(new FormData(e.target))])
    //     .draw(false);
}
