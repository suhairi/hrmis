@if($employee->deleted_at == NULL)
    <a class="btn btn-info shadow-md" href="{{ route('employees.show', $employee->id) }}">Show</a>
    <a class="btn btn-success shadow-md" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
    {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger shadow-md']) !!}
    {!! Form::close() !!}
@endif