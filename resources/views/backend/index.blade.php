@extends('layouts.admin')

@section('content')

  
    <div class="mx-auto p-6">
        <div class="flex">
            <p class="text-2xl font-medium">Dashboard</p>
        </div>

        <div class="md:grid md:grid-cols-4 md:gap-6 mx-auto mt-5">
            <div class="md:col-span-1 p-5 bg-indigo-500 rounded text-white">
                <div class="md:grid md:grid-cols-4 md:gap-1">
                    <div class="md:col-span-3">
                        <div class="font-medium">Blogs</div>
                    </div>
                    <div class="md:col-span-1">
                        <div class="font-medium text-right">{{ $blogs_count }}</div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1 p-5 bg-red-500 rounded text-white">
                <div class="md:grid md:grid-cols-4 md:gap-1">
                    <div class="md:col-span-3">
                        <div class="font-medium">Teams</div>
                    </div>
                    <div class="md:col-span-1">
                        <div class="font-medium text-right">{{ $team_count }}</div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1 p-5 bg-green-500 rounded text-white">
                <div class="md:grid md:grid-cols-4 md:gap-1">
                    <div class="md:col-span-3">
                        <div class="font-medium">Visitors</div>
                    </div>
                    <div class="md:col-span-1">
                        <div class="font-medium text-right">10</div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1 p-5 bg-yellow-500 rounded text-white">
                <div class="md:grid md:grid-cols-4 md:gap-1">
                    <div class="md:col-span-3">
                        <div class="font-medium">Some</div>
                    </div>
                    <div class="md:col-span-1">
                        <div class="font-medium text-right">2</div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="md:grid md:grid-cols-2 md:gap-6 mx-auto mt-5">
            <div class="md:col-span-1 p-5 bg-gray-300 rounded text-white">
                <p class="font-medium text-gray-700">Most Viewed Pages</p>

                <canvas id="mvp" class="chart__box-chart"></canvas>
            </div>

            <div class="md:col-span-1 p-5 bg-gray-300 rounded text-white">
                <p class="font-medium text-gray-700">Top Referrers</p>

                <canvas id="tr" class="chart__box-chart"></canvas>
            </div>

            <div class="md:col-span-1 p-5 bg-gray-300 rounded text-white">
                <p class="font-medium text-gray-700">User Type</p>

                <canvas id="ut" class="chart__box-chart"></canvas>
            </div>

            <div class="md:col-span-1 p-5 bg-gray-300 rounded text-white">
                <p class="font-medium text-gray-700">Top Browsers</p>

                <canvas id="tb" class="chart__box-chart"></canvas>
            </div>
        </div>
    </div>

    

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
Chart.plugins.register({
    afterDraw: function(chart) {
    if (chart.data.datasets[0].data.length === 0) {
        // No data is present

      var ctx = chart.chart.ctx;
      var width = chart.chart.width;
      var height = chart.chart.height
      chart.clear();

      ctx.save();
      ctx.textAlign = 'center';
      ctx.textBaseline = 'middle';
      ctx.font = "16px normal 'Helvetica Nueue'";
      ctx.fillText('No data to display', width / 2, height / 2);
      ctx.restore();
    }
  }
});

Chart.defaults.global.defaultFontColor = "#687281";
Chart.defaults.global.legend.labels.usePointStyle = true;
    
var chart_mvp = document.getElementById('mvp');
var chart_tr = document.getElementById('tr');
var chart_ut = document.getElementById('ut');
var chart_tb = document.getElementById('tb');

let mvp_url = [];
let mvp_pv = [];
let tr_url = [];
let tr_pv = [];
let ut_type = [];
let ut_sessions = [];
let tb_browsers = [];
let tb_sessions = [];

@foreach ($mvp as $key => $value)
    mvp_url.push("{{ $value['url'] }}");
    mvp_pv.push({{ $value['pageViews'] }});
@endforeach

@foreach ($tr as $key => $value)
    tr_url.push("{{ $value['url'] }}");
    tr_pv.push({{ $value['pageViews'] }});
@endforeach

@foreach ($ut as $key => $value)
    ut_type.push("{{ $value['type'] }}");
    ut_sessions.push({{ $value['sessions'] }});
@endforeach

@foreach ($tb as $key => $value)
    tb_browsers.push("{{ $value['browser'] }}");
    tb_sessions.push({{ $value['sessions'] }});
@endforeach

var mpv_chart = new Chart(chart_mvp, {
    type: 'pie',
    data: {
        labels: mvp_url,
        datasets: [{
            label: 'Page Views',
            data: mvp_pv,
            backgroundColor: [
                'rgba(6,71,137, 1)',
                'rgba(66,122,161, 1)',
                'rgba(235,242,250, 1)',
                'rgba(103,148,54, 1)',
                'rgba(165,190,0, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(6,71,137, 1)',
                'rgba(66,122,161, 1)',
                'rgba(235,242,250, 1)',
                'rgba(103,148,54, 1)',
                'rgba(165,190,0, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom',
        },
        scales: {
            display: false
        }
    }
});

var tr_chart = new Chart(chart_tr, {
    type: 'pie',
    data: {
        labels: tr_url,
        datasets: [{
            label: '# of Votes',
            data: tr_pv,
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        },
        scales: {
            display: false
        }
    }
});

var ut_chart = new Chart(chart_ut, {
    type: 'pie',
    data: {
        labels: ut_type,
        datasets: [{
            label: '# of Votes',
            data: ut_sessions,
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        },
        scales: {
            display: false
        }
    }
});

var tb_chart = new Chart(chart_tb, {
    type: 'pie',
    data: {
        labels: tb_browsers,
        datasets: [{
            label: '# of Votes',
            data: tb_sessions,
            backgroundColor: [
                'rgba(251,54,64, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
            borderColor: [
                'rgba(251,54,64, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        },
        scales: {
            display: false
        }
    }
});

</script>

</section>
@endsection