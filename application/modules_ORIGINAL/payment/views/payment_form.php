<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();

$ip_data = "";
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];
$country_name  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
} elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
    $ip = $forward;
} else {
    $ip = $remote;
}

if($ip_data && $ip_data->geoplugin_countryName != null) {
    $country_name = $ip_data->geoplugin_countryName;
    $countryCode = $ip_data->geoplugin_countryCode;
}

//echo 'http://www.geoplugin.net/php.gp?ip='.$client;
$getloc = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$client));
//print_r($getloc); 
$getloc['geoplugin_countryCode'];
//$country_name = $getloc['geoplugin_countryName'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>assets/images/favicon.ico">
    <title>Checkout</title>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
</head>
<body>
    <header class="headerBar checkoutHeader">
        <nav class="navbar navbar-default">
            <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.png" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div id="navbar" class="navbar-collapse collapse checkOutList text-center">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)" title="Register">
                                        <span>Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Thank you">
                                        <span>Thank you</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2">
                        <div class="secureText">
                            <p class="mb-0">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-shield-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                  </svg>
                                  100% Secure</p>
                        </div>
                    </div>
               </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 registerBorder">
                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2 p-5 reportName">
                                <div class="borderBox p-4 highLightBox mb-5">
                                    <p>
                                        <strong>Selected Report:</strong>
                                    </p>
                                    <p><?php echo $report_data[0]['rep_name']; ?></p>
                                </div>
                                <p class="h4 mt-0">Choose Paymnet Mode:</p>
                                <div class="paymentOptBox mb-4">
                                    <div class="paymentRadio">
                                        <input type="radio" checked="checked" name="radioPay" id="radioPayPal" class="paymentType" value="PayPal">
                                        <label class="contRedio pl-0 row" for="radioPayPal">
                                           <div class="col-xs-5">
                                            <span class="checkIcon pl-5">
                                                <img class="img-responsive payPal" src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal.png" alt="PayPal" title="PayPal" />
                                            </span>
                                           </div>
                                            <div class="col-xs-7 paymentOptBottom">
                                                <span>
                                                    <img src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal-bottom.png" alt="PayPal" title="PayPal" />
                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="paymentOptBox paymentOptBoxLast">
                                    <div class="paymentRadio">
                                        <input type="radio" name="radioPay" id="radioCCAvenue" class="paymentType" value="CCAvenue">
                                        <label class="contRedio pl-0 row" for="radioCCAvenue">
                                            <div class="col-xs-5">
                                                <span class="checkIcon pl-5">
                                                    <img class="img-responsive payPal" src="<?php echo WEBSITE_URL; ?>assets/images/cc-avenue.png" alt="CC Avenue" title="CC Avenue" />
                                                </span>
                                               </div>
                                                <div class="col-xs-7 paymentOptBottom">
                                                    <span>
                                                        <img src="<?php echo WEBSITE_URL; ?>assets/images/cc-avenue-bottom.png" alt="CC Avenue" title="CC Avenue" />
                                                    </span>
                                                </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="formBox mt-5">
                                    <p class="h4 mb-5 mt-0">Please register your details and proceed to checkout.</p>
                                    <div class="requestform">
                                        <form action="" method="post" name="" onsubmit="return validateForm();">
                                            <?php
                                                $name = $this->security->get_csrf_token_name(); 
                                                $hash = $this->security->get_csrf_hash();
                                                $_SESSION[$name] = $hash;
                                            ?>

                                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                            <input type="hidden" id="country_name" name="country" value="<?php echo $country_name; ?>">
                                            <input type="hidden" id="cust_country_code" name="cust_country_code" value="<?php echo $getloc['geoplugin_countryCode']; ?>">
                                            <input type="hidden" name="licenseType" value="<?php echo $licenseType; ?>">
                                            <input type="hidden" name="paymentType" class="hdnPaymentType" value="PayPal">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-field">
                                                        <input type="email" name="emailId" id="idPMREmailId" class="form-control emailId" required="required">
                                                        <label for="idPMREmailId" class="form-label">Email (Username)</label>
                                                        <span class="text-danger emailIdError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-field">
                                                        <input type="text" name="fullname" id="idPMRfullname" class="form-control fullname" required="required">
                                                        <label for="idPMRfullname" class="form-label">Full Name</label>
                                                        <span class="text-danger nameError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-field">
                                                        <select name="countryCode" id="" class="country-code countryCode" required>
                                                            <option data-countryCode="" value="">Country Code</option>
                                                            <option data-countryCode="US" value="1">USA (+1)</option>
                                                            <option data-countryCode="GB" value="44">UK (+44)</option>
                                                            <optgroup label="Other countries">
                                                                <option data-countryCode="AF" value="93">Afghanistan (+93)</option>
                                                                <option data-countryCode="AL" value="355">Albania (+355)</option>
                                                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                <option data-countryCode="CN" value="86">China (+86)</option>
                                                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                <option data-countryCode="FR" value="33">France (+33)</option>
                                                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                <option data-countryCode="IN" value="91">India (+91)</option>
                                                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                <option data-countryCode="GB" value="44">UK (+44)</option>
                                                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                <option data-countryCode="US" value="1">USA (+1)</option>
                                                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                            </optgroup>
                                                        </select>
                                                        <input type="text" name="phoneNo" id="idPMRContactNo" class="form-control phoneNo" required="required">
                                                        <label for="idPMRContactNo" class="form-label phoneNumber">Phone No.</label>
                                                        <span id="clientPhoneNo" class="errormsgs"></span>
                                                        <span class="text-danger phoneNoError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="form-field">
                                                        <input type="text" name="company_address" id="idAddress" class="form-control company_address" required>
                                                        <label for="idAddress" class="form-label">Address</label>
                                                        <span class="text-danger addressError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="form-field">
                                                        <input type="text" name="name_city" id="idCity" class="form-control name_city" required>
                                                        <label for="idCity" class="form-label">City</label>
                                                        <span class="text-danger cityError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="form-field">
                                                        <input type="text" name="name-state" id="idState" class="form-control name-state" required> 
                                                        <label for="idState" class="form-label">State</label>
                                                        <span class="text-danger stateError"></span>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="form-field">
                                                        <input type="text" name="name-zipcode" id="idZipCode" class="form-control name-zipcode" required>
                                                        <label for="idZipCode" class="form-label">Zip Code</label>
                                                        <span class="text-danger zipcodeError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-field">
                                                        <span id="captcha" class="captcha"></span>
                                                        <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" id="captcha-form" maxlength="3" size="3" tabindex=3 required />
                                                        <label for="captcha-form" class="form-label">Security Code</label>
                                                       <input type="hidden" class="hdnCaptcha" value="">
                                                        <span id="captachacode" class="errormsgs"></span>
                                                        <span class="text-danger captchaError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="form-field">
                                                        <label class="contRedio">
                                                            <small> I acknowledge that I have read and agree to the </small>
                                                            <input type="checkbox" class="chkAgree" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="chkError"></span>
                                                        <a href="<?php echo WEBSITE_URL."terms-and-conditions.asp"; ?>" target="_blank" title="Terms & Conditions.">
                                                            <small>Terms & Conditions.</small>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 mt-2 text-center procRegisterBtn">
                                                    <button type="submit" name="btnCheckout" class="btn btnBuyNow" title="Proceed To Register">
                                                        Proceed To Checkout
                                                    </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <!--<input type="hidden" name="report_id" value="12393">
                                                    <input type="hidden" name="rep_cat_id" value="6">
                                                    <input type="hidden" name="source_page" value="smp">-->
                                                </div>
    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0 paymentOption">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2 mt-5">
                        <p class="text-center">
                            <small>We accept all major credit cards</small>
                        </p>
                        <div>
                            <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/payment-img.png" alt="Payment Option" title="Payment Option" />
                        </div>
                        <div class="footerList text-center">
                            <ul class="list-unstyled list-inline mb-0 mt-5">
                                <li>
                                    <a href="<?php echo WEBSITE_URL."disclaimer.asp"; ?>" target="_bank" title="Disclaimer">Disclaimer</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."privacy-policy.asp"; ?>" target="_bank" title="Privacy Policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."terms-and-conditions.asp"; ?>" target="_bank" title="Terms and Conditions">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."return-policy.asp"; ?>" target="_bank" title="Return Policy">Return Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 py-2"><small>Copyright © Persistence Market Research</small></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo WEBSITE_URL; ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo WEBSITE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script>
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>"); $(".hdnCaptcha").val(Code); }
            $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });
            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });

        $(".requestform .form-control").on("focus", function() {
            if (this) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });

        $(".paymentType").click(function(){
            $(".hdnPaymentType").val(this.value); 
        });

        function validateForm(){

            var flag = true;

            var name = $(".fullname").val();
            var emailId = $(".emailId").val();
            var countryCode = $(".countryCode").val();
            var phoneNo = $(".phoneNo").val();
            var address = $(".company_address").val();
            var city = $(".name_city").val();
            var state = $(".name-state").val();
            var zipcode = $(".name-zipcode").val();
            var captcha = $(".txtCaptcha").val();
            var hdnCaptcha = $(".hdnCaptcha").val();

            $(".nameError").val("");
            $(".emailIdError").val("");
            $(".phoneNoError").val("");
            $(".captchaError").val("");
            $(".addressError").val("");
            $(".cityError").val("");
            $(".stateError").val("");
            $(".zipcodeError").val("");

            var nameformat = /^[a-zA-Z ]{2,30}$/;
            var emailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if(emailId == ""){
                flag = false;
                $(".emailIdError").html("* Please Enter Email ID");
            }else if(!emailformat.test(emailId)){
                flag = false;
                $(".emailIdError").html("* Enter Valid Email ID");
            }
    
            if(name == ""){
                flag = false;
                $(".nameError").html("* Please Enter Name");
            }else if(!nameformat.test(name)){
                flag = false;
                $(".nameError").html("* Enter Correct Name");
            }
    
            if(phoneNo == ""){
                flag = false;
                $(".phoneNoError").html("* Please Enter Phone No");
            }

            if(address == ""){
                flag = false;
                $(".addressError").html("* Please Enter Address");
            }

            if(city == ""){
                flag = false;
                $(".cityError").html("* Please Enter City");
            }

            if(state == ""){
                flag = false;
                $(".stateError").html("* Please Enter State");
            }

            if(zipcode == ""){
                flag = false;
                $(".zipcodeError").html("* Please Enter ZipCode");
            }

            if(countryCode == ""){
                flag = false;
                $(".phoneNoError").html("* Enter Valid Phone No");
            }
            
            if(hdnCaptcha != captcha){
                flag = false;
                $(".captchaError").html("* Please Enter Valid Captcha");
            }

            if($(".chkAgree").prop('checked') != true){
                flag = false;
                $(".chkError").html("* Please check our terms and Conditions");
            }
    
            return flag;

        }

        $(document).ready(function(){
          $(".countryCode").change(function(){
              var country_name = $("#country_name").val();
              if(country_name=="Unknown"){
                  var country_html = $(".countryCode option:selected").text();
                  country_html = (country_html.split(" ("))[0];
                  $("#country_name").val(country_html);
              }
          });
      });
    </script>
</body>
</html>
