@extends('layouts.default')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Teachers</h1>
        <a class="btn btn-success" href="{{ url('/teachers/create') }}">
            Add Teacher
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="3">Nenhum registro encontrado</td>
        </tr>
        </tbody>
    </table>
@endsection

@section('script')
    <script>
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '{{ url('/teachers') }}',
            type: 'get',
            dataType: 'json',
            success: function (response) {
                $('tbody').html('');
                $.each(response, function (index, row) {
                    $('tbody').append(
                        $('<tr>').append(
                            $('<td>', {'text': row.id}),
                            $('<td>', {'text': row.name}),
                            $('<td>').append(
                                $('<a>', {'href': '/teachers/'  + row.id + '/edit/', 'text': 'Edit'}),
                                $('<a>', {'href': '#', 'text': 'Delete', 'class': 'ml-2'})
                            )
                        )
                    );
                });
            }
        });
    </script>
@endsection