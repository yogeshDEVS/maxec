<!-- TAB TICKET -->
<div class="tab-pane fade " id="email-template-tab-pane" role="tabpanel" aria-labelledby="email-template-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Template</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmailTemplate">
                    New template <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="emailTemplateTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="TEMPLATENAME" >Name</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>	

<!-- OFFCANVAS TICKET -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasEmailTemplate" aria-labelledby="offcanvasEmailTemplate" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasEmailTemplate">Email Template </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="templatename">Templatename name*</label>
                <input type="text" class="form-control object required" id="templatename" name="templatename" placeholder="Enter template name">
            </div>

            
           
            <div class="mb-3">
                <label for="templatesubject">Subject name*</label>
                <input type="text" class="form-control object required" id="templatesubject" name="templatesubject" placeholder="Enter subject">
            </div>

            <div class="mb-3">
                <div class="summernote object" type="summernote" id="templatebody" name="templatebody" data-option="upload"></div>
            </div>	
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasEmailTemplate" data-type="emailtemplate">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>

            <div class="mb-3">
                <label for="shortcode">Shortcode</label>
                <div class="shortcode">
                    <label>General</label>
                    <div class="shortcode-item"><code>{{NAME}}</code> - Recipient Name</div>
                    <div class="shortcode-item"><code>{{CONFIRMATIONNUMBER}}</code> - Confirmation Number</div>
                    <div class="shortcode-item"><code>{{PURCHASEITEM}}</code> - Purchase Item</div>
                    <div class="shortcode-item"><code>{{PURCHASETOTAL}}</code> - Purchase Total</div>
                    <label>Other</label>
                    <div class="shortcode-item"><code>{{APPROVALLINK}}</code> - Approval Link</div>
                    <div class="shortcode-item"><code>{{QRCODE}}</code> - QR Code</div>
                    <div class="shortcode-item"><code>{{BARCODE}}</code> - Barcode</div>
                    
                </div>
            </div>
        </fieldset>
    </div>
</div>

