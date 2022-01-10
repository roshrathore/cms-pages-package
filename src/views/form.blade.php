{{-- Generating form from App\Forms\CmsPageForm.php --}}
{!! form_start($form) !!}
{!! form_until($form, 'status') !!}
<div class="col-md-12">
    {!! form_until($form, 'clear') !!}
</div>
{!! form_rest($form) !!}
{!! form_end($form, $renderRest = true) !!}

@include('plugins.ckeditor')
@push('scripts')
    {!! JsValidator::formRequest('Indianic\CmsPages\Requests\CmsPageRequest') !!}

    <script>
        let editor = CKEDITOR.replace('body', options);
        editor.config.allowedContent = true;
        editor.filebrowserUploadMethod = 'form';
        for (var i in CKEDITOR.instances) {
            CKEDITOR.instances[i].on('change', function()
            {
                CKEDITOR.instances[i].updateElement()
            });
        }
    </script>
@endpush
