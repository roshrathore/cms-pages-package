<?php

namespace Indianic\CmsPages\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsPageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => ['required', 'string', 'max:255', 'regex:/^[^\s]+(\s*[^\s]+)*$/'],
            'sub_title' => ['nullable', 'string', 'max:255', 'regex:/^[^\s]+(\s*[^\s]+)*$/'],
            'body' => ['required', 'string'],
            'meta_keywords' => ['nullable', 'string', 'regex:/^[^\s]+(\s*[^\s]+)*$/'],
            'meta_description' => ['nullable', 'string', 'regex:/^[^\s]+(\s*[^\s]+)*$/'],
        ];

        $routeName = explode('.', request()->route()->getName());
        $route = array_pop($routeName);

        if ($route === 'update' || $route === 'edit') { 
            $id = decrypt($this->route()->parameter('cms_page'));
            $rules['slug'] = ['required', 'max:255', 'unique:cms_pages,slug,' . $id . ',id', 'regex:/^[a-zA-Z0-9-]+$/'];
        } else {
            $rules['slug'] = ['required', 'max:255', 'unique:cms_pages,slug', 'regex:/^[a-zA-Z0-9-]+$/'];
        }

        return $rules;
    }

    /**
     * Set custom validation message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => __('admin.cms_pages.title_required'),
            'title.max' => __('admin.cms_pages.title_max'),
            'title.regex' => __('admin.cms_pages.title_regex'),
            'title.string' => __('admin.cms_pages.title_string'),
            'sub_title.max' => __('admin.cms_pages.sub_title_max'),
            'sub_title.regex' => __('admin.cms_pages.sub_title_regex'),
            'sub_title.string' => __('admin.cms_pages.sub_title_string'),
            'slug.max' => __('admin.cms_pages.slug_max'),
            'slug.regex' => __('admin.cms_pages.slug_regex'),
            'slug.required' => __('admin.cms_pages.slug_required'),
            'slug.unique' => __('admin.cms_pages.slug_unique'),
            'meta_keywords.regex' => __('admin.cms_pages.meta_keywords_regex'),
            'meta_keywords.string' => __('admin.cms_pages.meta_keywords_string'),
            'meta_description.regex' => __('admin.cms_pages.meta_description_regex'),
            'meta_description.string' => __('admin.cms_pages.meta_description_string')
        ];
    }
}
