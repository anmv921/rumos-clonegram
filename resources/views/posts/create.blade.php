@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Story') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('posts.store') }}"
                    enctype="multipart/form-data"
                    >
                        @csrf
                        
                        {{-- Caption --}}

                        <div class="row mb-3">
                            <label for="caption" 
                            class="col-md-4 col-form-label text-md-end">
                            {{ __('Caption') }}
                            </label>

                            <div class="col-md-6">
                                <input id="caption" 
                                type="text" class="form-control 
                                @error('caption') is-invalid @enderror" 
                                name="caption" 
                                value="{{ old('caption') }}" required 
                                autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Photo --}}

                        <div class="row mb-3">
                            <label for="photo" 
                            class="col-md-4 col-form-label text-md-end">
                            {{ __('Photo') }}
                            </label>
                            {{-- accept="image/*" --}}
                            <div class="col-md-6">
                                <input id="photo" type="file" 
                                class="form-control form-control-file" 
                                name="photo" 
                                accept="image/jpeg, image/webp" required>

                                @error('photo')
                                    {{-- class="invalid-feedback" --}}
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
