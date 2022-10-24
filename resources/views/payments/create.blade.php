<x-app-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>New Payment</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
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
   
<form action="{{ route('payments.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>Booking ID:</strong>
                <input type="text" name="booking_id" class="form-control"   required>
            </div>
        </div>
        
                <input type="hidden" value="{{ Auth::user()->id }}" class="form-control" style="height:50px" name="client_id" ></input>
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>Amount:</strong>
                <input type="number" class="form-control" style="height:50px" name="amount" placeholder="amount" required></input>
            </div>
        </div>

                      <div class="dropdown">
                                <label for="payment_method">Payment Method:</label>
                        <select name="payment_method" id="payment_method">
                            <option value="select">-Select-</option>
                      <option value="cash">Cash</option>
                      <option value="mpesa">Mpesa</option>
                      <option value="mastercard">Master Card</option>
        </select>
        </div>
              
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</x-app-layout>