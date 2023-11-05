<div class="tab-pane fade" id="sponsor-list-tab-pane" role="tabpanel" aria-labelledby="sponsor-list-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Sponsor List</h2>
            </div>
        </div>
    </div>
    <table class="table bg-white" id="sponsorListTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="NAME" >Name</th>
                <th data-field="COMPANY" >Comapany</th>
                <th data-field="JOBTITLE" >Job Title</th>
                <th data-field="EMAIL" >Email</th>
                <th data-field="NATIONALITY" >Nationality</th>
                <th data-field="PHONENUMBER" >Number</th>
                <th data-field="OPTION" >Option</th>
                <th data-field="STEPS" >Step</th>
                <th data-field="AMOUNT" >Amount</th>
                <th data-field="STATUS" >Status</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>

<!-- POSTER SUBMISSION LIST -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasSponsorList" aria-labelledby="offcanvasSponsorList">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSponsorList">Submission Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="postertitle">Poster Title*</label>
                <input type="text" class="form-control object required" id="postertitle" name="postertitle" placeholder="Add your poster title">
            </div>
            <div class="mb-3">
                <label for="posterprice">Poster Price*</label>
                <input type="text" class="form-control object required" id="posterprice" name="posterprice" placeholder="Add your poster price">
            </div>
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasSponsorList" data-type="sponsorlist">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div> 