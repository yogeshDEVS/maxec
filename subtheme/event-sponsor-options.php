<!-- TAB TICKET -->
<div class="tab-pane fade " id="sponsor-options-tab-pane" role="tabpanel" aria-labelledby="sponsor-options-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Sponsor Options</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSponsorOptions">
                    New option <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="sponsorOptionsTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="SPONSOROPTION" >Name</th>
                <th data-field="SPONSORDESCRIPTION" >Description</th>
                <th data-field="SPONSOROPTIONPRICE" >Amount</th>
                <th data-field="SPONSORTYPE" >Type</th>
                <th data-field="ACTION" class="action"></th>
            </tr>
        </thead>
    </table>
</div>	

<!-- OFFCANVAS TICKET -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasSponsorOptions" aria-labelledby="offcanvasSponsorOptions" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSponsorOptions">Sponsor Option</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="sponsoroption">Name*</label>
                <input type="text" class="form-control object required" id="sponsoroption" name="sponsoroption" placeholder="Enter sponsor option">
            </div>
            <div class="mb-3">
                <label for="sponsordescription">Description*</label>
                <div class="summernote object" type="summernote" id="sponsordescription" name="sponsordescription"></div>
            </div>	
            <div class="mb-3">
                <label for="sponsortype">Sponsor Type*</label>
                <select class="selectpicker object w-100 border-overlay" title="Choose one of the following..." name="sponsortype" data-select="true" data-live-search="true" multiple></select>
            </div>
            <div class="mb-3">
                <label for="sponsoroptionprice">Amount*</label>
                <input type="text" class="form-control object required" id="sponsoroptionprice" name="sponsoroptionprice" placeholder="Enter option price">
            </div>

            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasSponsorOptions" data-type="sponsoroption">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>