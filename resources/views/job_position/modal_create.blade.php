@component('components.modal', [
    'title' => 'Nuevo Cargo',
    'id' => 'job_position_create'
])
    <form id="form_job_position_create" action="w-full h-full" >
        @csrf
        <div class="flex flex-col gap-auto md:grid md:grid-cols-2">
            <div class="flex flex-col gap-4 max-w-96">
                <label for="name">Nombre</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Busca Empleado"
                    name="name"
                    pattern="[A-Za-z]{2,254}" 
                    title="Ingresa almenos 3 letras, sin espacios en blanco"
                    required
                >
            </div>

            <div class="flex flex-col gap-4 max-w-96">
                <label for="identification">Identificación</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe un numero de identificación"
                    name="identification"
                    pattern="[A-Za-z0-9]{2,254}" 
                    title="Ingresa almenos 3 letras, sin espacios en blanco"
                    required
                >
            </div>

            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="area">Area</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe un area"
                    name="area"
                    required
                >
            </div>

            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="position_name">Cargo</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe un cargo"
                    name="position_name"
                    required
                >
            </div>
            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="rol_id">Rol</label>
                <select name="rol_id" class="form-textInput" required>
                    <option value="" selected>Seleccione el rol del trabajador</option>
                    @foreach ($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->role_name}}</option>
                    @endforeach
                </select> 
            </div>
            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="boss_id">Jefe</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe un nombre"
                    name="boss_id"
                    required
                >
            </div>
        </div>

        <div class="w-full flex mt-5 justify-center gap-10">
            <button type="button" id="btn-cancel" class="bg-gray-300 w-auto px-5 py-2 font-bold rounded-full">Cancelar</button>
            <button type="submit" class="btn-primary">Guardar</button>
        </div>
    </form>
@endcomponent

@push('javascripts')
    <script defer src="{{asset('js/job_position/modal_create.js')}}"></script>
@endpush