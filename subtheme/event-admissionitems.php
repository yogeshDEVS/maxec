<!-- TAB TICKET -->
<div class="tab-pane fade " id="admission-items-tab-pane" role="tabpanel" aria-labelledby="admission-items-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Admission Items</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdmissionItems">
                    New Item <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="admissionItemsTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="ADMISSIONNAME" >Name</th>
                <th data-field="ADMISSIONDESCRIPTION" >Description</th>
                <th data-field="STATUS" >Status</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>	

<!-- OFFCANVAS TICKET -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasAdmissionItems" aria-labelledby="offcanvasAdmissionItems" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAdmissionItems">Admission Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="admissionname">Name*</label>
                <input type="text" class="form-control object required" id="admissionname" name="admissionname" placeholder="Enter admission name">
            </div>
            <div class="mb-3">
                <label for="admissiondescription">Description*</label>
                <textarea class="form-control object required" id="admissiondescription" name="admissiondescription" rows="3" placeholder="Enter admission description"></textarea>
            </div>	
            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-select object required" aria-label="Default select" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="admissiondescription">Tickets*</label>
                <table class="table bg-white" id="admissionTicketTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="SELECTED" >Select</th>
                            <th data-field="TICKETNAME" >Name</th>
                            <th data-field="DATEFROM" >Date From</th>
                            <th data-field="DATETO" >Date To</th>
                            <th data-field="TIMEFROM" >Time From</th>
                            <th data-field="TIMETO" >Time To</th>
                            <th data-field="DESIGNATION" >Designation</th>
                        </tr>
                    </thead>
                </table>
            </div>	

          
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasAdmissionItems" data-type="admissionitems">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>