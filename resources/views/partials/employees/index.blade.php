@if($employee->deleted_at == NULL)
    <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="{{ route('employees.show', $employee->id) }}">
        <i class="fa fa-eye mr-2"> </i>Show
    </a>
    <a class="btn btn-success rounded-full hover:shadow-md" href="{{ route('employees.edit', $employee->id) }}">
        <i class="fa fa-pencil-square mr-2"> </i>Edit
    </a>
    {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
        {{ Form::button('<i class="fa fa-trash mr-2"></i>Delete', ['type' => 'submit', 'class' => 'btn text-white bg-red-600 hover:bg-red-700 rounded-full hover:shadow-md show_confirm'] )  }}
        <!-- {!! Form::submit('Delete', ['class' => 'btn btn-warning rounded-full hover:shadow-md']) !!} -->
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