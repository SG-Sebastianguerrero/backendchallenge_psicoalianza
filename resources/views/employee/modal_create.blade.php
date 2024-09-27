@component('components.modal', [
    'title' => 'Nuevo Empleado',
    'id' => 'employee_create'
])
    <form id="form_employee_create" action="w-full h-full" >
        @csrf
        <div class="flex flex-col gap-auto md:grid md:grid-cols-2">
            <div class="flex flex-col gap-4 max-w-96">
                <label for="name">Nombres</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe el nombre de tu empleado"
                    name="name"
                    pattern="[A-Za-z]{2,254}" 
                    title="Ingresa almenos 3 letras, sin espacios en blanco"
                    required
                >
            </div>

            <div class="flex flex-col gap-4 max-w-96 ">
                <label for="lastname">Apellidos</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe los apellidos de tu empleado"
                    name="lastname"
                    pattern="[A-Za-z]{2,254}" 
                    title="Ingresa almenos 3 letras, sin espacios en blanco"
                    required
                >
            </div>

            <div class="flex flex-col gap-4 max-w-96 mt-5">
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
                <label for="phone">Teléfono</label>
                <input type="tel" 
                    class="form-textInput"
                    id="phone" 
                    name="phone" 
                    title="Solo ingresa números"
                    placeholder="Escribe un número de identificación"
                    pattern="[0-9]{6,10}" 
                    required />
            </div>
            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="city">Ciudad</label>
                <select name="city" class="form-textInput" required>
                    <option value="" selected>Selecciona tu ciudad</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                    @endforeach
                </select> 
            </div>
            <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="address">Dirección</label>
                <input 
                    type="text" 
                    class="form-textInput" 
                    placeholder="Escribe tu dirección"
                    name="address"
                    required
                >
            </div>
            {{-- <div class="flex flex-col gap-4 max-w-96 mt-5">
                <label for="departament">Departamento</label>
                <select name="departament" class="form-textInput" required>
                    <option value="" selected>Selecciona un departamento</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->departament}}</option>
                    @endforeach
                </select> 
            </div> --}}
        </div>

        <div class="w-full flex mt-5 justify-center gap-10">
            <button type="button" id="btn-cancel" class="bg-gray-300 w-auto px-5 py-2 font-bold rounded-full">Cancelar</button>
            <button type="submit" class="btn-primary">Guardar</button>
        </div>
    </form>
@endcomponent

@push('javascripts')
    <script defer src="{{asset('js/employee/modal_create.js')}}"></script>
@endpush