<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 dashboard-chart-container">
            <div id="record-chart"></div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>String</th>
                    <th>Text</th>
                    <th>JSON</th>
                    <th>Bool</th>
                    <th>Int</th>
                    <th>Float</th>
                    <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>

<script>
    window.chartData = @json($chartData);
    {{--window.route = "{{ route('records') }}";--}}

//    var table = document.getElementsByClassName('.data-table').DataTable({
//        processing: true,
//        serverSide: true,
//        ajax: window.route,
//        columns: [
//            {data: 'id', name: 'id'},
//            {data: 'string', name: 'string'},
//            {data: 'text', name: 'text'},
//            {data: 'json', name: 'json'},
//            {data: 'bool', name: 'bool'},
//            {data: 'int', name: 'int'},
//            {data: 'float', name: 'float'},
//            {data: 'action', name: 'action', orderable: false, searchable: false},
//        ]
//    });
</script>

@vite('resources/js/dashboard.js')