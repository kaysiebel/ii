<div class="accordion ripple">Statistik</div>
<div class="accordion-panel">

    <a href="{{ url("/statistic") }}">
        <div class="canvas-sm">
            {!! $chart->container() !!}

            {!! $chart->script() !!}
        </div>
    </a>

</div>