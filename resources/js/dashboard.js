var chart = window.c3.generate(
{
    bindto: '#record-chart',
    data: {
        x: 'dates',
        columns: window.chartData,
        type: 'line'
    },
    axis: {
        x: {
            type: 'timeseries',
            tick: {
                format: '%Y-%m-%d'
            }
        },
        y: {
            min: 0,
            padding: {
                bottom: 0
            }
        }
    }
});

new DataTable('#myDataTable', {
    processing: true,
    serverSide: true,
    ajax: window.route,
    columns: [
        {data: 'id', name: 'id'},
        {data: 'string', name: 'string'},
        {data: 'text', name: 'text'},
        {data: 'json', name: 'json'},
        {data: 'boolean', name: 'boolean'},
        {data: 'integer', name: 'integer'},
        {data: 'float', name: 'float'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});
