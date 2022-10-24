<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hotel Client Management System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Add New Client</a>
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
            <th>Name</th>
            <th>ID Number</th>
            <th>Phone Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->id_no }}</td>
            <td>{{ $customer->phone_no }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">View</a>
    
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
   
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

    {!! $customers->links() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script type="text/javascript">
        function archiveFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Do you want to delete Customer?",
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