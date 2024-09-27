@include('job_position.modal_create', [
    'roles' => $roles
]) 
{{--@include('employee.modal_update', [
    'cities' => $cities
]) 
@include('employee.modal_delete')  --}}
<x-app-layout>
    <div class="w-full h-screen p-5 gap-10 flex flex-col justify-start items-center">
        <a class="flex w-full gap-5 items-center text-2xl justify-start" href="/">
            <i class="fa-solid fa-arrow-left text-mainblue-dark"></i>
            <h1>Empleados</h1>
        </a>
        <div class="w-full flex justify-between items-center flex-wrap">
            <a href="/" class="flex gap-1 items-center justify-center text-mainblue-dark hover:cursor-pointer">
                <i class="fa-solid fa-file-arrow-down"></i>
                Descargar datos
            </a>
            <button type="button" id="open_modal_create" class="btn-secondary flex gap-1 items-center justify-center text-mainblue-dark hover:cursor-pointer mx-0">
                <i class="fa-solid fa-user-plus"></i>
                Agregar
            </button>
        </div>
        <div class="flex w-full overflow-x-scroll">
            @include('job_position.datatable')
        </div>

    </div> 
</x-app-layout>

