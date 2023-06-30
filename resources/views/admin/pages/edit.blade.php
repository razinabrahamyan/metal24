@extends('admin.layouts.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Blog Edit -->
                <div class="blog-edit-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div id="content_edit" class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3>Content title</h3>
                                            <p class="card-text mt-2">Updated:&ensp;
                                                <span class="text-info">
                                                    {{\Carbon\Carbon::parse($content->created_at)->format('M d, Y')}}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <form action="javascript:;" class="mt-2">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="blog-edit-slug" class="font-medium-2">Slug</label>
                                                    <input type="text" id="blog-edit-slug" class="form-control" value="{{$slug}}" readonly/>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-2">
                                                    <label class="dark-layout font-medium-2">Текст 1</label>
                                                    <div id="editor1">{!! $content->text_1 !!}</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-2">
                                                    <label class="dark-layout font-medium-2">Текст 2</label>
                                                    <div id="editor2">{!! $content->text_2 !!}</div>
                                                </div>
                                            </div>
{{--                                            <div class="col-12 mb-2">--}}
{{--                                                <div class="border rounded p-2">--}}
{{--                                                    <h4 class="mb-1">Featured Image</h4>--}}
{{--                                                    <div class="media flex-column flex-md-row">--}}
{{--                                                        <img src="../../../app-assets/images/slider/03.jpg" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />--}}
{{--                                                        <div class="media-body">--}}
{{--                                                            <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>--}}
{{--                                                            <p class="my-50">--}}
{{--                                                                <a href="javascript:void(0);" id="blog-image-text">C:\fakepath\banner.jpg</a>--}}
{{--                                                            </p>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <div class="form-group mb-0">--}}
{{--                                                                    <div class="custom-file">--}}
{{--                                                                        <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" />--}}
{{--                                                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-12 mt-50">
                                                <button type="submit" class="btn btn-primary mr-1" @click="submit('{{route('page.update', $content->id)}}')">Save Changes</button>
                                            </div>
                                    </form>
                                    <!--/ Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/ Blog Edit -->

            </div>
        </div>
    </div>
@endsection

@push('styles')
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/plugins/forms/form-quill-editor.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/page-blog.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/forms/select/select2.min.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/editors/quill/katex.min.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/editors/quill/quill.snow.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('scripts')
{{--    <script src="{{asset('admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>--}}
{{--    <script src="{{asset('admin/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>--}}
{{--    <script src="{{asset('admin/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>--}}
{{--    <script src="{{asset('admin/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>--}}
{{--    <script src="{{asset('admin/app-assets/js/scripts/pages/page-blog-edit.js')}}"></script>--}}
    <script src="{{asset('admin/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/js/scripts/extensions/ext-component-toastr.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#editor1').summernote();
            $('#editor2').summernote();
        });
        let vue = new Vue({
            el: '#content_edit',
            data : {
                setPrices: [],
            },
            methods : {
                submit : function(route){
                    let text1 = $('#editor1').text()
                    let text2 = $('#editor2').text()
                    const payload = {
                        text_1 : text1.length > 0 ? $("#editor1").summernote('code') : null,
                        text_2 : text2.length > 0 ? $('#editor2').summernote('code') : null
                    }
                    axios.post(route, payload)
                        .then(result => {
                            toastr['success']( 'Контент успешно обновлен!', 'Редактирование', {
                                positionClass: 'toast-top-center',
                            });
                        })
                }
            }
        })
    </script>
@endpush
