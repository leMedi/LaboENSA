<section class="{{ !empty($padding) ? 'section-padding' : '' }}">
    <div class="container-fluid">
        <header> 
            <h1 class="h3 display">{{ $title }}</h1>
        </header>

        {{ $slot }}

    </div>
</section>