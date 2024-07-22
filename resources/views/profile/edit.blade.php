@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                

                <div class="card-body">

                    {{-- O put não funciona então tem 
                    que se usar post e @method('PUT') 
                    é assim não perguntes --}}

                    <form method="POST" action="{{ route('profile.update') }}"
                    enctype="multipart/form-data"
                    >
                        @csrf
                        @method('PUT')
                        
                        {{-- Description --}}

                        <div class="row mb-3">
                            <label for="description" 
                            class="col-md-4 col-form-label text-md-end">
                            {{ __('Description') }}
                            </label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control 
                                @error('description') is-invalid @enderror" 
                                name="description" 
                                value="{{ old('description') ?? 
                                Auth::user()->profile->description
                                }}" required 
                                autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Website --}}
                        
                        <div class="row mb-3">
                            <label for="website" 
                            class="col-md-4 col-form-label text-md-end">
                            {{ __('Website') }}
                            </label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control 
                                @error('website') is-invalid @enderror" 
                                name="website" 
                                value="{{ old('website') ?? 
                                Auth::user()->profile->website
                                }}" required 
                                autocomplete="website" >

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Picture --}}

                        <div class="row mb-3">
                            <label for="picture" 
                            class="col-md-4 col-form-label text-md-end">
                            {{ __('Picture') }}
                            </label>
                            {{-- accept="image/*" --}}
                            <div class="col-md-6">
                                <input id="picture" type="file" 
                                class="form-control form-control-file" 
                                name="picture" 
                                accept="image/jpeg, image/webp">

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
