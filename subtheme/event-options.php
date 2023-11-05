<div class="tab-pane fade" id="options-tab-pane" role="tabpanel" aria-labelledby="options-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Options</h2>
            </div>
        </div>
    </div>
    <div class="tab-pane-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="titles-tab" data-bs-toggle="tab" data-bs-target="#titles-tab-pane" type="button" role="tab" aria-controls="titles-tab-pane" aria-selected="true">Titles</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment-tab-pane" type="button" role="tab" aria-controls="payment-tab-pane" aria-selected="false">Payment</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="titles-tab-pane" role="tabpanel" aria-labelledby="titles-tab" tabindex="0">
                <div class="d-flex justify-content-sm-end p-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvastitle">
                        New title <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <table class="table bg-white" id="titleTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="TITLE" >Title</th>
                            <th data-field="ABBREVIATION" >Abbreviation</th>
                            <th data-field="ACTION" class="action" ></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="payment-tab" tabindex="0">
                PAYMENT
            </div>
        </div>
    </div>	
</div>	

<!-- DISCOUNT -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvastitle" aria-labelledby="offcanvastitle" data-autoclose="false">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvastitle">Discount</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="title">Title*</label>
                <input type="text" class="form-control object" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="abbreviation">Abbreviation*</label>
                <input type="text" class="form-control object required" id="abbreviation" name="abbreviation" placeholder="Enter abbreviation">
            </div>
            
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvastitle" data-type="titles">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>