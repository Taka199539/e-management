{"filter":false,"title":"RedirectIfAuthenticated.php","tooltip":"/e-management/app/Http/Middleware/RedirectIfAuthenticated.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":19,"column":8},"end":{"row":24,"column":5},"action":"remove","lines":["if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }"],"id":2}],[{"start":{"row":19,"column":8},"end":{"row":32,"column":5},"action":"insert","lines":["switch ($guard) {","        case 'admin':","          if (Auth::guard($guard)->check()) {","            return redirect()->route('admin.dashboard');","          }","          break;","        default:","          if (Auth::guard($guard)->check()) {","              return redirect('/home');","          }","          break;","      }","      return $next($request);","    }"],"id":3}]]},"ace":{"folds":[],"scrolltop":239,"scrollleft":0,"selection":{"start":{"row":34,"column":0},"end":{"row":34,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1606727819410,"hash":"7f74a84f2311f4e11e15c9a92cf297fea2aa3eac"}