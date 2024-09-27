// const closeDeleteButton = document.querySelector(
//     "#modal_employee_delete #closeButton"
// );
const cancelDeleteButton = document.querySelector(
    "#modal_employee_delete #btn-cancel"
);

// closeDeleteButton.addEventListener("click", closeDeleteModal);
cancelDeleteButton.addEventListener("click", closeDeleteModal);

Array.from(document.querySelectorAll(".datatable_btn_delete")).map((button) => {
    button.addEventListener("click", getEmployeeToDelete);
});

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
/**
 * Delete request
 */
document
    .querySelector("#modal_employee_delete")
    .addEventListener("submit", deleteEmployee);

async function getEmployeeToDelete(e) {
    e.stopPropagation();
    openDeleteModal();

    let id = e.target?.dataset?.id;
    document.querySelector("#modal_employee_delete #employee_name").innerHTML =
        e.target?.dataset?.name || "";

    if (id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
    document.querySelector("#modal_employee_delete form").dataset.id = id;
}

async function deleteEmployee(e) {
    e.preventDefault();
    // console.log("delete" + id);
    let id = e.target?.dataset?.id;
    if (id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
    let res = await fetch(`/employee/${id}`, {
        method: "delete",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": document.querySelector(
                '#modal_employee_delete [name="_token"]'
            ).value,
        },
    });
    if (!res?.ok) {
        alert("Ocurrió un error en la eliminación");
    }
    alert("Eliminado correctamente");
    closeDeleteModal();
}
