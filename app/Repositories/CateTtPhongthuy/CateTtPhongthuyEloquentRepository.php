<?php
/**
 * Created by PhpStorm.
 * User: LeThanh
 * Date: 10/19/2017
 * Time: 9:55 PM
 */

namespace App\Repositories\CateTtPhongThuy;

use App\Repositories\EloquentRepository;
use App\CateTtPhongthuy;
use App\ChildTtPhongthuy;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class CateTtPhongthuyEloquentRepository extends EloquentRepository implements CateTtPhongthuyRepositoryInterface
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\CateTtPhongthuy::class;
    }

    public function getDataMenu()
    {
        $cate = DB::table('cate_tt_phongthuys')
            ->leftjoin('child_tt_phongthuys', 'cate_tt_phongthuys.id', '=', 'child_tt_phongthuys.cateParen_id')
            ->select('name', 'lvl', 'alias', 'metaName', 'description', 'weight', 'child_tt_phongthuys.cateParen_id')
            ->get();
        return $cate;
    }

    public function getCreateAndEdit($inputFile, $id = 0)
    {
        if ($id == 0) {
            $cateData = new CateTtPhongthuy();
            if (!empty($inputFile['txtName'])) {
                $cateData->name = $inputFile['txtName'];
                $cateData->alias = changeTitle($inputFile['txtName']);
            }
            if (!empty($inputFile['txtMeta'])) {
                $cateData->metaName = $inputFile['txtMeta'];
            } else {
                $cateData->metaName = $inputFile['txtName'];
            }
            if (!empty($inputFile['txtDescription'])) {
                $cateData->description = $inputFile['txtDescription'];
            }
            $cateData->save();
            $cateChildData = new ChildTtPhongthuy();
            $cateChildData->cateParen_id = $cateData->id;
            if (!empty($inputFile['slMenu'])) {
                $cateChildData->lvl = $inputFile['slMenu'];
            } else {
                $cateChildData->lvl = 0;
            }
            $cateChildData->save();
            return redirect()->route('catefengshui.index')->with('thongbao', 'Danh mục tạo thành công');
        } else {
            $cateData = CateTtPhongthuy::find($id);
            if (!empty($inputFile['txtName'])) {
                $cateData->name = $inputFile['txtName'];
                $cateData->alias = changeTitle($inputFile['txtName']);
            }
            if (!empty($inputFile['txtMeta'])) {
                $cateData->metaName = $inputFile['txtMeta'];
            } else {
                $cateData->metaName = $inputFile['txtName'];
            }
            if (!empty($inputFile['txtDescription'])) {
                $cateData->description = $inputFile['txtDescription'];
            }
            $cateData->save();
            $getIdChild = DB::table('cate_tt_phongthuys as cate')
                ->leftjoin('child_tt_phongthuys as child','cate.id','=','child.cateParen_id')
                ->where('child.cateParen_id',$id)
                ->get()
                ->first();
            $cateChildData = ChildTtPhongthuy::find($getIdChild->id);
            $cateChildData->cateParen_id = $cateData->id;
            if (!empty($inputFile['slMenu'])) {
                $cateChildData->lvl = $inputFile['slMenu'];
            } else {
                $cateChildData->lvl = 0;
            }
            $cateChildData->save();
            return redirect()->route('catefengshui.index')->with('thongbao', 'Danh mục thay đổi thành công');
        }
    }

    public function getDelete($id)
    {
        // bien kiem tra xem co phai la muc con ko, muc con != 0
        $categet = DB::table('child_tt_phongthuys')
            ->where('lvl',$id)
            ->count();
        if ($categet == 0) {
            $getid = CateTtPhongthuy::find($id);
            $getid->delete();
            return redirect()->route('catefengshui.index')->with('thongbao', 'Xóa thành công');
        } else {
            return redirect()->route('catefengshui.index')->with('thongbaoloi', 'Đây là thư mục cha không thể xóa được');
        }
    }
}