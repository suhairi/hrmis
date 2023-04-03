@if($position->deleted_at == NULL)
    <a href="{{ route('positions.show', $position->id) }}" 
        class="btn button bg-yellow-300 hover:bg-yellow-400 text-white hover:font-semibold
        transition ease-in-out delay-30
        hover:-translate-y-1 duration-300
        rounded-full hover:shadow-md shadow-md" 
    >
        <i class="fa fa-eye mr-2"> </i>Papar
    </a>
    <a href="{{ route('positions.edit', $position->id) }}"
        class="btn button bg-green-400 hover:bg-green-500 text-white hover:font-semibold
        transition ease-in-out delay-30
        hover:-translate-y-1 duration-300
        rounded-full hover:shadow-md shadow-md" 
    >
        <i class="fa fa-pencil-square mr-2"> </i>Kemaskini
    </a>
    {!! Form::open(['method' => 'DELETE','route' => ['positions.destroy', $position->id],'style'=>'display:inline']) !!}
        {{ Form::button('<i class="fa fa-trash mr-2"></i>Hapus', ['type' => 'submit', 
                'class' => 'btn button bg-red-600 hover:bg-red-700 text-white hover:font-semibold
                transition ease-in-out delay-30
                hover:-translate-y-1 duration-300
                rounded-full hover:shadow-md 
                show_confirm shadow-md'
            ])  
        }}
    {!! Form::close() !!}
@endif