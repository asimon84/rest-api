var chart = c3.generate(
    {
        bindto: '#record-chart',
        data: {
            x: 'date',
            columns: window.chartData,
        type: 'line'
    },
    axis: {
        x: {
            type: 'timeseries',
                tick: {
                format: '%Y-%m-%d'
            }
        }
    }
});