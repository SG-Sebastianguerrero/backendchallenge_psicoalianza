@component('components.modal', [
    'title' => 'Nuevo Empleado',
    'id' => 'employee_create'
])
    <form action="">
        form create employee
    </form>
@endcomponent

@push('javascripts')
    <script defer src="{{asset('js/employee/modal_create.js')}}"></script>
@endpush