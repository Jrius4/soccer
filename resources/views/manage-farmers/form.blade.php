@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$farmer->exists()?$farmer->name:null}}" class="form-control">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="{{$farmer->exists()?$farmer->location:null}}" class="form-control">
</div>
<div class="form-group">
    <label for="farm_size">Name</label>
    <input type="text" name="farm_size" id="farm_size" value="{{$farmer->exists()?$farmer->farm_size:null}}"  class="form-control">
</div>
<div class="form-group">
    <label for="produce">Produce</label>
    <input type="text" name="produce" id="produce" value="{{$farmer->exists()?$farmer->produce:null}}"  class="form-control">
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone"  value="{{$farmer->exists()?$farmer->phone:null}}"  class="form-control">
</div>

<div class="form-group">
    <input type="submit" value="{{$farmer->exists()?'Update Farmer':'Create Farmer'}}" class="btn btn-sm btn-info d-block col-12">
</div>
