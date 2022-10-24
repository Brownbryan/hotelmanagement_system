<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hotel Room Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Add New Room</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>room_name</th>
            <th>room_price</th>
            <th>room_number</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $room->room_name }}</td>
            <td>{{ $room->room_price }}</td>
            <td>{{ $room->room_number }}</td>
            <td>
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="archiveFunction()" class="show_confirm btn btn-danger btn-sm"
                    type="submit">Delete
                    <i class="fa fa-trash float-righ"> </i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $rooms->links() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script type="text/javascript">
        function archiveFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Are you sure you want to delete the room?",
                    text: "!.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Delete it!",
                    cancelButtonColor: "#362389",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        form.submit(); // submitting the form when user press yes
                    } else {
                        swal("Cancelled", "The record is safe :)", "success");
                    }
                });
        }
    </script>
</x-app-layout>