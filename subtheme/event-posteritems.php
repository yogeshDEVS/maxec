<div class="tab-pane fade " id="poster-items-tab-pane" role="tabpanel" aria-labelledby="poster-items-tab" tabindex="0">
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
                <th data-field="CAPACITY" >Capacity</th>
                <th data-field="DATEFROM" >Date From</th>
                <th data-field="DATETO" >Date to</th>
                <th data-field="TIMEFROM" >Time From</th>
                <th data-field="TIMETO" >Time to</th>
                <th data-field="STATUS" >Status</th>
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
            <div class="mb-3">
                <label for="capacity">Capacity</label>
                <div class="input-counter">
                    <div class="plusminus" data-type="decrement"><i class="fas fa-minus"></i></div>
                    <input class="object" type="number" id="input" name="capacity" readonly >
                    <div class="plusminus" data-type="increment"><i class="fas fa-plus"></i></div>
                </div>
                <small>leave empty or zero(0) for unlimited capacity</small>

            </div>
            <div class="mb-3">
                <label for="date">Date*</label>
                <div class="input-group mb-3 date-range">
                    <input type="text" class="form-control object required" id="datefrom" name="datefrom" placeholder="Effective from">
                    <span class="input-group-text">To</span>
                    <input type="text" class="form-control object required" id="dateto" name="dateto" placeholder="Effective to">
                </div>
            </div>

            <div class="mb-3">
                <label for="time">Time*</label>
                <div class="input-group mb-3 easyui-panel" id="timepicker">
                    <input type="text" class="form-control object required" data-type="time" id="timefrom" name="timefrom" placeholder="Start time">
                    <span class="input-group-text">To</span>
                    <input type="text" class="form-control object required" data-type="time" id="timeto" name="timeto" placeholder="End time">
                </div>
           
            </div>

            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-select object required" aria-label="Default select" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasPoster" data-type="postersubmission">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div> 