{"filter":false,"title":"web.php","tooltip":"/blog/routes/web.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":2,"column":37},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":40},"action":"insert","lines":["use App\\Http\\Controllers\\PostController;"],"id":3}],[{"start":{"row":16,"column":0},"end":{"row":18,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":4}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":55},"action":"insert","lines":["Route::get('/posts', [PostController::class, 'index']);"],"id":5}]]},"ace":{"folds":[],"scrolltop":17,"scrollleft":0,"selection":{"start":{"row":13,"column":1},"end":{"row":13,"column":1},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1663749750591,"hash":"4befa0b43d0458400a76085800e99e0ec071e15b"}