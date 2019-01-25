@extends('layouts.default')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Teacher</h1>
    </div>
    <form method="post" action="{{ url('/students/'  . $id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Data of birth</label>
            <input type="date" class="form-control" name="date_birth">
        </div>
        <div class="form-group">
            <label>Mom</label>
            <input type="text" class="form-control" name="mom">
        </div>
        <div class="form-group">
            <label>Dad</label>
            <input type="text" class="form-control" name="dad">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('script')
    <script>
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '{{ url('/students/' . $id . '/edit') }}',
            type: 'get',
            dataType: 'json',
            success: function (response) {
                $('input[name=name]').val(response.name);
                $('input[name=date_birth]').val(response.date_birth);
                $('input[name=mom]').val(response.mom);
                $('input[name=dad]').val(response.dad);
            }
        });

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