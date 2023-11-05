<!-- TAB TICKET -->
<div class="tab-pane fade " id="empty-items-tab-pane" role="tabpanel" aria-labelledby="empty-items-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Empty</h2>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEmptyItems">
                    New empty <i class="fa-solid fa-plus"></i>
                </button>
            </div>

        </div>
    </div>
    <table class="table bg-white" id="emptyItemTable"
        data-pagination="true"
        data-page-size="25"
        data-search="true"
    >
        <thead  class="table-dark">
            <tr>
                <th data-field="NAME" >Name</th>
                <th data-field="ACTION" class="action" ></th>
            </tr>
        </thead>
    </table>
</div>	

<!-- OFFCANVAS TICKET -->
<div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasEmptyItems" aria-labelledby="offcanvasEmptyItems" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasEmptyItems">Admission Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="emptyname">Name*</label>
                <input type="text" class="form-control object required" id="emptyname" name="emptyname" placeholder="Enter admission name">
            </div>
           

          
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasEmptyItems" data-type="emptyItems">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>