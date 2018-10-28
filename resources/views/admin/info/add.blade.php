@extends('layouts.admin')

@section('pagetitle')
Add New Infobox - Admin
@endsection

@section('content')
<div class="d-flex align-items-center">
    <h2 class="pt-2 mb-0">Infobox Links - Add</h2>

</div>
<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        <form action="{{ route('info.store') }}" method="POST" autocomplete="off" novalidate class="mb-1">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                    value="{{ old('title') }}" autofocus>

                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input id="subtitle" type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" name="subtitle"
                    value="{{ old('subtitle') }}" autofocus>

                @if ($errors->has('subtitle'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group">
                <label for="icon">Icon</label>
                <input id="icon" type="text" class="form-control{{ $errors->has('icon') ? ' is-invalid' : '' }}" name="icon"
                    value="{{ old('icon') }}" autofocus>
                <small id="iconHelp" class="form-text text-muted">Click the icon below</small>
                @if ($errors->has('icon'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('icon') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link"
                    value="{{ old('link') }}" autofocus>
                <small id="linkHelp" class="form-text text-muted">Must Start with http:// or https://</small>
                @if ($errors->has('link'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('link') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-footer" style="margin-top: 0; padding-top:0">

                <button type="submit" class="btn btn-primary btn-md">Save Infobox</button>
                <a class="btn btn-light btn-md" href="{{ route('info.index') }}">Cancel</a>
            </div><!-- End .form-footer -->

        </form>
        <hr/>
        @include('utils.faicons')
    </div>
</div>
@endsection


@section('extrajs')
<script defer>
    $(document).ready(function() {
        $('.icon-holder').on('click', function(e) {
            $('#icon').val(e.target.className);
        });
    })
</script>
    
@endsection