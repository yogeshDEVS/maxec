<!-- TAB TYPE -->
<div class="tab-pane fade" id="registration-type-tab-pane" role="tabpanel" aria-labelledby="registration-type-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Registration Types</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRegisterType">
                    New Type <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="registrationTypeTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="TYPENAME" >Name</th>
                <th data-field="TYPEDESCRIPTION" >Description</th>
                <th data-field="DISCOUNTCODE" >Discount Code</th>
                <th data-field="AMOUNT" >Amount/Percentage</th>
                <th data-field="APPROVAL" >Approval</th>
                <th data-field="REGISTERED" >Registered</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>	


<!-- OFFCANVAS TYPE -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasRegisterType" aria-labelledby="offcanvasRegisterType" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRegisterType">Registration Type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="typename">Name*</label>
                <input type="text" class="form-control object required" id="typename" name="typename" placeholder="Enter type name">
            </div>
            <div class="mb-3">
                <label for="typedescription">Description*</label>
                <textarea class="form-control object required" id="typedescription" name="typedescription" rows="3" placeholder="Enter type description"></textarea>
            </div>	

            <div class="mb-3">
                <label for="approval">Required for approval</label>
                <select class="form-select object required" aria-label="Default select" name="approval">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="discountcode">Discount Code*</label>
                <select class="selectpicker object w-100 border-overlay" title="Choose one of the following..." name="discountcode" data-select="true" data-live-search="true"></select>
            </div>
    
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasRegisterType" data-type="registrationtype">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>