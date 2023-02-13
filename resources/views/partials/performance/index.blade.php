@if($employee->deleted_at == NULL)
    <a class="btn btn-success shadow-md" href="{{ route('employees.edit', $employee->id) }}">Edit Performance</a>
@endif