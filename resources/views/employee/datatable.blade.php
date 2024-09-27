<table id="employee_datatable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Departamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->name.' '. $employee->lastname}}</td>
            <td>{{$employee->identification}}</td>
            <td>{{$employee->billing_address}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->city_name}}</td>
            <td>{{$employee->departament}}</td>
            <td>
                <div class="flex gap-7 flex-wrap">
                    <button class="datatable_btn_update hover:cursor-pointer text-2xl text-mainblue-dark">
                        <i data-id="{{$employee->id}}" class="fa-solid fa-pen"></i>
                    </button>
                    <button class="datatable_btn_delete hover:cursor-pointer text-2xl text-mainblue-dark">
                        <i data-id="{{$employee->id}}" data-name="{{$employee->name.' '. $employee->lastname}}" class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Departamento</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>

@push('javascripts')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.tailwindcss.js"></script>
    <script defer src="{{asset('js/employee/datatable.js')}}"></script>
@endpush