<?php

namespace App\Http\Controllers;

use App\Category;
use App\CateProd;
use App\ChildCate;
use App\ChildProd;
use App\News;
use App\Products;
use App\Contact;
use App\System;
use App\Fengshui;
use App\BagiaTudu;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FlexshopController extends Controller
{
    public function __construct()
    {
        $htmlCateProd = "";
        //TODO menu products - san pham
        $cateParent = DB::table('cate_prods as cate')
            ->leftjoin('child_prods as chil', 'cate.id', '=', 'chil.id')
            ->select('cate.name', 'cate.alias','cate.weight')
            ->where('chil.lvl', 0)
            ->orderBy('cate.weight','desc')
            ->get();
        foreach ($cateParent as $cate) {
            if ($cate) {
                $htmlCateProd .= '<li class=" col-xs-12 col-sm-6">';
                $htmlCateProd .= '<a href="' . route('cateListProduct', $cate->alias) . '">' . $cate->name . '</a>';
                $htmlCateProd .= '</li>';
            }
        }
        //TODO System
        $getSystem = DB::table('systems')
            ->first();

        view()->share([
            'thisCateDrop' => $htmlCateProd,
            'system' => $getSystem,
        ]);
    }

    //TODO here Trang chu **************************************
    public function index()
    {
        $htmlFeatureProject = '';
        $htmlFeatureProduct = '';
        $htmlFeatureThietke = '';
        $htmlFeatureNoithat = '';
        $htmlSlider = '';
        $htmlLoaiSp = '';
        $htmlNews = '';
        $htmlFengshui = '';
        $htmlPartner = '';
        $htmlNewNews = '';
        $htmlChungcu = '';
        $htmlNhapho = '';
        //TODO get Slider
        $getSlider = DB::table('sliders')
            ->select('name', 'addSlug', 'images', 'weight')
            ->where('active', 1)
            ->orderBy('weight', 'desc')
            ->get();
        foreach ($getSlider as $get) {
            if (isset($get)) {
                $htmlSlider .= '<div class="item ">';
                $htmlSlider .= '<a href="' . $get->addSlug . '">';
                $htmlSlider .= '<img class="responsive" src="' . asset('upload/slider/' . $get->images) . '"/>';
                $htmlSlider .= '</a>';
                $htmlSlider .= '</div>';
            }
        }

        //TODO get Feature Projects
        $getDataProject = DB::table('news as ne')
            ->leftjoin('categories as cate', 'ne.Cate_id', '=', 'cate.id')
            ->select('cate.id as cateID', 'cate.alias as cateSLug', 'cate.name', 'ne.id', 'ne.title', 'ne.images', 'ne.alias')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1]
            ])
            ->orderBy('id', 'desc')
            ->get();
        foreach ($getDataProject as $feature) {
            $htmlFeatureProject .= '<div class="item product-inner">';
            $htmlFeatureProject .= '<div class="item-inner transition">';
            $htmlFeatureProject .= '<div class="image">';
            $htmlFeatureProject .= '<a class="lt-image" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProject', $feature->alias) . '">';
            $htmlFeatureProject .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-1 product-featured-image" alt="">';
            $htmlFeatureProject .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-2 product-featured-image" alt=""></a>';
            $htmlFeatureProject .= '<div class="button-group">';
            $htmlFeatureProject .= '<div class="button-group">';
            $htmlFeatureProject .= '<a data-id="170" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProject', $feature->alias) . '" class="awe-button product-quick-view btn-quickview" data-toggle="modal" title="Xem chi tiết">Xem chi tiết</a>';
            $htmlFeatureProject .= '</div>';
            $htmlFeatureProject .= '</div>';
            $htmlFeatureProject .= '</div>';
            $htmlFeatureProject .= '';
            $htmlFeatureProject .= '<div class="caption">';
            $htmlFeatureProject .= '<h4 style="text-transform: uppercase;">';
            $htmlFeatureProject .= '<a data-id="170" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProject', $feature->alias) . '" class="category-product">' . $feature->title . '</a>';
            $htmlFeatureProject .= '</h4>';
            $htmlFeatureProject .= '</div>';
            $htmlFeatureProject .= '</div>';
            $htmlFeatureProject .= '</div>';
        }
        //TODO Feature Products
        $getDataProduct = DB::table('products as ne')
            ->leftjoin('cate_prods as cate', 'ne.Cate_id', '=', 'cate.id')
            ->select('cate.id as cateID', 'cate.alias as cateSLug', 'cate.name', 'ne.id', 'ne.title', 'ne.images', 'ne.alias', 'ne.prices')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1]
            ])
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();
        $htmlFeatureProduct = $this->showProducts($getDataProduct);
        //TODO feature du an thiet ke
        $getDataThietke = DB::table('news as ne')
            ->leftjoin('categories as cate', 'ne.Cate_id', '=', 'cate.id')
            ->select('cate.id as cateID', 'cate.alias as cateSLug', 'cate.name', 'ne.id', 'ne.title', 'ne.images', 'ne.alias')
            ->where([
                ['ne.active', 1],
                ['ne.feature', 1],
                ['cate.id', 10]
            ])
            ->orderBy('sort', 'desc')
            ->get();
        /*
         * show product here
         */
        foreach ($getDataThietke as $feature) {
            $htmlFeatureThietke .= '<div class="item product-inner">';
            $htmlFeatureThietke .= '<div class="item-inner transition">';
            $htmlFeatureThietke .= '<div class="image">';
            $htmlFeatureThietke .= '<a class="lt-image" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProject', [$feature->id, $feature->alias]) . '">';
            $htmlFeatureThietke .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-1 product-featured-image" alt="">';
            $htmlFeatureThietke .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-2 product-featured-image" alt=""></a>';
            $htmlFeatureThietke .= '<div class="button-group">';
            $htmlFeatureThietke .= '<div class="button-group">';
            $htmlFeatureThietke .= '</div>';
            $htmlFeatureThietke .= '</div>';
            $htmlFeatureThietke .= '</div>';
            $htmlFeatureThietke .= '';
            $htmlFeatureThietke .= '<div class="caption">';
            $htmlFeatureThietke .= '<h4><a data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('listProjects', [$feature->cateID, $feature->cateSLug]) . '">' . $feature->name . '</a>';
            $htmlFeatureThietke .= '</h4>';
            $htmlFeatureThietke .= '</div>';
            $htmlFeatureThietke .= '</div>';
            $htmlFeatureThietke .= '</div>';
        }
        //TODO feature du an thi cong noi that
        $getDataNoithat = DB::table('news as ne')
            ->leftjoin('categories as cate', 'ne.Cate_id', '=', 'cate.id')
            ->select('cate.id as cateID', 'cate.alias as cateSLug', 'cate.name', 'ne.id', 'ne.title', 'ne.images', 'ne.alias')
            ->where([
                ['ne.active', 1],
                ['ne.feature', 1],
                ['cate.id', 11]
            ])
            ->orderBy('sort', 'desc')
            ->get();
        foreach ($getDataNoithat as $feature) {
            $htmlFeatureNoithat .= '<div class="item product-inner">';
            $htmlFeatureNoithat .= '<div class="item-inner transition">';
            $htmlFeatureNoithat .= '<div class="image">';
            $htmlFeatureNoithat .= '<a class="lt-image" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProject', [$feature->id, $feature->alias]) . '">';
            $htmlFeatureNoithat .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-1 product-featured-image" alt="">';
            $htmlFeatureNoithat .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-2 product-featured-image" alt=""></a>';
            $htmlFeatureNoithat .= '<div class="button-group">';
            $htmlFeatureNoithat .= '<div class="button-group">';
            $htmlFeatureNoithat .= '</div>';
            $htmlFeatureNoithat .= '</div>';
            $htmlFeatureNoithat .= '</div>';
            $htmlFeatureNoithat .= '';
            $htmlFeatureNoithat .= '<div class="caption">';
            $htmlFeatureNoithat .= '<h4>';
            $htmlFeatureNoithat .= '<a data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('listProjects', [$feature->cateID, $feature->cateSLug]) . '">' . $feature->name . '</a>';
            $htmlFeatureNoithat .= '</h4>';
            $htmlFeatureNoithat .= '</div>';
            $htmlFeatureNoithat .= '</div>';
            $htmlFeatureNoithat .= '</div>';
        }
        //TODO get Loai San Pham
        $getCateProd = DB::table('cate_prods as cate')
            ->leftjoin('child_prods as chil', 'chil.cateParen_id', '=', 'cate.id')
            ->where('lvl', '<>', 0)
            ->get();
        foreach ($getCateProd as $get) {
            if (isset($get)) {
                $htmlLoaiSp .= '<li class="menu_lv1 item-sub-cat">';
                $htmlLoaiSp .= '<a data-title="Loại sản phẩm 1" href="' . route('cateListProduct', [$get->id, $get->alias]) . '"><i class="fa fa-angle-double-right" aria-hidden="true"></i>' . $get->name . '</a>';
                $htmlLoaiSp .= '</li>';
            }
        }
        /*        //TODO get tin tuc
                $getNews = DB::table('fengshuis')
                    ->select('id', 'images', 'title', 'alias')
                    ->where([
                        ['active', 1],
                        ['Cate_id', 1]
                    ])
                    ->get();
                foreach ($getNews as $get) {
                    if (isset($get)) {
                        $htmlNews .= '<li class="news-content-item clearfix">';
                        $htmlNews .= '<div class="image" style="background-image: url(' . asset('upload/thumbnail/' . $get->images) . ')">';
                        $htmlNews .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '"';
                        $htmlNews .= ' alt="">';
                        $htmlNews .= '</div>';
                        $htmlNews .= '<div class="content">';
                        $htmlNews .= '<a href="javascript:void(0)">' . $get->title . '</a>';
                        $htmlNews .= '<p><i class="fa fa-eye">1000</i></p>';
                        $htmlNews .= '</div>';
                        $htmlNews .= '</li>';
                    }
                }*/
        //TODO Feng shui
        $getFeng = DB::table('fengshuis')
            ->select('id', 'images', 'title', 'alias', 'view')
            ->where([
                ['active', 1],
                ['Cate_id', 1]
            ])->take(3)
            ->get();
        foreach ($getFeng as $get) {
            if (isset($get)) {
                $htmlNews .= '<li class="news-content-item clearfix">';
                $htmlNews .= '<div class="image" style="background-image: url(' . asset('upload/thumbnail/' . $get->images) . ')">';
                $htmlNews .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '"';
                $htmlNews .= ' alt="">';
                $htmlNews .= '</div>';
                $htmlNews .= '<div class="content">';
                $htmlNews .= '<a href="' . route('postNews', [$get->id, $get->alias]) . '">' . $get->title . '</a>';
                $htmlNews .= '<p><i class="fa fa-eye"> ' . $get->view . '</i></p>';
                $htmlNews .= '</div>';
                $htmlNews .= '</li>';
            }
        }
        //TODO Feng shui phong thuy
        $getFengshui = DB::table('fengshuis')
            ->select('id', 'images', 'title', 'alias', 'view')
            ->where([
                ['active', 1],
                ['Cate_id', 2]
            ])->take(3)
            ->get();
        foreach ($getFengshui as $get) {
            if (isset($get)) {
                $htmlFengshui .= '<li class="news-content-item clearfix">';
                $htmlFengshui .= '<div class="image" style="background-image: url(' . asset('upload/thumbnail/' . $get->images) . ')">';
                $htmlFengshui .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '"';
                $htmlFengshui .= ' alt="">';
                $htmlFengshui .= '</div>';
                $htmlFengshui .= '<div class="content">';
                $htmlFengshui .= '<a href="' . route('postNews', [$get->id, $get->alias]) . '">' . $get->title . '</a>';
                $htmlFengshui .= '<p><i class="fa fa-eye"> ' . $get->view . '</i></p>';
                $htmlFengshui .= '</div>';
                $htmlFengshui .= '</li>';
            }
        }
        //TODO slider footer
        $getPartner = DB::table('partners')->where('active', 1)->get();
        foreach ($getPartner as $get) {
            $htmlPartner .= '<a href="javascript:void(0)"><img src="' . asset('upload/partner/' . $get->images) . '"></a>';
        }

        //TODO get Feng Shui
        $getNewsFeng = DB::table('fengshuis')
            ->select('id', 'title', 'alias', 'summary', 'images')
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->get();
        foreach ($getNewsFeng as $get) {
            $htmlNewNews .= '<div class="item item-blog">';
            $htmlNewNews .= '<div class="blog_item_inner transition">';
            $htmlNewNews .= '<a class="lt-image" href="' . route('postNews', $get->alias) . '">';
            $htmlNewNews .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '" alt="Hiệu quả không gian: đẳng cấp thiết kế nhà phố Camellia Garden" title="Hiệu quả không gian: đẳng cấp thiết kế nhà phố Camellia Garden"></a>';
            $htmlNewNews .= '<div class="thongtin">';
            $htmlNewNews .= '<h4 class="blog_item_title">';
            $htmlNewNews .= '<a  alt="' . $get->title . '" href="' . route('postNews', $get->alias) . '" title="' . $get->title . '">' . $get->title . '</a>';
            $htmlNewNews .= '</h4>';
            $htmlNewNews .= '<div class="blog_item_motangan">' . truncateStringWords($get->summary, 200) . '</div>';
//            $htmlNewNews .= '<a alt="' . $get->title . '" href="' . route('postNews', [$get->id, $get->alias]) . '" class="blog_itemt_link">Xem thêm</a>';
            $htmlNewNews .= '</div>';
            $htmlNewNews .= '</div>';
            $htmlNewNews .= '</div>';
        }

        //TODO get noi bat chung cu
        $getChungcu = DB::table('furniture as fur')
            ->rightjoin('cate_furs as cate', 'fur.Cate_id', '=', 'cate.id')
            ->select('fur.id', 'images', 'fur.alias', 'title')
            ->where([
                ['cate.id', 3],
                ['active', 1],
                ['feature', 1]
            ])
            ->get();
        foreach ($getChungcu as $get) {
            if (isset($get)) {
                $htmlChungcu .= '<div>';
                $htmlChungcu .= '<div>';
                $htmlChungcu .= '<div class="item product-inner">';
                $htmlChungcu .= '<div class="item-inner transition">';
                $htmlChungcu .= '<div class="image">';
                $htmlChungcu .= '<a class="lt-image" href="' . route('postDesign', [$get->id, $get->alias]) . '">';
                $htmlChungcu .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '" class="img-1 product-featured-image">';
                $htmlChungcu .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '" class="img-2 product-featured-image"></a>';
                $htmlChungcu .= '<div class="button-group">';
                $htmlChungcu .= '<div class="button-group">';
                $htmlChungcu .= '<a href="' . route('postDesign', [$get->id, $get->alias]) . '" class="awe-button product-quick-view btn-quickview" title="Xem chi tiết">';
                $htmlChungcu .= '<i class="fa fa-heart"></i>';
                $htmlChungcu .= '</a>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '<div class="caption">';
                $htmlChungcu .= '<h4>';
                $htmlChungcu .= '<a href="' . route('postDesign', [$get->id, $get->alias]) . '">' . $get->title . '</a>';
                $htmlChungcu .= '</h4>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
                $htmlChungcu .= '</div>';
            }
        }
        //TODO get noi bat nha pho
        $getNhapho = DB::table('furniture as fur')
            ->rightjoin('cate_furs as cate', 'fur.Cate_id', '=', 'cate.id')
            ->select('fur.id', 'images', 'fur.alias', 'title')
            ->where([
                ['cate.id', 4],
                ['active', 1],
                ['feature', 1]
            ])
            ->get();
        foreach ($getNhapho as $get) {
            if (isset($get)) {
                $htmlNhapho .= '<div>';
                $htmlNhapho .= '<div>';
                $htmlNhapho .= '<div class="item product-inner">';
                $htmlNhapho .= '<div class="item-inner transition">';
                $htmlNhapho .= '<div class="image">';
                $htmlNhapho .= '<a class="lt-image" href="' . route('postDesign', [$get->id, $get->alias]) . '">';
                $htmlNhapho .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '" class="img-1 product-featured-image">';
                $htmlNhapho .= '<img src="' . asset('upload/thumbnail/' . $get->images) . '" class="img-2 product-featured-image"></a>';
                $htmlNhapho .= '<div class="button-group">';
                $htmlNhapho .= '<div class="button-group">';
                $htmlNhapho .= '<a href="' . route('postDesign', [$get->id, $get->alias]) . '" class="awe-button product-quick-view btn-quickview" title="Xem chi tiết">';
                $htmlNhapho .= '<i class="fa fa-heart"></i>';
                $htmlNhapho .= '</a>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '<div class="caption">';
                $htmlNhapho .= '<h4>';
                $htmlNhapho .= '<a href="' . route('postDesign', [$get->id, $get->alias]) . '">' . $get->title . '</a>';
                $htmlNhapho .= '</h4>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
                $htmlNhapho .= '</div>';
            }
        }
        //TODO social facebook youtube
        $getSocial = DB::table('systems')->first();
        /*
         * get slide show product
         */
        $getCateProdId = DB::table('cate_prods as cate')
            ->leftjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.name', 'cate.alias', 'chil.cateParen_id', 'chil.lvl')
            ->where('chil.lvl', '=', 0)
            ->get()
            ->toArray();
        $getSubAndProd = DB::table('cate_prods as cate')
            ->leftjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->join('products as prod', 'cate.id', '=', 'prod.Cate_id')
            ->select('cate.name', 'cate.alias', 'chil.lvl', 'prod.id', 'prod.title', 'prod.alias', 'prod.images', 'prod.prices', 'prod.discount', 'prod.feature', 'prod.Cate_id')
            ->get()
            ->toArray();
        $htmlSlideProducts = $this->slideShowProducts($getCateProdId, $getSubAndProd);
        return view('flexshop.index')
            ->with([
                'thisFeatureProject' => $htmlFeatureProject,
                'thisFeatureProduct' => $htmlFeatureProduct,
                'thisFeatureThietke' => $htmlFeatureThietke,
                'thisFeatureNoithat' => $htmlFeatureNoithat,
                'thisSlider' => $htmlSlider,
                'thisLoaiSp' => $htmlLoaiSp,
                'thisNews' => $htmlNews,
                'thisFengshui' => $htmlFengshui,
                'thisNewNews' => $htmlNewNews,
                'thisChungcu' => $htmlChungcu,
                'thisNhapho' => $htmlNhapho,
                'flagIndex' => 1,
                'thisBannerSlide' => $htmlPartner,
                'social' => $getSocial,
                'htmlSlideProduct' => $htmlSlideProducts
            ]);
    }

    //TODO here Khuyến mãi **************************************
    public function getListProject()
    {
        $htmlCate = "";
        $htmlContent = "";
        $htmlHot = "";
        $getProject = DB::table('news AS ne')
            ->leftjoin('categories AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'cat.name', 'cat.alias AS cateSlug', 'ne.title', 'ne.alias', 'ne.summary', 'ne.description', 'ne.active', 'ne.images', 'ne.created_at')
            ->where([
                ['ne.active', 1],
            ])
            ->orderBy('newsID', 'DESC')
            ->paginate(5);
        foreach ($getProject as $project) {
            if (!empty($project)) {
                $htmlContent .= '<div class="box-article-item">';
                $htmlContent .= '<div class="row">';
                $htmlContent .= '<div class="col-xs-12 col-sm-4">';
                $htmlContent .= '<a data-id="' . $project->newsID . '" data-title="' . $project->title . '" alt="' . $project->title . '" href="'.route('postProject',$project->alias).'">';
                $htmlContent .= '<img src="' . asset('upload/thumbnail/' . $project->images) . '" alt="' . $project->title . '" title="' . $project->title . '" />';
                $htmlContent .= '</a>';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="col-xs-12 col-sm-8">';
                $htmlContent .= '<h3 class="title-article-inner">';
                $htmlContent .= '<a data-id="206" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . route('postProject', $project->alias) . '">' . $project->title . '</a>';
                $htmlContent .= '</h3>';
                $htmlContent .= '<div class="post-detail">';
                $htmlContent .= '<a href="' . route('cateListProject', $project->cateSlug) . '">' . $project->name . '</a> - ' . date('d-m-Y', strtotime($project->created_at)) . '';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="text-blog">';
                $htmlContent .= '<p>' . $project->summary . '</p>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
            }
        }
        $htmlContent .= $getProject->links();
        //TODO get Category
        $getCate = DB::table('categories as cate')
            ->leftjoin('child_cates as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->where('chil.lvl', '<>', 0)
            ->select('cate.id', 'name', 'alias', 'chil.lvl')->get();
        foreach ($getCate as $cate) {
            $htmlCate .= '<li class="cat-item"><a href="' . route('cateListProject', $cate->alias) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';

        }
        //TODO get hot Project
        $getHotProject = DB::table('news AS ne')
            ->select('ne.id', 'ne.title', 'ne.alias', 'ne.hot')
            ->where([
                ['ne.active', 1],
                ['hot', 1]
            ])
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postNews', $hot->alias) . '">' . $hot->title . '</a></li>';
            }
        }
        $getBanner = DB::table('categories')->where('id', 9)->first();
        return view('flexshop.project')
            ->with([
                'thisListProject' => $htmlContent,
                'thisCateHere' => $htmlCate,
                'thisHot' => $htmlHot,
                'banner' => $getBanner
            ]);
    }

    public function cateProject($slug)
    {
        /*
         * check slug, redirect to single post if slug = false
         */
        $checkSlug = Category::where('alias', $slug)->exists();
        if ($checkSlug == false) {
            return $this->singleProject($slug);
        }
        $htmlContent = "";
        $htmlBreadcrumb = "";
        $htmlCate = "";
        $htmlHot = "";
        $getProject = DB::table('news AS ne')
            ->leftjoin('categories AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'cat.name', 'cat.alias AS cateSlug', 'ne.title', 'ne.alias', 'ne.summary', 'ne.description', 'ne.active', 'ne.images', 'ne.created_at')
            ->where([
                ['ne.active', 1],
                ['cat.alias', $slug]
            ])
            ->orderBy('newsID', 'DESC')
            ->paginate(5);
//            ->get();
        //TODO get breadcrumb
        $getCateName = $getProject->first()->name;
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('listProjects') . '" data-name="du-an" data-title="Dự án">Khuyến Mãi</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getCateName . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';
        //TODO get Box news
        foreach ($getProject as $project) {
            if (!empty($project)) {
                $htmlContent .= '<div class="box-article-item">';
                $htmlContent .= '<div class="row">';
                $htmlContent .= '<div class="col-xs-12 col-sm-4">';
                $htmlContent .= '<a data-id="' . $project->newsID . '" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . route('postProject',$project->alias) . '">';
                $htmlContent .= '<img src="' . asset('upload/thumbnail/' . $project->images) . '" alt="' . $project->title . '" title="' . $project->title . '" />';
                $htmlContent .= '</a>';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="col-xs-12 col-sm-8">';
                $htmlContent .= '<h3 class="title-article-inner">';
                $htmlContent .= '<a data-id="206" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . route('postProject', $project->alias) . '">' . $project->title . '</a>';
                $htmlContent .= '</h3>';
                $htmlContent .= '<div class="post-detail">';
                $htmlContent .= '<a href="' . route('cateListProject', $project->cateSlug) . '">' . $project->name . '</a> - ' . date('d-m-Y', strtotime($project->created_at)) . '';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="text-blog">';
                $htmlContent .= '<p>' . $project->summary . '</p>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
            }
        }
        $htmlContent .= $getProject->links();
        //TODO get Category
        $getCate = DB::table('categories as cate')
            ->leftjoin('child_cates as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->where('chil.lvl', '<>', 0)
            ->get();
        foreach ($getCate as $cate) {
            if (!empty($cate)) {
                $htmlCate .= '<li class="cat-item"><a href="' . route('cateListProject', $cate->alias) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';
            }
        }
        //TODO get Hot with id category
        $getHotProject = DB::table('news AS ne')
            ->leftjoin('categories AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'ne.title', 'ne.alias', 'ne.active', 'cat.alias')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1],
                ['cat.alias', $slug]
            ])
            ->orderBy('newsID', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-id="' . $hot->newsID . '" data-name="du-an" data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postProject', $hot->alias) . '">' . $hot->title . '</a></li>';
            }
        }
        $getBanner = DB::table('categories')->where('alias', $slug)->first();
        return view('flexshop.project')
            ->with([
                'data' => $getCateName,
                'thisListProject' => $htmlContent,
                'thisBreadcrumb' => $htmlBreadcrumb,
                'thisCateHere' => $htmlCate,
                'thisHot' => $htmlHot,
                'banner' => $getBanner
            ]);
    }

    public function singleProject($slug)
    {
        $htmlContent = "";
        $htmlCate = "";
        $htmlHot = "";
        $htmlBreadcrumb = "";
        $getProject = DB::table('news AS ne')
            ->leftjoin('categories AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('ne.id', 'ne.title', 'ne.alias', 'ne.content', 'ne.created_at', 'ne.Cate_id', 'cat.name', 'ne.images', 'ne.description', 'cat.alias as slugCate')
            ->where([
                ['ne.active', 1],
                ['ne.alias', $slug]
            ])
            ->first();
        $metas = $this->getMetaData($getProject->title, $getProject->description, $getProject->images);
        $htmlContent .= '<div class="box-detail">';
        $htmlContent .= '<h3>' . $getProject->title . '</h3>';
        $htmlContent .= '<div class="post-detail">';
        $htmlContent .= '<a href="' . route('cateListProject', $getProject->slugCate) . '">' . $getProject->name . '</a> - ' . date('d-m-Y', strtotime($getProject->created_at)) . '</div>';
        $htmlContent .= '<div class="text-blog">';
        $htmlContent .= $getProject->content;
        $htmlContent .= '</div>';
        $htmlContent .= '</div>';
        //TODO get Category
        $getCate = DB::table('categories as cate')
            ->leftjoin('child_cates as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->where('chil.lvl', '<>', 0)
            ->get();
        foreach ($getCate as $cate) {
            if (!empty($cate)) {
                $htmlCate .= '<li class="cat-item"><a href="' . route('cateListProject', $cate->alias) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';
            }
        }
        //TODO get Hot with id category
        $getHotProject = DB::table('news AS ne')
            ->leftjoin('categories AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'ne.title', 'ne.alias', 'ne.active')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1],
                ['cat.id', $getProject->Cate_id]
            ])
            ->orderBy('newsID', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-id="' . $hot->newsID . '" data-name="du-an" data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postProject', $hot->alias) . '">' . $hot->title . '</a></li>';
            }
        }
        //TODO get breadcrumb with variable $getProject
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('listProjects') . '" data-name="khuyen-mai" data-title="Dự án">Khuyến Mãi</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getProject->title . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';
        $getBanner = DB::table('categories')->where('id', 9)->first();
        return view('flexshop.singleProject')
            ->with([
                'data' => $getProject,
                'thisPost' => $htmlContent,
                'thisCateHere' => $htmlCate,
                'thisHot' => $htmlHot,
                'thisBreadcrumb' => $htmlBreadcrumb,
                'banner' => $getBanner,
                'meta' => $metas
            ]);
    }

    //TODO here product**************************************
    public function getListProduct()
    {
        $htmlCate = '';
        $htmlProducts = '';
        $htmlBreadcrumb = '';
        //TODO get Category
        $getCate = DB::table('cate_prods as cate')
            ->leftjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.id as idCate', 'name', 'alias', 'chil.lvl')
            ->where('lvl', 0)
            ->get();
        foreach ($getCate as $cate) {
            $htmlCate .= '<li class="menu_lv1 item-sub-cat"><a data-name="san-pham" data-title="' . $cate->name . '" href="' . route('cateListProduct', $cate->alias) . '" ><i class="fa fa-angle-double-right" aria-hidden="true"></i> ' . $cate->name . '</a></li>';
        }
        //TODO get Products
        $getData = DB::table('products')
            ->select('id', 'title', 'alias', 'images', 'prices', 'discount', 'hot', 'active')
            ->where([
                ['active', 1]
            ])
            ->orderBy('id', 'DESC')
            ->paginate(12);
        $htmlProducts .= $this->showProducts($getData,1);
        $htmlProducts .= $getData->links();
        $getBanner = DB::table('systems')->select('metaName')->first();
        return view('flexshop.product')
            ->with([
                'thisCateProduct' => $htmlCate,
                'thisProductList' => $htmlProducts,
                'banner' => $getBanner
            ]);
    }

    public function cateProduct($slug)
    {
        $checkSlugCate = CateProd::where('alias', $slug)->exists();
        $checkSlugProd = Products::where('alias', $slug)->exists();
        if ($checkSlugCate == false) {
            return $this->singleProduct($slug);
        }
        $htmlCate = '';
        $htmlProducts = '';
        $htmlBreadcrumb = '';
        //TODO get Cate
        $getCate = DB::table('cate_prods as cate')
            ->rightjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.id as idCate', 'cate.name', 'cate.alias', 'cate.weight', 'chil.lvl','cate.description','cate.metaName')
            ->where('cate.alias', $slug)
            ->get()
            ->first();
        $meta = $this->getMetaData($getCate->name,$getCate->description,$getCate->metaName);
        $IdCate = $getCate->idCate;
        $getAllCate = DB::table('cate_prods as cate')
            ->rightjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.id as idCate', 'cate.name', 'cate.alias', 'cate.weight', 'chil.lvl')
            ->where([
                ['cate.id', '<>', $IdCate],
                ['chil.lvl', '=', 0]
            ])
            ->get();
        foreach ($getAllCate as $cate) {
            $htmlCate .= '<li class="menu_lv1 item-sub-cat"><a data-name="san-pham" data-title="' . $cate->name . '" href="' . route('cateListProduct', $cate->alias) . '" ><i class="fa fa-angle-double-right" aria-hidden="true"></i> ' . $cate->name . '</a></li>';
        }

        //TODO get Products
        $getData = DB::table('cate_prods as cate')
            ->rightjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->rightjoin('products as prod', 'cate.id', '=', 'prod.Cate_id')
            ->select('prod.id', 'prod.title', 'prod.alias', 'prod.images', 'prod.prices', 'prod.discount', 'prod.hot')
            ->where([
                ['prod.Cate_id', $IdCate],
                ['active', 1],
            ])
            ->orderBy('id', 'DESC')
            ->paginate(12);
        $htmlProducts .= $this->showProducts($getData, 1);
        $htmlProducts .= $getData->links();
        //TODO breadcrumb
        $getCateName = DB::table('cate_prods')
            ->select('name', 'id', 'alias')
            ->where('id', $IdCate)
            ->first()->name;
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('getListProduct') . '" data-name="du-an" data-title="Sản phẩm">Sản phẩm</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getCateName . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';
        //TODO get BAnner
        $getBanner = DB::table('cate_prods')
            ->where('id', $IdCate)
            ->select('metaName')->first();
        return view('flexshop.product')
            ->with([
                'data' => $getCateName,
                'thisCateProduct' => $htmlCate,
                'thisProductList' => $htmlProducts,
                'thisBreadcrumb' => $htmlBreadcrumb,
                'banner' => $getBanner,
                'meta' => $meta
            ]);
    }

    /*
     * this here list product
     */

    public function singleProduct($slug)
    {
        $htmlBreadcrumb = '';
        //TODO get product
        $htmlRelate = '';
        $getData = DB::table('products')
            ->select('id', 'Cate_id', 'title', 'metaTitle', 'alias', 'summary', 'description', 'content', 'images', 'prices', 'discount')
            ->where('alias', $slug)
            ->get()
            ->first();
        /**
         * if check code 404 return home page
         */
        if ($getData == null) {
            return abort(404);
        }
        $id = $getData->id;
        /* get meta data */
        $metas = $this->getMetaData($getData->title, $getData->description, $getData->images);
        //TODO relate products
        $getRelate = DB::table('products as n')
            ->select('n.id', 'n.title', 'n.alias', 'n.images', 'n.prices', 'n.discount', 'n.active')
            ->where([
                ['n.Cate_id', $getData->Cate_id],
                ['n.id', '<>', $id],
                ['n.active', 1]
            ])
            ->orderBy('n.id', 'DESC')
            ->take(5)
            ->get();
        if (isset($getRelate)) {
            foreach ($getRelate as $relate) {
                $htmlRelate .= '<div id="product-1003351965" class="item product-inner">';
                $htmlRelate .= '<div class="item-inner transition">';
                $htmlRelate .= '<div class="image">';
                $htmlRelate .= '<a class="lt-image" data-name="san-pham" data-title="' . $relate->title . '" alt="' . $relate->title . '" href="' . route('postProduct', $relate->alias) . '">';
                $htmlRelate .= '<img src="' . asset('upload/thumbnail/' . $relate->images) . '" class="img-1 product-featured-image" alt="' . $relate->title . '">';
                $htmlRelate .= '</a>';
                $htmlRelate .= '</div>';
                $htmlRelate .= '<div class="caption">';
                $htmlRelate .= '<h4>';
                $htmlRelate .= '<a data-name="san-pham" data-title="' . $relate->title . '" alt="' . $relate->title . '" href="' . route('postProduct', $relate->alias) . '">';
                $htmlRelate .= $relate->title;
                $htmlRelate .= '</a>';
                $htmlRelate .= '</h4>';
                $htmlRelate .= '<p class="price">';
                if ($relate->discount != 0) {
                    $htmlRelate .= '<span class="price-old">' . number_format($relate->prices) . 'đ</span>';
                    $htmlRelate .= '<span class="price-new">  ' . number_format($relate->discount) . '₫</span>';
                } elseif ($relate->prices == 0) {
                    $htmlRelate .= '<span class="price-new">Liên hệ 1</span>';
                } elseif ($relate->prices != 0) {
                    $htmlRelate .= '<span class="price-new">' . number_format($relate->prices) . 'đ</span>';
                } elseif ($relate->prices == 0 && $relate->discount != 0) {
                    $htmlRelate .= '<span class="price-new">Liên hệ 1</span>';
                } else {
                    $htmlRelate .= '<span class="price-old">' . number_format($relate->prices) . 'đ</span>';
                }
                $htmlRelate .= '</p>';
                $htmlRelate .= '</div>';
                $htmlRelate .= '</div>';
                $htmlRelate .= '</div>';
            }
        }

        //TODO breadcrumb
        $getCateName = DB::table('cate_prods')
            ->select('id', 'alias', 'name')
            ->where('id', $getData->Cate_id)
            ->first();
        $getIdAlias = DB::table('cate_prods')
            ->select('id', 'alias', 'name')
            ->where('id', $id)
            ->first();
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('getListProduct') . '" data-name="du-an" data-title="Sản phẩm">Sản phẩm</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('cateListProduct', $getCateName->alias) . '" data-name="du-an" data-title="Sản phẩm">' . $getCateName->name . '</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getData->title . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';

        //TODO get banner from cate product
        $data = DB::table('products as prod')
            ->leftjoin('cate_prods as cate', 'prod.Cate_id', '=', 'cate.id')
            ->select('cate.metaName')
            ->where('prod.id', $id)
            ->first();
        $getBanner = (object)[
            'description' => $data->metaName
        ];
        return view('flexshop.singleProduct')
            ->with([
                'data' => $getData,
                'thisRelate' => $htmlRelate,
                'thisBreadcrumb' => $htmlBreadcrumb,
                'banner' => $getBanner,
                'meta' => $metas
            ]);
    }

    //TODO here News **************************************
    public function getListNews()
    {
        $htmlCate = "";
        $htmlContent = "";
        $htmlHot = "";
        $getProject = DB::table('fengshuis AS ne')
            ->leftjoin('cate_tt_phongthuys AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'cat.name', 'cat.alias AS cateSlug', 'ne.title', 'ne.alias', 'ne.summary', 'ne.description', 'ne.active', 'ne.images', 'ne.created_at')
            ->where([
                ['ne.active', 1],
            ])
            ->orderBy('newsID', 'DESC')
            ->paginate(5);
        foreach ($getProject as $project) {
            if (!empty($project)) {
                $htmlContent .= '<div class="box-article-item">';
                $htmlContent .= '<div class="row">';
                $htmlContent .= '<div class="col-xs-12 col-sm-4">';
                $htmlContent .= '<a data-id="' . $project->newsID . '" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . 'tin-tuc/' . $project->alias . '">';
                $htmlContent .= '<img src="' . asset('upload/thumbnail/' . $project->images) . '" alt="' . $project->title . '" title="' . $project->title . '" />';
                $htmlContent .= '</a>';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="col-xs-12 col-sm-8">';
                $htmlContent .= '<h3 class="title-article-inner">';
                $htmlContent .= '<a data-id="206" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . route('postNews', $project->alias) . '">' . $project->title . '</a>';
                $htmlContent .= '</h3>';
                $htmlContent .= '<div class="post-detail">';
                $htmlContent .= date('d-m-Y', strtotime($project->created_at));
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="text-blog">';
                $htmlContent .= '<p>' . $project->description . '</p>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
            }
        }
        $htmlContent .= $getProject->links();
        //TODO get Category
        $getCate = DB::table('cate_tt_phongthuys as cate')
            ->leftjoin('child_tt_phongthuys as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.id', 'name', 'alias', 'chil.lvl')
            ->get();
//        foreach ($getCate as $cate) {
//            $htmlCate .= '<li class="cat-item"><a href="' . route('cateListNews', [$cate->id, $cate->alias]) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';
//        }
        //TODO get hot Project
        $getHotProject = DB::table('fengshuis AS ne')
            ->select('ne.id', 'ne.title', 'ne.alias', 'ne.hot')
            ->where([
                ['ne.active', 1],
                ['hot', 1]
            ])
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postNews', $hot->alias) . '">' . $hot->title . '</a></li>';
            }
        }
        return view('flexshop.fengshui')
            ->with([
                'thisListProject' => $htmlContent,
                'thisCateHere' => $htmlCate,
                'thisHot' => $htmlHot
            ]);
    }

    public function cateNews($id)
    {
        $htmlContent = "";
        $htmlBreadcrumb = "";
        $htmlCate = "";
        $htmlHot = "";
        $getProject = DB::table('fengshuis AS ne')
            ->leftjoin('cate_tt_phongthuys AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'cat.name', 'cat.alias AS cateSlug', 'ne.title', 'ne.alias', 'ne.summary', 'ne.description', 'ne.active', 'ne.images', 'ne.created_at')
            ->where([
                ['ne.active', 1],
                ['cat.id', $id]
            ])
            ->orderBy('newsID', 'DESC')
            ->take(5)
            ->get();
        //TODO get breadcrumb
        $getCateName = $getProject->first()->name;
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('listNews') . '" data-name="du-an" data-title="Dự án">Danh sách tin</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getCateName . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';
        //TODO get Box news
        foreach ($getProject as $project) {
            if (!empty($project)) {
                $htmlContent .= '<div class="box-article-item">';
                $htmlContent .= '<div class="row">';
                $htmlContent .= '<div class="col-xs-12 col-sm-4">';
                $htmlContent .= '<a data-id="' . $project->newsID . '" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . 'tin-tuc/' . $project->alias . '">';
                $htmlContent .= '<img src="' . asset('upload/thumbnail/' . $project->images) . '" alt="' . $project->title . '" title="' . $project->title . '" />';
                $htmlContent .= '</a>';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="col-xs-12 col-sm-8">';
                $htmlContent .= '<h3 class="title-article-inner">';
                $htmlContent .= '<a data-id="206" data-name="tin-tuc" data-title="' . $project->title . '" alt="' . $project->title . '" href="' . route('postNews', [$project->newsID, $project->alias]) . '">' . $project->title . '</a>';
                $htmlContent .= '</h3>';
                $htmlContent .= '<div class="post-detail">';
                $htmlContent .= '<a href="' . route('cateListDesign', [$project->cateID, $project->cateSlug]) . '">' . $project->name . '</a> - ' . date('d-m-Y', strtotime($project->created_at)) . '';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="text-blog">';
                $htmlContent .= '<p>' . $project->description . '</p>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
            }
        }
        //TODO get Category
        $getCate = DB::table('cate_tt_phongthuys as cate')
            ->leftjoin('child_tt_phongthuys as chil', 'cate.id', '=', 'chil.cateParen_id')
//            ->where('chil.lvl', '<>', 0)
            ->get();
        foreach ($getCate as $cate) {
            if (!empty($cate)) {
                $htmlCate .= '<li class="cat-item"><a href="' . route('cateListNews', [$cate->id, $cate->alias]) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';
            }
        }
        //TODO get Hot with id category
        $getHotProject = DB::table('fengshuis AS ne')
            ->leftjoin('cate_tt_phongthuys AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'ne.title', 'ne.alias', 'ne.active')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1],
                ['cat.id', $id]
            ])
            ->orderBy('newsID', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-id="' . $hot->newsID . '" data-name="du-an" data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postNews', [$hot->newsID, $hot->alias]) . '">' . $hot->title . '</a></li>';
            }
        }
        $getBanner = DB::table('cate_tt_phongthuys')->where('id', $id)->first();
        return view('flexshop.fengshui')->with(['thisListProject' => $htmlContent, 'thisBreadcrumb' => $htmlBreadcrumb, 'thisCateHere' => $htmlCate, 'thisHot' => $htmlHot, 'banner' => $getBanner]);
    }

    public function singleNews($slug)
    {
        $htmlContent = "";
        $htmlCate = "";
        $htmlHot = "";
        $htmlBreadcrumb = "";
        $releaseNews = "";
        $htmlNhapho = "";
        $jsonLD = "";
        $getProject = DB::table('fengshuis AS ne')
            ->leftjoin('cate_tt_phongthuys AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('ne.id', 'ne.title', 'ne.relation', 'ne.alias', 'ne.description', 'ne.images', 'ne.content', 'ne.created_at', 'ne.Cate_id', 'cat.name', 'cat.alias as slugCate')
            ->where([
                ['ne.active', 1],
                ['ne.alias', $slug]
            ])
            ->first();
        /**
         * if check code 404 return home page
         */
        if ($getProject == null) {
            return abort(404);
        }
        /* get meta data */
        $metas = $this->getMetaData($getProject->title, $getProject->description, $getProject->images);
        $htmlContent .= '<div class="box-detail">';
        $htmlContent .= '<h1 style="font-size: 25px"><a>' . $getProject->title . '</a></h1>';
        $htmlContent .= '<div class="post-detail">';
        $htmlContent .= ''.date('d-m-Y', strtotime($getProject->created_at)).'</div>';
        //TODO get release news
        if ($getProject->relation != null) {
            $htmlContent .= $this->getReleaseNews($getProject->relation);
        }
        $htmlContent .= '<div class="text-blog">';
        $htmlContent .= $getProject->content;
        $htmlContent .= '</div>';
        $htmlContent .= '</div>';
        //TODO get Category
        $getCate = DB::table('cate_tt_phongthuys')
            ->select('id', 'name', 'alias')
            ->get();
        foreach ($getCate as $cate) {
            if (!empty($cate)) {
                $htmlCate .= '<li class="cat-item"><a href="' . route('cateListNews', $cate->alias) . '" data-name="' . $cate->name . '" data-title="' . $cate->name . '">' . $cate->name . '</a></li>';
            }
        }
        //TODO get Hot with id category
        $getHotProject = DB::table('fengshuis AS ne')
            ->leftjoin('cate_tt_phongthuys AS cat', 'cat.id', '=', 'ne.Cate_id')
            ->select('cat.id as cateID', 'ne.id as newsID', 'ne.title', 'ne.alias', 'ne.active')
            ->where([
                ['ne.active', 1],
                ['ne.hot', 1],
                ['cat.id', $getProject->Cate_id]
            ])
            ->orderBy('newsID', 'DESC')
            ->take(5)
            ->get();
        foreach ($getHotProject as $hot) {
            if (!empty($hot)) {
                $htmlHot .= '<li><a data-id="' . $hot->newsID . '" data-name="du-an" data-title="' . $hot->title . '" alt="' . $hot->title . '" href="' . route('postNews', $hot->alias) . '">' . $hot->title . '</a></li>';
            }
        }
        //TODO get breadcrumb with variable $getProject
        $htmlBreadcrumb .= '<div class="breadcrumbs">';
        $htmlBreadcrumb .= '<ul class="breadcrumb">';
        $htmlBreadcrumb .= '<li><a href="' . route('homePage') . '" data-name="trang-chu" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li><a href="' . route('listNews') . '" data-name="du-an" data-title="Dự án">Danh sách tin</a><span class="divider"></span></li>';
        $htmlBreadcrumb .= '<li>' . $getProject->title . '</li>';
        $htmlBreadcrumb .= '</ul>';
        $htmlBreadcrumb .= '</div>';
        $getBanner = DB::table('cate_tt_phongthuys')->where('id', $slug)->first();

        //TODO Count View
        $news = Fengshui::find($slug);
        if ($news != null) {
            $news->increment('view');
        }
        //TODO get san pham can ban
        $getNhapho = DB::table('furniture as fur')
            ->rightjoin('cate_furs as cate', 'fur.Cate_id', '=', 'cate.id')
            ->select('fur.id', 'images', 'fur.alias', 'title')
            ->where([
                ['cate.id', 4],
                ['active', 1],
                ['feature', 1]
            ])
            ->get();
        /*
         * $getProject -> get id news
         */
        $getIDProduct = DB::table('fengshuis as fur')
            ->rightjoin('news_products as n', 'fur.id', '=', 'n.id_news')
            ->select('n.id_product')
            ->where('id_news', $getProject->id)
            ->pluck('id_product')->toArray();
        /*
         * pluck collection laravel -> return value array
         */
        $getDataProducts = DB::table('products')
            ->select('id', 'title', 'alias', 'prices', 'discount', 'images')
            ->wherein('id', $getIDProduct)
            ->get();
        $htmlNhapho .= $this->showProducts($getDataProducts);
        /*Json-LD*/
        $jsonLD .='<script type="application/ld+json">{';
        $jsonLD .='"@context": "http://schema.org",';
        $jsonLD .='"@type": "Article",';
        $jsonLD .='"mainEntityOfPage": {';
        $jsonLD .='"@type": "WebPage",';
        $jsonLD .='"@id": "'.url()->current().'"';
        $jsonLD .='},';
        $jsonLD .='"author": {';
        $jsonLD .='"@type": "Person",';
        $jsonLD .='"name": "Shopfoyo"';
        $jsonLD .='},';
        $jsonLD .='"headline": "'.$getProject->title.'",';
        $jsonLD .='"publisher": {';
        $jsonLD .='"@type": "Organization",';
        $jsonLD .='"name": "Shopfoyo",';
        $jsonLD .='"logo": {';
        $jsonLD .='"@type": "ImageObject",';
        $jsonLD .='"url": "https://shopfoyo.com/upload/thumbnail/'.$getProject->images.'"}},';
        $jsonLD .='"datePublished": "'.date('d-m-Y', strtotime($getProject->created_at)).'",';
        $jsonLD .='"description": "'.$getProject->description.'",';
        $jsonLD .='"image": "https://shopfoyo.com/upload/thumbnail/'.$getProject->images.'"';
        $jsonLD .='}</script>';
        return view('flexshop.singleFengshui')
            ->with([
                'data' => $getProject->title,
                'thisPost' => $htmlContent,
                'thisCateHere' => $htmlCate,
                'thisHot' => $htmlHot,
                'thisBreadcrumb' => $htmlBreadcrumb,
                'banner' => $getBanner,
                'thisSlideProduct' => $htmlNhapho,
                'meta' => $metas,
                'jsonLD' => $jsonLD
            ]);
    }

    //TODO Search **************************************
    public function multiSearch(Request $request)
    {
        $htmlContent = '';
        $getKey = Input::get('txtSearch');
        if (isset($getKey)) {
            $searchProject = DB::table('news')->where('title', 'like', '%' . $getKey . '%')
                ->select('id', 'title', 'alias', 'images', 'summary')
                ->get();
            $searchFurniture = DB::table('furniture')->where('title', 'like', '%' . $getKey . '%')
                ->select('id', 'title', 'alias', 'images', 'summary')
                ->get();
            $searNews = DB::table('fengshuis')->where('title', 'like', '%' . $getKey . '%')
                ->select('id', 'title', 'alias', 'images', 'summary')
                ->get();
            $getAll = collect($searchProject)->merge($searchFurniture)->merge($searNews)->take(10);
        }
        foreach ($getAll as $project) {
            if (!empty($project)) {
                if (isset($project->alias)) {
                    $checkProject = DB::table('news')->where('alias', $project->alias)->exists();
                    $checkFurniture = DB::table('furniture')->where('alias', $project->alias)->exists();
                    $checkNews = DB::table('fengshuis')->where('alias', $project->alias)->exists();
                }
                $htmlContent .= '<div class="box-article-item">';
                $htmlContent .= '<div class="row">';
                $htmlContent .= '<div class="col-xs-12 col-sm-4">';
                if ($checkProject == true) {
                    $htmlContent .= '<a alt="' . $project->title . '" href="' . route('postProject', [$project->id, $project->alias]) . '">';
                } elseif ($checkFurniture == true) {
                    $htmlContent .= '<a alt="' . $project->title . '" href="' . route('postDesign', [$project->id, $project->alias]) . '">';
                } else {
                    $htmlContent .= '<a alt="' . $project->title . '" href="#">';
                }
                $htmlContent .= '<img src="' . asset('upload/thumbnail/' . $project->images) . '" alt="' . $project->title . '" title="' . $project->title . '">';
                $htmlContent .= '</a>';
                $htmlContent .= '</div>';
                $htmlContent .= '<div class="col-xs-12 col-sm-8">';
                $htmlContent .= '<h3 class="title-article-inner">';
                if ($checkProject == true) {
                    $htmlContent .= '<a alt="' . $project->title . '" href="' . route('postProject', [$project->id, $project->alias]) . '">' . $project->title . '</a>';
                } elseif ($checkFurniture == true) {
                    $htmlContent .= '<a alt="' . $project->title . '" href="' . route('postDesign', [$project->id, $project->alias]) . '">' . $project->title . '</a>';
                } else {
                    $htmlContent .= '<a alt="' . $project->title . '" href="#">' . $project->title . '</a>';
                }
                $htmlContent .= '</h3>';
                $htmlContent .= '<div class="post-detail">';
                $htmlContent .= '<div class="text-blog">';
                $htmlContent .= '<p>' . $project->summary . '</p>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
                $htmlContent .= '</div>';
            }
        }
        return view('flexshop.search')->with('thisListProject', $htmlContent);
    }

    Public function searchProd(Request $request)
    {
        $htmlCate = '';
        $htmlProducts = '';
        //TODO search
        $getKey = Input::get('txtSearchProd');
        if (isset($getKey)) {
            $seedProd = DB::table('products')->where('title', 'like', '%' . $getKey . '%')
                ->select('id', 'title', 'alias', 'images', 'summary', 'prices', 'discount', 'hot')
                ->get();
        }
        $htmlProducts .= $this->showProducts($seedProd,1);
        //TODO get Cate
        $getCate = DB::table('cate_prods as cate')
            ->rightjoin('child_prods as chil', 'cate.id', '=', 'chil.cateParen_id')
            ->select('cate.id as idCate', 'cate.name', 'cate.alias', 'cate.weight', 'chil.lvl')
            ->where([
                ['lvl', '<>', 0],
            ])
            ->get();
        foreach ($getCate as $cate) {
            $htmlCate .= '<li class="menu_lv1 item-sub-cat"><a data-name="san-pham" data-title="' . $cate->name . '" href="' . route('cateListProduct', [$cate->idCate, $cate->alias]) . '" ><i class="fa fa-angle-double-right" aria-hidden="true"></i> ' . $cate->name . '</a></li>';
        }

        $keyFlag = 1;
        return view('flexshop.product')
            ->with([
                'thisProductList' => $htmlProducts,
                'flag' => $keyFlag
            ]);
    }

    //TODO Contact **************************************
    public function lienhe(Request $request)
    {
        //TODO get banner in system file
        $data = DB::table('systems')->select('bannerContact')->first();
        $getBanner = (object)[
            'description' => $data->bannerContact
        ];
        return view('flexshop.contact')->with(['banner' => $getBanner]);
    }

    //TODO Sigle page
    public function about()
    {
        return view('flexshop.about');
    }

    //TODO PAGES
    public function getPage($slug)
    {
        $keySlug = array(
            'cham-soc-khach-hang',
            'huong-dan-mua-hang',
            'giao-nhan-va-thanh-toan',
            'doi-tra-va-bao-hanh',
            'chinh-sach-thanh-toan',
            'chinh-sach-van-chuyen',
            'chinh-sach-bao-hanh-doi-tra',
            'doi-ngu-chuyen-nghiep',
            'gia-ca-hop-ly',
            'dam-bao-tien-do',
            'gioi-thieu',
            'tu-van-thiet-ke'
        );
        foreach ($keySlug as $kslug) {
            if ($slug == $kslug) {
                $getData = DB::table('pages')
                    ->where('slug', $slug)
                    ->first();
            }
        }
        $getBanner = DB::table('pages')->where('slug', $slug)->first();
        return view('flexshop.pages')->with(['slugData' => $getData, 'banner' => $getBanner]);
    }
    /*
     * this is function get release for news
     */
    public function getReleaseNews($relation)
    {
        $html = '';
        $getReleaseNews = unserialize($relation);
        $getDatas = DB::table('fengshuis')
            ->select('title', 'alias')
            ->wherein('id', $getReleaseNews)
            ->get();
        $html .= '<ul class="releaseNews">';
        foreach ($getDatas as $getItem) {
            $html .= '<li style="color: #3cb64b;"><i class="fas fa-angle-double-right" style="margin-right: 5px;"></i><h2><a href="' . route('postNews', $getItem->alias) . '">' . $getItem->title . '</a></h2></li>';
        }
        $html .= '</ul>';
        return $html;
    }

    /*
     * get meta data
     */
    function getMetaData($title, $description, $images)
    {
        $metaData = (object)[
            'title' => $title,
            'description' => $description,
            'image' => $images
        ];
        return $metaData;
    }

    /*
     * function show products
     */
    public function showProducts($listProducts, $htmlInsert = 0)
    {
        $htmlFeatureProduct = '';
        if ($htmlInsert == 0) {
            foreach ($listProducts as $feature) {
                $htmlFeatureProduct .= '<div class="item product-inner">';
                $htmlFeatureProduct .= '<div class="item-inner transition">';
                $htmlFeatureProduct .= '<div class="image">';
                $htmlFeatureProduct .= '<a class="lt-image" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProduct', $feature->alias) . '">';
                $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-1 product-featured-image" alt="">';
                $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-2 product-featured-image" alt=""></a>';
                $htmlFeatureProduct .= '<div class="button-group">';
                $htmlFeatureProduct .= '<div class="button-group">';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '';
                $htmlFeatureProduct .= '<div class="caption captionCustom">';
                $htmlFeatureProduct .= '<h4 style="padding: 5px">';
                $htmlFeatureProduct .= '<a data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProduct', $feature->alias) . '" class="category-product" style="margin:5px">' . $feature->title . '</a>';
                $htmlFeatureProduct .= '</h4>';
                $htmlFeatureProduct .= '<span class="price_custom" style="margin-top: 19px; padding-bottom: 3px;">';
                $htmlFeatureProduct .= ($feature->prices == 0) ? 'Liên hệ' : number_format($feature->prices) . ' VNĐ';
                $htmlFeatureProduct .= '</span>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
            }
        } else {
            foreach ($listProducts as $feature) {
                $htmlFeatureProduct .= '<div class="col-xs-12 col-sm-4 col-md-3">';
                $htmlFeatureProduct .= '<div class="item product-inner">';
                $htmlFeatureProduct .= '<div class="item-inner transition">';
                $htmlFeatureProduct .= '<div class="image changImg">';
                $htmlFeatureProduct .= '<a class="lt-image" data-name="san-pham" data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProduct', $feature->alias) . '">';
                $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-1 product-featured-image" alt="">';
                $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $feature->images) . '" class="img-2 product-featured-image" alt=""></a>';
                $htmlFeatureProduct .= '<div class="button-group">';
                $htmlFeatureProduct .= '<div class="button-group">';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '';
                $htmlFeatureProduct .= '<div class="caption captionCustom">';
                $htmlFeatureProduct .= '<h4 style="padding: 5px">';
                $htmlFeatureProduct .= '<a data-title="' . $feature->title . '" alt="' . $feature->title . '" href="' . route('postProduct', $feature->alias) . '" class="category-product" style="margin:5px">' . $feature->title . '</a>';
                $htmlFeatureProduct .= '</h4>';
                $htmlFeatureProduct .= '<span class="price_custom" style="margin-top: 19px; padding-bottom: 3px;">';
                $htmlFeatureProduct .= ($feature->prices == 0) ? 'Liên hệ' : number_format($feature->prices) . ' VNĐ';
                $htmlFeatureProduct .= '</span>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
                $htmlFeatureProduct .= '</div>';
            }
        }
        return $htmlFeatureProduct;
    }

    /*
     * get slide show menu cate and products
     */
    public function slideShowProducts($getCateProdId, $getSubAndProd)
    {
        $htmlFeatureProduct = '';
        foreach ($getCateProdId as $cate) {
            $htmlFeatureProduct .= '<div class="header-title">';
            $htmlFeatureProduct .= '<h3 class="modtitle">' . $cate->name . '</h3>';
            $htmlFeatureProduct .= '</div>';
            $htmlFeatureProduct .= '<div class="product-slider-1  product-thumb">';
            foreach ($getSubAndProd as $item) {
                if ($cate->cateParen_id == $item->lvl && $item->feature == 1 || ($cate->lvl == $item->lvl && $cate->cateParen_id == $item->Cate_id)) {
                    $htmlFeatureProduct .= '<div class="item product-inner">';
                    $htmlFeatureProduct .= '<div class="item-inner transition">';
                    $htmlFeatureProduct .= '<div class="image">';
                    $htmlFeatureProduct .= '<a class="lt-image" data-name="san-pham" data-title="' . $item->title . '" alt="' . $item->title . '" href="' . route('postProduct', $item->alias) . '">';
                    $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $item->images) . '" class="img-1 product-featured-image" alt="">';
                    $htmlFeatureProduct .= '<img src="' . asset('upload/thumbnail/' . $item->images) . '" class="img-2 product-featured-image" alt=""></a>';
                    $htmlFeatureProduct .= '<div class="button-group">';
                    $htmlFeatureProduct .= '<div class="button-group">';
                    $htmlFeatureProduct .= '</div>';
                    $htmlFeatureProduct .= '</div>';
                    $htmlFeatureProduct .= '</div>';
                    $htmlFeatureProduct .= '';
                    $htmlFeatureProduct .= '<div class="caption captionCustom">';
                    $htmlFeatureProduct .= '<h4 style="padding: 5px">';
                    $htmlFeatureProduct .= '<a data-title="' . $item->title . '" alt="' . $item->title . '" href="' . route('postProduct', $item->alias) . '" class="category-product" style="margin:5px">' . $item->title . '</a>';
                    $htmlFeatureProduct .= '</h4>';
                    $htmlFeatureProduct .= '<span class="price_custom" style="margin-top: 19px; padding-bottom: 3px;">';
                    $htmlFeatureProduct .= ($item->prices == 0) ? 'Liên hệ' : number_format($item->prices) . ' VNĐ';
                    $htmlFeatureProduct .= '</span>';
                    $htmlFeatureProduct .= '</div>';
                    $htmlFeatureProduct .= '</div>';
                    $htmlFeatureProduct .= '</div>';
                }
            }
            $htmlFeatureProduct .= '</div>';
        }
        return $htmlFeatureProduct;
    }
}
