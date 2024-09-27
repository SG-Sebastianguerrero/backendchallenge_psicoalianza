const closeUpdateButton = document.querySelector(
    "#modal_employee_update #closeButton"
);

const cancelUpdateButton = document.querySelector(
    "#modal_employee_update #btn-cancel"
);

closeUpdateButton.addEventListener("click", closeUpdateModal);
cancelUpdateButton.addEventListener("click", closeUpdateModal);

Array.from(document.querySelectorAll(".datatable_btn_update")).map((button) => {
    button.addEventListener("click", updateEmployee);
});

function updateEmployee(e) {
    e.stopPropagation();
    openUpdateModal();
    let id = e.target?.dataset?.id;
    console.log("update" + id);
    if (id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
}

function closeUpdateModal() {
    document.querySelector("#modal_employee_update").classList.add("fadeOut");
    document.querySelector("#modal_employee_update").classList.remove("fadeIn");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_update")
            .classList.add("hidden");
    }, 500);
}

function openUpdateModal() {
    document.querySelector("#modal_employee_update").classList.add("fadeIn");
    document
        .querySelector("#modal_employee_update")
        .classList.remove("fadeOut");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_update")
            .classList.remove("hidden");
    }, 500);
}
