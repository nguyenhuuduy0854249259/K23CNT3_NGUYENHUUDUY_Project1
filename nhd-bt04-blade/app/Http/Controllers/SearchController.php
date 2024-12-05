<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ input
        $query = $request->input('query');

        // Giả sử bạn có một model `Post` (bài viết)
        // Thực hiện tìm kiếm trên cột `title` của bảng posts
        $results = \App\Models\Post::where('title', 'like', '%' . $query . '%')->get();

        // Trả về view kèm kết quả tìm kiếm
        return view('search_results', compact('results', 'query'));
    }
}
