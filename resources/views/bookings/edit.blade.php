<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <input type="hidden" value="{{ Auth::user()->id }}" class="form-control" style="height:50px" name="client_id"   required></input>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input type="text" name="room_id" value="{{ $booking->room_id }}" class="form-control">
                    </div>
                </div>


            <div class="form-group">
                <label>
                  Check -In Date:
                  <input type="date" name="checkin_date" />
                </label>

              <div class="form-group">
                <label>
                  Check -Out Date:
                  <input type="date" name="checkout_date" />
                </label>


{{-- 
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stay days:</strong>
                        <input type="text" name="stay_days" value="{{ $booking->stay_days }}" class="form-control" placeholder="Stay days">
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total Amount:</strong>
                            <input type="number" name="amount" value="{{ $booking->paid }}" class="form-control" placeholder="0.00">
                        </div>
                    </div>
    

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Paid:</strong>
                            <input type="number" name="paid" value="{{ $booking->paid }}" class="form-control" placeholder="0.00">
                        </div>
                    </div>
    

                    
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="number" name="balance" value="{{ $booking->balance }}" class="form-control" placeholder="0.00">
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="select">-Select-</option>
              <option value="available">Available</option>
              <option value="unavailable">Unavailable</option>
</select>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</x-app-layout>