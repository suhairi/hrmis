@if($employee->deleted_at == NULL)
    @can('employee-create')
        <a href="{{ route('employees.edit', $employee->id) }}"
             class="btn bg-green-500 hover:bg-green-600 text-white hover:font-semibold
             transition ease-in-out delay-30
             hover:-translate-y-1 duration-300
             rounded-full shadow-md"
        >Edit Performance</a>
    @endcan
@endif