@extends('master.backend')
@section('title',__('backend.faq'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="card">
                            <form action="{{ route('backend.faq.update',$id) }}" class="needs-validation" novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.templates.components.card-col-12',['variable' => 'faq'])
                                    @include('backend.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.name') <span class="text-danger">*</span></label>
                                                        <input name="name[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $faq->translate($lan->code)->name ?? __('backend.translation-not-found') }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.description') <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="description[{{ $lan->code }}]"
                                                                  id="elm{{ $lan->code }}1"
                                                                  class="form-control"
                                                                  required="">{!! $faq->translate($lan->code)->description ?? __('backend.translation-not-found') !!}</textarea>
                                                        {!! validation_response('backend.description') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.schema') <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="schema[{{ $lan->code }}]"
                                                                  class="form-control"
                                                                  required=""
                                                                  rows="9">{{ $faq->translate($lan->code)->schema ?? __('backend.translation-not-found') }}</textarea>
                                                        {!! validation_response('backend.schema') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
@endsection
