<!DOCTYPE html>
<html lang="en">
<?php
$LPag = "";
global $LPag;
if (!empty($_GET['lp'])) $LPag = $_GET['lp'];
if (!empty($_POST['lp'])) $LPag = $_POST['lp'];
session_start();
$counter_name = "../stat/" . $LPag . date("ymd") . "SHcatHUN.txt";
if (!file_exists($counter_name)) {
    $f = fopen($counter_name, "w");
    fwrite($f, "0");
    fclose($f);
}
$f = fopen($counter_name, "r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Katalógus</title>
        <link rel="stylesheet" href="resources/css/dist/appstyle.css" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">


    </head>

    <body class="noscroll">

        <div id="mySidenav" class=" sidenav text-center">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <a href="#cover" onclick="closeNav()">Kezdőlap </a>
            <a href="#smarthome" onclick="closeNav()">Intelligens épület</a>
            <a href="#automation" onclick="closeNav()">Automatizálás</a>
            <a href="#HomeAssistant" onclick="closeNav()">Home Assistant</a>
            <a href="#camera" onclick="closeNav()">Kamera integráció</a>
            <a href="#green" onclick="closeNav()">Energiahatékonyság </a>
            <a href="#safety" onclick="closeNav()">Épületbiztonság</a>
            <a href="#security" onclick="closeNav()">Vagyonbiztonság</a>
            <a href="#innovation" onclick="closeNav()">Kinetikus kapcsolók</a>
            <a href="#wall" onclick="closeNav()">Kinetikus kapcsolók vevőegységei (aktuátorai)</a>
            <a href="#tuya" onclick="closeNav()">Vezérlés</a>
            <a href="#Node-RED" onclick="closeNav()">Fejlett vezérlés</a>
            <p class="pt-2">Példák:</p>
            <a href="#pelda1" onclick="closeNav()">Reggeli rutinok</a>
            <a href="#pelda2" onclick="closeNav()">Világításvezérlés</a>
            <a href="#pelda3" onclick="closeNav()">Fűtés-/hűtésvezérlés</a>
            <a href="#pelda4" onclick="closeNav()">Vízérzékelés</a>
            <a href="#pelda5" onclick="closeNav()">Gázérzékelés</a>
            <a href="#pelda6" onclick="closeNav()">Biztonság</a>
            <a href="#pelda7" onclick="closeNav()">Kamera vezérlés</a>
            <a href="#pelda8" onclick="closeNav()">Beépíthető aktuátor</a>
            <a href="#pelda9" onclick="closeNav()">Fagymentesítés</a>
            <p class="pt-2">Termékek:</p>
            <a href="#katalog" onclick="closeNav()">Legfrisebb termékeink</a>
        </div>
        <div id="mySidenav2" class=" sidenav text-center">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()()">X</a>
            <a href="#m-cover" onclick="closeNav2()()">Kezdőlap </a>
            <a href="#m-smarthome" onclick="closeNav2()()">Intelligens épület</a>
            <a href="#m-automation" onclick="closeNav2()()">Automatizálás</a>
            <a href="#m-HomeAssistant" onclick="closeNav2()()">Home Assistant</a>
            <a href="#m-camera" onclick="closeNav2()()">Kamera integráció</a>
            <a href="#m-green" onclick="closeNav2()()">Energiahatékonyság </a>
            <a href="#m-safety" onclick="closeNav2()()">Épületbiztonság</a>
            <a href="#m-security" onclick="closeNav2()()">Vagyonbiztonság</a>
            <a href="#m-innovation" onclick="closeNav2()()">Kinetikus kapcsolók</a>
            <a href="#m-wall" onclick="closeNav2()()">Kinetikus kapcsolók vevőegységei (aktuátorai)</a>
            <a href="#m-Tuya" onclick="closeNav2()()">Vezérlés</a>
            <a href="#m-Node-RED" onclick="closeNav2()()">Fejlett vezérlés</a>
            <p class="pt-2">Példák:</p>
            <a href="#m-pelda1" onclick="closeNav2()()">Reggeli rutinok</a>
            <a href="#m-pelda2" onclick="closeNav2()()">Világításvezérlés</a>
            <a href="#m-pelda3" onclick="closeNav2()()">Fűtés-/hűtésvezérlés</a>
            <a href="#m-pelda4" onclick="closeNav2()()">Vízérzékelés</a>
            <a href="#m-pelda5" onclick="closeNav2()()">Gázérzékelés</a>
            <a href="#m-pelda6" onclick="closeNav2()()">Biztonság</a>
            <a href="#m-pelda7" onclick="closeNav2()()">Kamera vezérlés</a>
            <a href="#m-pelda8" onclick="closeNav2()()">Beépíthető aktuátor</a>
            <a href="#m-pelda9" onclick="closeNav2()()">Fagymentesítés</a>
            <p class="pt-2">Termékek:</p>
            <a href="#m-katalog" onclick="closeNav2()()">Legfrisebb termékeink</a>
        </div>
        <div id="menu" class="d-none mt-2 text-center">
            <a href="https://videosec.com/?lp=CatBack"><img id="vsec-logo" style="width: 7vh;" class="mr-3" src="./resources/img/videoseclogo.gif" alt="Videosec.com"></a>
            <a href="http://videosec.com/catpage/shHUN.php"><img id="pdf-logo" style="width: 7vh;" class="mr-3" src="./resources/img/pdflogo.gif" alt="PDF termékkatalógus letöltés"></a>
            <a href="#wall"><img id="zigbee-logo" style="width: 7vh;" class="mr-3" src="./resources/img/zigbee-logo.png" alt="zigbee-logo"></a>
            <a href="#tuya"><img id="Tuya-logo" style="width: 7vh;" class="mr-3" src="./resources/img/tuya-mini-logo.png" alt="Tuya-logo"></a>
            <a href="#wall"><img id="wifi-logo" style="width: 7vh;" class="mr-3" src="./resources/img/wifi-logo.png" alt="wifi-logo"></a>
            <img onclick="openNav()" style="width: 7vh; cursor: pointer;" src="./resources/img/menu.png" alt="menuicon">
        </div>
        <div id="menu3" class=" vw-100  mt-2 mr-0 text-left">

                <a onclick="NextPage();">
                    <span id="btn_text"><img style="width: 7vh;" src="./resources/img/arrow.png" alt=""></span>
                </a>
        </div>
        <div id="menu2" class=" vw-100 d-none mt-2 mr-0 text-center">
            <a href="https://videosec.com/?lp=CatBack"><img id="Videosec-logo" style="width: 11vw;" class="" src="./resources/img/videoseclogo.gif" alt="Videosec.com"></a>
            <a href="http://videosec.com/catpage/shHUN.php"><img id="pdf-logo2" style="width: 11vw;" class="" src="./resources/img/pdflogo.gif" alt="PDF termékkatalógus letöltés"></a>
            <a href="#wall"><img id="zigbee-logo2" style="width: 11vw;" class="" src="./resources/img/zigbee-logo.png" alt="zigbee-logo"></a>
            <a href="#tuya"><img id="Tuya-logo2" style="width: 11vw;" class="" src="./resources/img/tuya-mini-logo.png" alt="Tuya-logo"></a>
            <a href="#wall"><img id="wifi-logo2" style="width: 11vw;" class="" src="./resources/img/wifi-logo.png" alt="wifi-logo"></a>
            <img onclick="openNav2()" style="width: 11vw; cursor: pointer;" src="./resources/img/menu.png" alt="menuicon">
        </div>
        <div id="containerDivID" class="d-none">
            <div id="left" class="ms-left">
                <section class=" vw-100 bg-warning">
                    <div class=" w-50 vh-100">
                        <div class="col-12 my-auto  ml-auto" style="height: 88%;">
                            <div class="animated-title mt-4">
                                <div class="text-top ">
                                    <div>
                                        <table>
                                            <tr>
                                                <td style="text-align: right;">
                                                    <span style="font-size: 4vw;">Okos</span>
                                                    <span style="font-size: 4vw;">Intelligens</span>
                                                    <span style="font-size: 4vw;">Biztonságos</span>
                                                </td>
                                                <td>
                                                    <span style="font-size: 4vw;"><br></span>
                                                    <span class="tracking-in-expand" style="margin-bottom: 5vw; font-size: 7vw;">otthon</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-bottom">
                                    <div>
                                        <img style="height: 9vw;" src="./resources/img/logo.png" alt="videosec">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="height: 12%; margin-top: -30%;transform: scale(2);">
                            <a href="#smarthome">
                                <div class="arrow-container" style="margin-bottom: auto;">
                                    <div class="chevron"></div>
                                    <div class="chevron"></div>
                                    <div class="chevron"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <section class=" section1">
                    <div class="">
                        <div class="col-12 vh-100">
                            <div class="row align-items-center" style="margin-top: 15vh;">
                                <div class="col-sm-2 ml-3 h-100 ">
                                    <img class=" w-100 h-auto" src="./resources/img/smarthome.png" alt="cover image">
                                </div>
                                <div class="col-sm-8 mx-2 ">
                                    <h1 class="header-text">
                                        Intelligens épület
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mx-5 mt-0 px-5 pb-5 mb-2">
                                    <p class="text1">Az intelligens megoldások a közvetlen vezérlésen túl lehetővé teszik, hogy bizonyos eseményekre vagy körülmények együtt állása esetén
                                        <strong>automatikusan, emberi beavatkozás nélkül</strong> reagáljon és beavatkozzon a rendszer.
                                    </p>
                                    <p class="text1">A létrehozható különböző automatizációkkal a lecsökkenő késedelem miatt növekszik a működési biztonság, valamint az energiahatékonyság is.&nbsp;</p>
                                    <p class="text1">Bármelyik otthonba, irodába vagy bármilyen létesítménybe
                                        <strong>egyszerűen</strong> telepíthetőek, legyen szó új építésről vagy felújításról. <br>
                                    </p>
                                    <p class="text1">Az intelligens otthon főbb céljai :</p>
                                </div>
                                <div class="col-4  text-center">
                                    <img style="width: 40%;" src="./resources/img/energy.png" alt="energy icon">
                                </div>
                                <div class="col-4  text-center">
                                    <img style="width: 40%;" src="./resources/img/lock.png" alt="security icon">
                                </div>
                                <div class="col-4  text-center">
                                    <img style="width: 40%;" src="./resources/img/comfort.png" alt="comfort icon">
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text1">Energiafogyasztás <br> csökkentése</p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text1">Biztonság és vagyonvédelem hatékonyságának növelése</p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text1">Felhasználó kényelmének <br> biztosítása</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section2">
                    <div class="  ">
                        <div class="col-12 ">
                            <img src="./resources/img/automation.png" class="vh-100 w-100 mb-0" style="margin-left: -2%" alt="automation phone image">
                        </div>
                    </div>
                </section>
                <section class=" section1">
                    <div class="  ">
                        <div class="col-12 ">
                            <img src="./resources/img/home_assistant_usecase.png" class="vh-100 w-100 mb-0" style="margin-left: -2%" alt="automation phone image">
                        </div>
                    </div>
                </section>
                <section class=" section6">
                    <div class="  align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/camerahome.png" alt="greenhome logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Kamera integráció
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Riasztási kimenettel rendelkező Videosec <strong> IQ kameráink integrálhatóak</strong> okos épületvezérlési megoldásainkkal. Személy vagy jármű észlelésekor világítási nyitási vagy mozgatási feladatokat,<strong> automatizációkat tudunk elindítani</strong>.
                                    Így képesek vagyunk:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/filter.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Emberi alak és jármű <strong>felismerésére</strong> valamint szűrésére.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/intusion.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Riasztásra <strong>területre belépéskor</strong> vagy vonalon áthaladáskor.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/timer.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Területen <strong>eltöltött idő</strong> és az áthaladás irányát is megadni.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/press.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Nyomógomb vagy vezetékes szenzor</strong> jelének fogadására <br> a kamera riasztási bemenetén
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/HA-logo.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Home Assitant rendszerünkön keresztül <strong>PTZ kameráink mozgása könnyedén automatizálható</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3">
                    <div class="  align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/greenhome.png" alt="greenhome logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Energiahatékonyság
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Eszközeink kitűnő megoldásokat biztosítanak egy energiatakarékos otthon vagy iroda kialakítására.
                                    <br> Automatikus folyamatokat alakíthatunk ki például: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/light.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>világítás csökkentése</strong> a használaton kívüli helyiségekben (fényerőszabályzás)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/temperature.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    épület riasztórendszerének élesítésekor a fűtés/világítás automatikus csökkentése vagy lekapcsolása
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/window.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>nyitott nyílászáró érzékelése</strong> esetében fűtés/légkondicionálás lekapcsolása
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/sun.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    napnyugtakor és napfelkeltekor a külső világítások <strong>automatikus
                                    fel-/lekapcsolása</strong>
                                </p>
                            </div>
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Mivel a rendszer teljesen önálló így az emberi figyelmetlenségből származó <strong>hibák
                                    száma is csökkenhet</strong>, valamint integrálható már meglévő, okos rendszerekhez is így azokkal is képesek együtt működni.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section4">
                    <div class="  ">
                        <div class="col-12 ">
                            <img src="./resources/img/security.png" class="w-100 mt-0 pt-0" style="margin-left: -5%;" alt="safety devices">
                        </div>
                    </div>
                </section>
                <section class=" section5">
                    <div class="  align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/Vagyonbiztonsag.png" alt="security logo">
                        </div>
                        <div class=" col-sm-8 mx-2 ">
                            <h1 class=" header-text">
                                Vagyonbiztonság
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/connect.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Amikor a riasztónk is <strong>együttműködik az okos épület többi elemével</strong>, akkor azok az eszközök is a részeivé vállnak (nyitás/mozgás, áramhasználat, hőmérséklet, mindennapi víz vagy gáz érzékelők).
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/notification.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A rendszer értesítia felhasználót amennyiben nyitva felejtett egy ablakot és
                                    <strong>automatikusan kikapcsolja a bekapcsolva hagyott eszközöket.</strong>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/alert.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Élesített állapotban, riasztás esetén a központ <strong>egyedi push-üzenetet küld
                                </strong> akár több felhasználó telefonjára is, valamint igény szerint automatikusan indít helyi riasztást vagy akár távfelügyelethez is küld jelzést.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/key.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A hagyományos szirénázáson túl a redőnyök mozgatásával és a világítás kapcsolgatásával és egyéb vizuális hatásokkal, eltántoríthatók az illetéktelen behatolók.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section6">
                    <div>
                        <div class="col-12 m-auto">
                            <img src="./resources/img/kinetic.png" class="w-100" alt="kinetic switches image">
                        </div>
                    </div>
                </section>
                <section class=" section3">
                    <div class="  align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/integrated-home.png" alt="tuyo home logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Kinetikus kapcsolók vevőegységei
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 py-3">
                                    A kinetikus kapcsolók vezérlőjelét <strong>többféle kialakítású</strong> vevőegység (aktuátor) képes fogadni. Választhatók szárazkontaktus és kapcsolt fázis kimenetű aktuátorok, illetve redőnyvezérlők. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/wrench.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A KRC vezérlők 1-től 6 kapcsolt csatornáig, DIN-sínre, 86-os szögletes dobozba, vagy
                                    <strong>akár kapcsoló mögött</strong> is elhelyezhető kivitelben választhatóak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/lightswitch.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A KRC-200-as sorozat előnye, hogy <strong>vezetékes</strong> kapcsolókkal <strong>és
                                    kinetikus kapcsolókkal egyszerre</strong> használhatóak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/radio.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A <strong>WiFi illetve Zigbee csatlakoztatás</strong> lehetősége TUYA alkalmazással távvezérelhetővé és automatizálhatóvá teszi az aktuátorokat. </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section7">
                    <div class=" align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/Tuya-home.png" alt="tuyo home logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Vezérlés
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Okos eszközeink mindegyike, széles körben elterjedt, <strong>Tuya</strong> applikációból elérhető és <strong>vezérelhető</strong>. Eszközeinket <strong>magyar nyelvű</strong> felületen is kaphatóak. Épületenkénti, helyiségenkénti
                                    bontásban saját logikai csoportokba rendezhetjük őket. Eszközönként <strong>lekérdezhető az aktuális állapot</strong> illetve a szenzorok környezetének állapota is, ugyanezen a felületen tudunk
                                    <strong>automatizációkat és jelenet parancsokat</strong> létrehozni.<br> Vezérlések működése: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/weather.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Előre beállított <strong>időpont</strong> vagy akár <strong>napszak</strong> alapján</p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/controlpanel.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Más automatizációk segítségével és/vagy más <strong>eszközök állapota</strong> alapján
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/location.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Telefon <strong>GPS </strong> pozíciója alapján
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/integration.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Integrálható</strong> meglévő okos otthon eszközökkel (Google, Amazon, Samsung)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/zigbee.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Zigbee és WiFi</strong> hálózattal is működő eszközök is választhatóak
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section4">
                    <div class=" align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/Node-RED.png" alt="tuyo home logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Fejlett vezérlés
                            </h1>
                        </div>
                        <div class="row pt-1">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-1">
                                    Amennyibben szigetszerű rendszer kialakítása mellet dönt, Home Assistant szerverünk alkalmazásával lehetőség nyílik az automatizációk és vezérlések Node-RED folyamatábrákként történő vizualizált létrehozására. Mivel ez a szerver az otthon része, ezért
                                    a működése nem függ a bejövő internetkapcsolattól. Ezen felül:<br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/HA-automation.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Bonyolult automatizációkat (számlálás, döntések, személyek jelenléte) is létre tudunk hozni grafikus felületen, és ezek működési folyamatát is követhetjük.</p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/compatible.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Tuya eszközökön kívül egyéb támogatott készülékek és szolgáltatások (autók, tőzsdei adatok, hűtőszekrények, nfc bélyegek, stb.) is indíthatnak vagy fogadhatnak automatizációkat, jelenetparancsokat.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/costumize.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    A szerver nyílt forráskódú ennek köszönhetően minden részletében módosítható a felhasználó által és biztonsági szempontból is megbízhatóbb.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/zigbee.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Az eszköz wifi hálózaton és Zigbee-n keresztül HUB nélkül képes működni. tejesen önállóan*.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--peldak-->
                <section class=" section1">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-sun-left.png'); ">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 mr-0 text-right">
                                Kényelmi megoldások
                            </h1>
                        </div>
                        <div class="col-10">
                            <div class="section">
                                <!-- Carousel Card 1-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel1" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel1" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel1" data-slide-to="2" class=""></li>
                                            <li data-target="#carousel1" data-slide-to="3" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda1-1.jpg" alt="First slide blinds">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Redőnyök
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-2.jpg" alt="Second slide movement detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Mozgásérzékelés
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-3.jpg" alt="Third slide thermostat">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Termosztát
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-4.jpg" alt="Third slide smart alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Riasztó
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5">
                    <div class=" vh-100 " style="background-image: url('./resources/img/half-light-left.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 text-right">
                                Világításvezérlés
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto ">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Világítás</strong>: Mozgásérzékelőink éjszaka a folyosón és a fürdőszobában csak derengő fényt kapcsolnak be önállóan. Napközben a beállított fényerőre váltanak. Üres helyiségekben néhány perc után készenléti/dekorációs/kikapcsolt
                                            módra állnak.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center ">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Rugalmas elhelyezés</strong>: Kinetikus kapcsolók alkalmazásával a kapcsolók helye bármikor rugalmasan változtatható vezetékek, akkumulátorok, festés és vésés nélkül.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch3.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Amennyiben a kapcsoló túl magasan van, <strong>bármikor áthelyezhető</strong> alacsonyabbra. Üvegfelületre vagy kültéren is felszerelhető!
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Egy gombnyomással</strong> képesek vagyunk különböző világítási
                                            <strong>jelenetek</strong> és egyéb eszközök különböző állapotai <strong>között
                                            váltani.</strong> Pl.: teljes kivilágításról mozi-módra váltani. Ekkor a redőnyök leereszkednek, a hangulatvilágítás bekapcsol, más helyiségekben időzített vagy mozgásérzékelés alapú világításra vált a rendszer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-temp-left.png');">
                        <div class=" col-12 vw-50">
                            <h1 class=" header-text pt-5 mr-0 text-right">
                                Fűtés-/hűtésvezérlés
                            </h1>
                        </div>
                        <div class="col-10">
                            <div class="section">
                                <!-- Carousel Card 3-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel3" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel3" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel3" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda3-1.jpg" alt="First slide Thermostat">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Termosztát
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda3-2.jpg" alt="Second slide leaving the building">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Távozás
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda3-3.jpg" alt="Third slide climate control">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Fűtésvezérlés
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section4">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-water-left.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 text-right">
                                Vízérzékelés
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center ">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/leaksensor.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Ha a <strong>veszélyeztetett</strong> helyiségek padlójára helyezett vízérzékelőink egyike vizet észlel, a rendszer elzárja a fővezeték motoros vízcsapját és telefonunkon értesít a riasztásról.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/waterlock.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            A kerti öntözőrendszereink vezérlése is automatikus így reggelenként magától elindul az öntözés. Azonban <strong>időjárás alapján</strong> esős idő után a rendszer feleslegesen nem indul el önállóan.
                                        </p>
                                    </div>
                                </div>
                                <!--
                            <div class="row align-items-center">
                                <div class="col-3 avatar">
                                    <img src=" ./resources/img/leaksensor2.png" class="w-100" alt="">
                                </div>
                                <div class="col-9">
                                    <p class="text1">
                                        A Vezérlésbe az időzítésen és az időjáráson túl különféle
                                        <strong>nedvesség</strong> és páratartalom <strong>érzékelőkhöz</strong> is köthetjük az indítási és leállási parancsot.
                                    </p>
                                </div>
                            </div> -->
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/waterlock2.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Az öntözőrendszer vízellátását elvégezhetjük motoros működtetésű golyóscsapokkal és elektrotermikus szelepvezérlőkkel is.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section7">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-flame-left.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 mr-0 text-right bg">
                                Gázérzékelés
                            </h1>
                        </div>
                        <div class="col-10">
                            <div class="section">
                                <!-- Carousel Card 5-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel5" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel5" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel5" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel5" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda5-1.jpg" alt="First slide gas sensor">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gázérzékelő
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-2.jpg" alt="Second slide smoke detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Füstérzékelő
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-3.jpg" alt="Third slide climate controll">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gázcsap
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section6">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-secure-left.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 text-right">
                                Az egész épület egy
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto ">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/door-sensor.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Az okos riasztó rendszerek élesítéskor <strong>jelezhetnek egy nyitva felejtett nyilászáró érzékelésekor</strong>.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch2.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Riasztás esetén a kapcsolók vagy más Tuya rendszerbe tartozó eszköz a behatoló általi működtetése <strong>korlátozható</strong> vagy a normál működéshez képes
                                            <strong>eltérően működtethető</strong>.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Mozgásérzékelőink és ajtónyitás érzékelőink segítségével pontosan
                                            <strong>követhetővé válik</strong> hol tartózkodik a behatoló így amennyiben szükséges biztonságosan elhagyhatjuk az épületet.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/panel.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            A <strong>riasztóközpontot telefonról</strong> tudjuk időzítetten hatástalanítani vagy élesíteni (pl.: egy iroda nyitvatartásának idejére), vagy akár telefonunk GPS pozíciója alapján automatikusan beriasztani
                                            az épületet, ha elhagytuk a környéket.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-cam-right.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 mr-0 text-right bg">
                                Kamera
                            </h1>
                        </div>
                        <div class="col-10">
                            <div class="section">
                                <!-- Carousel Card 5-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel9" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel9" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel9" data-slide-to="1" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="First slide camera">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Kamera
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda8-2.jpg" alt="Second slide door opener">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Automatizálás
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel9" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel9" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-mini-left.png');">
                        <div class=" col-12 mx-2  ">
                            <h1 class=" header-text pt-5 text-right">
                                Beépíthető
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto ">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/regular-switch.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Telefonról és automatizációkból vezérelhető</strong> világítást kell megvalósítanunk, de a <strong>mechanikus kapcsolók</strong> dizájnjához ragaszkodunk.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/golden-dualswitch.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Kinetikus kapcsolókkal bővíthető</strong> a kapcsolóhelyek száma, vezetékezés nélkül, akár üveg, vagy fa felületeken is.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            A KRC200-as sorozat vezérlői (aktuátorai) a <strong>villanykapcsoló mögötti
                                            kötődobozban elhelyezhetőek</strong>, vagy a megfelelő tartóval DIN sínre szerelhetőek. Az S-bemeneteket alkalmazva mechanikus kapcsolókkal is kapcsolhatóak, miközben kinetikus <strong>kapcsolókkal és
                                            mobiltelefonról</strong> is vezérelhetőek.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            A KRC200-as sorozat vezérlőinek(aktuátorainak) S-bemenetén keresztül <strong>más
                                            rendszerek felől</strong> juttathatunk jelzéseket TUYA automatizációk felé.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section1">
                    <div class=" vh-100 ">
                        <div class="col-12 vertical-center  p-0 m-0" id="pelda6leftId">
                            <div class=" vh-100" style="background-image: url('./resources/img/half-snow-left.png');">
                                <div class="row">
                                    <div class=" col-12 mx-2 pr-4 vh-25" style="height: 25vh;">
                                        <h1 class=" header-text pt-5 mr-0 text-right">
                                            Távoli nyaralók
                                        </h1>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-10 vh-75 mt-auto">
                                        <div class="section pl-3">
                                            <!-- Carousel Card 7-->
                                            <div class="card card-raised card-carousel">
                                                <div id="carousel7" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel7" data-slide-to="0" class="active">
                                                        </li>
                                                        <li data-target="#carousel7" data-slide-to="1" class=""></li>
                                                        <li data-target="#carousel7" data-slide-to="2" class=""></li>
                                                        <li data-target="#carousel7" data-slide-to="3" class=""></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-2.jpg" alt="Second slide winter home">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Fagymentesítés
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-1.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Termosztát
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-3.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Olajradiátor
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-4.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Nyílászárók
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carousel7" role="button" data-slide="prev">
                                                        <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carousel7" role="button" data-slide="next">
                                                        <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Carousel Card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--katalogus-->
                <section class="section7 ">
                    <div class="">
                        <div class="col-12 container-fluid  vh-100">
                            <div class="row align-items-center ">
                                <div class="col-2 ml-3 ">
                                    <img class="w-100 h-auto" src="./resources/img/downloadhome.png" alt="downloadhome logo">
                                </div>
                                <div class="col-9 ">
                                    <h1 class="header-text">
                                        Legfrisebb termékeink
                                    </h1>
                                </div>
                            </div>
                            <div class="row h-25">
                                <div class="col-10 ml-auto mt-0">
                                    <p class="text1 mb-auto py-5">
                                        <strong>Az alábbi linken elérhető termékkatalógus lehetőséget biztosít rá, hogy áttekinthető, táblázatos formában összehasonlítsuk a Videosec okos épületvezérlési kínálatát.
                                    </strong>
                                    </p>
                                </div>
                                <div class="col-7 ml-auto">
                                    <a href="./shHUN.php" target="_blank">
                                        <button class="button px-5" href="">PDF letöltése</button>
                                    </a>
                                </div>
                            </div>
                            <div class="row h-50">
                                <div class="col-12 mt-5 ">
                                    <img src="./resources/img/all2.png" class="w-100" style="margin-left: -2%;" alt="all items under image">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="right" class="ms-right">
                <section class=" vh-100 mr-0 pr-0 bg-warning">
                    <div class="row vh-100  text-center ">
                        <div class="col-12 w-50 mt-auto ml-auto  d-block">
                            <img class="w-100 " src="./resources/img/cover-icon.jpg" alt="cover image">
                        </div>
                    </div>
                </section>
                <section class=" section1-r">
                    <img src="./resources/img/okosotthon.png" class="vh-100 " alt="smart home logo">
                </section>
                <section class=" section2-r">
                    <div class=" align-items-center mb-3" style="margin-top: 6vh;">
                        <div class="col-sm-2 ml-3  ">
                            <img class="w-100 h-auto" src="./resources/img/autohome.png" alt="smart building">
                        </div>
                        <div class="col-sm-8 mx-2">
                            <h1 class=" header-text">
                                Automatizálás
                            </h1>
                        </div>
                    </div>
                    <div class=" mr-3">
                        <div class="col-sm-11 h-auto m-auto">
                            <p class="text1">Az intelligens otthon legfőbb előnye, hogy az egyes okos eszközök egymással is kommunikálnak. Így képesek rá, hogy a különböző környezeti értékek megváltozásának hatására
                                <strong>önállóan, késedelem nélkül beavatkozzanak</strong> és elhárítsák a felmerülő problémákat, ezt nevezzük automatizálásnak.
                            </p>
                            <p class="text1">Az automatizációt indíthatja azonos eszköz is, de lehetőség van másik eszköz állapotváltozásának hatására történő indításra is.&nbsp;</p>
                            <p class="text1">Az automatizálás lépései:&nbsp;</p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/detect.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                Automatizációt <strong>elindító esemény bekövetkezése</strong>: <br> - egy érzékelő által szolgáltatott állapotváltozási jelzés (pl. füst-, víz- vagy mozgásérzékelő stb.) <br> - egy ütemezett feladat idejének elérése (pl.
                                napkelte)&nbsp;
                            </p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/execute.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                Végrehajtandó <strong>feladatok indítása</strong> a feladat megoldásához: például elzárja a víz/gázcsapot vagy lekapcsolja az éjjeli fényeket.
                            </p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/notify.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                <strong>Felhasználó értesítése</strong> a végrehajtott feladatról. Így lehetőség van ellenőrizni a végeredményt, valamint az eseménynaplóból visszakereshetőek a korábbi műveletek is.
                            </p>
                        </div>
                    </div>
                </section>
                <section class=" section1-r">
                    <div class="  align-items-center">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/homeassitant.png" alt="greenhome logo">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Független és megbízható
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Saját, otthoni Home Assistant szerver alkalmazása lehetőséget nyújt arra, hogy
                                    <strong>külső internetkapcsolattól függetlenül működjenek okos rendszereink.</strong> ,Több mint ezer különböző rendszercsaládot támogat (Tuya, eWelink, Philips, BMW stb.), valamint ezekhez képes grafikusan szerkeszthető
                                    automatizációkat végrehajtani. Otthonunk a szerver beépítését követően önálló, független okos rendszerré válik, ennek köszönhetően:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/nonet.png" alt="no wifi">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Külső internet kapcsolat nélkül</strong> is teljes működést képes biztosítani.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/expand.png" alt="integration">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Széles körűen integrálható</strong> többezer eszközzel. Így ezekhez is köthetők automatizációk valamint egy felületen elérhetőek ( <a style="color: white; font-weight: 900;" href="https://www.home-assistant.io/integrations/#all">  további információ</a>                                    )
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/safety.png" alt="security">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Lokális elhelyezés miatt a <strong>legmagasabb szintű biztonság</strong> is elérhető.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/reliable.png" alt="reliable">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Hosszú távú megbízhatóságot</strong> biztosít hiszen nem kapcsolódik semmilyen külső vállalathoz vagy kormányhoz
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section6-r ">
                    <div class="">
                        <div class="col-12 ">
                            <img src="./resources/img/allcams.png" class="w-100 h-auto" alt="radiator">
                        </div>
                    </div>
                </section>
                <section class=" section3-r ">
                    <div class="">
                        <div class="col-12 ">
                            <img src="./resources/img/radiator.png" class="vh-100 h-auto" alt="radiator">
                        </div>
                    </div>
                </section>
                <section class=" section4-r ">
                    <div class=" align-items-center mb-5">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/epuletbiztonsag.png" alt="home safety icon">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Épületbiztonság
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Az épület eszközeinek <strong>automatikus együttműködése</strong> kármegelőző funkció alkalmazását teszi lehetővé.
                                    <br> <br> Eszközeink segítségével például:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/energysmall.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Csőtörés érzékelésekor a balesetek elkerülése érdekében <strong>lekapcsolódik</strong> a helyiségben található <strong>összes áramkör</strong> .
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/water.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Csőtöréskor a vízérzékelővel és egy motoros golyóscsap segítségével a rendszer
                                    <strong>automatikusan elzárja</strong> az ingatlan vízellátását.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/flame.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Gázszivárgáskor a gázérzékelőnk jóval a robbanásveszély előtt <strong>aktiválja a
                                    gázvészelzárót</strong> és egyúttal a szellőzőmotorok is elindíthatók aktuátorokkal.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5-r">
                    <div class="  align-items-end">
                        <div class="col-12 ">
                            <img src="./resources/img/alarm.png" class="vh-100 w-auto mb-0" style="margin-bottom: 0;" alt="alarm">
                        </div>
                    </div>
                </section>
                <section class=" section6-r">
                    <div class=" align-items-center mb-5">
                        <div class="col-sm-2 ml-3 h-100 ">
                            <img class="w-100 h-auto" src="./resources/img/ujjitas.png" alt="innovative home icon">
                        </div>
                        <div class="col-sm-8 mx-2 ">
                            <h1 class="header-text">
                                Innovatív <br> kinetikus kapcsolók
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1">
                                    A hagyományos vezetékes és az elemes táplálású kapcsolókkal ellentétben ezen kapcsolóink
                                    <strong>sem állandó helyhez, sem kiegészítő energiaforráshoz nincsenek kötve.</strong>
                                    <br> A működési elvük rendkívül egyszerű: <strong>a kapcsoló megnyomásakor</strong> egy mechanizmus feszültséget indukál, melyből <strong>az adóegység az energiáját
                                    nyeri</strong> és jelet küld a vevőegységnek. <br><strong>Kinetikus
                                    nyitásérzékelőnk</strong> szintén ezen az elven működik. <br> A kapcsoló megnyomásának sebessége és ideje nem befolyásolja a működést.&nbsp; <br> Alkalmazásuk a következő előnyökkel jár: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/materials.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    bármilyen felületre felszerelhetőek, elhelyezésük egyszerűen módosítható.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/clock.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    többszázezres kapcsolási élettartam
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/radio.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3"> nincs vezetékelési költség
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/battery.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    energiát spórolunk, valamint csökkentjük az elhasznált elemek által okozott környezeti terhelést
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/water.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    akár vizes környezetbe, vagy kültéren is telepíthetőek. (IP67 védettség)
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3-r ">
                    <div class="  align-items-end">
                        <div class="col-12 ">
                            <img src="./resources/img/actuator.png" class=" " style="width: 102%;" alt="Tuya funcions">
                        </div>
                    </div>
                </section>
                <section class=" section7-r ">
                    <div class=" h-100 align-items-end">
                        <div class="col-12 ">
                            <img src="./resources/img/Tuya-full.png" class=" " style="width: 102%;" alt="Tuya funcions">
                        </div>
                    </div>
                </section>
                <section class=" section4-r ">
                    <div class=" h-100 align-items-end">
                        <div class="col-12 ">
                            <img src="./resources/img/nodered.png" class=" " style="width: 102%;" alt="Tuya funcions">
                        </div>
                    </div>
                </section>
                <!--peldak-->
                <section class=" section1-r">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-sun-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0 ">
                            <h1 class=" header-text pt-5 ">
                                a reggeli ébredéshez
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center ">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>A rendszer</strong> először résnyire megemeli a sötétítőket, majd, amikor már hozzászokott a szem a fényhez, <strong>beengedi a reggeli
                                            napsugarakat. </strong> Téli reggeleken a világítás ébreszt hasonlóan kíméletesen.
                                            <br>
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Mozgásérzékelőink</strong> jeleinek hatására az igényeinknek megfelelően
                                            <strong>kapcsolják a</strong> többi helyiség <strong>világítását.</strong>
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">A <strong>fűtés/légkondícionálás</strong> előttünk ébred, hogy minket már kellemes hőmérséklet fogadjon</p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/thermostat.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">Amikor távozunk otthonról <strong>telefonunk emlékeztet, ha nem
                                            élesítettük a riasztó rendszert.</strong>
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/panel.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5-r">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-light-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5  text-left">
                                és automatizálás
                            </h1>
                        </div>
                        <div class="col-10 ml-auto">
                            <div class="section">
                                <!-- Carousel Card 2-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel2" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel2" data-slide-to="1" class="">
                                            </li>
                                            <li data-target="#carousel2" data-slide-to="2" class="">
                                            </li>
                                            <li data-target="#carousel2" data-slide-to="3" class="">
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda2-1.jpg" alt="First slide movement detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Mozgásérzékelés
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-2.jpg" alt="Second slide wierless">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Vezeték/elem nélkül
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-3.jpg" alt="Third slide moveable">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Áthelyezhető
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-4.jpg" alt="Fourth slide Multiple lights">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Több parancs
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3-r">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-temp-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0 ">
                            <h1 class=" header-text pt-5">
                                / beállítás/automatizalas
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1">Helyiségenként egy <strong>termosztát elhelyezésével,</strong> a hőmérséklet-beállítások automatizálásával <strong>30-45%-kal is
                                            csökkenthetjük</strong> fűtésünk energiaigényét. Valamint akár légkondicionáló rendszerünk vezérlésére is alkalmazhatóak.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/thermostat.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1"> <strong>Távozáskor</strong> élesítjük a riasztót, ekkor <strong>az
                                            összes termosztát alacsony programra vált.</strong> Ha elutazunk, vagy korábban érünk haza, telefonról módosíthatjuk beállításainkat.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/panel.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1"> Már meglévő <strong>radiátoraink ütemezhető
                                            fűtésvezérlését</strong> ZigBee radiátor termosztátokkal tudjuk megvalósítani. Kábelezést nem igényelnek, valamint ablaknyitáskor automatikusan szüneteltethetjük a fűtést.</p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/gas2.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section4-r">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-water-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5 mr-0 text-left">
                                / önálló elzárás
                            </h1>
                        </div>
                        <div class="col-10 ml-auto">
                            <div class="section">
                                <!-- Carousel Card 4-->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel4" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel4" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel4" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel4" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda4-1.jpg" alt="First slide water detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Vízérzékelő
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda4-2.jpg" alt="Second slide automatic sprikler">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Automata öntözés
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda4-3.jpg" alt="Third slide weather detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Időjárás alapján
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel4" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section2-r">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-flame-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5">
                                / önálló elzárás
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1"> Egy <strong>többfunkciós gázérzékelőt</strong> használhatunk
                                            <strong>földgáz</strong> detektálására, ha a mennyezethez közel, illetve
                                            <strong>PB-gáz</strong> detektálására is, ha a padlóhoz közel telepítjük. A gázérzékelők katalitikus szenzorelemükkel már a robbanásképes gázkoncentráció 6-8%-nál riasztást generálnak.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/gassensor.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1"> <strong>Füstérzékelőnk</strong> szintén képes vészhelyzeti jelzést küldeni a rendszernek amennyiben füst keletkezett a helyiségben.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/smokedetector.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1"> Tragédiák megelőzése érdekében, ha egy mai otthonban bármilyen nyílt égésterű berendezés található, akkor elengedhetetlen a
                                            <strong>Gáz és füstérzékelők</strong> alkalmazása. Jelzéseiknek hatására a riasztással együtt elindulhat egy szellőztető berendezés is. Az impulzus-
                                            <strong>vezérelt gázszelep</strong> automatikusan elzárja a gázt és push-üzenetben tájékoztatást kapunk a vészhelyzetről.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/gas.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section6-r">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-secure-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5 mr-0 text-left">
                                biztonsági rendszer
                            </h1>
                        </div>
                        <div class="col-10 ml-auto">
                            <div class="section">
                                <!-- Carousel Card 6 -->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel6" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel6" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel6" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel6" data-slide-to="2" class=""></li>
                                            <li data-target="#carousel6" data-slide-to="3" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda6-1.jpg" alt="First slide broken glass detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Hőmérséklet
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-2.jpg" alt="Second slide lightswitch alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Világítás riasztás
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-3.jpg" alt="Third slide thief tracking">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Betörő követés
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-4.jpg" alt="Fourth slide smart alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Okos riasztó
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3-r">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-cam-left.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5">
                                vezérlés
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            Egy riasztási kimenettel ellátott kamerán meghatározható, hogy küldjön jelet amennyiben <strong>embert vagy járművet érzékel</strong> (ezt szűrhetően is el tudja végezni).
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            A jelet veszi a Tuya rendszerrel működő <strong>
                                            vezérlő</strong> (aktuátor) majd <strong>elvégzi a szükséges automatizációkat </strong>(leállítja a locsoló rendszert). </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5-r">
                    <div class=" vh-100  mb-5 " style="background-image: url('./resources/img/half-mini-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5 mr-0 text-left">
                                vezérlő
                            </h1>
                        </div>
                        <div class="col-10 ml-auto">
                            <div class="section">
                                <!-- Carousel Card 6 -->
                                <div class="card card-raised card-carousel">
                                    <div id="carousel10" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel10" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel10" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel10" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda9-1.jpg" alt="First slide broken glass detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Meglévő kapcsoló
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda9-2.jpg" alt="Second slide lightswitch alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Beépíthető aktuátor
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="Third slide Camera">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Rugalmasság
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel10" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel10" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section1-r">
                    <div class=" vh-100  " style="background-image: url('./resources/img/half-snow-right.png'); ">
                        <div class=" col-12 mx-2 pl-0 ml-0">
                            <h1 class=" header-text pt-5">
                                fagymentesítése
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto mb-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1">
                                            Nyaralóink, melléképületeink fagymentesítésére a fixen telepített termosztátok mellett az ideiglenesen is telepíthető, aljzatba dugható <strong>wifi termosztát</strong> és a hozzá csatlakoztatott
                                            <strong>elektromos olajradiátor</strong> hatékony megoldást kínál.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/connector.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Amennyiben valamely <strong>nyílászáró nyitva maradt a rendszer
                                            értesíti</strong> a felhasználót, és igény szerint megállítja a fűtést. Így megelőzhető az esetleges energia pazarlás.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/door-sensor.png" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--katalogus-->
                <section class=" section7-r">
                    <div class=" vh-100">
                        <div class="col-12">
                            <img src="./resources/img/all.png" class="vh-100" alt="all items">
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="content" style="overflow-y:hidden; position:static;">
            <div id="mobile-left" class="d-none ">
                <div class="header">
                    <div class="progress-container">
                        <div class="progress-bar" id="myBar"></div>
                    </div>
                </div>
                <section class="bg-warning " id="m-cover">
                    <div class="">
                        <div class="row ">
                            <div class="col-10 wv-100 mx-auto my-5 py-5 ">
                                <div style="transform: scale(1.7); margin-top: 38%;margin-bottom: 58%;">
                                    <div class="animated-title">
                                        <div class="text-top">
                                            <div>
                                                <table>
                                                    <tr>
                                                        <td style="text-align: right;">
                                                            <span style="font-size: 4vw;">Okos</span>
                                                            <span style="font-size: 4vw;">Intelligens</span>
                                                            <span style="font-size: 4vw;">Biztonságos</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-size: 4vw;"><br></span>
                                                            <span class="tracking-in-expand" style="margin-bottom: 5vw; font-size: 7vw;">otthon</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="text-bottom">
                                            <div>
                                                <img style="height: 9.2vw;" src="./resources/img/logo.png" alt="videosec">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-5" style="height: 12%; margin-top: -30%;transform: scale(1); z-index: 5;">
                                <a href="#m-smarthome">
                                    <div class="arrow-container" style="margin-bottom: auto;">
                                        <div class="chevron"></div>
                                        <div class="chevron"></div>
                                        <div class="chevron"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12  text-center">
                                <a href="#m-smarthome" class="mt-5"><img style="width: 98%;" src="./resources/img/cover-icon.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section1" id="m-smarthome">
                    <div class="">
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/smarthome.png" alt="">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Intelligens épület
                                </h1>
                            </div>
                            <div class="col-12" style="padding-top:6vh">
                                <p class="m-text1"> Az intelligens megoldások a közvetlen vezérlésen túl lehetővé teszik, hogy bizonyos eseményekre vagy körülmények együtt állása esetén
                                    <strong>automatikusan, emberi beavatkozás nélkül</strong> reagáljon és beavatkozzon a rendszer.
                                </p>
                                <p class="m-text1" style="padding-top:6vh">Az intelligens otthon főbb céljai:&nbsp;</p>
                            </div>
                            <div class="col-4  text-center">
                                <img style="width: 40%;" src="./resources/img/energy.png" alt="energy icon">
                            </div>
                            <div class="col-4  text-center">
                                <img style="width: 40%;" src="./resources/img/lock.png" alt="security icon">
                            </div>
                            <div class="col-4  text-center">
                                <img style="width: 40%;" src="./resources/img/comfort.png" alt="comfort icon">
                            </div>
                            <div class="col-4 text-center">
                                <p class="list-text">Energiafogyasztás <br> csökkentése</p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="list-text">Biztonság és vagyonvédelem hatékonyságának növelése</p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="list-text">Felhasználó kényelmének <br> biztosítása</p>
                            </div>
                            <div class="col-12 text-bottom mt-auto ">
                                <img src="./resources/img/okosotthon.png" class="vw-100 m-0 p-0" alt="automation phone image">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section2" id="m-automation">
                    <div class="">
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/autohome.png" alt="">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Automatizálás
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1"> Az intelligens otthon legfőbb előnye, hogy az egyes okos eszközök egymással is kommunikálnak. Így képesek rá, hogy a különböző környezeti értékek megváltozásának hatására <strong class="m-strong">önállóan, késedelem nélkül
                                    beavatkozzanak</strong> és elhárítsák a felmerülő problémákat, ezt nevezzük automatizálásnak. <br> Az automatizációt indíthatja azonos eszköz is, de lehetőség van másik eszköz állapotváltozásának hatására történő indításra
                                    is.&nbsp;
                                </p>
                                <p class="m-text1">Az automatizálás lépései:&nbsp; </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/detect.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Automatizációt <strong class="m-strong">elindító esemény bekövetkezése</strong>:
                                    <br> egy érzékelő által szolgáltatott állapotváltozási jelzés (pl. füst-, víz- vagy mozgásérzékelő stb.) <br> egy ütemezett feladat idejének elérése (pl. napkelte)&nbsp;
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/execute.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Végrehajtandó <strong class="m-strong">feladatok indítása</strong> a feladat megoldásához: például elzárja a víz/gázcsapot vagy lekapcsolja az éjjeli fényeket.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/notify.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong class="m-strong">Felhasználó értesítése</strong> a végrehajtott feladatról. Így lehetőség van ellenőrizni a végeredményt, valamint az eseménynaplóból visszakereshetőek a korábbi műveletek is.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/automation.png" class=" w-100 mt-0" alt="automation phone image">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section1" id="m-HomeAssistant">
                    <div class="">
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/homeassitant.png" alt="">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Független és megbízható

                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    Saját, otthoni Home Assistant szerver alkalmazása lehetőséget nyújt arra, hogy
                                    <strong>külső internetkapcsolattól függetlenül működjenek okos rendszereink.</strong> ,Több mint ezer különböző rendszercsaládot támogat (Tuya, eWelink, Philips, BMW stb.), valamint ezekhez képes grafikusan szerkeszthető
                                    automatizációkat végrehajtani. Otthonunk a szerver beépítését követően önálló, független okos rendszerré válik, ennek köszönhetően:
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/nonet.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Külső internet kapcsolat nélkül</strong> is teljes működést képes biztosítani.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/expand.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Széles körűen integrálható</strong> többezer eszközzel. Így ezekhez is köthetők automatizációk valamint egy felületen elérhetőek ( <a style="color: white; font-weight: 900;" href="https://www.home-assistant.io/integrations/#all">  további információ</a>                                    )
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/safety.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Lokális elhelyezés miatt a <strong>legmagasabb szintű biztonság</strong> is elérhető.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/reliable.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Hosszú távú megbízhatóságot</strong> biztosít hiszen nem kapcsolódik semmilyen külső vállalathoz vagy kormányhoz
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/home_assistant_usecase.png" class=" w-100 mt-0" alt="automation phone image">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section6" id="m-camera">
                    <div class=" ">
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/camerahome.png" alt="">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Kamera integráció
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 "> Riasztási kimenettel rendelkező Videosec <strong> IQ kameráink
                                    integrálhatóak</strong> okos épületvezérlési megoldásainkkal. Személy vagy jármű észlelésekor világítási nyitási vagy mozgatási feladatokat,<strong> automatizációkat tudunk
                                    elindítani</strong>. Így képesek vagyunk: </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/filter.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Emberi alak és jármű <strong>felismerésére</strong> valamint szűrésére.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/intusion.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Riasztásra <strong>területre belépéskor</strong> vagy vonalon áthaladáskor.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/timer.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Területen <strong>eltöltött idő</strong> és az áthaladás irányát is megadni.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/press.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Nyomógomb vagy vezetékes szenzor</strong> jelének fogadására <br> a kamera riasztási bemenetén
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/allcams.png" class="vw-100 mt-0" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section3" id="m-green">
                    <div class=" ">
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/greenhome.png" alt="">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Energiahatékonyság
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 "> Eszközeink kitűnő megoldásokat biztosítanak egy energiatakarékos otthon vagy iroda kialakítására. </p>
                                <p class="m-text1 ">Automatikus folyamatokat alakíthatunk ki például:&nbsp;</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/light.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>világítás csökkentése</strong> a használaton kívüli helyiségekben (fényerőszabályzás)
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/temperature.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    épület riasztórendszerének élesítésekor a fűtés/világítás automatikus csökkentése vagy lekapcsolása
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/window.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>nyitott nyílászáró érzékelése</strong> esetében fűtés/légkondicionálás lekapcsolása
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/sun.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    napnyugtakor és napfelkeltekor a külső világítások <strong>automatikus
                                    fel-/lekapcsolása</strong>
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 ">
                                    Mivel a rendszer teljesen önálló így az emberi figyelmetlenségből származó <strong>hibák
                                    száma is csökkenhet</strong>, valamint integrálható már meglévő, okos rendszerekhez is így azokkal is képesek együtt működni.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/radiator.png" class="vw-100 mt-0" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section4 " id="m-safety">
                    <div class=" ">
                        <div class="row h-100 align-items-center">
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/epuletbiztonsag.png" alt="epuletbiztonsag icon">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Épületbiztonság
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">Az épület eszközeinek <strong>automatikus együttműködése</strong> kármegelőző funkció alkalmazását teszi lehetővé.
                                </p>
                                <p class="m-text1">Eszközeink segítségével például:&nbsp;</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/energysmall.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Csőtörés érzékelésekor a balesetek elkerülése érdekében <strong>lekapcsolódik</strong> a helyiségben található <strong>összes áramkör</strong> .
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/water.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    CsőCsőtöréskor a vízérzékelővel és egy motoros golyóscsap segítségével a rendszer
                                    <strong>automatikusan elzárja</strong> az ingatlan vízellátását.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/flame.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Gázszivárgáskor a gázérzékelőnk jóval a robbanásveszély előtt <strong>aktiválja a
                                    gázvészelzárót</strong> és egyúttal a szellőzőmotorok is elindíthatók aktuátorokkal.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/security.png" class="h-100 w-100 mt-0" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section5" id="m-security">
                    <div>
                        <div class="row h-100 align-items-center">
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/Vagyonbiztonsag.png" alt="vagyonbiztonsag icon">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Vagyonbiztonság
                                </h1>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/connect.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Amikor a riasztónk is <strong>együttműködik az okos épület többi elemével</strong>, akkor azok az eszközök is a részeivé vállnak (nyitás/mozgás, áramhasználat, hőmérséklet, mindennapi víz vagy gáz érzékelők).
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/notification.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A rendszer értesítia felhasználót amennyiben nyitva felejtett egy ablakot és
                                    <strong>automatikusan kikapcsolja a bekapcsolva hagyott eszközöket.</strong>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/alert.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Élesített állapotban, riasztás esetén a központ <strong>egyedi push-üzenetet küld </strong> akár több felhasználó telefonjára is, valamint igény szerint automatikusan indít helyi riasztást vagy akár távfelügyelethez
                                    is küld jelzést.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/key.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A hagyományos szirénázáson túl a redőnyök mozgatásával és a világítás kapcsolgatásával és egyéb vizuális hatásokkal, eltántoríthatók az illetéktelen behatolók.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img src="./resources/img/alarm.png" class="h-100 w-100 mt-0" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section6" id="m-innovation">
                    <div>
                        <div>
                            <div class="col-3 pb-3 pt-3">
                                <img style="width: 100%;" src="./resources/img/Vagyonbiztonsag.png" alt="vagyonbiztonsag icon">
                            </div>
                            <div class="col-9 pb-2 pt-3">
                                <h1 class="m-header-text">
                                    Innovatív <br> kinetikus kapcsolók
                                </h1>
                            </div>
                            <div class="col-12">
                                <p>
                                    A hagyományos vezetékes és az elemes táplálású kapcsolókkal ellentétben ezen kapcsolóink sem állandó helyhez, sem kiegészítő energiaforráshoz nincsenek kötve. A működési elvük rendkívül egyszerű: a kapcsoló megnyomásakor egy mechanizmus feszültséget indukál,
                                    melyből az adóegység az energiáját nyeri és jelet küld a vevőegységnek. A kapcsoló megnyomásának sebessége és ideje nem befolyásolja a működést. Az elemcsere a már a múlté.
                                    <br> Alkalmazásuk a következő előnyökkel jár:<br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/materials.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    bármilyen felületre felszerelhetőek, elhelyezésük egyszerűen módosítható.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/clock.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    többszázezres kapcsolási élettartam
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/radio.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    nincs vezetékelési költség
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/battery.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    energiát spórolunk, valamint csökkentjük az elhasznált elemek által okozott környezeti terhelést
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/water.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    akár vizes környezetbe, vagy kültéren is telepíthetőek. (IP67 védettség) </p>
                            </div>
                            <div class="col-12 text-center">
                                <img class="vw-100 " style="object-fit:contain;" src="./resources/img/kinetic.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section3" id="m-wall">
                    <div>
                        <div>
                            <div class="col-3 pb-3 pt-3">
                                <img style="width: 100%;" src="./resources/img/Vagyonbiztonsag.png" alt="vagyonbiztonsag icon">
                            </div>
                            <div class="col-9 pb-2 pt-3">
                                <h1 class="m-header-text">
                                    Kinetikus kapcsolók vevőegységei
                                </h1>
                            </div>
                            <div class="col-12">
                                <p>
                                    A kinetikus kapcsolók vezérlőjelét <strong>többféle kialakítású</strong> vevőegység (aktuátor) képes fogadni. Választhatók szárazkontaktus és kapcsolt fázis kimenetű aktuátorok, illetve redőnyvezérlők. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/wrench.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A KRC vezérlők 1-től 6 kapcsolt csatornáig, DIN-sínre, 86-os szögletes dobozba, vagy
                                    <strong>akár kapcsoló mögött</strong> is elhelyezhető kivitelben választhatóak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/lightswitch.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A KRC-200-as sorozat előnye, hogy <strong>vezetékes</strong> kapcsolókkal <strong>és
                                    kinetikus kapcsolókkal egyszerre</strong> használhatóak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/radio.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A <strong>WiFi illetve Zigbee csatlakoztatás</strong> lehetősége TUYA alkalmazással távvezérelhetővé és automatizálhatóvá teszi az aktuátorokat. </p>
                            </div>
                            <div class="col-12 text-center">
                                <img class="vw-100 " style="object-fit:contain;" src="./resources/img/actuator.png" alt="actuators">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section7" id="m-Tuya">
                    <div>
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/Tuya-home.png" alt="vagyonbiztonsag icon">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Vezérlés
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    Okos eszközeink mindegyike, széles körben elterjedt, <strong>Tuya</strong> applikációból elérhető és <strong>vezérelhető</strong>. Eszközeinket <strong>magyar nyelvű</strong> felületen is kaphatóak. Épületenkénti, helyiségenkénti
                                    bontásban saját logikai csoportokba rendezhetjük őket. Eszközönként <strong>lekérdezhető az aktuális állapot</strong> illetve a szenzorok környezetének állapota is, ugyanezen a felületen tudunk
                                    <strong>automatizációkat és jelenet parancsokat</strong> létrehozni.<br> Vezérlések működése: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/weather.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Előre beállított <strong>időpont</strong> vagy akár <strong>napszak</strong> alapján
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/controlpanel.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Más automatizációk segítségével és/vagy más <strong>eszközök állapota</strong> alapján
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/location.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Telefon <strong>GPS </strong> pozíciója alapján
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/integration.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    <strong>Integrálható</strong> meglévő okos otthon eszközökkel (Google, Amazon, Samsung, SmartLife)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/zigbee.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    <strong>Zigbee és WiFi</strong> hálózattal is működő eszközök is választhatóak
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img class="vw-100" style="object-fit:contain;" src="./resources/img/Tuya-full.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section4" id="m-Node-RED">
                    <div>
                        <div>
                            <div class="col-3">
                                <img style="width: 100%;" src="./resources/img/Node-RED.png" alt="vagyonbiztonsag icon">
                            </div>
                            <div class="col-8">
                                <h1 class="m-header-text">
                                    Fejlett vezérlés
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    Amennyibben szigetszerű rendszer kialakítása mellet dönt, Home Assistant szerverünk alkalmazásával lehetőség nyílik az automatizációk és vezérlések Node-RED folyamatábrákként történő vizualizált létrehozására. Mivel ez a szerver az otthon része, ezért
                                    a működése nem függ a bejövő internetkapcsolattól. Ezen felül:<br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/HA-automation.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Bonyolult automatizációkat (számlálás, döntések, személyek jelenléte) is létre tudunk hozni grafikus felületen, és ezek működési folyamatát is követhetjük.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/compatible.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Tuya eszközökön kívül egyéb támogatott készülékek és szolgáltatások (autók, tőzsdei adatok, hűtőszekrények, nfc bélyegek, stb.) is indíthatnak vagy fogadhatnak automatizációkat, jelenetparancsokat. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/costumize.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    A szerver nyílt forráskódú ennek köszönhetően minden részletében módosítható a felhasználó által és biztonsági szempontból is megbízhatóbb.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/zigbee.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Az eszköz wifi hálózaton és Zigbee-n keresztül HUB nélkül képes működni. tejesen önállóan*.
                                </p>
                            </div>
                            <div class="col-12 text-center">
                                <img class="vw-100" style="object-fit:contain;" src="./resources/img/nodered.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section1" id="m-pelda1">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Kényelmi megoldások a reggeli ébredéshez
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 1-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel1" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel1" data-slide-to="1" class=""></li>
                                                <li data-target="#m-carousel1" data-slide-to="2" class=""></li>
                                                <li data-target="#m-carousel1" data-slide-to="3" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-1.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Redőnyök
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Mozgásérzékelés
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-3.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Termosztát
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Riasztó
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel1" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel1" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>A rendszer</strong> először résnyire megemeli a sötétítőket, majd, amikor már hozzászokott a szem a fényhez, <strong>beengedi a reggeli
                                                napsugarakat. </strong> Téli reggeleken a világítás ébreszt hasonlóan kíméletesen.
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/detector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Mozgásérzékelőink</strong> jeleinek hatására az igényeinknek megfelelően
                                                <strong>kapcsolják a</strong> többi helyiség <strong>világítását.</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/thermostat.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                A <strong>fűtés/légkondícionálás</strong> előttünk ébred, hogy minket már kellemes hőmérséklet fogadjon</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Amikor távozunk otthonról <strong>telefonunk emlékeztet, ha nem élesítettük a
                                                riasztó rendszert.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5 " id="m-pelda2">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Világításvezérlés és automatizálás
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 2-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel2" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel2" data-slide-to="1" class="">
                                                </li>
                                                <li data-target="#m-carousel2" data-slide-to="2" class="">
                                                </li>
                                                <li data-target="#m-carousel2" data-slide-to="3" class="">
                                                </li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-1.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Mozgásérzékelés
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Vezeték/elem nélkül
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-3.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Áthelyezhető
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Több parancs
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel2" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel2" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/detector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Világítás</strong>: Mozgásérzékelőink éjszaka a folyosón és a fürdőszobában csak derengő fényt kapcsolnak be önállóan. Napközben a beállított fényerőre váltanak. Üres helyiségekben néhány perc után
                                                készenléti/dekorációs/kikapcsolt módra állnak.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Rugalmas elhelyezés</strong>: Kinetikus kapcsolók alkalmazásával a kapcsolók helye bármikor rugalmasan változtatható vezetékek, akkumulátorok, festés és vésés nélkül.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch3.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Amennyiben a kapcsoló túl magasan van, <strong>bármikor áthelyezhető</strong> alacsonyabbra. Üvegfelületre vagy kültéren is felszerelhető!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Egy gombnyomással</strong> képesek vagyunk különböző világítási
                                                <strong>jelenetek</strong> és egyéb eszközök különböző állapotai <strong>között
                                                váltani.</strong> Pl.: teljes kivilágításról mozi-módra váltani. Ekkor a redőnyök leereszkednek, a hangulatvilágítás bekapcsol, más helyiségekben időzített vagy mozgásérzékelés alapú világításra vált a rendszer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3" id="m-pelda3">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Fűtés-/hűtésvezérlés Beállítás/Automatizálás
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 2-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel3" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel3" data-slide-to="1" class=""></li>
                                                <li data-target="#m-carousel3" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda3-1.jpg" alt="First slide Thermostat">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Termosztát
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda3-2.jpg" alt="Second slide leaving the building">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Távozás
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda3-3.jpg" alt="Third slide climate control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Fűtésvezérlés
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel3" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel3" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/thermostat.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Helyiségenként egy <strong>termosztát elhelyezésével,</strong> a hőmérséklet-beállítások automatizálásával <strong>30-45%-kal is
                                                csökkenthetjük</strong> fűtésünk energiaigényét. Valamint akár légkondicionáló rendszerünk vezérlésére is alkalmazhatóak.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1"><strong>Távozáskor</strong> élesítjük a riasztót, ekkor
                                                <strong>az
                                                összes termosztát alacsony programra vált.</strong> Ha elutazunk, vagy korábban érünk haza, telefonról módosíthatjuk beállításainkat.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/gas2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1"> Már meglévő <strong>radiátoraink ütemezhető
                                                fűtésvezérlését</strong> ZigBee radiátor termosztátokkal tudjuk megvalósítani. Kábelezést nem igényelnek, valamint ablaknyitáskor automatikusan szüneteltethetjük a fűtést.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section4" id="m-pelda4">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Vízérzékelés / önálló elzárás
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 2-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel4" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel4" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel4" data-slide-to="1" class=""></li>
                                                <li data-target="#m-carousel4" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda4-1.jpg" alt="First slide water detection">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Vízérzékelő
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda4-2.jpg" alt="Second slide automatic sprikler">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Automata öntözés
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda4-3.jpg" alt="Third slide weather detection">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Időjárás alapján
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel4" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel4" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/leaksensor.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Ha a <strong>veszélyeztetett</strong> helyiségek padlójára helyezett vízérzékelőink egyike vizet észlel, a rendszer elzárja a fővezeték motoros vízcsapját és telefonunkon értesít a riasztásról.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/waterlock.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                A kerti öntözőrendszereink vezérlése is automatikus így reggelenként magától elindul az öntözés. Azonban <strong>időjárás alapján</strong> esős idő után a rendszer feleslegesen nem indul el önállóan.
                                            </p>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/leaksensor2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                A Vezérlésbe az időzítésen és az időjáráson túl különféle nedvesség és páratartalom érzékelőkhöz is köthetjük az indítási és leállási parancsot.
                                            </p>
                                        </div>
                                    </div>-->
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/waterlock2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Az öntözőrendszer vízellátását elvégezhetjük motoros működtetésű golyóscsapokkal és elektrotermikus szelepvezérlőkkel is.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section7" id="m-pelda5">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Gázérzékelés/önálló elzárás
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="card card-raised card-carousel">
                                    <div id="m-carousel5" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#m-carousel5" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#m-carousel5" data-slide-to="1" class=""></li>
                                            <li data-target="#m-carousel5" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./resources/img/pelda5-1.jpg" alt="First slide gas sensor">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gázérzékelő
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-2.jpg" alt="Second slide smoke detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Füstérzékelő
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-3.jpg" alt="Third slide climate controll">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gázcsap
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#m-carousel5" role="button" data-slide="prev">
                                            <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#m-carousel5" role="button" data-slide="next">
                                            <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/gassensor.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1"> Egy <strong>többfunkciós gázérzékelőt</strong> használhatunk
                                                <strong>földgáz</strong> detektálására, ha a mennyezethez közel, illetve
                                                <strong>PB-gáz</strong> detektálására is, ha a padlóhoz közel telepítjük. A gázérzékelők katalitikus szenzorelemükkel már a robbanásképes gázkoncentráció 6-8%-nál riasztást generálnak.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/smokedetector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Füstérzékelőnk</strong> szintén képes vészhelyzeti jelzést küldeni a rendszernek amennyiben füst keletkezett a helyiségben.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/gas.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Tragédiák megelőzése érdekében, ha egy mai otthonban bármilyen nyílt égésterű berendezés található, akkor elengedhetetlen a
                                                <strong>Gáz és füstérzékelők</strong> alkalmazása. Jelzéseiknek hatására a riasztással együtt elindulhat egy szellőztető berendezés is. Az impulzus-
                                                <strong>vezérelt gázszelep</strong> automatikusan elzárja a gázt és push-üzenetben tájékoztatást kapunk a vészhelyzetről.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section6" id="m-pelda6">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Az egész épület egy biztonsági rendszer
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 6 -->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel6" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel6" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel6" data-slide-to="1" class=""></li>
                                                <li data-target="#m-carousel6" data-slide-to="2" class=""></li>
                                                <li data-target="#m-carousel6" data-slide-to="3" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-1.jpg" alt="First slide broken glass detection">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Hőmérséklet
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-2.jpg" alt="Second slide lightswitch alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Világítás riasztás
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-3.jpg" alt="Third slide thief tracking">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Betörő követés
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-4.jpg" alt="Fourth slide smart alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Okos riasztó
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel6" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel6" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/door-sensor.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Az okos riasztó rendszerek élesítéskor <strong>jelezhetnek egy nyitva felejtett nyilászáró érzékelésekor</strong>.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Riasztás esetén a kapcsolók vagy más Tuya rendszerbe tartozó eszköz a behatoló általi működtetése <strong>korlátozható</strong> vagy a normál működéshez képes
                                                <strong>eltérően működtethető</strong>.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/detector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Mozgásérzékelőink és ajtónyitás érzékelőink segítségével pontosan
                                                <strong>követhetővé válik</strong> hol tartózkodik a behatoló így amennyiben szükséges biztonságosan elhagyhatjuk az épületet.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                A <strong>riasztóközpontot telefonról</strong> tudjuk időzítetten hatástalanítani vagy élesíteni (pl.: egy iroda nyitvatartásának idejére), vagy akár telefonunk GPS pozíciója alapján automatikusan beriasztani
                                                az épületet, ha elhagytuk a környéket.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section3" id="m-pelda7">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Kamera vezérlés
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 7-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel9" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel9" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel9" data-slide-to="1" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="Second slide winter home">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Kamera
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda8-2.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Automatizálás
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel9" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel9" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/camera.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Egy riasztási kimenettel ellátott kamerán meghatározható, hogy küldjön jelet amennyiben <strong>embert vagy járművet érzékel</strong> (ezt szűrhetően is el tudja végezni).
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                A jelet veszi a Tuya rendszerrel működő <strong>vezérlő</strong> (aktuátor) majd <strong>elvégzi a szükséges automatizációkat </strong>(leállítja a locsoló rendszert). </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section5" id="m-pelda8">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Beépíthető vezérlő
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 7-->
                                    <div class="card card-raised card-carousel">
                                        <div id="carousel20" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel20" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#carousel20" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel20" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda9-1.jpg" alt="First slide broken glass detection">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Meglévő kapcsoló
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda9-2.jpg" alt="Second slide lightswitch alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Beépíthető aktuátor
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="Third slide Camera">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Rugalmasság
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel20" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel20" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/regular-switch.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Telefonról és automatizációkból vezérelhető</strong> világítást kell megvalósítanunk, de a <strong>mechanikus kapcsolók</strong> dizájnjához ragaszkodunk.
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src="./resources/img/golden-dualswitch.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1"><strong>Kinetikus kapcsolókkal bővíthető</strong> a kapcsolóhelyek száma, vezetékezés nélkül, akár üveg, vagy fa felületeken is.
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">A KRC200-as sorozat vezérlői (aktuátorai) a <strong>villanykapcsoló
                                                mögötti
                                                kötődobozban elhelyezhetőek</strong>, vagy a megfelelő tartóval DIN sínre szerelhetőek. Az S-bemeneteket alkalmazva mechanikus kapcsolókkal is kapcsolhatóak, miközben kinetikus <strong>kapcsolókkal és
                                                mobiltelefonról</strong> is vezérelhetőek.
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">A KRC200-as sorozat vezérlőinek(aktuátorainak) S-bemenetén keresztül <strong>más
                                                rendszerek felől</strong> juttathatunk jelzéseket TUYA automatizációk felé.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section1" id="m-pelda9">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Távoli nyaralók fagymentesítése
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <div class="section">
                                    <!-- Carousel Card 7-->
                                    <div class="card card-raised card-carousel">
                                        <div id="m-carousel7" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#m-carousel7" data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#m-carousel7" data-slide-to="1" class=""></li>
                                                <li data-target="#m-carousel7" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-2.jpg" alt="Second slide winter home">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Fagymentesítés
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-1.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Termosztát
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-3.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Olajradiátor
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#m-carousel7" role="button" data-slide="prev">
                                                <i class="bg-dark material-icons">keyboard_arrow_left</i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#m-carousel7" role="button" data-slide="next">
                                                <i class="bg-dark material-icons">keyboard_arrow_right</i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                </div>
                            </div>
                            <div class=" col-12 mb-auto h-auto  ">
                                <div class="container-fluid mr-0 ">
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/connector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Nyaralóink, melléképületeink fagymentesítésére a fixen telepített termosztátok mellett az ideiglenesen is telepíthető, aljzatba dugható wifi termosztát és a hozzá csatlakoztatott elektromos olajradiátor hatékony megoldást kínál.
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/door-sensor.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                Amennyiben valamely nyílászáró nyitva maradt a rendszer értesíti a felhasználót, és igény szerint megállítja a fűtést. Így megelőzhető az esetleges energia pazarlás.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" section2" id="m-katalog">
                    <div>
                        <div>
                            <div class="col-10 mt-0 pt-0 mb-0">
                                <h1 class=" m-header-text text-left">
                                    Legfrisebb termékeink
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <p class="text1 mb-auto py-5">
                                    Az alábbi linken elérhető termékkatalógus lehetőséget biztosít rá, hogy áttekinthető, táblázatos formában összehasonlítsuk a Videosec okos épületvezérlési kínálatát.
                                </p>
                            </div>
                            <div class="col-7 mr-auto">
                                <a href="http://videosec.com/catpage/shHUN.php?lp=mob" target="_blank">
                                    <button class="button px-5" href="">PDF Letöltés</button>
                                </a>
                            </div>
                            <div class="col-12 mt-5">
                                <img src="./resources/img/all.png" class="w-100" alt="all items">
                                <img src="./resources/img/all2.png" class="w-100" alt="all items under image">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script src="resources/js/dist/build.js"></script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "20vw";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }

            function openNav2() {
                document.getElementById("mySidenav2").style.width = "50vw";
            }

            function closeNav2() {
                document.getElementById("mySidenav2").style.width = "0";
            }
        </script>

        <script>
            // When the user scrolls the page, execute myFunction 
            window.onscroll = function() {
                myFunction()
            };

            function myFunction() {
                var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("myBar").style.width = scrolled + "%";
            }
        </script>

    </body>

</html>