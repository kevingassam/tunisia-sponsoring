@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@enderror

@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@enderror

@if (session()->has('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@enderror

@if (session()->has('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@enderror

@if (session()->has('dark'))
    <div class="alert alert-dark">
        {{ session('dark') }}
    </div>
@enderror
