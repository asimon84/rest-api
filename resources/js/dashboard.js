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
        {data: 'string', name: 'string', className: 'truncate-text'},
        {data: 'text', name: 'text', className: 'truncate-text'},
        {data: 'json', name: 'json', className: 'truncate-text'},
        {data: 'boolean', name: 'boolean'},
        {data: 'integer', name: 'integer'},
        {data: 'float', name: 'float'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});

const myModalElement = document.getElementById('exampleModal');

const myModal = new bootstrap.Modal(myModalElement);
