<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> <b> Edit Room</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
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
  
    <form action="{{ route('rooms.update',$room->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room Type:</strong>
                    <textarea class="form-control" style="height:50px" name="room_name" placeholder="Room Type">{{ $room->room_name }}</textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room Price:</strong>
                    <input type="text" name="room_price" value="{{ $room->room_price }}" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room Number:</strong>
                    <input type="text" name="room_number" value="{{ $room->room_number }}" class="form-control" placeholder="Room Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="Save Changes" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
   
    </form>

</x-app-layout>