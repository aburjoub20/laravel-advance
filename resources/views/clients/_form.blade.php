<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" placeholder="enter your name " value="{{old('name' , $client->name ?? '')}}"
    class="form-control"
    @error('name')
    <p class="text-danger"> {{$message}}</p>
    @enderror
  </div>
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" name="email" value="{{old('email'  , $client->phone ?? '')}}"
  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  @error('EMAIL')
  <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone"  placeh class="form-control" value="{{old('phone' , $client->email ?? '')}}"
    @error('phone')
    <p class="text-danger"> {{$message}}</p>
    @enderror
  </div>
