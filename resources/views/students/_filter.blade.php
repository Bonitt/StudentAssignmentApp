<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<form method="GET" action="{{ route('students.index') }}">
    <div class="row">
        <!-- Sorting Button -->
        <div class="col-md-6">
            <a href="{{ route('students.index', [
                'sort' => 'name', 
                'direction' => request('direction') === 'asc' ? 'desc' : 'asc',
                'college_id' => request(key: 'college_id') 
            ]) }}" class="btn btn-dark">
                Sort by Name 
                @if(request('direction') === 'asc') 
                <i class="fa-regular fa-square-caret-up"></i>
                @else 
                <i class="fa-regular fa-square-caret-down"></i>
                @endif
            </a>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <select id="filter_college_id" name="college_id" class="custom-select" onchange="this.form.submit()">
                            <option value="" {{ request('college_id') == '' ? 'selected' : '' }}>All Colleges</option>
                            @foreach($colleges as $id => $name)
                                <option value="{{ $id }}" {{ request('college_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="ml-2">
                            <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
