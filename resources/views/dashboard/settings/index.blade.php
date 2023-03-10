@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12">


            <p>



                <a href="{{ route('settings.edit', $settings->id) }}" class="btn btn-primary mb-2 me-2">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    settings
                                                    </span> Подесувања</a>
            </p>

        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 mb-4 mb-lg-4">
            <div class="card">

                <!-- Card Image -->

                <img src="/assets/img/settings/medium/{{ $settings->image }}" alt="{{ $settings->title }}" class="card-img-top">


                <!-- Card - Body -->
                <div class="card-body mt-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-1">
                                {{ $settings->title }}
                            </h6>
                            <small class="text-muted">
                                {{ $settings->mainurl }}
                            </small>
                            <h6>
                                <small class="text-muted">
                                    {{ $settings->updated_at->diffForHumans() }}
                                </small>
                            </h6>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-8 mb-0 mb-lg-8">


            <div class="card h-100 table-card table-nowrap">
                <div class="card-header">
                    <h5 class="mb-0">Линкови</h5>
                </div>
                <table class="mb-0 table">
                    <thead class="small text-uppercase bg-body text-muted">
                    <tr>
                        <th>Network</th>
                        <th>Линк</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Twitter</td>
                        <td>
                            {{ $settings->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td>
                            {{ $settings->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <td>Skype</td>
                        <td>
                            {{ $settings->skype }}
                        </td>
                    </tr>
                    <tr>
                        <td>LinkedIn</td>
                        <td>
                            {{ $settings->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <td>Pinterest</td>
                        <td>
                            {{ $settings->pinterest }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h5 class="pe-3 mb-0">Информации</h5>

                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush mb-0">


                        <li class="list-group-item bg-transparent px-4">
                            <div class="d-flex align-items-center">

                                <div class="overflow-hidden flex-grow-1">
                                    <h6 class="mb-0 text-truncate">
                                        Адреса
                                    </h6>
                                    <span class="text-muted text-truncate d-block">{{ $settings->address }}</span>
                                </div>
                            </div>
                        </li>

                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-4">
                            <div class="d-flex align-items-center">

                                <div class="overflow-hidden flex-grow-1">
                                    <h6 class="mb-0 text-truncate">
                                        Телефон
                                    </h6>
                                    <span class="text-muted text-truncate d-block">{{ $settings->phone }}</span>
                                </div>
                            </div>
                        </li>
                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-4">
                            <div class="d-flex align-items-center">

                                <div class="overflow-hidden flex-grow-1">
                                    <h6 class="mb-0 text-truncate">
                                        Email
                                    </h6>
                                    <span class="text-muted text-truncate d-block">{{ $settings->email }}</span>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h5 class="pe-3 mb-0">Опис</h5>
                </div>
                <div class="card-body p-5">
                    {!! $settings->description !!}
                </div>
            </div>
        </div>
    </div>

@endsection
