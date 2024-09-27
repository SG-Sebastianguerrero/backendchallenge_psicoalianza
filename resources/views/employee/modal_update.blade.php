@component('components.modal', [
    'title' => 'Editar Empleado',
    'id' => 'employee_update'
])
    <form action="">
        form UPDATE employee
    </form>
@endcomponent

@push('javascripts')
    <script defer src="{{asset('js/employee/modal_update.js')}}"></script>
@endpush