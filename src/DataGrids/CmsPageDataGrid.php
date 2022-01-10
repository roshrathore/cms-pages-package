<?php

namespace Indianic\CmsPages\DataGrids;

use Indianic\LaravelDataGrid\LaravelDataGrid;
use DB;

class CmsPageDataGrid extends LaravelDataGrid
{
    public $guard = 'admin';
    /**
     * Define unique table id
     * @var mixed $uniqueID
     */
    public $uniqueID = 'cms_pages';

    /**
     * Define how many rows you want to display on a page
     * @var int $rowPerPage
     */
    public $recordsPerPage = 10;

    /**
     * Define row per page dropdown options
     * @var array $recordsPerPageOptions
     */
    public $recordsPerPageOptions;

    /**
     * Define mysql column name which you want to default on sorting
     * @var string $sortBy
     */
    public $sortBy;

    /**
     * Define default soring direction
     * Example: ASC | DESC
     * @var string $sortByDirection
     */
    public $sortByDirection;

    /**
     * Set download file prefix or set false
     * @var mixed
     */
    protected $downloadFilePrefix = 'cms_pages';

    /**
     * Get Resource of Query Builder
     */
    public function resource()
    {
        return DB::table('cms_pages');
    }

    /**
     * Get Columns with key value
     */
    public function columns(): array
    {
        return [
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'slug' => 'Slug',
            'status' => 'Status',
            'action' => 'Action',
        ];
    }

    /**
     * Return columns id which you want to allow on sorting
     * @return array
     */
    public function sortableColumns(): array
    {
        return [
            'title',
            'sub_title',
            'slug',
            'status',
        ];
    }

    /**
     * Return columns id with label which you want to allow on download
     * @return array
     */
    public function downloadableColumns(): array
    {
        return [
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'slug' => 'Slug',
            'status_download' => __('admin.status'),
        ];
    }

    /**
     * Get status column for downloading
     *
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function getColumnStatusDownload($data)
    {
        return $data['status'];
    }

    /**
     * Return columns id with data type which you want to allow on searching
     * @return array
     */
    public function searchableColumns(): array
    {
        return [
            'title' => 'string',
            'sub_title' => 'string',
            'slug' => 'string',
            'status' => 'string',
        ];
    }

    /**
    * Return columns status with toggle UI
    */
    public function getColumnStatus($data)
    {
        return '<div class="custom-control custom-switch light">
                    <input type="checkbox" class="custom-control-input change-status" data-id = "' . $data['id'] . '" id="switchCheckbox' . $data['id'] . '" ' . (($data['status'] == 'Active') ? 'checked' : '') . '>
                    <label class="custom-control-label" for="switchCheckbox' . $data['id'] . '"></label>
                </div>';
    }

    /**
     * Return
     * @return string
     */
    public function getColumnAction($data)
    {
        return $return = '<a class="cursor-pointer mr-3" href="' . route(
            'cms-pages.edit',
            encrypt($data['id'])
        ) . '" data-toggle="tooltip" data-original-title="' . __('Edit') . '"><i class="bx bx-edit"></i></a>';
    }
}
