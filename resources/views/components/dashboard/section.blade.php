<section class="{{ !empty($padding) ? 'section-padding' : '' }}">
    <div class="container-fluid">
        <header> 
            <h1 class="h3 d-inline-block">{{ $title }}</h1>
            <div class="section-actions">
                @if(!empty($actions))
                    {{ $actions }}
                @endif
            </div>
        </header>

        {{ $slot }}

    </div>
</section>