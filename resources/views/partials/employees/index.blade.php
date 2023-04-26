@if($employee->deleted_at == NULL)
    <a href="{{ route('employees.show', $employee->id) }}" 
        class="btn button bg-yellow-300 hover:bg-yellow-400 text-white hover:font-semibold
        transition ease-in-out delay-30
        hover:-translate-y-1 duration-300
        rounded-full hover:shadow-md shadow-md" 
    >
        <i class="fa fa-eye mr-2"></i>
    </a>
    <a href="{{ route('employees.edit', $employee->id) }}"
        class="btn button bg-green-400 hover:bg-green-500 text-white hover:font-semibold
        transition ease-in-out delay-30
        hover:-translate-y-1 duration-300
        rounded-full hover:shadow-md shadow-md" 
    >
        <i class="fa fa-pencil-square mr-2"></i>
    </a>
    {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
        {{ Form::button('<i class="fa fa-trash mr-2"></i>', ['type' => 'submit', 
                'class' => 'btn button bg-red-600 hover:bg-red-700 text-white hover:font-semibold
                transition ease-in-out delay-30
                hover:-translate-y-1 duration-300
                rounded-full hover:shadow-md 
                show_confirm shadow-md'
            ])  
        }}
    {!! Form::close() !!}
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>