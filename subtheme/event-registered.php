<div class="tab-pane fade" id="registered-items-tab-pane" role="tabpanel" aria-labelledby="submission-list-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Registered List</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRegisteredList">
                    New register <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table bg-white" id="registeredListTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="NAME" >Name</th>
                <th data-field="EMAIL" >Email</th>
                <th data-field="JOBTITLE" >Job Title</th>
                <th data-field="COMPANY" >Company</th>
                <th data-field="PHONENUMBER" >Number</th>
                <th data-field="NATIONALITY" >Nationality</th>
                <th data-field="STEPS" >Step</th>
                <th data-field="AMOUNT" >amount</th>
                <th data-field="STATUS" >Status</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>

<!-- POSTER SUBMISSION LIST -->

<div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRegisteredList" aria-labelledby="offcanvasRegisteredList">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRegisteredList">Submission Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
           
            <div class="mb-3">
                <label for="registrationtype">Register as*</label>
                <select id="visible-select" class="form-select object require select-optional" aria-label="Default select" name="registrationtype" data-target="#visible-upload" ></select>
            </div>

            <div class="mb-3">
                <label for="attachment">Attachment</label>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="button-attachment">Upload <i class="fa-solid fa-plus"></i></button>
                    <input type="text" class="form-control object" id="attachment" name="attachment" readonly>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="title">title*</label>
                <select class="form-select object require" aria-label="Default select" name="title"></select>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="firstname">First Name (EN)*</label>
                        <input type="text" class="form-control object require" id="firstname" name="firstname">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="lastname">Last Name (EN)*</label>
                        <input type="text" class="form-control object require" id="lastname" name="lastname">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="jobtitle">Job Title</label>
                        <input type="text" class="form-control object require" id="jobtitle" name="jobtitle">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="company">Company or Entity</label>
                        <input type="text" class="form-control object require" id="company" name="company">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control object require" id="email" name="email">
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-6">
                    <label>Please indicate your primary industry*</label>
                    <div id="radio-group" class="options-mode">
                        <div class="mb-3 options-mode-group">
                            <div id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="industry" value="Consultancy" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Consultancy</label>
                            </div>
                        </div>
                        <div class="mb-3 options-mode-group">
                            <div id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="industry" value="Healthcare" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Healthcare</label>
                            </div>
                        </div>
                        <div class="mb-3 options-mode-group">
                            <div id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="industry" value="Media & Press" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Media & Press</label>
                            </div>
                        </div>
                        <div class="mb-3 options-mode-group">
                            <div id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="industry" value="Military" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Military</label>
                            </div>
                        </div>
                        <div class="mb-3 options-mode-group">
                            <div class="mb-2" id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="industry" data-type="other" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Other</label>
                                <input type="text" class="form-control mt-2" placeholder="Please specify" disabled="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label>Please indicate your role in this conference *</label>
                    <div id="radio-group" class="options-mode">
                        <div class="mb-3 options-mode-group">
                            <div id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="role" value="Participant/Student" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Military</label>
                            </div>
                        </div>
                        <div class="mb-3 options-mode-group">
                            <div class="mb-2" id="radio">
                                <label class="switch">
                                    <input type="radio" class="object required" name="role" data-type="other" data-component="switch">
                                    <span class="slider round"></span>
                                </label>
                                <label>Other</label>
                                <input type="text" class="form-control mt-2" placeholder="Please specify" disabled="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="determination">If People of Determination (tell us more)</label>
                <textarea class="form-control object required" id="determination" name="determination" rows="3"></textarea>
            </div>	

            <div id="input-optional">
                <div class="pre-conference-page-form-header">
                    <h4 class="text-center mt-5 mb-2">Emergency Contact Details</h4>
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
           
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasRegisteredList" data-type="registeredsubmissionList">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div> 