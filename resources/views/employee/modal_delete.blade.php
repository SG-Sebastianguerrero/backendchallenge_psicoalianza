
<div id="modal_employee_delete" class="flex items-center z-[100] fadeOut hidden overflow-hidden justify-center fixed bg-[#1e1e1ecc] w-full h-full">
    <div id="modal-content" class="flex shadow-lg rounded-lg flex-col justify-start items-center w-auto  bg-white">
        <div class="p-5">
            <i class="fa-solid fa-trash text-3xl text-mainblue-dark"></i>
            <span>Borrar Empleado</span>
            <p class="font-semibold">
                Está seguro de borrar a <span>Nombre del borrado</span>
            </p>
            <div class="flex justify-between ">
                <button id="btn-cancel" class=" w-44 btn-primary">Cancelar</button>
                <button class="bg-gray-300 font-bold rounded-full">Aceptar</button>
            </div>
        </div>
    </div>
</div>

@push('javascripts')
    <script defer src="{{asset('js/employee/modal_delete.js')}}"></script>
@endpush