<?php

namespace App\Http\Controllers\PageControllers;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class PagesController extends Controller
{
    protected $categoryService;
    protected $productsService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->middleware('auth', ['except' => ['welcome', 'documentation', 'categoriesView', 'productsView']]);
        $this->categoryService = $categoryService;
        $this->productsService = $productService;
    }

    /**
     * Show the welcome page.
     */

    public function welcome()
    {
        $welcome = 'Welcome to Larastore';
        return view('pages.welcome', compact('welcome'));
    }

    /**
     * Show the documentation page.
     */
    public function documentation()
    {
        return view('pages.documentation');
    }

    /**
     * Shows the form for creating a category.
     * @return View
     */
    public function createCategory()
    {
        $category = new Category();
        $categories = $this->categoryService->index();
        return view('pages.categories.addCategory', compact('category', 'categories'));
    }

    /**
     * Store a Category from the form.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function storeCategory(Request $request)
    {
        $this->validate($request, ['category_name' => 'required|unique:categories']);

        $this->categoryService->store($request);
        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Created');
    }

    /**
     * Shows Categories list.
     *
     * @return View
     */
    public function categoriesView()
    {
        $categories = $this->categoryService->index();
        return view('pages.categories.categories', compact('categories'));
    }

    /**
     * Shows the form for editing a Category.
     * @param $id
     * @return View
     */
    public function updateCategoryView($id)
    {

        $category = $this->categoryService->show($id);
        return view('pages.categories.editCategory')->with('category', $category);
    }

    /**
     * Edits a Category from the form.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function updateCategory(Request $request, $id)
    {
        $this->validate($request, ['category_name' => 'required|unique:categories']);
        $this->categoryService->update($request, $id);
        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Updated');
    }

    /**
     * Deletes a Category from the list.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteCategory($id)
    {

        $this->categoryService->destroy($id);
        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Deleted');
    }

    /** Products */


    /**
     * Shows the Products List.
     * @return View
     */
    public function productsView()
    {
        $products = $this->productsService->index();
        return view('pages.products.products', compact('products'));
    }

    /**
     * Show the form for creating a Product.
     *
     * @return View
     */
    public function createProduct()
    {
        $product = new Product();
        $products = $this->productsService->index();
        error_log('Hello');
        return view('pages.products.addProduct', compact('product', 'products'));
    }



    /**
     * Store a Product from the form.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function storeProduct(Request $request)
    {

        $validator = Validator::make($request->all(), ['name' => 'required|unique:products', 'description' => 'required',
            'vat_tariff_id' => 'required|digits_between:0,5000',
            'category_id' => 'required|digits_between:0,5000'],
            ['digits_between' => 'Please select :attribute']);

        if ($validator->fails()) {
            return redirect('createProductView')->withErrors($validator)->withInput();
        }
        $this->productsService->store($request);
        return redirect()->action([PagesController::class, 'productsView'])->with('success', 'Product successfully Created');
    }

    /**
     * Deletes a Product from the list.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteProduct($id)
    {
        $this->productsService->destroy($id);
        return redirect()->action([PagesController::class, 'productsView'])->with('success', 'Product successfully Deleted');
    }

    /**
     * Shows the form for editing a Product.
     * @param $id
     * @return View
     */
    public function updateProductView($id)
    {
        $product = $this->productsService->show($id);
        return view('pages.products.editProduct')->with('product', $product);
    }

    /**
     * Edits a Product from the form.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function updateProduct(Request $request, $id)
    {

        $product = $this->productsService->show($id);

        if ($product->name == $request->name) {
            $this->validate($request, ['name' => 'required']);

        } else {


            $this->validate($request, ['name' => 'required|unique:products']);
        }

        $validator = Validator::make($request->all(), ['name' => 'required',
            'vat_tariff_id' => 'required|digits_between:0,5000',
            'category_id' => 'required|digits_between:0,5000'],
            ['digits_between' => 'Please select :attribute']);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $this->productsService->update($request, $id);
        return redirect()->action([PagesController::class, 'productsView'])->with('success', 'Product successfully Updated');
    }

}

