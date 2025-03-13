<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="studentName">Student Name</label>
                      <input type="text" name="name" id="studentNamee" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Student Name" value="{{ old('name', $student->name ?? '') }}" >
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="studentEmail">Student Email</label>
                      <input type="text" name="email" id="studentEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Student Email" value="{{ old('email', $student->email ?? '') }}" >
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
              
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phoneNumber">Phone Number</label>
                      <input type="number" name="phone" id="phoneNumber" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Phone Number" value="{{ old('phone', $student->phone ?? '') }}" >
                      @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="dateOB">Date of Birth</label>
                      <input type="text" name="dob" id="dateOB" class="form-control @error('dob') is-invalid @enderror" placeholder="Enter Date of Birth" value="{{ old('dob', $student->dob ?? '') }}" >
                      @error('dob')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="college">College</label>
                      <select name="college_id" id="college" class="form-control @error('college_id') is-invalid @enderror" >
                        <option value="" disabled>Choose a College...</option>
                        @foreach($colleges as $id => $name)
                          <option value="{{ $id }}" {{ old('college_id', $student->college_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                      </select>
                      @error('college_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
              
                  <div class="d-flex ">
                    <button type="submit" class="btn btn-primary zoom-effect">Submit</button>
                    <a href="{{ route('students.index') }}" style="margin-left:20px" class="btn btn-md btn-dark zoom-effect">Cancel</a>
                  </div>
            </div>
        </div>
    </div>
</div>