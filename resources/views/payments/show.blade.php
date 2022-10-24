<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Payment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" required="">
                <strong>Booking ID:</strong>
                {{ $payment->booking_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" required="">
                <strong>Client ID:</strong>
                {{ $payment->client_id }}
            </div>
        </div>
    </div>
       
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" required="">
                <strong>Amount:</strong>
                {{ $payment->amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" required="">
                <strong>Payment Method:</strong>
                {{ $payment->payment_method }}
            </div>
        </div>
    </div>
     
</x-app-layout>