// const closeDeleteButton = document.querySelector(
//     "#modal_employee_delete #closeButton"
// );
console.log("hellooo");
const cancelDeleteButton = document.querySelector(
    "#modal_employee_delete #btn-cancel"
);

// closeDeleteButton.addEventListener("click", closeDeleteModal);
cancelDeleteButton.addEventListener("click", closeDeleteModal);

Array.from(document.querySelectorAll(".datatable_btn_delete")).map((button) => {
    button.addEventListener("click", deleteEmployee);
});

function deleteEmployee(e) {
    e.stopPropagation();
    openDeleteModal();
    let id = e.target?.dataset?.id;
    console.log("delete" + id);
    if (id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
}

function closeDeleteModal() {
    document.querySelector("#modal_employee_delete").classList.add("fadeOut");
    document.querySelector("#modal_employee_delete").classList.remove("fadeIn");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_delete")
            .classList.add("hidden");
    }, 500);
}

function openDeleteModal() {
    document.querySelector("#modal_employee_delete").classList.add("fadeIn");
    document
        .querySelector("#modal_employee_delete")
        .classList.remove("fadeOut");
    setTimeout(() => {
        document
            .querySelector("#modal_employee_delete")
            .classList.remove("hidden");
    }, 500);
}
