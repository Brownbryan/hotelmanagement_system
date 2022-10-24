<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hotel Booking Payment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('payments.create') }}"> New Payment</a>
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
            <th>booking_id</th>
            <th>client_id</th>
            <th>amount</th>
            <th>payment_method</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($payments as $payment)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $payment->booking_id }}</td>
            <td>{{ $payment->client_id }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->payment_method }}</td>
            <td>
                <form action="{{ route('payments.destroy',$payment->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('payments.show',$payment->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('payments.edit',$payment->id) }}">Edit</a>
   
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
  
    {!! $payments->links() !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script type="text/javascript">
        function archiveFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Do you want to delete Payment?",
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
                        swal("Cancelled", "Payment record is safe :)", "success");
                    }
                });
        }
    </script>
      
</x-app-layout>