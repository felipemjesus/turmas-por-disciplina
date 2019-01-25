@extends('layouts.default')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Teacher</h1>
    </div>
    <form method="post" action="{{ url('/teachers/store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('script')
    <script>
        $('form').submit(function (e) {
            e.preventDefault()
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                url: $(this).attr('action'),
                type: 'post',
                dataType: 'json',
                data: $(this).serialize(),
                success: function (response) {
                    alert('Success');
                },
                error: function (response) {
                    alert('Error');
                }
            });
        });
    </script>
@endsection