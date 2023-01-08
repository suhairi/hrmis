@if($position->deleted_at == NULL)
    <a class="btn btn-info shadow-md" href="{{ route('positions.show', $position->id) }}">Show</a>
    <a class="btn btn-success shadow-md" href="{{ route('positions.edit', $position->id) }}">Edit</a>
    {!! Form::open(['method' => 'DELETE','route' => ['positions.destroy', $position->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger shadow-md']) !!}
    {!! Form::close() !!}
@endif