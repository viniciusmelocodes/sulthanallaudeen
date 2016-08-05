<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;
use DB;
use Redirect;
use Mail;
use App\User;
use App\MailTemplate;
use App\UserLog;
use Input;
use App\Blog;
use App\ContactMails;
use App\Tag;
use App\BlogTag;
use App\Reminder;
use Validator;

class PublicController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*

     */

    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    #Public Home Page
    public function index() {
        return view('public.index');
    }

    #Blog Full Listing
    #Blog Live Search

    public function searchBlog() {
        $searchQuery = Input::get('searchQuery');
        $blogResult = Blog::where('blog_title', 'LIKE', '%' . $searchQuery . '%')->get();
        if (count($blogResult) == 0) {
            $resultData = '<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' . $searchQuery . '" ( ' . count($blogResult) . ' Results )</div>';
        } else {
            $resultData = '<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' . $searchQuery . '" ( ' . count($blogResult) . ' Result )</div>';
        }

        foreach ($blogResult as $key) {
            $resultData .= '<h2><a href="' . asset("/") . 'blog/' . $key["blogUrl"] . '" style="text-decoration:none">' . $key["blog_title"] . '</a></h2>
				<p class="lead">by <a style="text-decoration:none">Sulthan Allaudeen</a></p>
				<p style="float:right"><span class="glyphicon glyphicon-time"></span> Posted on 01 Sep 2015 </p>';
        }
        return $resultData;
    }

    #Get Blogs by Tag

    public function tagData($tag) {
        $tagId = Tag::where('tag_title', $tag)->pluck('id');
        $tags = Tag::where('tag_status', 1)->get();
        $blogTag = BlogTag::where('tag_id', $tagId)->pluck('id');
        #return $tagId;
        if ($blogTag == '') {
            return view('public.tag')->with('error', 'No Blog Post related to the Tag <b>' . $tag . '</b>')->with('tags', $tags)->with('tagName', $tag);
        } else {



            $tagData = Blog::find($tagId)->getBlogs;


            return view('public.tag')->with('tagData', $tagData)->with('tagList', $tagData)->with('tags', $tags)->with('tagName', $tag);
        }
    }

    #Tag About Page

    public function tagAbout($tag = NULL) {
        $tagData = Tag::where('tag_title', $tag)->first();
        $tags = Tag::where('tag_status', 1)->get();
        return view('public.tagAbout')->with('tagData', $tagData)->with('tags', $tags);
    }

    #Contact Page

    public function contact() {
        return view('public.contact');
    }

    #Send Mail

    public function sendMail() {
        $mailData = Input::except('_token');
        $validation = Validator::make($mailData, ContactMails::$mailData);
        if ($validation->passes()) {
            $email = 'allaudeen.s@gmail.com';
            $subject = 'Sysaxiom :: Message from : ' . Input::get('userEmail');
            $body = Input::get('userMessage');
            $mailId = ContactMails::create($mailData);
            Mail::send([], array('Email' => $email, 'body' => $body, 'subject' => $subject), function($message) use ($email, $body, $subject) {
                $mail_body = $body;
                $message->setBody($mail_body, 'text/html');
                $message->to($email);
                $message->subject($subject);
            });

            $Response = array('success' => '1', 'mailId' => $mailId->id);
        } else {
            $Response = array('success' => '0', 'error' => $validation->messages());
        }

        return $Response;
    }

    #Gallery Page

    public function gallery() {
        return view('public.gallery');
    }

    #Gallery Explorer

    public function galleryExplorer($dir) {
        return view('public.galleryexplorer')->with('dir', $dir);
    }

    #Project Page

    public function project() {
        return view('public.project');
    }

    #Technologies Used in Sysaxiom App

    public function technology() {
        $sideBarTech = $this->technologySideBar();
        return view('public.technology')->with('sideBar', $sideBarTech);
    }

    #Admin Login Page

    public function adminLogin() {
        return view('admin.login.login');
    }

    #Admin Auth Login

    public function authAdminLogin() {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            $this->logUser(Auth::user()->id);
            return Redirect::to('dashboard');
        } else {
            #return Redirect::to('admin.login.login')->with('Message', 'Invalid Username or Password');   }
            return Redirect::to('sa')->with('warning', 'Invalid Username or Password');
        }
    }

    #System Utils
    #Getting Browser Details
    #Getting OS Details

    public function getPlatform() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];


        $os_platform = "Unknown OS Platform";

        $os_array = array(
            '/windows nt 10/i' => 'Windows 10',
            '/windows nt 6.3/i' => 'Windows 8.1',
            '/windows nt 6.2/i' => 'Windows 8',
            '/windows nt 6.1/i' => 'Windows 7',
            '/windows nt 6.0/i' => 'Windows Vista',
            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i' => 'Windows XP',
            '/windows xp/i' => 'Windows XP',
            '/windows nt 5.0/i' => 'Windows 2000',
            '/windows me/i' => 'Windows ME',
            '/win98/i' => 'Windows 98',
            '/win95/i' => 'Windows 95',
            '/win16/i' => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i' => 'Mac OS 9',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/ipod/i' => 'iPod',
            '/ipad/i' => 'iPad',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/webos/i' => 'Mobile'
        );

        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {
                $os_platform = $value;
            }
        }

        return $os_platform;
    }

    public function getIp() {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getTime() {
        return date('Y-m-d H:i:s');
    }

    public function accessLog($way) {
        if ($way == 'server') {
            $sideBar = $this->technologySideBar();
            $userLog = UserLog::orderBy('id', 'desc')->get();
            return view('public.technology.accessLogServer')->with('sideBar', $sideBar)->with('userLog', $userLog);
        } else if ($way == 'client') {
            return view('public.technology.accessLogClient');
        } else {
            return $this->lol();
        }
    }

    #Util
    #Sysaxiom WebLog

    public function utilSysaxiomWebLog() {
        $sideBar = $this->technologySideBar();
        $userLog = UserLog::orderBy('id', 'desc')->get();
        return view('admin.util.sysWebLog')->with('sideBar', $sideBar)->with('userLog', $userLog);
    }

    public function technologySideBar() {

        $fullUrl = $_SERVER['REQUEST_URI'];
        $urlSegment = substr($fullUrl, strrpos($fullUrl, '/') + 1);
        $url = array("accessLogServer" => "", "technology" => "");
        if ($urlSegment == 'technology') {
            $url['technology'] = 'active';
        } else if ($urlSegment == 'server') {
            $url['accessLogServer'] = 'active';
        } else {
            $url['technology'] = 'active';
        }


        return '<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
            <a href=' . asset('/technology') . ' class="list-group-item ' . $url['technology'] . '">Home</a>
            <a href="' . asset('/accessLog/server') . '" class="list-group-item ' . $url['accessLogServer'] . '">Website Log</a>
          </div>
        </div><!--/.sidebar-offcanvas-->';
    }

    public function PushNotification($DeviceId, $Message) {
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $DeviceId,
            'data' => $Message
        );
        $headers = array(
            'Authorization: key = AIzaSyDTL6-ORUx5arAi1M9el1VzZ7pefr9Ji9U',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    public function sendPush() {
        $allUser = User::all();
        foreach ($allUser as $user) {
            $DeviceId = array($user->gcm_id);
            $Message = array('title' => 'Vahitha', 'message' => '@chennai', 'info' => 'super secret info');
            $this->PushNotificationLocal($DeviceId, $Message);
        }
    }

    public function PushNotificationLocal($DeviceId, $Message) {

        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $DeviceId,
            'data' => $Message
        );
        $headers = array(
            'Authorization: key = AIzaSyDTL6-ORUx5arAi1M9el1VzZ7pefr9Ji9U',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    #Reminder

    public function remind() {
        $reminderData = Input::all();
        $reminderData['reminder_time'] = date("H:i:s", strtotime($reminderData['reminder_date']));
        $reminderData['reminder_date'] = date("Y-m-d", strtotime($reminderData['reminder_date']));
        $reminderData['status'] = 1;
        Reminder::create($reminderData);
        $Response = array('success' => '1');
        return $Response;
    }

    public function getNotification()
    {
        $reminderData = Reminder::orderBy('id', 'DESC')->take(10)->get();
        $Response = array('success' => '1', 'reminder' => $reminderData);
        return $Response;
    }

}
