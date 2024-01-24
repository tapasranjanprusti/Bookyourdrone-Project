@include('Dashboard.dashboardHeader')
<style>
  .sumbtn{
    background-color: green;
    color: white;
    float: right;
    margin-top: 29px;
    margin-right: 10px;
  }
</style>
<section class="main">


  <div class="panel panel-default">
  @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Assign Drone</div>

    <div class="panel-body">
    <form action="{{route('Admin.store_AssignDrone')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">


        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pilot</label>
                   <select class="form-control" name="pilotass">
                    <option value="">Please Select Pilot</option>
                    @foreach($allPilot as $pilot)
                    <option value="{{$pilot->id}}">{{$pilot->name}}</option>
                    @endforeach
                
       
                   </select>
                </div> 
        </div>



        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Drone:</label>
                   <select class="form-control" name="droneass" id="droneass">
                    <option value="">Please Select Drone</option>
            
              
       
                   </select>
                </div> 
        </div>
        
                <input type="submit" value="Assign" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="pilotass"]').on('change', function() {
            var pilotId = $(this).val();
         

            if (pilotId) {
                $.ajax({
                    url: '{{ route('Admin.getdronedtls') }}',
                    type: 'GET',
                    data: { pilotId: pilotId},
              
               
                success: function(data) {
                        var droneass = $('#droneass');
                        droneass.empty();
                        droneass.append('<option value="">Please Select Drone</option>');

                        $.each(data, function(index, drone) {
                                droneass.append('<option value="' + drone.id + '">' + drone.model_name + '</option>');
                        });
                    }
                });
            } else {
                $('#droneass').empty();
                $('#droneass').append('<option value="">Please Select Pilot First</option>');
            }
        });
    });
</script>

