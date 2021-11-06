
 <?php 
require_once "lib.php";
?>
 <!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
       <meta charset="utf-8">
    <meta name="twitter:image" content="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Simple URL Shortener">
    <meta name="description" content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <meta name="twitter:description" content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <meta property="og:image" content="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <meta name="twitter:card" content="summary">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="180x180" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="512x512" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
        <link href="astyle/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="RAZhort is url shortener simple and no database easy use dor user">
        <meta name="keywords" content="admin template,RAZhort admin url, google short, shortlink, shorturl, simple url, pemendek url, url singkat">
        <meta name="author" content="RAZCode">
        <title>RAZhort - ShortLink Without Database</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="astyle/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="RAZhort Simple ShortLink Nodatabase" class="w-6" src="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
            <li>
                    <a href="" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="shorturl" class="menu menu">
                        <div class="menu__icon"> <i data-feather="link"></i> </div>
                        <div class="menu__title"> Short Url  </div>
                    </a>
                </li>
                <li>
                    <a href="whois" class="menu menu">
                        <div class="menu__icon"> <i data-feather="info"></i> </div>
                        <div class="menu__title"> Who Is  </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Terms & Conditions </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="cpu"></i> </div>
                        <div class="menu__title"> Copyright Policy </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="lock"></i> </div>
                        <div class="menu__title"> Privacy Policy </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <span class="hidden xl:block text-white text-lg ml-3"> RAZ<span class="font-medium">hort</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                     <li>
                        <a href="" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-feather="link"></i> </div>
                            <div class="side-menu__title"> Short Url </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-feather="info"></i> </div>
                            <div class="side-menu__title"> Who Is </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Terms & Conditions </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="cpu"></i> </div>
                            <div class="side-menu__title"> Copyright Policy </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="lock"></i> </div>
                            <div class="side-menu__title"> Privacy Policy </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="../" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i></div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                            <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                        <div class="notification-content pt-2 dropdown-box">
                            <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="RAZhort Simple Short Link" class="rounded-full" src="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Romadhon Aji Satrya</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap" id="clockbox"></div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Hai !!, Selamat Datang Di ATools </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="ATools Romaaji Tools Online" src="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
                        </div>
                        <div class="dropdown-box w-56">
                            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                                    <div class="font-medium">Romadhon Aji</div>
                                    <div class="text-xs text-theme-41 dark:text-gray-600">Developer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                </div>
                                <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                                    <a href="../" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
 
                <div class="col-span-12 mt-8">
                            
                            
                     <div class="text-center">
                        <div class="intro-y news p-5 box mt-8">
                        <form class="form-group" action="" method="post">
                        <h2 class="text-lg font-medium mr-auto">
                        Simple Url Shortener
                    </h2>
               <div class="flex flex-col sm:flex-row items-center mt-3"> 
             
             <input
                class="input w-full border mt-2 flex-1" type="url" autofocus="" inputmode="url" required=""
                placeholder="Enter your link. Ex: [<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']; ?>]"
                name="url" 
                autocomplete="off">
                </div>
             <br>

             <div class="text-center">
             <button type="submit"
                class="button inline-block bg-theme-1 text-white">Short
                Now</button>
            </div>
            <?php 
            if (isset($_POST['url'])) {
                $old_url = $_POST['url'];
                $newUrl = random_string(6);
                $make_short_url = make_short_url($old_url, $newUrl);
                if ($make_short_url) {
            ?>
            <div class="text-center">
               <input type="text" name="" value="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']; ?>/short/<?= $newUrl ?>/" class="input w-full border mt-2 flex-1" style="max-width:300px" onclick="this.select()" id="myInput" readonly="">
               <br>
               <br>
               <a href="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']; ?>/short/<?= $newUrl ?>/" class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white">Go To!</a>
               <a href="javascript:;" type="button" name="button" onclick="ngopi()" class="button w-24 inline-block mr-1 mb-2 bg-theme-9 text-white">Copy Link!</a>
           </div>
           
           
            <div class="alert alert-success alert-dismissible" role="alert"
                style="width: auto;height: auto;margin-top: 20px;">
                <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button><span><strong>Berhasil. </strong>Link berhasil
                    disingkat. Silahkan <a href="short/<?= $newUrl ?>/" target="_blank" rel="noopener noreferrer">klik disini</a> untuk melihat hasil. Untuk melihat jumlah hit, silahkan <a href="short/<?= $newUrl ?>/hit" target="_blank" rel="noopener noreferrer">klik disini</a>.</span></div>  
            <?php 
                } else {
            ?>
                        <div class="alert alert-danger alert-dismissible" role="alert"
                style="width: auto;height: auto;margin-top: 20px;"><button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button><span><strong>Gagal. </strong>Link yang anda masukkan gagal disingkat. Periksa kembali URL Anda.</span></div>
            <?php 
                }
            }
            ?>
            </form>
                  </div>
                            
                                           <div class="text-left">
                    <div class="intro-y news p-5 box mt-8"><h2 class="text-lg font-medium truncate mr-5">
                    <?php 
                    function IPnya() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Dikenali';
 
    return $ipaddress;
}
$ipaddress = $_SERVER['REMOTE_ADDR'];
echo "IP Anda: ";
echo IPnya();
echo "<br>Browser: ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br> Sistem Operasi: ";
echo php_uname(); ?></div>
                </div>
                        </div>
                        
                </div>
            </div>
            
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="astyle/dist/js/app.js"></script>
        <script src="astyle/dist/js/date.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
