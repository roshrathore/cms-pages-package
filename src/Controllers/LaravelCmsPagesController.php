<?php

namespace Indianic\CmsPages\Controllers;

use App\Http\Controllers\Controller;
use Indianic\CmsPages\DataGrids\CmsPageDataGrid;
use Indianic\CmsPages\Requests\CmsPageRequest;
use Indianic\CmsPages\Repositories\CmsPageRepository;
use Illuminate\Http\Request;
use Indianic\CmsPages\Models\CmsPage;
use Kris\LaravelFormBuilder\FormBuilder;

class LaravelCmsPagesController extends Controller
{
    /**
     * @var Repository
     */
    protected $model;

    /**
     * CmsPageController constructor.
     * @param CmsPage $model
     */
    public function __construct(CmsPage $model)
    {
        $this->model = new CmsPageRepository($model);

        //$this->middleware('permission:create-cms-pages', ['only' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $dataGridHtml = CmsPageDataGrid::getHTML();
        return view('cms-pages::index', compact('dataGridHtml'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\Indianic\CmsPages\Forms\CmsPageForm::class, [
                    'method' => 'POST',
                    'class' => 'row',
                    'url' => route('cms-pages.store')
                ]);

        return view('cms-pages::create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CmsPage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsPageRequest $request)
    {
        $data = $request->all();
        $this->model->create($data);
        return redirect()->route('cms-pages.index')->with([
            'message' => __('admin.cms_pages.add_success')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $id = decrypt($id);
        $model = $this->model->show($id);
        $form = $formBuilder->create('Indianic\CmsPages\Forms\CmsPageForm', [
                    'model' => $model,
                    'class' => 'row',
                    'method' => 'PUT',
                    'url' => route('cms-pages.update', encrypt($id))
                ]);
        return view('cms-pages::edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CmsPageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsPageRequest $request, $id)
    {
        $id = decrypt($id);
        $data = $request->all();
        $this->model->update($data, $id);

        cache()->forget('cached_cmspage'); // this will remove cached content for front end to show fresh data

        return redirect()->route('cms-pages.index')->with([
            'message' => __('admin.cms_pages.edit_success')
        ]);
    }

    /**
     * Change the Status of the CMS page.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        try {
            if ($request->ajax()) {
                if ($request->input('id') > 0) {
                    $model = $this->model->show($request->input('id'));
                    if ($model['status'] === 'Inactive') { //make status Active
                        $data['status'] = 'Active';
                        $status = 'activated';
                    } else { //make status Inactive
                        $data['status'] = 'Inactive';
                        $status = 'deactivated';
                    }
                    $this->model->update($data, $request->input('id'));
                    return response()->json([
                        'status' => 'success',
                        'message' => __('Cms Page has been ' . $status . ' successfully.'),
                        'alert-type' => 'success'
                    ]);
                }
                return response()->json([
                    'status' => 'error',
                    'message' => __('Something went wrong.'),
                    'alert-type' => 'error'
                ]);
            }
        } catch (\Exception  $e) {
            return response()->json(['message' => __($e->getMessage()), 'alert-type' => 'error']);
        }
    }
}
