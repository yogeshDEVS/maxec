<!-- TAB TICKET -->
<div class="tab-pane fade " id="email-mailing-tab-pane" role="tabpanel" aria-labelledby="email-mailing-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>E-Mailing</h2>
            </div>
        </div>
    </div>
    <div class="tab-pane-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="automation-tab" data-bs-toggle="tab" data-bs-target="#automation-tab-pane" type="button" role="tab" aria-controls="automation-tab-pane" aria-selected="true">Automation</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="manual-tab" data-bs-toggle="tab" data-bs-target="#manual-tab-pane" type="button" role="tab" aria-controls="manual-tab-pane" aria-selected="false">Manual</button>
            </li>   
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="autorespond-tab" data-bs-toggle="tab" data-bs-target="#autorespond-tab-pane" type="button" role="tab" aria-controls="autorespond-tab-pane" aria-selected="false">Auto Respond</button>
            </li>    
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="automation-tab-pane" role="tabpanel" aria-labelledby="automation-tab" tabindex="0">
                <div class="d-flex justify-content-sm-end p-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmailAutomation">
                        New Automation <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <table class="table bg-white" id="emailAutomationTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="AUTOMATIONTITLE" >Automation Name</th>
                            <th data-field="TEMPLATE" >Template</th>
                            <th data-field="MODULES" >Modules</th>
                            <th data-field="SELECTION" >Selection</th>
                            <th data-field="SCHEDULETYPE" >Schedule Type</th>
                            <th data-field="SCHEDULE" >Schedule</th>
                            <th data-field="TIMEFROM" >Time</th>
                            <th data-field="STATUS" >Status</th>
                            <th data-field="AUTOMATION" >Automation</th>
                            <th data-field="ACTION" class="action" ></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="manual-tab-pane" role="tabpanel" aria-labelledby="manual-tab" tabindex="0">
                <div class="d-flex justify-content-sm-end p-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmailManual">
                        Send Manual Email <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <table class="table bg-white" id="emailManualTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="TAXNAME" >Name</th>
                            <th data-field="TAXCODE" >Code</th>
                            <th data-field="TAXTYPE" >Type</th>
                            <th data-field="TAXAMT" >Amount/Percentage</th>
                            <th data-field="STATUS" >Status</th>
                            <th data-field="ACTION" class="action" ></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="autorespond-tab-pane" role="tabpanel" aria-labelledby="autorespond-tab" tabindex="0">
                <div class="d-flex justify-content-sm-end p-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmailAutorespond">
                        New Auto Respond <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <table class="table bg-white" id="emaulAutorespondTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="AUTORESPONDTITLE" >Auto Respond Name</th>
                            <th data-field="TEMPLATE" >Template</th>
                            <th data-field="MODULES" >Modules</th>
                            <th data-field="RECEIVEDBY" >Received by</th>
                            <th data-field="STAGE" >Stage</th>
                            <th data-field="STATUS" >Status</th>
                            <th data-field="ACTION" class="action" ></th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
   
</div>	

<!-- AUTOMATION -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasEmailAutomation" aria-labelledby="offcanvasEmailAutomation" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasEmailAutomation">Automation Mailing</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>

            <div class="mb-3">
                <label for="automationtitle">Automation Title*</label>
                <input type="text" class="form-control object required" id="automationtitle" name="automationtitle" placeholder="Add your automation title">
            </div>

            <div class="mb-3">
                <label for="modules">Modules*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="modules" data-select="true" data-live-search="true" data-type="modules">
                    <option value="conference">Pre / Main Conference</option>
                    <option value="poster">Poster Submission</option>
                    <option value="sponsor">Sponsor</option>
                </select>
            </div>

        
            <div class="mb-3">
                <label for="selection">Selection*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="selection" data-select="true" data-live-search="true" data-type="selection">
                    <option data-value="all" value="all">All</option>
                    <option data-value="steps" value="incomplete">Incomplete</option>
                    <option data-value="steps" value="completed">Completed</option>
                    <option data-value="status" value="pending">Pending</option>
                    <option data-value="status" value="approved">Approved</option>
                    <option data-value="status" value="rejected">Rejected</option>
                </select>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="schedule">Schedule*</label>
                        <div id="schedule-mode" class="schedule-mode">
                            <div class="row mb-3 schedule-mode-group">
                                <div class="col-auto">
                                    <div id="radio">
                                        <label class="switch">
                                            <input type="radio" name="bycategory" data-type="select">
                                            <span class="slider round"></span>
                                        </label>
                                        <label>By Day</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <select class="selectpicker w-100 border-overlay" title="Choose one of the following..." name="byday" data-select="true" data-live-search="true"  disabled="true">
                                            <option value="sunday">Sunday</option>
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                            <option value="saturday">Saturday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 schedule-mode-group">
                                <div class="col-auto">
                                    <div id="radio">
                                        <label class="switch">
                                            <input type="radio" name="bycategory" data-type="select">
                                            <span class="slider round"></span>
                                        </label>
                                        <label>By Month</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <select class="selectpicker w-100 border-overlay" title="Choose one of the following..." name="bymonth" data-select="true" data-live-search="true"  disabled="true">
                                            <option value="beginning">Beginning of the month</option>
                                            <option value="end">End of the month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 schedule-mode-group">
                                <div class="col-auto">
                                    <div id="radio">
                                        <label class="switch">
                                            <input type="radio" name="bycategory"  data-type="input">
                                            <span class="slider round"></span>
                                        </label>
                                        <label>By Date</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group date-calendar">
                                        <input type="text" class="form-control input" id="bydate" name="bydate" placeholder="Select date" disabled="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="time">Time*</label>
                        <div class="input-group mb-3 easyui-panel" id="timepicker">
                            <input type="text" class="form-control object required" data-type="time" id="timefrom" name="timefrom" placeholder="Start time">
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="mb-3">
                <label for="templates">Templates*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="templates" data-select="true" data-live-search="true"></select>
            </div>

            <div class="mb-5">
                <label for="status">Status</label>
                <select class="form-select object required" aria-label="Default select" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="mb-3">
                <table class="table bg-white"
                    data-pagination="true"
                    data-page-size="25"
                    data-toolbar="#toolbar"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="NAME" >Name</th>
                            <th data-field="EMAIL" >Email</th>
                            <th data-field="STEPS" >Step</th>
                            <th data-field="STATUS" >Status</th>
                            
                        </tr>
                    </thead>
                </table>
            </div>	

            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasEmailAutomation" data-type="emailautomation">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>


<!-- AUTO RESPOND -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasEmailAutorespond" aria-labelledby="offcanvasEmailAutorespond" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasEmailAutorespond">Automation Respond</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>

            <div class="mb-3">
                <label for="autorespondtitle">Auto Respond Title*</label>
                <input type="text" class="form-control object required" id="autorespondtitle" name="autorespondtitle" placeholder="Add your auto respond title">
            </div>

            <div class="mb-3">
                <label for="modules">Modules*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="modules" data-select="true" data-live-search="true" data-type="modules">
                    <option value="conference">Pre / Main Conference</option>
                    <option value="poster">Poster Submission</option>
                    <option value="sponsor">Sponsor</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="stage">Stage*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="stage" data-select="true" data-live-search="true" data-type="selection">
                    <option data-value="status" value="pending">Pending</option>
                    <option data-value="status" value="approved">Approved</option>
                    <option data-value="status" value="rejected">Rejected</option>
                </select>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="receivedby">Received by*</label>
                        <div id="radio-group" class="options-mode">
                            <div class="mb-3 options-mode-group">
                                <div id="radio">
                                    <label class="switch">
                                        <input type="radio" class="object required" name="receivedby" value="attendee" data-component="switch">
                                        <span class="slider round"></span>
                                    </label>
                                    <label>Attendee</label>
                                </div>
                            </div>
                            <div class="mb-3 options-mode-group">
                                <div class="mb-2" id="radio">
                                    <label class="switch">
                                        <input type="radio" class="object required" name="receivedby" data-type="other" data-component="switch">
                                        <span class="slider round"></span>
                                    </label>
                                    <label>By Email</label>
                                    <input type="text" class="form-control mt-2" placeholder="Please specify" disabled="true">
                                    <small>Send multiple emails, and separate them using commas (,).</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="templates">Templates*</label>
                <select class="selectpicker object required w-100 border-overlay" title="Choose one of the following..." name="templates" data-select="true" data-live-search="true"></select>
            </div>

            <div class="mb-5">
                <label for="status">Status</label>
                <select class="form-select object required" aria-label="Default select" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>



            <div class="mb-3">
                <table class="table bg-white"
                    data-pagination="true"
                    data-page-size="25"
                    data-toolbar="#toolbar"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="NAME" >Name</th>
                            <th data-field="EMAIL" >Email</th>
                            <th data-field="STEPS" >Step</th>
                            <th data-field="STATUS" >Status</th>   
                        </tr>
                    </thead>
                </table>
            </div>	

            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasEmailAutorespond" data-type="emailautorespond">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>
