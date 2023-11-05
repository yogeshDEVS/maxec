<?php
/*
Template Name: Sponsor Registration Copy
*/

$registration = isset($_GET['registration']) ? $_GET['registration'] : false;

$countryList     = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas ","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia (Plurinational State of)","Bonaire, Sint Eustatius and Saba","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory ","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Cayman Islands ","Central African Republic ","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands ","Colombia","Comoros ","Congo (the Democratic Republic of the)","Congo ","Cook Islands ","Costa Rica","Croatia","Cuba","Curaçao","Cyprus","Czechia","Côte d'Ivoire","Denmark","Djibouti","Dominica","Dominican Republic ","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia","Falkland Islands  [Malvinas]","Faroe Islands ","Fiji","Finland","France","French Guiana","French Polynesia","French Southern Territories ","Gabon","Gambia ","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Heard Island and McDonald Islands","Holy See ","Honduras","Hungary","Iceland","India","Indonesia","Iran (Islamic Republic of)","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Korea (the Democratic People's Republic of)","Korea (the Republic of)","Kuwait","Kyrgyzstan","Lao People's Democratic Republic ","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Madagascar","Malaysia","Maldives","Mali","Malta","Marshall Islands ","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia (Federated States of)","Moldova (the Republic of)","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands ","New Caledonia","New Zealand","Nicaragua","Niger ","Nigeria","Niue","Norfolk Island","Northern Mariana Islands ","Norway","Oman","Pakistan","Palau","Palestine, State of","Panama","Papua New Guinea","Paraguay","Peru","Philippines ","Pitcairn","Poland","Portugal","Puerto Rico","Qatar","Republic of North Macedonia","Romania","Russian Federation ","Rwanda","Réunion","Saint Barthélemy","Saint Helena, Ascension and Tristan da Cunha","Saint Kitts and Nevis","Saint Lucia","Saint Martin (French part)","Saint Pierre and Miquelon","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten (Dutch part)","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and the South Sandwich Islands","South Sudan","Spain","Sri Lanka","Sudan ","Suriname","Svalbard and Jan Mayen","Sweden","Switzerland","Syrian Arab Republic","Tajikistan","Tanzania, United Republic of","Thailand","Timor-Leste","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands ","Tuvalu","Uganda","Ukraine","United Arab Emirates ","United Kingdom of Great Britain and Northern Ireland ","United States Minor Outlying Islands ","United States of America ","Uruguay","Uzbekistan","Vanuatu","Venezuela (Bolivarian Republic of)","Viet Nam","Virgin Islands (British)","Virgin Islands (U.S.)","Wallis and Futuna","Western Sahara","Yemen","Zambia","Zimbabwe","Åland Islands");

?>

<?php get_header();?>


    <div id="sponsor-page" class="sponsor-page">
        <div class="container">
            <!-- STEP PROGRESS -->
            <div class="steps-container">
                <div class="steps-container-wrapper">
                    <div class="step-box active">
                        <span class="count">1</span>
                        <span>Personal Information</span>
                    </div>
                    <div class="step-box">
                        <span class="count">2</span>
                        <span>Registration Summary</span>
                    </div>
                </div>
            </div>

            <div class="sponsor-submision-carousel">
                <div class="item pre-conference-page-form">
                    <div class="pre-conference-page-form-header">
                        <div class="poster-submission-step-header-title"><?php echo get_field('pre_conference_registration_detail_title'); ?></div>
                    </div>
                    <fieldset id="sponsosubmissionform">
                        <div id="input-container">
                           
                            <div class="mb-3">
                                <label for="company">Company or Entity*</label>
                                <input type="text" class="form-control object require" id="company" name="company">
                            </div>
                            <div class="mb-3">
                                <label for="firstname">Focal Point First Name*</label>
                                <input type="text" class="form-control object require" id="firstname" name="firstname">
                            </div>
                            <div class="mb-3">
                                <label for="lastname">Focal Point Last Name*</label>
                                <input type="text" class="form-control object require" id="lastname" name="lastname">
                            </div>
                            <div class="mb-3">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control object require" id="jobtitle" name="jobtitle">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control object require" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="nationality">Nationality*</label>
                                <select class="form-select object require" aria-label="Default select" name="nationality">
                                    <option value="">Please select</option>
                                    <?php foreach($countryList as $value){ ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phonenumber">Phone Number*</label>
                                <input type="text" class="form-control object require" id="phonenumber" name="phonenumber">
                            </div>

                            <div class="mb-3">
                                <label for="registrationtype">Sponsorship Type*</label>
                                <select class="form-select object require" aria-label="Default select" name="registrationtype"></select>
                            </div>
                        </div>


                            
                        <div class="sponsor-option-container">
                            <div class="pre-conference-page-form-header">
                                <h1 class="text-center mt-5 mb-5">Sponsorship Options</h1>
                            </div>

                            <div class="sponsor-option-slider">
                            </div>
                            
                             <div class="sponsor-disclaimer text-center m-3">
                                Funding or sponsoring the event is entirely optional and not mandatory. Your support in any form is greatly appreciated.
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="item pre-conference-page-form">
                    <div id="sponsor-summary-page-form">
                        <div class="pre-conference-page-form-header">
                            <div class="poster-submission-step-header-title"><?php echo get_field('pre_conference_registration_summary_title'); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="name" data-name="name">{{NAME}}</h2>             
                                <h5 class="email" data-name="email">{{EMAIL}}</h5>             
                            </div>
                            <div class="col-6">
                                <div class="detail-box m-2">
                                    <div class="caption">Job Title</div>
                                    <div data-name="jobtitle">{{JOBTITLE}}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-box m-2">
                                    <div class="caption">Company or Entity</div>
                                    <div data-name="company">{{COMPANY}}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-box m-2">
                                    <div class="caption">Nationality</div>
                                    <div data-name="nationality">{{NATIONALITY}}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-box m-2">
                                    <div class="caption">Mobile</div>
                                    <div data-name="phonenumber">{{MOBILE}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h2 class="name">Registration Details</h2>                       
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="table-dark">
                                        <th class="text-left">Item</th>
                                        <th class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    
                                </tbody>   
                                <tfoot class="border-top">

                                </tfoot>   
                            </table>

                            <div class="col-12">
                                <div class="account-payment-method-container">
                                    
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="pills-method1-tab" data-toggle="pill" href="#pills-method1" role="tab" aria-controls="pills-method1" aria-selected="true">
                                                <i class="fa-brands fa-cc-visa"></i>
                                                <i class="fa-brands fa-cc-mastercard"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-method1" role="tabpanel" aria-labelledby="pills-method1-tab">
                                            <fieldset id="submissioncardelementform">
                                                <div class="mb-3">
                                                    <label for="ccnumber">Credit Card Number*</label>
                                                    <div class="custom-card" id="card-number-element"></div>
                                                    <div class="custom-card-error" id="card-number-element-error"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="ccnumber">Expires*</label>
                                                            <div class="custom-card" id="card-expiry-element"></div>
                                                            <div class="custom-card-error" id="card-expiry-element-error"></div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="ccnumber">CVV*</label>
                                                            <div class="custom-card" id="card-cvc-element"></div>
                                                            <div class="custom-card-error" id="card-cvc-element-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nameoncard">Name on Card</label>
                                                    <input type="text" class="form-control object require" id="nameoncard" name="nameoncard">
                                                    <div class="custom-card-error" id="nameoncard-error"></div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
            </div>
            <div class="poster-submission-step-action">
                <div id="sponsor-submission" class="poster-submission-button cancel" data-action="cancel">CANCEL</div>
                <div id="sponsor-submission" class="poster-submission-button previous" data-action="previous">PREVIOUS</div>
                <div id="sponsor-submission" class="poster-submission-button next" data-action="next">NEXT</div>
            </div>

        </div>
    </div>


<?php get_footer(); ?>


