const closeUpdateButton = document.querySelector(
    "#modal_employee_update #closeButton"
);

const cancelUpdateButton = document.querySelector(
    "#modal_employee_update #btn-cancel"
);

closeUpdateButton.addEventListener("click", closeUpdateModal);
cancelUpdateButton.addEventListener("click", closeUpdateModal);
document.querySelector("#modal_employee_update form");
Array.from(document.querySelectorAll(".datatable_btn_update")).map((button) => {
    button.addEventListener("click", searchEmployeeById);
});

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

/**
 * Update on Employee
 */
document
    .querySelector("#form_employee_update")
    .addEventListener("submit", updateEmployee);

async function searchEmployeeById(e) {
    e.stopPropagation();
    openUpdateModal();
    let id = e.target?.dataset?.id;
    if (id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
    document.querySelector("#modal_employee_update form").dataset.id = id;

    let res = await fetch(`/employee/${id}`);
    if (!res?.ok) {
        alert("Ocurrió un error en la creación");
    }
    let resJson = await res.json();

    // Fill the modal form with the selected info
    document.querySelector("#modal_employee_update [name='name']").value =
        resJson.name;
    document.querySelector("#modal_employee_update [name='lastname']").value =
        resJson.lastname;
    document.querySelector(
        "#modal_employee_update [name='identification']"
    ).value = resJson.identification;
    document.querySelector("#modal_employee_update [name='phone']").value =
        resJson.phone;
    document.querySelector("#modal_employee_update [name='address']").value =
        resJson.billing_address;

    document.querySelector("#modal_employee_update [name='city']").value =
        resJson.city_id;
}

async function updateEmployee(e) {
    e.preventDefault();
    if (e.target?.dataset?.id === undefined) {
        throw new Error("Error al cargar funcion eliminar empleado");
    }
    let formData = Object.fromEntries(new FormData(e.target));
    formData.id = e.target?.dataset?.id;

    let res = await fetch("/employee", {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": document.querySelector(
                '#modal_employee_update [name="_token"]'
            ).value,
        },
        method: "put",
        credentials: "same-origin",
        body: JSON.stringify(formData),
    });

    if (!res?.ok) {
        alert("Ocurrió un error en la actualización");
    }

    console.log(res);

    alert("Se actualizó satisfactoriamente");
    closeUpdateModal();
}
