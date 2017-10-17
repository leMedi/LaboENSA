@extends('layouts.dashboard')

@section('content')
    @component('components.dashboard.section', [ 'title' => 'Articles' ])
        <div class="row mb-4">
            <div class="col-md-6">
                @component('components.dashboard.card', [ 'title' => 'Brouillons' ])
                    <ul class="news list-unstyled">
                        @foreach($drafts as $d)
                            <li class="d-flex justify-content-between"> 
                                <div class="left-col d-flex">
                                    <div class="icon"><i class="icon-bill"></i></div>
                                    <div class="title">
                                        <strong>
                                            <a href="{{ URL::to('backoffice/article/' . $d->id) }}">
                                                {{ $d->title }}
                                            </a>
                                        </strong>
                                        <p>{{ $d->content }}</p>
                                    </div>
                                </div>
                                <div class="right-col text-right">
                                    <div class="update-date">{{ $d->created_at->day }}<span class="month">{{ $d->created_at->format('F') }}</span></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endcomponent
            </div> <!-- .col -->
            
            <div class="col-md-6">
                @component('components.dashboard.card', [ 'title' => 'Les Articles Publiée' ])
                    <ul class="news list-unstyled">
                        @foreach($published as $p)
                            <li class="d-flex justify-content-between"> 
                                <div class="left-col d-flex">
                                    <div class="icon"><i class="icon-bill"></i></div>
                                    <div class="title">
                                        <strong>
                                            <a href="{{ URL::to('backoffice/article/' . $p->id) }}">
                                                {{ $p->title }}
                                            </a>
                                        </strong>
                                        <p>{{ $p->content }}</p>
                                    </div>
                                </div>
                                <div class="right-col text-right">
                                    <div class="update-date">{{ $p->created_at->day }}<span class="month">{{ $p->created_at->format('F') }}</span></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endcomponent
            </div> <!-- .col -->
        </div> <!-- .row -->

        <div class="row">
            <div class="col-md-12">
                @component('components.dashboard.card', [ 'title' => 'Pas encore verifiée' ])
                    <ul class="news list-unstyled">
                        @foreach($pending as $p)
                            <li class="d-flex justify-content-between"> 
                                <div class="left-col d-flex">
                                    <div class="icon"><i class="icon-bill"></i></div>
                                    <div class="title">
                                        <strong>
                                            <a href="{{ URL::to('backoffice/article/' . $p->id) }}">
                                                {{ $p->title }}
                                            </a>
                                        </strong>
                                        <p>{{ $p->content }}</p>
                                    </div>
                                </div>
                                <div class="right-col text-right">
                                    <div class="update-date">{{ $p->created_at->day }}<span class="month">{{ $p->created_at->format('F') }}</span></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endcomponent
            </div> <!-- .col -->
        </div>

    @endcomponent
@stop