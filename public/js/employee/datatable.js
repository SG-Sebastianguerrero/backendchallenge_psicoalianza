const EMPLOYEE_DATATABLE = new DataTable("#employee_datatable", {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.header().textContent;

                // Create input element
                let input = document.createElement("input");
                input.placeholder = title;
                column.header().replaceChildren(input);

                // Event listener for user input
                input.addEventListener("keyup", () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    },
    language: {
        sProcessing: "Procesando...",
        sLengthMenu: "Mostrar _MENU_ registros",
        sZeroRecords: "No se encontraron resultados",
        sEmptyTable: "Ningún dato disponible en esta tabla",
        sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
        sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
        sInfoPostFix: "",
        sSearch: "Buscar:",
        sUrl: "",
        sInfoThousands: ",",
        sLoadingRecords: "Cargando...",
        oPaginate: {
            sFirst: "Primero",
            sLast: "Último",
            sNext: "Siguiente",
            sPrevious: "Anterior",
        },
        oAria: {
            sSortAscending:
                ": Activar para ordenar la columna de manera ascendente",
            sSortDescending:
                ": Activar para ordenar la columna de manera descendente",
        },
    },
});

// $(document).ready(function () {
//     $("#employee_datatable").DataTable({
//         ajax: {
//             url: "/employees_all",
//             dataSrc: "",
//         },
//         columns: [
//             { data: "name" },
//             { data: "identification" },
//             { data: "billing_address" },
//             { data: "phone" },
//             { data: "city_name" },
//             { data: "departament" },
//             {
//                 data: "id",
//                 render: function (data, type, row) {
//                     return `
//                     <div class="flex gap-7 flex-wrap">
//                         <button class="datatable_btn_update hover:cursor-pointer text-2xl text-mainblue-dark">
//                             <i data-id="${data}" onclick="(e)=> searchEmployeeById(" class="fa-solid fa-pen"></i>
//                         </button>
//                         <button class="datatable_btn_delete hover:cursor-pointer text-2xl text-mainblue-dark">
//                             <i data-id="${data}" class="fa-solid fa-trash"></i>
//                         </button>
//                     </div>
//                     `;
//                 },
//             },
//         ],
//         language: {
//             sProcessing: "Procesando...",
//             sLengthMenu: "Mostrar _MENU_ registros",
//             sZeroRecords: "No se encontraron resultados",
//             sEmptyTable: "Ningún dato disponible en esta tabla",
//             sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
//             sInfoEmpty:
//                 "Mostrando registros del 0 al 0 de un total de 0 registros",
//             sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
//             sInfoPostFix: "",
//             sSearch: "Buscar:",
//             sUrl: "",
//             sInfoThousands: ",",
//             sLoadingRecords: "Cargando...",
//             oPaginate: {
//                 sFirst: "Primero",
//                 sLast: "Último",
//                 sNext: "Siguiente",
//                 sPrevious: "Anterior",
//             },
//             oAria: {
//                 sSortAscending:
//                     ": Activar para ordenar la columna de manera ascendente",
//                 sSortDescending:
//                     ": Activar para ordenar la columna de manera descendente",
//             },
//             buttons: {
//                 copy: "Copiar",
//                 colvis: "Visibilidad",
//             },
//         },
//     });
// });
