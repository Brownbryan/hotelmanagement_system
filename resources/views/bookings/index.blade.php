<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Hotel Bookings</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}"> New Booking</a>
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
            <th>client_id</th>
            <th>room_id</th>
            <th>checkin_date</th>
            <th>checkout_date</th>
            {{-- <th>stay_days</th> --}}
            <th>total_amount</th>
            <th>paid</th>
            <th>balance</th>
            <th>status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->client_id }}</td>
            <td>{{ $booking->room_id }}</td>
            <td>{{ $booking->checkin_date }}</td>
            <td>{{ $booking->checkout_date }}</td>
            {{-- <td>{{ $booking->stay_days }}</td> --}}
            <td>{{ $booking->total_amount }}</td>
            <td>{{ $booking->paid }}</td>
            <td>{{ $booking->balance }}</td>
            <td>{{ $booking->status }}</td>
            <td>
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('bookings.show',$booking->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>
   
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
  
    {!! $bookings->links() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script type="text/javascript">
        function archiveFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Do you want to delete booking?",
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
                        form.submit(); // submitting the form when user press ye
                    } else {
                        swal("Cancelled", "The record is safe :)", "success");
                    }
                });
        }
    </script>

</x-app-layout>