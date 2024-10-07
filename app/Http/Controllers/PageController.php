<?php

namespace App\Http\Controllers;
use App\Models\Welcome;
use App\Models\CarousellAwal;
use App\Models\AirportTechnology;
use App\Models\AirportTechnologyImage;
use App\Models\TakingCare;
use App\Models\VissionMissionTarget;
use App\Models\OurSkill;
use App\Models\aboutus;
use App\Models\OurService;
use App\Models\OurServiceData;
use App\Models\ContactUs;
use App\Models\Blog;
use App\Models\Development;
use App\Models\PeraturanPKL;
use App\Models\DaftarNilai;
use App\Models\Planning;
use App\Models\LearningCenter;
use App\Models\LearningCenterContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $welcome = Welcome::all();
        $carousellawal = CarousellAwal::all();
        $airporttechnology = AirportTechnology::all();
        $airporttechnologyimage = AirportTechnologyImage::first();
        $takingcare = TakingCare::all();
        $vissionmissiontarget = VissionMissionTarget::all();
        $ourskill = OurSkill::all();
        return view('pengunjung.home', compact('welcome', 'carousellawal', 'airporttechnology', 'airporttechnologyimage', 'takingcare', 'vissionmissiontarget', 'ourskill'));
    }
    

    public function airporttechnology()
    {
        $airporttechnologyimage = AirportTechnologyImage::all();
        return view('pengunjung.airporttechnology', compact('airporttechnologyimage'));
    }

    public function aboutus()
    {
        $aboutus = AboutUs::all();
        return view('pengunjung.aboutus', compact('aboutus'));
    }

    public function ourservice()
    {
        $ourservice = OurService::all();
        $ourservicedata = OurServiceData::all();
        return view('pengunjung.ourservice', compact('ourservice', 'ourservicedata'));
    }
    
    public function ourservicedata($id)
    {
        $ourservicedata = OurServiceData::find($id);
        if(!$ourservicedata){
            return redirect()->back()->withError(['message' => 'Data tidak ditemukan!']);
        }
        return view('pengunjung.ourservicedata', compact('ourservicedata'));
    }
    
    public function learningcenter()
    {
        return view('pengunjung.learningcenter');
    }

    public function learningcentercontent()
    {
        $learningcentercontent = LearningCenterContent::all();
        return view('pengunjung.learningcentercontent', compact('learningcentercontent'));
    }

    public function blog()
    {
        $blog = Blog::all();
        return view('pengunjung.blog', compact('blog'));
    }

    public function deskripsiblog($id)
    {
        $blog = Blog::find($id);
        if(!$blog){
            return redirect()->back()->withError(['message' => 'Data tidak ditemukan!']);
        }
        return view('pengunjung.deskripsiblog', compact('blog'));
    }

    public function contactus()
    {
        $contactus = ContactUs::all();
        return view('pengunjung.contactus', compact('contactus'));
    }

    public function development()
    {
        $development = Development::all();
        return view('pengunjung.development', compact('development'));
    }

    public function developmentdetail($id)
    {
        $development = Development::find($id);
        if(!$development){
            return redirect()->back()->withError(['message' => 'Data tidak ditemukan!']);
        }
        return view('pengunjung.developmentdetail', compact('development'));
    }

    public function fieldindustrialpractice()
    {
        $peraturanpkl = PeraturanPKL::all();
        $daftarnilai = DaftarNilai::all();
        return view('pengunjung.fieldindustrialpractice', compact('peraturanpkl', 'daftarnilai'));
    }

    public function planning()
    {
        $planning = Planning::all();
        return view('pengunjung.planning', compact('planning'));
    }

}
