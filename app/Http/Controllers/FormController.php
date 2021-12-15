<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function React\Promise\all;

class FormController extends Controller
{
    function index()
    {
        // dd($request->all());
        return view('internship.form');
    }


    public function store(Request $request)
    {

        // dd($request->all());
        // ตรวจสอบข้อมูล
        $request->validate(
            [
                'name' => 'required|max:255',
                'address' => 'required|max:255',
                'name_title' => 'required',
                'id_card_number' => 'required|max:255',
                'birthday' => 'required',
                'profile' => 'required',


            ],
            [
                'name.required' => "กรุณาป้อนชื่อ-นามสกุล",
                'name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",


                'address.required' => "กรุณาป้อนที่อยู่",
                'address.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",

                'name_title.required' => "กรุณาเลือกคำนำหน้า",

                'id_card_number.required' => "กรุณาป้อนหมายเลขบัตรประชาชน",
                'id_card_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",

                'birthday.required' => "กรุณาเลือก วัน/เดือน/ปีเกิด",


                'profile.required' => "กรุณาอัพโหลดรูปภาพ",


            ],

        );
         dd($request->name_title, $request->name,$request->address,$request->id_card_number,$request->birthday,$request->profile);

        
    }
}
