
<div id="modal_employee_delete" class="flex items-center z-[100] fadeOut hidden overflow-hidden justify-center fixed bg-[#1e1e1ecc] w-full h-full">
    <div id="modal-content" class="flex shadow-lg rounded-lg flex-col justify-start items-center w-auto  bg-white">
        <form class="p-5 flex flex-col gap-10 items-center justify-center">
            @csrf
            <i class="fa-solid fa-trash text-3xl text-mainblue-dark"></i>
            <span class="text-xl">Borrar Empleado</span>
            <p class="font-semibold">
                Está seguro de borrar a <span id="employee_name"></span>
            </p>
            <div class="flex justify-center w-full gap-10 h-10">
                <button type="button" id="btn-cancel" class="w-44 btn-primary">Cancelar</button>
                <button type="submit" class="bg-gray-300 font-bold rounded-full px-3 py-2">Aceptar</button>
            </div>
        </form>
    </div>
</div>

@push('javascripts')
    <script defer src="{{asset('js/employee/modal_delete.js')}}"></script>
@endpush