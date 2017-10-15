@extends('layouts.dashboard')

@section('content')
    @component('components.dashboard.section', [ 'title' => 'Nouveau Article' ])
        <div class="row">
            <div class="col-md-6">
                @component('components.dashboard.card', [ 'title' => 'Article' ])
                    <form action="{{ URL::to('backoffice/article') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="title">Titre :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <small class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </small>
                                @endif
                            </div>
                        </div> <!-- .form-group -->
                        <div class="line"></div>
                        <div class="form-group">
                            <label class="form-control-label">Text :</label>
                            <textarea class="form-control" rows="20" name="content">{{ old('content') }}</textarea>

                            @if ($errors->has('title'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </small>
                            @endif
                        </div> <!-- .form-group -->

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="draft" {{ old('draft') ? 'checked' : '' }}>
                                    Marquer comme brouillon
                                </label>
                            </div>
                        </div> <!-- .form-group -->


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">
                                Enregister
                            </button>
                        </div> <!-- .form-group -->
                    </form>
                @endcomponent
            </div> <!-- .col -->
        </div> <!-- .row -->
    @endcomponent
@stop