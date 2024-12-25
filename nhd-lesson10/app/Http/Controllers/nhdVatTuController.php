<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdVattu; 
class nhdVatTuController extends Controller
{
    //
    public function nhdlist()
    {
          $nhdvattu = nhdVattu::all();
          $nhdvattu = nhdVattu::paginate(10);  // Thay 10 bằng số lượng bạn muốn trên mỗi trang
          return view('nhdvattu.list',['nhdvattu'=>$nhdvattu]);
    }

    public function nhddetail($mavattu)
    {
        $nhdvattu = nhdVattu::where('nhdMavtu',$mavattu)->first();
        return view('nhdvattu.detail',['nhdvattu'=>$nhdvattu]);
    }
    public function nhdedit($mavattu)
    {
        // Lấy bản ghi nhdvattu dựa vào mã vật tư
        $nhdvattu = nhdVattu::where('nhdMavtu', $mavattu)->first();

        // Kiểm tra nếu vật tư không tồn tại, chuyển hướng về trang danh sách với thông báo lỗi
        if (!$nhdvattu) {
            return redirect('/nhdvattu')->with('error', 'Vật tư không tồn tại.');
        }

        return view('nhdvattu.edit', ['nhdvattu' => $nhdvattu]);
    }

    public function nhdeditsubmit(Request $request, $mavattu)
    {
        // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
        $request->validate([
            'tenvattu' => 'required|string|max:255',
            'donvitinh' => 'required|string|max:255',
            'phantram' => 'required|numeric|min:0|max:100', // Kiểm tra phần trăm hợp lệ từ 0 đến 100
        ]);

        // Lấy thông tin vật tư từ cơ sở dữ liệu
        $nhdvattu = nhdVattu::where('nhdMavtu', $mavattu)->first();

        // Kiểm tra nếu vật tư không tồn tại
        if (!$nhdvattu) {
            return redirect('/nhdvattu')->with('error', 'Vật tư không tồn tại.');
        }

        // Cập nhật thông tin vật tư
        $nhdvattu->nhdTennhu = $request->tenvattu;
        $nhdvattu->nhdDnhinh = $request->donvitinh;
        $nhdvattu->nhdPhanTram = $request->phantram; // Cập nhật phần trăm

        // Lưu lại thông tin vật tư vào cơ sở dữ liệu
        $nhdvattu->save();

        // Chuyển hướng và thông báo thành công
        return redirect('/nhdvattu')->with('success', 'Thông tin vật tư đã được cập nhật.');
    }

    public function nhdcreate()
    {
        // Trả về view và truyền dữ liệu danh mục nếu cần
        return view('nhdvattu.create');
    }
    
    public function nhdcreatesubmit(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'mavattu' => 'required|unique:nhdvattu,nhdMavtu', // Mã vật tư phải duy nhất
            'tenvattu' => 'required|string|max:255',
            'donvitinh' => 'required|string|max:255',
            'phantram' => 'required|numeric|min:0|max:100', // Kiểm tra phần trăm hợp lệ từ 0 đến 100
        ]);
    
        // Tạo một đối tượng mới của model nhdVattu
        $nhdvattu = new nhdVattu;
        $nhdvattu->nhdMavtu = $request->mavattu;
        $nhdvattu->nhdTenvtu = $request->tenvattu;
        $nhdvattu->nhdDvtinh = $request->donvitinh;
        $nhdvattu->nhdPhanTram = $request->phantram; // Cập nhật phần trăm
    
        // Lưu vật tư vào cơ sở dữ liệu
        $nhdvattu->save();
    
        // Thông báo thành công khi thêm vật tư mới
        return redirect('/nhdvattu')->with('success', 'Thông tin vật tư đã được thêm thành công.');
    }
    

    public function nhddelete($mavattu)
    {
    nhdVattu::where('nhdMavtu',$mavattu)->delete();
    return back()->with('vattu_deleted','Đã xóa sinh viên thành công!');
    }
}