<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        // تحقق من أن الملف هو صورة
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // رفع الصورة وتخزينها في مجلد storage/app/public
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');

            // إعادة توجيه المستخدم بعد رفع الصورة
            return back()->with('success', 'تم رفع الصورة بنجاح!')
                ->with('image', $imagePath);
        }

        return back()->withErrors('حدث خطأ أثناء رفع الصورة.');
    }
}