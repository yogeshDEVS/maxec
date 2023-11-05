<?php
/*
Template Name: Verification
*/
?>

<?php get_header();?>
    <div class="container pt-5 pb-5">
        <div id="registration-field" data-field="verification">
            <!-- CAROUSEL -->
            <div class="registration-carousel owl-theme">
                <div class="item">
                    <div class="item-header">
                    
                    </div>
                    <div class="item-body">

                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                    
                    </div>
                    <div id="approval-page-form" class="item-body hide">
                        <div class="approval-page-body">
                            <div class="row">
                                
                                <div class="col-7">
                                    <div class="approval-documents">

                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="approval-box">
                                        <div class="approval-details">
                                            <h2 class="module" data-name="module">{{MODULE}}</h2>             
                                            <h3 class="name" data-name="name">{{NAME}}</h3>             
                                            <h5 class="email" data-name="email">{{EMAIL}}</h5>             
                                            <h5 class="contact" data-name="contact">{{CONTACT}}</h5>             
                                        </div>
                                        <div class="item-purchase">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr class="table-dark">
                                                        <th class="text-left">Item</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    
                                                </tbody>   
                                            </table>
                                        </div>
                                        <div class="verifcation-step-action">
                                            <div id="submission" class="btn btn-outline-dark" data-action="next" data-request="0">Rejected</div>
                                            <div id="submission" class="btn btn-success" data-action="next" data-request="1">Approved</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>

<?php get_footer(); ?>
