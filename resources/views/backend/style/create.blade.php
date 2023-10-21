@extends('master.backend')
@section('title',__('backend.style'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.style.store') }}" class="needs-validation" novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('backend.templates.components.card-col-12',['variable' => 'style'])
                                    @include('backend.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.name')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input name="name[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required="" placeholder="@lang('backend.name')">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.alt')
                                                        </label>
                                                        <textarea name="alt[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  placeholder="@lang('backend.alt')"
                                                                  rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>@lang('backend.slug') <span class="text-danger">*</span></label>
                                            <input name="slug" type="text" class="form-control" required
                                                   placeholder="/news">
                                            {!! validation_response('backend.slug') !!}
                                        </div>
                                        {{--                                        <div class="mb-3">--}}
                                        {{--                                            <label>@lang('backend.parent') @lang('backend.style')</label>--}}
                                        {{--                                            <select name="parent" type="text" class="form-control">--}}
                                        {{--                                                <option value="">-</option>--}}
                                        {{--                                                @foreach($styles as $style)--}}
                                        {{--                                                    <option--}}
                                        {{--                                                        value="{{ $style->id }}">{{ $style->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</option>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}
                                        <div class="mb-3">
                                            <label>@lang('backend.photo')
                                                <span class="text-danger">*</span></label>
                                            <input name="photo" type="file" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>@lang('backend.photos')</label>
                                            <input type="file" class="form-control mb-2" id="photos" name="photos[]"
                                                   multiple>
                                            <div id="image-preview-container" class="d-flex flex-wrap"></div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck2" checked=""
                                                   name="is_home">
                                            <label class="form-check-label" for="formCheck2">
                                                @lang('backend.is-home')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @include('backend.templates.components.buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('backend.templates.components.tiny')
    @include('backend.templates.components.preview-images')
@endsection
