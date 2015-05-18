@extends('app')
@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table id="table"
                       data-toggle="table"
                       data-sort-name="id"
                       data-sort-order="desc"
                       data-pagination="true"
                       data-show-refresh="true"
                       data-striped="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-url="/api/v1/metric"
                       data-method="get"
                       data-content-type="application/json">
                    <thead>
                    <tr>
                        <th data-field="id">ID</th>
                        <th data-field="name">Category</th>
                        <th data-field="level">Level</th>
                        <th data-field="value">value</th>
                        <th data-field="repetitions">Repetitions</th>
                        <th data-field="game_id">Game ID</th>
                        <th data-field="updated_at">Updated at</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"></script>
    <script type="text/javascript">
        setInterval(function() {
            $('#table').bootstrapTable('refresh',
            {
                silent: true
            });
        }, 5000);
    </script>
@endsection

