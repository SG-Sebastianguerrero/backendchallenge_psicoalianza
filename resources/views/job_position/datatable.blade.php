<table id="job_positions_datatable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Area</th>
            <th>Cargo</th>
            <th>Rol</th>
            <th>Jefe</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($job_positions as $job_position)
        <tr>
            <td>{{$job_position->name.' '. $job_position->lastname}}</td>
            <td>{{$job_position->identification}}</td>
            <td>{{$job_position->area_name}}</td>
            <td>{{$job_position->position_name}}</td>
            <td>{{$job_position->role_name}}</td>
            <td>{{$job_position->bossname.' '.$job_position->bosslastname}}</td>
            <td>
                <div class="flex gap-7 flex-wrap">
                    <button class="datatable_btn_update hover:cursor-pointer text-2xl text-mainblue-dark">
                        <i data-id="{{$job_position->id}}" class="fa-solid fa-pen"></i>
                    </button>
                    <button class="datatable_btn_delete hover:cursor-pointer text-2xl text-mainblue-dark">
                        <i data-id="{{$job_position->id}}" data-name="{{$job_position->name.' '. $job_position->lastname}}" class="fa-solid fa-trash"></i>
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
            <th>Area</th>
            <th>Cargo</th>
            <th>Rol</th>
            <th>Jefe</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>

@push('javascripts')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.tailwindcss.js"></script>
    <script src="{{asset('js/job_position/datatable.js')}}"></script>
@endpush