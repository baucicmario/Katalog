<!DOCTYPE html>
<html lang="en">
<?php
$LPag = "";
global $LPag;
if (!empty($_GET['lp'])) $LPag = $_GET['lp'];
if (!empty($_POST['lp'])) $LPag = $_POST['lp'];
session_start();
$counter_name = "../stat/" . $LPag . date("ymd") . "SHcatENG.txt";
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
        <title>Catalogue</title>
        <link rel="stylesheet" href="resources/css/dist/appstyle.css" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    </head>

    <body class="noscroll">
        <div id="mySidenav" class=" sidenav text-center">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <a href="#cover" onclick="closeNav()">Cover</a>
            <a href="#smarthome" onclick="closeNav()">Intelligent building</a>
            <a href="#automation" onclick="closeNav()">Automation</a>
            <a href="#camera" onclick="closeNav()">Camera integration</a>
            <a href="#green" onclick="closeNav()">Energy efficiency</a>
            <a href="#safety" onclick="closeNav()">Safety</a>
            <a href="#security" onclick="closeNav()">Security</a>
            <a href="#innovation" onclick="closeNav()">Groundbreaking kinetic switches</a>
            <a href="#wall" onclick="closeNav()">Kinetic switch controllers</a>
            <a href="#tuya" onclick="closeNav()">Management</a>
            <a href="#Node-RED" onclick="closeNav()">Advanced managemant</a>
            <p class="pt-3" style="font-size: 2vh; color: white;">Examples:</p>
            <a href="#pelda1" onclick="closeNav()">Automation solutions for a comfortable morning
        </a>
            <a href="#pelda2" onclick="closeNav()">Controlling lighting with automation</a>
            <a href="#pelda3" onclick="closeNav()">Climate control with automation</a>
            <a href="#pelda4" onclick="closeNav()">Water detection and leak prevention</a>
            <a href="#pelda5" onclick="closeNav()">Gas and smoke detection</a>
            <a href="#pelda6" onclick="closeNav()">The whole building is one security system</a>
            <a href="#pelda7" onclick="closeNav()">Management with cameras</a>
            <a href="#pelda8" onclick="closeNav()">Built-in Controlers</a>
            <a href="#pelda9" onclick="closeNav()">Winter proofing of vacation homes</a>
            <p class="pt-3" style="font-size: 2vh; color: white;">Products:</p>
            <a href="#katalog" onclick="closeNav()">Our newest products</a>
        </div>
        <div id="mySidenav2" class=" sidenav text-center">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()()">X</a>
            <a href="#m-cover" onclick="closeNav2()()">Cover</a>
            <a href="#m-smarthome" onclick="closeNav2()()">Intelligent building</a>
            <a href="#m-automation" onclick="closeNav2()()">Automation</a>
            <a href="#m-camera" onclick="closeNav2()()">Camera integration</a>
            <a href="#m-green" onclick="closeNav2()()">Energy efficiency</a>
            <a href="#m-safety" onclick="closeNav2()()">Safety</a>
            <a href="#m-security" onclick="closeNav2()()">Security</a>
            <a href="#m-innovation" onclick="closeNav2()()">Groundbreaking kinetic switches</a>
            <a href="#m-wall" onclick="closeNav2()()">Kinetic switch controllers</a>
            <a href="#m-Tuya" onclick="closeNav2()()">Management</a>
            <a href="#m-Node-RED" onclick="closeNav2()()">Advanced managemant</a>
            <p class="pt-3" style="font-size: 2vh; color: white;">Examples:</p>
            <a href="#m-pelda1" onclick="closeNav2()()">Automation solutions for a comfortable morning
        </a>
            <a href="#m-pelda2" onclick="closeNav2()()">Controlling lighting with automation</a>
            <a href="#m-pelda3" onclick="closeNav2()()">Climate control with automation</a>
            <a href="#m-pelda4" onclick="closeNav2()()">Water detection and leak prevention</a>
            <a href="#m-pelda5" onclick="closeNav2()()">Gas and smoke detection</a>
            <a href="#m-pelda6" onclick="closeNav2()()">The whole building is one security system</a>
            <a href="#m-pelda7" onclick="closeNav2()()">Management with cameras</a>
            <a href="#m-pelda8" onclick="closeNav2()()">Built-in Controlers</a>
            <a href="#m-pelda9" onclick="closeNav2()()">Winter proofing of vacation homes</a>
            <p class="pt-3" style="font-size: 2vh; color: white;">Products:</p>
            <a href="#m-katalog" class="mb-5" onclick="closeNav2()()">Our newest products</a>
        </div>
        <div id="menu" class=" mt-2 mr-5">
            <a href="https://videosec.com/?cmdLang=ENG"><img id="vsec-logo" style="width: 7vh;" class="mr-3" src="./resources/img/v-sec-logo-logo.png" alt="v-sec logo"></a>
            <a href="#wall"><img id="zigbee-logo" style="width: 7vh;" class="mr-3" src="./resources/img/zigbee-logo.png" alt="zigbee-logo"></a>
            <a href="#tuya"><img id="Tuya-logo" style="width: 7vh;" class="mr-3" src="./resources/img/tuya-mini-logo.png" alt="Tuya-logo"></a>
            <a href="#wall"><img id="wifi-logo" style="width: 7vh;" class="mr-3" src="./resources/img/wifi-logo.png" alt="wifi-logo"></a>
            <img onclick="openNav()" style="width: 5vh; cursor: pointer;" src="./resources/img/menu.png" alt="menuicon">
        </div>
        <div id="menu3" class=" vw-100  mt-2 mr-0 text-left">
                <a onclick="NextPage();">
                    <span id="btn_text"><img style="width: 7vh;" src="./resources/img/arrow.png" alt=""></span>
                </a>
        </div>
        <div id="menu2" class="  mt-2 mr-5">
            <a href="https://videosec.com/?cmdLang=ENG"><img id="vsec-logo2" style="width: 7vh;" class="mr-3" src="./resources/img/v-sec-logo-logo.png" alt="v-sec logo"></a>
            <a href="#wall"><img id="zigbee-logo2" style="width: 7vh;" class="mr-3" src="./resources/img/zigbee-logo.png" alt="zigbee-logo2"></a>
            <a href="#tuya"><img id="Tuya-logo2" style="width: 7vh;" class="mr-3" src="./resources/img/tuya-mini-logo.png" alt="Tuya-logo"></a>
            <a href="#wall"><img id="wifi-logo2" style="width: 7vh;" class="mr-3" src="./resources/img/wifi-logo.png" alt="wifi-logo"></a>
            <img onclick="openNav2()" style="width: 5vh; cursor: pointer;" src="./resources/img/menu.png" alt="menuicon">
        </div>
        <div id="containerDivID">
            <div id="left" class="ms-left ">
                <section class=" vw-100 bg-warning">
                    <div class=" w-50 vh-100">
                        <div class="col-12 my-auto  ml-auto" style="height: 88%;">
                            <div class="animated-title mt-4">
                                <div class="text-top ">
                                    <div>
                                        <table>
                                            <tr>
                                                <td style="text-align: right;">
                                                    <span style="font-size: 4vw;">Smart </span>
                                                    <span style="font-size: 4vw;">Secure</span>
                                                    <span style="font-size: 4vw;">Intelligent </span>
                                                </td>
                                                <td>
                                                    <span style="font-size: 4vw;"><br></span>
                                                    <span class="tracking-in-expand" style="margin-bottom: 5vw; font-size: 7vw;">home</span>
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
                                        Intelligent building
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mx-5 mt-0 px-5 pb-5 mb-2">
                                    <p class="text1">
                                        An intelligent building is capable of more than just direct user control. The building instantly <strong>completes tasks by itself</strong> if the correct requirements are met.
                                    </p>
                                    <p class="text1">
                                        This significantly improves response time and energy efficiency.&nbsp;</p>
                                    <p class="text1">
                                        The system can <strong>easily be installed</strong> into any home or building be it new or old.<br>
                                    </p>
                                    <p class="text1">
                                        The main focus of the system is:
                                    </p>
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
                                    <p class="text1">Energy efficiency</p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text1">Improved safety</p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text1">User comfort</p>
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
                                Camera integration
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    The alarm output of the Videosec <strong>IQ cameras can be connected</strong> to an inteligent building control system. This allows it <strong>to start automations</strong> based on camera detections. It gives an option
                                    to control lighting opening/closing and moving tasks based on:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/filter.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    A <strong>human or a car</strong> that has been <strong>detected</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/intusion.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Intrusion detection.</strong>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/timer.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Time spent</strong> in a Predefined zone.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/press.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    An outside <strong>signal from a button</strong> or switch that the camera received.
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
                                Energy efficiency
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Intelligent home system greatly decrease a buildings energy use. This can be achieved by setting up automations that:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/light.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Dim the lighting</strong> in rooms that are not in use.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/temperature.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Decreasing or turning off all lighting or climate control when the security system is armed.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/window.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Turning off climate control when an <strong>open door or window is detected</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/sun.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Turning on/off the lights outside of the building <strong>based on sunrise</strong>.
                                </p>
                            </div>
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    The system does all these without any user input so there is a significantly
                                    <strong>lower
                                    chance for human error</strong> . It's also capable of full or partial integration with existing outside systems.
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
                                Security
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/connect.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    When the security system is connected to an intelligent building all <strong> smart
                                    components
                                    become a part of it </strong> (door/windows sensors, light switches, power usage meters, thermostats, water or gas sensors). This greatly increasing detection accuracy </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/notification.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    The user can be <strong>notified if they forgot to close a window</strong> or left an appliance on when they try to arm the system.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/alert.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    In the case of an alarm being triggered the system can send a
                                    <strong>custom notification</strong> to multiple users simultaneously. The system can notify local authorities in case of emergencies and optionally can be set to be a silent alarm.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/key.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Aside from traditional means the system can scare off intruders by switching lights on and off, moving blinds and using other smart appliances.
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
                                Kinetic switch controllers
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 py-3">
                                    Controllers (or actuators) that receive signals from the switches, and are <strong>available
                                    in a
                                    variety of sizes</strong>. we offer dry contact, switch if phase output switches or roller shutters. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/wrench.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    KRC Controllers are available from 1 to 6 manageable channels and <strong>can be
                                    mounted</strong> to DIN-rails, size 86 wiring boxes or even <strong>behind wall mounted switches</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/lightswitch.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="align-text-bottom">
                                    The KRC-200 series has <strong> more control </strong>options with wired and kinetic switching and the Tuya app
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/radio.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    All Controllers are manageable through the Tuya app using <strong>Wi-Fi or
                                    Zigbee</strong> technology. </p>
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
                                Management
                            </h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    All Videosec smart components can be controlled through the <strong>Tuya</strong> ecosystem. The application lets It's users arrange all smart components into rooms and homes. The status of all <strong>components can be monitored and controlled</strong>                                    on the go. Tuya is also used to <strong>ate automations and scene routines. <br><br></strong> They can work: </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/weather.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Based on parts of the day or a <strong>specific time</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/controlpanel.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Based on the <strong>status of other components</strong> or automations
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/location.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    With <strong>GPS</strong> data from the user’s smartphone
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/integration.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Together-with</strong> or under existing smart <strong>home management
                                    platforms</strong> (Google, Amazon, Samsung, Smartlife)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/zigbee.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    On <strong>Wi-Fi or</strong> on <strong>Zigbee</strong> networks
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
                                Advanced managemant
                            </h1>
                        </div>
                        <div class="row pt-1">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-1">
                                    In the case of localised system instalations. Our Home Assitant server gives acces to visualised automation managment through Node-RED. Because it is located in the building, outside internet acces isn't required for its operation. It also lets the user
                                    can:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/HA-automation.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Create advanced automations(counting, people counting,) can be vreated using a NODE based system and automation progress can be monitored on the same interface.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/compatible.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Create automations can be started and recived by all supported devices and services, not just those in the Tuya ecosystem (cars, refridgerators, NFC tags, stock data, ect.)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/costumize.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    The server is completely open source so it can be completely customized to the users needs and provides much better security and reliability.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/zigbee.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    The server can work on Wifi and ZigBee without the need for Tuya ZigBee hubs.
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
                                Automation solutions for
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
                                                        Blinds
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-2.jpg" alt="Second slide movement detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Sensors
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-3.jpg" alt="Third slide thermostat">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Thermostat
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda1-4.jpg" alt="Third slide smart alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Security system
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
                                Controlling lighting
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto ">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Corridors and bathrooms rooms are only dimly lit unless <strong>sensors detect
                                            movement</strong>. During the day they set themselves to a default mode. In unused rooms they go back to power saving, decoration or off mode.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center ">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            Kinetic switches can be <strong>moved dynamically</strong> and there is no need for rewiring new batteries painting or any other work to achieve this.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch3.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            If a switch is too high, it can always be moved down. They <strong>can also be
                                            mounted
                                            on glass surfaces.</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>A single press </strong> of a kinetic button
                                            <strong>changes lighting scenes </strong> or starts automations. For instance, it can let the blinds down, make lighting go to dim modeetc.
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
                                Climate control
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
                                                        Thermostat
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda3-2.jpg" alt="Second slide leaving the building">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Leaving
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda3-3.jpg" alt="Third slide climate control">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Climate control
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
                                Water detection
                            </h1>
                        </div>
                        <div class=" col-10 mr-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/leaksensor.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            If a water leak sensor detects an emergency, the system <strong> can close
                                            the main
                                            water valve</strong> and notify the user.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/waterlock.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            The automated sprinkler system can be set to start working in the morning but
                                            <strong> do
                                            nothing if there was rainfall </strong> the last day. It can also be controlled by the user on their phone.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/waterlock2.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            They can be managed using a motorized ball valve or a vax water valve controller.
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
                                Gas and smoke
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
                                                        Gas sensor
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-2.jpg" alt="Second slide smoke detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Smoke detector
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-3.jpg" alt="Third slide climate controll">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gas valve
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
                                The whole building
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
                                            While arming a smart alarm system, it will <strong>notify you if there is a window or door</strong> that was <strong>left open</strong> by the someone.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch2.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            If an intruder is detected the Tuya connected light <strong>switches can be
                                            restricted </strong> or their functionality can even be changed
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            The sensors in the house can be used to <strong> track intruders</strong>, so the user can exit the building if needed.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/panel.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            The <strong> alarm hub can be programed with the users phone</strong> to get armed and disarmed automatically based on time (working hours of a business for instance) or the users phone location so that it can
                                            arm the building if we leave the area
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
                                Management
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
                                                        Camera
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda8-2.jpg" alt="Second slide door opener">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Automation
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
                                Built-in
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
                                            Smart home systems <strong>can even be used in traditional installations</strong> by using built in controllers, to enable complete automations
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            KRC-200 series controllers (actuators) <strong>can be built into the wall
                                            socket</strong> behind the light switches. Connecting their inputs to the switch allows the user to control them with the mechanical switch while still working through the Tuya app and the kinetic switches
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/golden-dualswitch.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            The system <strong>can be expanded with kinetic switches</strong> if needed. They can be easily moved and even mounted on glass if need
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            KRC-200 Controllers (actuators) <strong> can be connected to any system (Cameras,alarms etc.) with a
                                            control
                                            signal</strong>, integrating them into Tuya
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
                                            Winter proofing
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
                                                                    free prevention
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-1.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Thermostat
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-3.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Electric radiator
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./resources/img/pelda7-4.jpg" alt="First slide temperature control">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h4>
                                                                    Windows and doors
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
                                    <img class="w-100 h-auto" src="./resources/img/downloadhome.png" alt="greenhome logo">
                                </div>
                                <div class="col-9 ">
                                    <h1 class="header-text">
                                        Our newest products
                                    </h1>
                                </div>
                            </div>
                            <div class="row h-25">
                                <div class="col-10 ml-auto mt-0">
                                    <p class="text1 mb-auto py-5">
                                        <strong>
                                        Download a detailed catalog of our latest products from the link below!
                                    </strong>
                                    </p>
                                </div>
                                <div class="col-7 ml-auto">
                                    <a href="./resources/PDF/termekekENG.pdf" target="_blank">
                                        <button class="button px-5" href="">Download</button>
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
                            <img class="w-100 " src="./resources/img/cover-icon.png" alt="cover image">
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
                                Automation
                            </h1>
                        </div>
                    </div>
                    <div class=" mr-3">
                        <div class="col-sm-11 h-auto m-auto">
                            <p class="text1">The best feature of an intelligent building is that all smart components are in constant communication with each other. This allows them to <strong> detect many environmental
                                factors and
                                adapt to them instantly.</strong> This is called automation and is the main component of an intelligent building.
                            </p>
                            <p class="text1">An automation can by executed by a single or multiple devices
                            </p>
                            <p class="text1">The main steps of an automation are:&nbsp;</p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/detect.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                <strong>Detection: </strong>An event is registered by a sensor (water/smoke/movement detected or a timer) Than the system triggers the related components of the smart house
                            </p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/execute.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                <strong>Execution:</strong> The task connected to the detected trigger starts, and than One or more components components execute it.
                            </p>
                        </div>
                        <div class="col-2 my-auto">
                            <img class="w-50 ml-5 my-2" src="./resources/img/notify.png" alt="">
                        </div>
                        <div class="col-10 my-auto">
                            <p class="text1 my-auto py-3">
                                <strong>Notification:</strong> The user is (optionally) notified that the task has been finished.
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
                                Independent and reliable
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    Using a self hosted Home Assitant server, allows the user to <strong> Controll smart systems without an internet connection</strong>. The system supports more than a thousand integrations (Tuya, eWelink, Philips, BMW
                                    ect.) and can execute graphicaly editable automations for them. After instalation in our home, the building becomes an independent smart system and can:</p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/nonet.png" alt="no wifi">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">

                                    Work with all features enabled <strong>Without an internet connection</strong>. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/expand.png" alt="integration">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Integrate with a wide range of systems. Allowing the user to controll them and make automations for them on one interface. ( <a style="color: white; font-weight: 900;" href="https://www.home-assistant.io/integrations/#all">  more information</a>)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/safety.png" alt="security">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    Have <strong>high security</strong> thanks to its local instalation
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-5 my-2" src="./resources/img/reliable.png" alt="reliable">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 ml-3">
                                    <strong>Provide long term reliability</strong> as a result of it not being directly connected to a company or goverment
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
                                Safety
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1 my-auto py-3">
                                    The integration of the system allows it to<strong> execute safety tasks extremely
                                    efficiently</strong>.
                                    <br><br> It has the capacity to:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/energysmall.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Turn all the circuIt's off</strong> in the room if it detected a water leak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/water.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Shut off the main water valve </strong>in the case of emergency.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/flame.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    <strong>Shut off the main gas pipe</strong> if it detects smoke or a gas leak.
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
                                Groundbreaking <br> kinetic switches
                            </h1>
                        </div>
                        <div class="row ">
                            <div class="col-sm-11 h-auto m-auto">
                                <p class="text1">
                                    Unlike traditional wired and battery powered switches. Kinetic switches <strong> can be placed on any surface</strong> and are <strong>self-powered</strong>, so they do not require additional power sources (wiring or
                                    battery). When the user presses a kinetic switch the movement of the switch generates energy that powers the built-in radio relay. This sends out a signal to the receiver and the task associated whit the switch is started.
                                    <br>
                                    <strong>Kinetic door sensors work on the same principle .</strong> <br> The speed or time of the button press doesn't affect the system. <br> Their main advantages are: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/materials.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    they can be mounted to any surface and easily moved if needed.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/clock.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Lifetime of more than a hundred thousand switchings
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/radio.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    No extra wiring expenses
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/battery.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Extreme energy efficiency without wasteful battery use.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-50 ml-5 my-2" src="./resources/img/water.png" alt="">
                            </div>
                            <div class="col-10 my-auto">
                                <p class="text1 my-auto py-3">
                                    Can be used under wet conditions or outside thanks to It's water resistance (IP67 rating).
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
                                a comfortable morning
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center ">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            The system slightly raises the blinds so that sunlight can get into the room. It keeps raising them slowly so the <strong>user can be woken up by mild sunlight</strong>. During winter the same can also be achieved
                                            with the lights in the room.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/switch.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Sensors</strong>in the house can <strong>control lighting based on
                                            movement</strong>, and user demand.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/detector.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Climate control</strong> would adjust the air conditioning or heating before the user woke up.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/thermostat.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            When leaving the house, the users phone gets a<strong>reminder if they
                                            forgot to
                                            turn on the security system</strong>. They can arm it from their phone afterwards.
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
                                with automation
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
                                                        Sensors
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-2.jpg" alt="Second slide wierless">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        no wiring
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-3.jpg" alt="Third slide moveable">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Repositionable
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda2-4.jpg" alt="Fourth slide Multiple lights">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        multiple commands
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
                                with automation
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1">
                                            By placing thermostats in multiple rooms, the user can <strong>improve energy
                                            efficiency
                                            up to 30-45%</strong> with automations. The system can also integrate air conditioning as well.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/thermostat.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            When <strong>the user leaves</strong> the building and arms the security system, all the <strong>thermostats switch into low power mode</strong> . And if needed it can be turned back on through the Tuya app
                                            .
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/panel.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            <strong>Existing radiator systems can also be upgraded</strong> using radiator mounted ZigBee thermostats. They don’t require any wiring and can be shut off when an open window is detected.
                                        </p>
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
                                and leak prevention
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
                                                        Water sensor
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda4-2.jpg" alt="Second slide automatic sprikler">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Automated sprinkler
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda4-3.jpg" alt="Third slide weather detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Based on weather
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
                                detection
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1">
                                            Multifunctional gas sensors can be used to detect various kinds of gas leaks dependent on It's positioning (close to the floor or the celling). <strong> The device can
                                            detect
                                            6-8% combustible
                                            gas concentration </strong> with It's catalytic sensor and inform the user.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/gassensor.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            Videosec <strong> smoke detectors can notify the user in the same way</strong> as well, if they detect smoke or fire.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/smokedetector.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            To prevent serious tragedy, use of smoke and gas sensors are crucial in any modern home. Based on their signals a venting system can be activated and an impulse controlled <strong> gas valve can block the main gas pipe.</strong>                                            While informing the user.
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
                                is one security system
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
                                                        Temperature
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-2.jpg" alt="Second slide lightswitch alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Ligthing alarm
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-3.jpg" alt="Third slide thief tracking">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Intruder tracking
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda6-4.jpg" alt="Fourth slide smart alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Smart alarm
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
                                with cameras
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            A camera with an alarm output can be set up to <strong>detect (selectively) people or vehicles</strong>, and send trigger signals to various automations. (for instance people walking nearby) </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text1">
                                            The signal can be received by a <strong> Tuya controller (actuator)</strong> that can <strong>execute multiple automations</strong> (for example open gates and turn of sprinklers etc.)
                                        </p>
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
                                Controlers
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
                                                        Existing switches
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda9-2.jpg" alt="Second slide lightswitch alarm">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Built-in Controlers
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="Third slide Camera">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Flexibility
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
                                of vacation homes
                            </h1>
                        </div>
                        <div class=" col-10 ml-auto mb-auto">
                            <div class="container-fluid mr-0 text-center">
                                <div class="row ">
                                    <div class="col-9">
                                        <p class="text1">
                                            To <strong>prevent freezing in vacation houses</strong> during the winter connecting an electric heater to a Videosec wall plug with a built in thermostat is recommended.
                                        </p>
                                    </div>
                                    <div class="col-3 avatar">
                                        <img src=" ./resources/img/connector.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text1">
                                            If a door or window was left open the system turns the heating off and notifies the user. <strong>Preventing energy waste</strong>.
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
            <div id="mobile-left">
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
                                                            <span style="font-size: 4vw;">Smart</span>
                                                            <span style="font-size: 4vw;">Secure</span>
                                                            <span style="font-size: 4vw;">Intelligent</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-size: 4vw;"><br></span>
                                                            <span class="tracking-in-expand" style="margin-bottom: 5vw; font-size: 7vw;">home</span>
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
                                    Intelligent building
                                </h1>
                            </div>
                            <div class="col-12" style="padding-top:6vh">
                                <p class="m-text1"> An intelligent building is capable of more than just direct user control. The building instantly <strong>completes tasks by itself</strong> if the correct requirements are met.
                                </p>
                                <p class="m-text1">
                                    This significantly improves response time and energy efficiency.&nbsp;</p>
                                <p class="m-text1" style="padding-top:4vh">The main focus of the system is:</p>
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
                                <p class="list-text">Energy efficiency</p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="list-text">Improved safety</p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="list-text">User comfort</p>
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
                                    Automation
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    The best feature of an intelligent building is that all smart components are in constant communication with each other. This allows them to <strong> detect many environmental
                                    factors and
                                    adapt to them instantly.</strong> This is called automation and is the virtual essence of an intelligent building.
                                    <br><br> An automation can by executed by a single or multiple devices
                                </p>
                                <p class="m-text1">The main steps of an automation are:&nbsp;</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/detect.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Detection: </strong>An event is registered by a sensor (water/smoke/movement detected or a timer) Than the system triggers the related components of the smart house
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/execute.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Execution:</strong> The task connected to the detected trigger starts, and than One or more components components execute it.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/notify.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Notification:</strong> The user is (optionally) notified that the task has been finished.
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
                                    Independent and reliable

                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    Using a self hosted Home Assitant server, allows the user to <strong> Controll smart systems without an internet connection</strong>. The system supports more than a thousand integrations (Tuya, eWelink, Philips, BMW
                                    ect.) and can execute graphicaly editable automations for them. After instalation in our home, the building becomes an independent smart system and can:</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/nonet.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">

                                    Work with all features enabled <strong>Without an internet connection</strong>. </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/expand.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Integrate with a wide range of systems. Allowing the user to controll them and make automations for them on one interface. ( <a style="color: white; font-weight: 900;" href="https://www.home-assistant.io/integrations/#all">  more information</a>)
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/safety.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Have <strong>high security</strong> thanks to its local instalation
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/reliable.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Provide long term reliability</strong> as a result of it not being directly connected to a company or goverment
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
                                    Camera integration
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 ">
                                    The alarm output of the Videosec <strong>IQ cameras can be connected</strong> to an inteligent building control system. This allows it <strong>to start automations</strong> based on camera detections. It gives an option
                                    to control lighting opening/closing and moving tasks based on:
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/filter.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    A <strong>human or a car</strong> that has been <strong>detected</strong>.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/intusion.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Intrusion detection.</strong>
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/timer.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Time spent</strong> in a Predefined zone.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/press.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    An outside <strong>signal from a button</strong> or switch that the camera received.
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
                                    Energy efficiency
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 ">
                                    Intelligent home system greatly decrease a buildings energy use. This can be achieved by
                                </p>
                                <p class="m-text1 ">setting up automations that:&nbsp;</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/light.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Dim the lighting</strong> in rooms that are not in use.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/temperature.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Decreasing or turning off all lighting or climate control when the security system is armed.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/window.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Turning off climate control when an <strong>open door or window is detected</strong>.
                                </p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/sun.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    Turning on/off the lights outside of the building <strong>based on sunrise</strong>.
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="m-text1 ">
                                    The system does all these without any user input so there is a significantly
                                    <strong>lower
                                    chance for human error</strong> . It's also capable of full or partial integration with existing outside systems.
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
                                    Safety
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    The integration of the system allows it to<strong> execute safety tasks extremely
                                    efficiently</strong>.
                                </p>
                                <p class="m-text1">It has the capacity to:</p>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/energysmall.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    <strong>Turn all the circuIt's off</strong> in the room if it detected a water leak.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/water.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    <strong>Shut off the main water valve </strong>in the case of emergency.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/flame.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    <strong>Shut off the main gas pipe</strong> if it detects smoke or a gas leak.
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
                                    Security
                                </h1>
                            </div>
                            <div class="col-2 mt-5">
                                <img class="w-75 ml-3 py-2" src="./resources/img/connect.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0 mt-5">
                                <p class="align-text-bottom">
                                    When the security system is connected to an intelligent building all <strong> smart
                                    components
                                    become a part of it </strong> (door/windows sensors, light switches, power usage meters, thermostats, water or gas sensors). This greatly detection accuracy </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/notification.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    The user can be <strong>notified if they forgot to close a window</strong> or left an appliance on when they try to arm the system.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/alert.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    In the case of an alarm being triggered the system can send a
                                    <strong>custom notification</strong> to multiple users simultaneously. The system can notify local authorities in case of emergencies and optionally can be set to be a silent alarm.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/key.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Aside from traditional means the system can scare off intruders by switching lights on and off, moving blinds and using other smart appliances.
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
                                    Groundbreaking <br> kinetic switches
                                </h1>
                            </div>
                            <div class="col-12">
                                <p>
                                    Unlike traditional wired and battery powered switches. Kinetic switches <strong> can be placed on any surface</strong> and are <strong>self-powered</strong>, so they do not require additional power sources (wiring or
                                    battery). When the user presses a kinetic switch the movement of the switch generates energy that powers the built-in radio relay. This sends out a signal to the receiver and the task associated whit the switch is started.
                                    <br>
                                    <strong>Kinetic door sensors work on the same principle .</strong> <br> The speed or time of the button press doesn't affect the system. <br> Their main advantages are: <br>
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/materials.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    they can be mounted to any surface and easily moved if needed. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/clock.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Lifetime of more than a hundred thousand switchings
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/radio.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    No extra wiring expenses
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/battery.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Extreme energy efficiency without wasteful battery use.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/water.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Can be used under wet conditions or outside thanks to It's water resistance (IP67 rating).
                                </p>
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
                                    Kinetic switch controllers
                                </h1>
                            </div>
                            <div class="col-12">
                                <p>
                                    Controllers (or actuators) that receive signals from the switches, and are <strong>available
                                    in a
                                    variety of sizes</strong>. we offer dry contact, switch if phase output switches or roller shutters. </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/wrench.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    KRC Controllers are available from 1 to 6 manageable channels and <strong>can be
                                    mounted</strong> to DIN-rails, size 86 wiring boxes or even <strong>behind wall mounted switches</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/lightswitch.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    The KRC-200 series has <strong> more control </strong>options with wired and kinetic switching and the Tuya app
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/radio.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    All Controllers are manageable through the Tuya app using <strong>Wi-Fi or
                                    Zigbee</strong> technology.
                                </p>
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
                                    Management
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    All Videosec smart components can be controlled through the <strong>Tuya</strong> ecosystem. The application lets It's users arrange all smart components into rooms and homes. The status of all <strong>components can be monitored and controlled</strong>                                    on the go. Tuya is also used to <strong>ate automations and scene routines. <br><br></strong> They can work:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/weather.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Based on parts of the day or a <strong>specific time</strong>.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/controlpanel.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Based on the <strong>status of other components</strong> or automations
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/location.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    With <strong>GPS</strong> data from the user’s smartphone
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/integration.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    <strong>Together-with</strong> or under existing smart <strong>home management
                                    platforms</strong> (Google, Amazon, Samsung, Smartlife)
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/zigbee.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    On <strong>Wi-Fi or</strong> on <strong>Zigbee</strong> networks
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
                                    Advanced managemant
                                </h1>
                            </div>
                            <div class="col-12">
                                <p class="m-text1">
                                    In the case of localised system instalations. Our Home Assitant server gives acces to visualised automation managment through Node-RED. Because it is located in the building, outside internet acces isn't required for its operation. It also lets the user
                                    can:
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/HA-automation.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Create advanced automations(counting, people counting,) can be vreated using a NODE based system and automation progress can be monitored on the same interface.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/compatible.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    Create automations can be started and recived by all supported devices and services, not just those in the Tuya ecosystem (cars, refridgerators, NFC tags, stock data, ect.)</p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/costumize.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    The server is completely open source so it can be completely customized to the users needs and provides much better security and reliability.
                                </p>
                            </div>
                            <div class="col-2 my-auto">
                                <img class="w-75 ml-3 py-2" src="./resources/img/zigbee.png" alt="baterry icon">
                            </div>
                            <div class="col-9 p-0 mb-0">
                                <p class="align-text-bottom">
                                    The server can work on Wifi and ZigBee without the need for Tuya ZigBee hubs.
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
                                    Automation solutions for a comfortable morning
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
                                                            Blinds
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Sensors
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-3.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Thermostat
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda1-4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Security system
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
                                                The system slightly raises the blinds so that sunlight can get into the room. It keeps raising them slowly so the <strong>user can be woken up by mild sunlight</strong>. During winter the same can also be
                                                achieved with the lights in the room.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/detector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Sensors</strong>in the house can <strong>control lighting based on
                                                movement</strong>, and user demand.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/thermostat.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Climate control</strong> would adjust the air conditioning or heating before the user woke up.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                When leaving the house, the users phone gets a<strong>reminder if they
                                                forgot to
                                                turn on the security system</strong>. They can arm it from their phone afterwards.
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
                                    Controlling lighting with automation
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
                                                            Sensors
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            no wiring
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-3.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Repositionable
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda2-4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            multiple commands
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
                                                Corridors and bathrooms rooms are only dimly lit unless <strong>sensors detect
                                                movement</strong>. During the day they set themselves to a default mode. In unused rooms they go back to power saving, decoration or off mode. </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Kinetic switches can be <strong>moved dynamically</strong> and there is no need for rewiring new batteries painting or any other work to achieve this.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch3.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                If a switch is too high, it can always be moved down. They <strong>can also be
                                                mounted
                                                on glass surfaces.</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>A single press </strong> of a kinetic button
                                                <strong>changes lighting scenes </strong> or starts automations. For instance, it can let the blinds down, make lighting go to dim modeetc.
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
                                    Climate control with automation
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
                                                            Thermostat </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda3-2.jpg" alt="Second slide leaving the building">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Leaving
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda3-3.jpg" alt="Third slide climate control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Climate control
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
                                                By placing thermostats in multiple rooms, the user can <strong>improve energy
                                                efficiency
                                                up to 30-45%</strong> with automations. The system can also integrate air conditioning as well.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                When <strong>the user leaves</strong> the building and arms the security system, all the <strong>thermostats switch into low power mode</strong> . And if needed it can be turned back on through the Tuya
                                                app . </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/gas2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                <strong>Existing radiator systems can also be upgraded</strong> using radiator mounted ZigBee thermostats. They don’t require any wiring and can be shut off when an open window is detected.
                                            </p>
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
                                    Water detection and leak prevention
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
                                                            Water sensor </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda4-2.jpg" alt="Second slide automatic sprikler">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Automated sprinkler
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda4-3.jpg" alt="Third slide weather detection">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Based on weather
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
                                                If a water leak sensor detects an emergency, the system <strong> can close
                                                the main
                                                water valve</strong> and notify the user.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/waterlock.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                The automated sprinkler system can be set to start working in the morning but
                                                <strong> do
                                                nothing if there was rainfall </strong> the last day. It can also be controlled by the user on their phone.
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
                                                They can be managed using a motorized ball valve or a vax water valve controller.
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
                                    Gas and smoke detection
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
                                                        Gas sensor
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-2.jpg" alt="Second slide smoke detection">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Smoke detector
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./resources/img/pelda5-3.jpg" alt="Third slide climate controll">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4>
                                                        Gas valve
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
                                            <p class="m-text1">
                                                Multifunctional gas sensors can be used to detect various kinds of gas leaks dependent on It's positioning (close to the floor or the celling). <strong> The device can
                                                detect
                                                6-8% combustible
                                                gas concentration </strong> with It's catalytic sensor and inform the user. </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/smokedetector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                Videosec <strong> smoke detectors can notify the user in the same way</strong> as well, if they detect smoke or fire.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/gas.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                To prevent serious tragedy, use of smoke and gas sensors are crucial in any modern home. Based on their signals a venting system can be activated and an impulse controlled <strong> gas valve can block the main gas pipe.</strong>                                                While informing the user.
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
                                    The whole building is one security system
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
                                                            Temperature
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-2.jpg" alt="Second slide lightswitch alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Ligthing alarm
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-3.jpg" alt="Third slide thief tracking">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Intruder tracking
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda6-4.jpg" alt="Fourth slide smart alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Smart alarm
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
                                                While arming a smart alarm system, it will <strong>notify you if there is a window or door</strong> that was <strong>left open</strong> by the someone. </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/switch2.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                If an intruder is detected the Tuya connected light <strong>switches can be
                                                restricted </strong> or their functionality can even be changed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/detector.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                The sensors in the house can be used to <strong> track intruders</strong>, so the user can exit the building if needed.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/panel.png" class="w-100 " alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                The <strong> alarm hub can be programed with the users phone</strong> to get armed and disarmed automatically based on time (working hours of a business for instance) or the users phone location so that
                                                it can arm the building if we leave the area
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
                                    Management with cameras
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
                                                            Camera
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda8-2.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Automation
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
                                                A camera with an alarm output can be set up to <strong>detect (selectively) people or vehicles</strong>, and send trigger signals to various automations. (for instance people walking nearby) </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                The signal can be received by a <strong> Tuya controller (actuator)</strong> that can <strong>execute multiple automations</strong> (for example open gates and turn of sprinklers etc.)
                                            </p>
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
                                    Built-in Controlers
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
                                                            Existing switches
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda9-2.jpg" alt="Second slide lightswitch alarm">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Built-in Controlers
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda8-1.jpg" alt="Third slide Camera">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Flexibility
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
                                                Smart home systems <strong>can even be used in traditional installations</strong> by using built in controllers, to enable complete automations
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/kapunyito.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                KRC-200 series controllers (actuators) <strong>can be built into the wall
                                                socket</strong> behind the light switches. Connecting their inputs to the switch allows the user to control them with the mechanical switch while still working through the Tuya app and the kinetic switches
                                            </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src="./resources/img/golden-dualswitch.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                The system <strong>can be expanded with kinetic switches</strong> if needed. They can be easily moved and even mounted on glass if need </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/camera.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="m-text1">
                                                KRC-200 Controllers (actuators) <strong> can be connected to any system (Cameras,alarms etc.) with a
                                                control
                                                signal</strong>, integrating them into Tuya </p>
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
                                    Winter proofing of vacation homes </h1>
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
                                                <li data-target="#m-carousel7" data-slide-to="3" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-2.jpg" alt="Second slide winter home">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            free prevention
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-1.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Thermostat
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-3.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Electric radiator
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./resources/img/pelda7-4.jpg" alt="First slide temperature control">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h4>
                                                            Windows and doors
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
                                                To <strong>prevent freezing in vacation houses</strong> during the winter connecting an electric heater to a Videosec wall plug with a built in thermostat is recommended. </p>
                                        </div>
                                        <div class="col-3 ">
                                            <img src=" ./resources/img/door-sensor.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p class="text1">
                                                If a door or window was left open the system turns the heating off and notifies the user. <strong>Preventing energy waste</strong>.
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
                                    Our newest products
                                </h1>
                            </div>
                            <div class="col-11 mx-auto p-0">
                                <p class="text1 mb-auto py-5">
                                    Download a detailed catalog of our latest products from the link below!
                                </p>
                            </div>
                            <div class="col-7 mr-auto">
                                <a href="https://videosec.com/catpage/Videosec_Q4_HUN.pdf" target="_blank">
                                    <button class="button px-5" href="">Download</button>
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