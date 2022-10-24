<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Clients ID:</strong>
                {{ $booking->client_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room ID:</strong>
                {{ $booking->room_id }}
            </div>
        </div>
    </div>
       
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Check-In:</strong>
                {{ $booking->checkin_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Check-Out:</strong>
                {{ $booking->checkout_date }}
            </div>
        </div>
    </div>
       
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stay days:</strong>
                {{ $booking->stay_days }}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Amount:</strong>
                {{ $booking->total_amount }}
            </div>
        </div>
    </div>
       
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Payment:</strong>
                {{ $booking->paid }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Balance:</strong>
                {{ $booking->balance }}
            </div>
        </div>
    </div>
       
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $booking->status }}
            </div>
        </div>
    </x-app-layout>