
@auth
<div class="container">
<img src="{{ asset('storage/' . auth()->user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h1>{{ auth()->user()->name }}'s {{ $title }}</h1>
<div class="mb-3"> 
  {{-- form nya buat update profile cuman masih blom berfungsi KWKWWK --}}
  <form action="/profile" method="POST" enctype="multipart/form-data" class="form-label">
      <label for="image">Update Profile Image</label>
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Submit</button>  
    </form>  
  </div> 
</div>
@endauth

