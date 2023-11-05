<div class="tab-pane fade " id="poster-types-tab-pane" role="tabpanel" aria-labelledby="poster-types-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Poster Types</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPosterType">
                    New Type <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="posterTypeTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="POSTERTYPE" >Poster</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>
	
<!-- POSTER TYPES -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasPosterType" aria-labelledby="offcanvasPosterType">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasPosterType">Poster Type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="postertype">Poster Type*</label>
                <input type="text" class="form-control object required" id="postertype" name="postertype" placeholder="Add your poster type">
            </div>
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasPosterType" data-type="postertype">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>