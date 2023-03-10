@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-1">Подесувања</h5>

                    @if(Session::has('flash_message'))
                        <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
                    @endif
                </div>
                <div class="card-body">
                    <form class="row g-3" method="post" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputImage" data-tippy-placement="bottom" data-tippy-content="Изберете слика" class="btn btn-primary me-3">
                                Изберете слика
                            </label>
                            <input type="file"
                                   class="form-control d-none w-0 h-0 position-absolute @error('image') is-invalid @enderror"
                                   id="inputImage" name="image">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-md-12">
                            <label for="title" class="form-label">Наслов</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" name="title">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="mainurl" class="form-label">Главна адреса</label>
                            <input type="text" class="form-control @error('mainurl') is-invalid @enderror"
                                   id="mainurl" name="mainurl">
                            @error('mainurl')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-md-12">
                            <label for="email" class="form-label">Емаил</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        <div class="col-md-12">
                            <label for="description" class="form-label">Опис</label>
                            <textarea name="description" id="description" placeholder="Textarea"
                                      class="form-control quill-editor"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-md-12">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                   id="link" name="link">
                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-md-12">
                            <label for="address" class="form-label">Адреса</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   id="address" name="address">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                   id="phone" name="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="row">
                        <div class="col-md-6">
                            <label for="twitter" class="form-label">Твитер</label>
                            <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                   id="twitter" name="twitter">
                            @error('twitter')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Фејзбук</label>
                                <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                       id="facebook" name="facebook">
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="skype" class="form-label">Скајп</label>
                                <input type="text" class="form-control @error('skype') is-invalid @enderror"
                                       id="skype" name="skype">
                                @error('skype')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" class="form-control @error('linkedin') is-invalid @enderror"
                                       id="linkedin" name="linkedin">
                                @error('linkedin')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                       id="youtube" name="youtube">
                                @error('youtube')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                <label for="flickr" class="form-label">Flickr</label>
                                <input type="text" class="form-control @error('flickr') is-invalid @enderror"
                                       id="flickr" name="flickr">
                                @error('flickr')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="pinterest" class="form-label">Pinterest</label>
                                <input type="text" class="form-control @error('pinterest') is-invalid @enderror"
                                       id="pinterest" name="pinterest">
                                @error('pinterest')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-12">
                            <label for="user_id" class="form-label">Корисник</label>
                            <select id="user_id" class="form-select" name="user_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-md-12 mb-4">
                            <button class="btn btn-primary mb-2 me-2">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    check_circle
                                                    </span> Додади
                            </button>

                            <a href="/dashboard/settings" class="btn btn-secondary mb-2 me-2">
                                                <span class="material-symbols-rounded align-middle me-2">

                                                    </span> Назад</a>
                        </div>

                    </form>
                </div>
            </div>

@endsection
