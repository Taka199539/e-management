{"filter":false,"title":"LoginController.php","tooltip":"/e-management/app/Http/Controllers/Admin/LoginController.php","undoManager":{"mark":25,"position":25,"stack":[[{"start":{"row":0,"column":0},"end":{"row":63,"column":0},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers\\Auth;","","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","use Illuminate\\Http\\Request;","","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */","","    use AuthenticatesUsers;","","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/home';","","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","    ","     public function login(Request $request)","    {","        $input = $request->all();","","        $this->validate($request, [","            'email' => 'required|email',","            'password' => 'required',","        ]);","","        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))","        {","            if (auth()->user()->is_admin == 1) {","                return redirect()->route('admin.home');","            }else{","                return redirect()->route('home');","            }","        }else{","            return redirect()->route('login')","                ->with('error','Email-Address And Password Are Wrong.');","        }","","    }","}",""],"id":1}],[{"start":{"row":42,"column":8},"end":{"row":60,"column":0},"action":"remove","lines":["$input = $request->all();","","        $this->validate($request, [","            'email' => 'required|email',","            'password' => 'required',","        ]);","","        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))","        {","            if (auth()->user()->is_admin == 1) {","                return redirect()->route('admin.home');","            }else{","                return redirect()->route('home');","            }","        }else{","            return redirect()->route('login')","                ->with('error','Email-Address And Password Are Wrong.');","        }",""],"id":2}],[{"start":{"row":42,"column":8},"end":{"row":45,"column":5},"action":"insert","lines":["public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":48,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers\\Auth;","","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","use Illuminate\\Http\\Request;","","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */","","    use AuthenticatesUsers;","","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/home';","","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","    ","     public function login(Request $request)","    {","        public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","    }","}",""],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":186,"column":0},"action":"insert","lines":["","// app/Http/Controllers/Admin/LoginController.php","","<?php"," ","namespace App\\Http\\Controllers\\Admin;  // Auth→Adminに変更"," ","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Auth;"," ","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */"," ","    use AuthenticatesUsers;"," ","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/admin/home'; // 変更"," ","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest:admin')->except('logout'); //変更","    }","    ","    public function showLoginForm()","    {","        return view('admin.login');  //変更","    }"," ","    protected function guard()","    {","        return Auth::guard('admin');  //変更","    }","    ","    public function logout(Request $request)","    {","        Auth::guard('admin')->logout();  //変更","        $request->session()->flush();","        $request->session()->regenerate();"," ","        return redirect('/admin/login');  //変更","    }","}","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","// app/Http/Controllers/Admin/LoginController.php"," ","<?php"," ","namespace App\\Http\\Controllers\\Admin;  // Auth→Adminに変更"," ","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Auth;"," ","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */"," ","    use AuthenticatesUsers;"," ","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/admin/home'; // 変更"," ","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest:admin')->except('logout'); //変更","    }","    ","    public function showLoginForm()","    {","        return view('admin.login');  //変更","    }"," ","    protected function guard()","    {","        return Auth::guard('admin');  //変更","    }","    ","    public function logout(Request $request)","    {","        Auth::guard('admin')->logout();  //変更","        $request->session()->flush();","        $request->session()->regenerate();"," ","        return redirect('/admin/login');  //変更","    }",""],"id":5}],[{"start":{"row":63,"column":0},"end":{"row":186,"column":0},"action":"remove","lines":["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","// app/Http/Controllers/Admin/LoginController.php"," ","<?php"," ","namespace App\\Http\\Controllers\\Admin;  // Auth→Adminに変更"," ","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Auth;"," ","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */"," ","    use AuthenticatesUsers;"," ","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/admin/home'; // 変更"," ","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest:admin')->except('logout'); //変更","    }","    ","    public function showLoginForm()","    {","        return view('admin.login');  //変更","    }"," ","    protected function guard()","    {","        return Auth::guard('admin');  //変更","    }","    ","    public function logout(Request $request)","    {","        Auth::guard('admin')->logout();  //変更","        $request->session()->flush();","        $request->session()->regenerate();"," ","        return redirect('/admin/login');  //変更","    }",""],"id":6}],[{"start":{"row":60,"column":45},"end":{"row":60,"column":46},"action":"remove","lines":["更"],"id":7},{"start":{"row":60,"column":44},"end":{"row":60,"column":45},"action":"remove","lines":["変"]},{"start":{"row":60,"column":43},"end":{"row":60,"column":44},"action":"remove","lines":["/"]},{"start":{"row":60,"column":42},"end":{"row":60,"column":43},"action":"remove","lines":["/"]}],[{"start":{"row":56,"column":44},"end":{"row":56,"column":45},"action":"remove","lines":["更"],"id":8},{"start":{"row":56,"column":43},"end":{"row":56,"column":44},"action":"remove","lines":["変"]},{"start":{"row":56,"column":42},"end":{"row":56,"column":43},"action":"remove","lines":["/"]}],[{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"remove","lines":["更"],"id":9},{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"remove","lines":["変"]},{"start":{"row":51,"column":39},"end":{"row":51,"column":40},"action":"remove","lines":["/"]},{"start":{"row":51,"column":38},"end":{"row":51,"column":39},"action":"remove","lines":["/"]}],[{"start":{"row":32,"column":47},"end":{"row":32,"column":48},"action":"remove","lines":["更"],"id":10},{"start":{"row":32,"column":46},"end":{"row":32,"column":47},"action":"remove","lines":["変"]},{"start":{"row":32,"column":45},"end":{"row":32,"column":46},"action":"remove","lines":[" "]},{"start":{"row":32,"column":44},"end":{"row":32,"column":45},"action":"remove","lines":["/"]},{"start":{"row":32,"column":43},"end":{"row":32,"column":44},"action":"remove","lines":["/"]}],[{"start":{"row":41,"column":63},"end":{"row":41,"column":64},"action":"remove","lines":["更"],"id":11},{"start":{"row":41,"column":62},"end":{"row":41,"column":63},"action":"remove","lines":["変"]},{"start":{"row":41,"column":61},"end":{"row":41,"column":62},"action":"remove","lines":["/"]},{"start":{"row":41,"column":60},"end":{"row":41,"column":61},"action":"remove","lines":["/"]}],[{"start":{"row":46,"column":40},"end":{"row":46,"column":41},"action":"remove","lines":["更"],"id":12},{"start":{"row":46,"column":39},"end":{"row":46,"column":40},"action":"remove","lines":["変"]},{"start":{"row":46,"column":38},"end":{"row":46,"column":39},"action":"remove","lines":["/"]},{"start":{"row":46,"column":37},"end":{"row":46,"column":38},"action":"remove","lines":["/"]}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":42},"action":"remove","lines":["/"],"id":13}],[{"start":{"row":11,"column":1},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":[" "],"id":15}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["// app/Http/Controllers/Admin/LoginController.php",""],"id":16},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]},{"start":{"row":3,"column":54},"end":{"row":3,"column":55},"action":"remove","lines":["更"]},{"start":{"row":3,"column":53},"end":{"row":3,"column":54},"action":"remove","lines":["変"]},{"start":{"row":3,"column":52},"end":{"row":3,"column":53},"action":"remove","lines":["に"]},{"start":{"row":3,"column":51},"end":{"row":3,"column":52},"action":"remove","lines":["n"]},{"start":{"row":3,"column":50},"end":{"row":3,"column":51},"action":"remove","lines":["i"]},{"start":{"row":3,"column":49},"end":{"row":3,"column":50},"action":"remove","lines":["m"]},{"start":{"row":3,"column":48},"end":{"row":3,"column":49},"action":"remove","lines":["d"]},{"start":{"row":3,"column":47},"end":{"row":3,"column":48},"action":"remove","lines":["A"]},{"start":{"row":3,"column":46},"end":{"row":3,"column":47},"action":"remove","lines":["→"]},{"start":{"row":3,"column":45},"end":{"row":3,"column":46},"action":"remove","lines":["h"]},{"start":{"row":3,"column":44},"end":{"row":3,"column":45},"action":"remove","lines":["t"]},{"start":{"row":3,"column":43},"end":{"row":3,"column":44},"action":"remove","lines":["u"]}],[{"start":{"row":3,"column":42},"end":{"row":3,"column":43},"action":"remove","lines":["A"],"id":17},{"start":{"row":3,"column":41},"end":{"row":3,"column":42},"action":"remove","lines":[" "]},{"start":{"row":3,"column":40},"end":{"row":3,"column":41},"action":"remove","lines":["/"]},{"start":{"row":3,"column":39},"end":{"row":3,"column":40},"action":"remove","lines":["/"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":18}],[{"start":{"row":60,"column":1},"end":{"row":61,"column":0},"action":"insert","lines":["",""],"id":19}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":5},"action":"insert","lines":["","     "],"id":20,"ignore":true}],[{"start":{"row":37,"column":0},"end":{"row":37,"column":5},"action":"remove","lines":["     "],"id":21,"ignore":true}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":22,"ignore":true}],[{"start":{"row":2,"column":36},"end":{"row":2,"column":37},"action":"insert","lines":["\\"],"id":23},{"start":{"row":2,"column":37},"end":{"row":2,"column":38},"action":"insert","lines":["A"]},{"start":{"row":2,"column":38},"end":{"row":2,"column":39},"action":"insert","lines":["u"]},{"start":{"row":2,"column":39},"end":{"row":2,"column":40},"action":"insert","lines":["t"]},{"start":{"row":2,"column":40},"end":{"row":2,"column":41},"action":"insert","lines":["h"]}],[{"start":{"row":2,"column":41},"end":{"row":2,"column":42},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":2,"column":41},"end":{"row":2,"column":42},"action":"remove","lines":[" "],"id":25}],[{"start":{"row":2,"column":40},"end":{"row":2,"column":41},"action":"remove","lines":["h"],"id":26},{"start":{"row":2,"column":39},"end":{"row":2,"column":40},"action":"remove","lines":["t"]},{"start":{"row":2,"column":38},"end":{"row":2,"column":39},"action":"remove","lines":["u"]},{"start":{"row":2,"column":37},"end":{"row":2,"column":38},"action":"remove","lines":["A"]},{"start":{"row":2,"column":36},"end":{"row":2,"column":37},"action":"remove","lines":["\\"]}]]},"ace":{"folds":[],"scrolltop":874,"scrollleft":0,"selection":{"start":{"row":61,"column":0},"end":{"row":61,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":30,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1608430202196,"hash":"2323dd54828d1cbd03d7e618368796c93173b531"}