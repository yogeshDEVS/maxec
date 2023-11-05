<div class="tab-pane fade " id="poster-list-tab-pane" role="tabpanel" aria-labelledby="poster-list-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Poster Items</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPoster">
                    New Item <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table bg-white" id="posterListTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="POSTERTITLE" >Poster</th>
                <th data-field="POSTERPRICE" >Poster Price</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>

<!-- POSTER SUBMISSION LIST -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasPoster" aria-labelledby="offcanvasPoster">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasPoster">Poster Items</h5>
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
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasPoster" data-type="postersubmission">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div> 