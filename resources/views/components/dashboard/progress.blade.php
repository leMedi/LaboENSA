<div class="wrapper user-activity">
    <h2 class="display h4">{{ $title }}</h2>
    <div class="number">{{ $number }}</div>
    <h3 class="h4 display">{{ $progressTitle }}</h3>
    <div class="progress">
        <div role="progressbar" style="width: {{ $slot }}%" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
    </div>
    <div class="page-statistics d-flex justify-content-between">
        <div><span>{{ $leftTitle }}</span><strong>{{ $leftNumber }}</strong></div>
        <div><span>{{ $rightTitle }}</span><strong>{{ $rightNumber }}</strong></div>
    </div>
</div>