<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="collegeName">College Name</label>
                      <input type="text" name="name" id="collegeName" class="form-control @error('name') is-invalid @enderror" placeholder="Enter College Name" value="{{ old('name', $college->name) }}" >
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="collegeAddress">College Address</label>
                      <input type="text" name="address" id="collegeAddress" class="form-control @error('address') is-invalid @enderror" placeholder="Enter College Address" value="{{ old('address', $college->address) }}" >
                      @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
            
                  <div class="d-flex ">
                    <button type="submit" class="btn btn-primary zoom-effect">Submit</button>
                    <a href="{{ route('colleges.index') }}" style="margin-left:20px" class="btn btn-md btn-dark zoom-effect">Cancel</a>
                  </div>
            </div>
        </div>
    </div>
</div>