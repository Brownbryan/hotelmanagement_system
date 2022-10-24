<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>New Booking</h2>
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

    <div class="container-fluid">
        <div class="row d-flex justify-center">
            <div class="col-sm-12 col-md-6 bg-white p-4 rounded shadow">
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf

                    <input type="hidden" value="{{ Auth::user()->id }}" class="form-control" style="height:50px"
                        name="client_id" required></input>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="room_id" required>
                                <option selected hidden="true" value="">Select room</option>
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}"> {{ $room->room_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                        <label>
                            Check -In Date: </label>
                        <input class="form-control" type="datetime-local" name="checkin_date" />


                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                        <label>
                            Check -Out Date: </label>

                        <input class="form-control" type="datetime-local" name="checkout_date" />

                    </div>
               

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total Amount:</strong>
                            <input type="number" type="number" class="form-control" 
                                name="total_amount">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Paid:</strong>
                            <input type="number" name="paid" class="form-control" placeholder="0.00">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Balance:</strong>
                            <input type="number" class="form-control"  name="balance">
                        </div>



                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
