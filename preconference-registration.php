<?php
/*
Template Name: Pre-Conference Registration
*/

$registration = isset($_GET['registration']) ? $_GET['registration'] : false;

$countryList     = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas ","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia (Plurinational State of)","Bonaire, Sint Eustatius and Saba","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory ","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Cayman Islands ","Central African Republic ","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands ","Colombia","Comoros ","Congo (the Democratic Republic of the)","Congo ","Cook Islands ","Costa Rica","Croatia","Cuba","Curaçao","Cyprus","Czechia","Côte d'Ivoire","Denmark","Djibouti","Dominica","Dominican Republic ","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia","Falkland Islands  [Malvinas]","Faroe Islands ","Fiji","Finland","France","French Guiana","French Polynesia","French Southern Territories ","Gabon","Gambia ","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Heard Island and McDonald Islands","Holy See ","Honduras","Hungary","Iceland","India","Indonesia","Iran (Islamic Republic of)","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Korea (the Democratic People's Republic of)","Korea (the Republic of)","Kuwait","Kyrgyzstan","Lao People's Democratic Republic ","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Madagascar","Malaysia","Maldives","Mali","Malta","Marshall Islands ","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia (Federated States of)","Moldova (the Republic of)","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands ","New Caledonia","New Zealand","Nicaragua","Niger ","Nigeria","Niue","Norfolk Island","Northern Mariana Islands ","Norway","Oman","Pakistan","Palau","Palestine, State of","Panama","Papua New Guinea","Paraguay","Peru","Philippines ","Pitcairn","Poland","Portugal","Puerto Rico","Qatar","Republic of North Macedonia","Romania","Russian Federation ","Rwanda","Réunion","Saint Barthélemy","Saint Helena, Ascension and Tristan da Cunha","Saint Kitts and Nevis","Saint Lucia","Saint Martin (French part)","Saint Pierre and Miquelon","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten (Dutch part)","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and the South Sandwich Islands","South Sudan","Spain","Sri Lanka","Sudan ","Suriname","Svalbard and Jan Mayen","Sweden","Switzerland","Syrian Arab Republic","Tajikistan","Tanzania, United Republic of","Thailand","Timor-Leste","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands ","Tuvalu","Uganda","Ukraine","United Arab Emirates ","United Kingdom of Great Britain and Northern Ireland ","United States Minor Outlying Islands ","United States of America ","Uruguay","Uzbekistan","Vanuatu","Venezuela (Bolivarian Republic of)","Viet Nam","Virgin Islands (British)","Virgin Islands (U.S.)","Wallis and Futuna","Western Sahara","Yemen","Zambia","Zimbabwe","Åland Islands");

?>

<?php get_header();?>

    <?php if( !$registration || $registration <> true ): ?>
        <?php the_content();?>
    <?php endif; ?>

    <?php if( $registration == true ): ?>
        <div class="registration-container">
            <div class="registration-wrapper">
                <div class="registration-header">

                </div>
                <div class="registration-body container">
                    <!-- STEP PROGRESS -->
                    <div class="steps-container">
                        <div id="active1" class="steps-container-wrapper">
                            <div class="step-box active">
                                <span class="count">1</span>
                                <span>Personal Information</span>
                            </div>
                            <div class="step-box">
                                <span class="count">2</span>
                                <span>Registration Ticket</span>
                            </div>
                            <div class="step-box">
                                <span class="count">3</span>
                                <span>Registration Summary</span>
                            </div>
                        </div>
                    </div>
                    <div id="registration-field" data-field="preconference">
                    <!-- CAROUSEL -->
                    <div class="registration-carousel owl-theme">
                        <div class="item">
                            <div class="item-header">

                            </div>
                            <div class="item-body">
                                <fieldset id="fieldset-personal">
                                    <div id="input-group">
                                        <div class="mb-3">
                                            <label for="registrationtype">Register as*</label>
                                            <select id="visible-select" class="form-select object require select-optional" aria-label="Default select" name="registrationtype" data-target="#visible-upload" ></select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title">title*</label>
                                            <select class="form-select object require" aria-label="Default select" name="title"></select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="firstname">First Name (EN)*</label>
                                            <input type="text" class="form-control object require" id="firstname" name="firstname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastname">Last Name (EN)*</label>
                                            <input type="text" class="form-control object require" id="lastname" name="lastname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jobtitle">Job Title</label>
                                            <input type="text" class="form-control object require" id="jobtitle" name="jobtitle">
                                        </div>
                                        <div class="mb-3">
                                            <label for="company">Company or Entity</label>
                                            <input type="text" class="form-control object require" id="company" name="company">
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
                                    </div>

                                    <div class="pre-conference-page-form-header">
                                        <h1 class="text-center mt-5 mb-5">Additional Information</h1>
                                    </div>

                                    <div id="radio-group" class="mb-3">                
                                        <label>Please indicate your primary industry *</label>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="consultancy" name="industry" value="Consultancy" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="consultancy">Consultancy</label>
                                        </div>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="healthcare" name="industry" value="Healthcare" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="healthcare">Healthcare</label>
                                        </div>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="mediapress" name="industry" value="Media & Press" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="mediapress">Media & Press</label>
                                        </div>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="military" name="industry" value="Military" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="military">Military</label>
                                        </div>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="other" name="industry" data-type="other" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="other">Other</label>
                                            <input type="text" class="form-control" placeholder="Please specify" disabled="true">
                                        </div>
                                    </div>

                                    <div id="radio-group" class="mb-3">                
                                        <label>Please indicate your role in this conference *</label>
                                    
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="role" name="role" value="Participant/Student" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="role">Participant/Student</label>
                                        </div>
                                        <div id="radio" class="mb-3">
                                            <label class="switch">
                                                <input type="radio" class="object require" id="other" name="role" data-type="other" data-component="switch">
                                                <span class="slider round"></span>
                                            </label>
                                            <label for="other">Other</label>
                                            <input type="text" class="form-control" placeholder="Please specify" disabled="true">
                                        </div>
                                    </div>

                                    <div id="input-group">
                                        <div class="mb-3">
                                            <label for="determination">If People of Determination (tell us more)</label>
                                            <textarea class="form-control object" id="determination" name="determination"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div id="input-group">
                                        <div id="visible-upload" class="mb-3 visible-option">
                                            <label for="validid">Please attach your student ID*</label>
                                            <div class="upload-contatiner" id="upload-contatiner">
                                                <label class="upload-attachment" id="upload-attachment">
                                                    <div class="mb-1">
                                                        <div class="draganddropaction">
                                                            <i class="fa-solid fa-upload"></i>
                                                            Drag and drop file
                                                        </div>
                                                        <div class="uploaddiv">OR</div>
                                                        <div class="browsefileaction">Browse File</div>
                                                    </div>
                                                    <input type="file" class="object require" id="validid" name="validid" data-optional="true" data-target="#visible-select"/>
                                                </label>
                                                <p> 
                                                    Maximun file size: 25 MB (If the file exceeded the limit size).
                                                </p>
                                                <div class="upload-preview">
                                                    <div class="upload-preview-container">
                                                        <div class="upload-preview-filename"></div>
                                                        <div id="deleteupload"class="upload-preview-action">
                                                            <i class="fa-solid fa-trash"></i> <span>Delete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="input-optional">
                                        <div class="pre-conference-page-form-header">
                                            <h1 class="text-center mt-5 mb-5">Emergency Contact Details</h1>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="ename">Name</label>
                                                    <input type="text" class="form-control object optional" id="ename" name="ename" >
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="ephonenumber">Phone Number</label>
                                                    <input type="text" class="form-control object optional" id="ephonenumber" name="ephonenumber">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-header">

                            </div>
                            <div class="item-body">
                                <fieldset id="fieldset-tickets">
                                    <div class="pre-conference-page-form-title">Pre-Conference</div>
                                    <div id="pre-conference-options" class="pre-conference-options">
                                        <!-- WORKSHOP -->
                                    </div>
                                    <div class="option-disclaimer text-center mb-5">Please note that selecting the same day for any activity or appointment is not permissible.</div>
                                    <div class="pre-conference-page-form-title">Main Conference</div>
                                    <div id="pre-conference-options" class="main-conference-options">
                                                    
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-header">

                            </div>
                            <div id="summary-page-form" class="item-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="name" data-name="name">{{NAME}}</h2>             
                                        <h5 class="name" data-name="email">{{EMAIL}}</h5>             
                                    </div>
                                    <div class="col-6">
                                        <div class="detail-box m-2">
                                            <div class="caption">Title</div>
                                            <div data-name="title">{{TITLE}}</div>
                                        </div>
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
                                            <div data-name="phonenumber" >{{MOBILE}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="name">Additional Information</h2>                       
                                    </div>
                                    <div class="col-12">
                                        <div class="detail-box m-2">
                                            <div class="caption">Primary Industry</div>
                                            <div data-name="industry">{{PRIMARYINDUSTRY}}</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="detail-box m-2">
                                            <div class="caption">Role in this Conference</div>
                                            <div data-name="role">{{ROLE}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="name">Registration Details</h2>                       
                                    </div>
                                    <div class="col-12">
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
                                    </div>

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
                                                      
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- ACTION -->
                    <div class="registration-step-action">
                        <div id="submission" class="registration-submission-button cancel" data-action="cancel">CANCEL</div>
                        <div id="submission" class="registration-submission-button previous" data-action="previous" data-step="1">PREVIOUS</div>
                        <div id="submission" class="registration-submission-button next" data-action="next" data-step="1">NEXT</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

            
    <?php endif; ?>

<?php get_footer(); ?>


