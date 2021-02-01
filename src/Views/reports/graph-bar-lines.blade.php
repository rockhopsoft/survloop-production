/* resources/views/vendor/survloop/reports/graph-bar-lines.blade.php */
{
    label: "{{ $label }}",
    fill: false,
    lineTension: 0.1,
    backgroundColor: "{{ $brdColor }}",
    borderColor: "{{ $brdColor }}",
    borderCapStyle: 'butt',
    borderDash: [],
    borderDashOffset: 0.0,
    borderJoinStyle: 'miter',
    pointBorderColor: "{{ $dotColor }}",
    pointBackgroundColor: "#fff",
    pointBorderWidth: 1,
    pointHoverRadius: 5,
    pointHoverBackgroundColor: "{{ $dotColor }}",
    pointHoverBorderColor: "{{ $brdColor }}",
    pointHoverBorderWidth: 2,
    pointRadius: 1,
    pointHitRadius: 10,
    data: [ @foreach ($data as $d) {{ $d }}, @endforeach ],
}, 
