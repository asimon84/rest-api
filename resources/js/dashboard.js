var chart = c3.generate(
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