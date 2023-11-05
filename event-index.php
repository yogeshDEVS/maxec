<?php
/*
Template Name: Event Options
*/
get_template_part('header-dashboard');
?>
<div class="event-hub-page" id="event-hub-page">
    <div class="event-hub-page-body">
        <div class="row g-0">
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar position-sticky" id="sidebar">
                <ul class="nav flex-column sidebar-menu" id="eventTab">
                    <li class="nav-item">
                        <button id="link-collapse" class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 link-collapse active" data-target="#dashboard-tab-pane">
                            <i class="fa fa-bar-chart d-icon" aria-hidden="true"></i>Dashboard
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0" data-bs-toggle="collapse" data-bs-target="#registraion-collapse" aria-expanded="true">
                            <i class="fa fa-pencil-square-o d-icon" aria-hidden="true"></i> Registration
                        </button>
                        <div class="collapse collapse-container" id="registraion-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#registered-items-tab-pane">
                                        Registered
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#admission-items-tab-pane">
                                        Admission Items
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#registration-ticket-tab-pane">
                                        Tickets
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#registration-type-tab-pane">
                                        Registration Types
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#pricing-tab-pane">
                                        Pricing
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#poster-collapse" aria-expanded="true">
                            <i class="fa fa-bullhorn d-icon" aria-hidden="true"></i>Poster
                        </button>
                        <div class="collapse collapse-container" id="poster-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-submission-tab-pane">
                                        Poster Submission
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-items-tab-pane">
                                        Poster Items
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-types-tab-pane">
                                        Poster Types
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#sponsor-collapse" aria-expanded="true">
                            <i class="fa fa-user-plus d-icon" aria-hidden="true"></i>Sponsor
                        </button>
                        <div class="collapse collapse-container" id="sponsor-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#sponsor-list-tab-pane">
                                        Sponsor List
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#sponsor-options-tab-pane">
                                        Sponsor Options
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#sponsor-types-tab-pane">
                                        Sponsor Types
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#emails-collapse" aria-expanded="true">
                            <i class="fa fa-envelope d-icon" aria-hidden="true"></i> Email
                        </button>
                        <div class="collapse collapse-container" id="emails-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#emails-invitation-tab-pane">
                                        Invitation
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#email-mailing-tab-pane">
                                        E-Mailing
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#email-template-tab-pane">
                                        Template
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#reports-collapse" aria-expanded="true">
                            <i class="fa fa-file-text d-icon" aria-hidden="true"></i> Reports
                        </button>
                        <div class="collapse collapse-container " id="reports-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#reports-tab-pane">
                                        Reports
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#settings-collapse" aria-expanded="true">
                            <i class="fa fa-cog d-icon" aria-hidden="true"></i> Settings
                        </button>
                        <div class="collapse collapse-container " id="settings-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li  role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#options-tab-pane">
                                        Options
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <div class="col-10">
                <div class="tab-content p-3" id="eventTabContent">
                    <!-- DASHBOARD -->
                    <?php get_template_part('template/subtheme/event-dashboard'); ?>
                    <!-- REGISTERED -->
                    <?php get_template_part('template/subtheme/event-registered'); ?>
                    <!-- ADMISSION ITEMS -->
                    <?php get_template_part('template/subtheme/event-admissionitems'); ?>
                    <!-- REGISTRATION TICKET -->
                    <?php get_template_part('template/subtheme/event-registrationticket'); ?>
                    <!-- REGISTRATION TYPE -->
                    <?php get_template_part('template/subtheme/event-registrationtype'); ?>
                    <!-- PRICING TAB -->
                    <?php get_template_part('template/subtheme/event-pricing'); ?>
                    <!-- POSTER SUBMISSION -->
                    <?php get_template_part('template/subtheme/event-postersubmission'); ?>
                    <!-- POSTER ITEMS -->
                    <?php get_template_part('template/subtheme/event-posteritems'); ?>
                    <!-- POSTER TYPES -->
                    <?php get_template_part('template/subtheme/event-postertype'); ?>
                    <!-- SPONSOR LIST -->
                    <?php get_template_part('template/subtheme/event-sponsor-list'); ?>
                    <!-- SPONSOR TYPES -->
                    <?php get_template_part('template/subtheme/event-sponsor-type'); ?>
                    <!-- SPONSOR OPTIONS -->
                    <?php get_template_part('template/subtheme/event-sponsor-options'); ?>
                    <!-- OPTIONS -->
                    <?php get_template_part('template/subtheme/event-options'); ?>
                    <!-- EMAIL MAILING -->
                    <?php get_template_part('template/subtheme/event-email-mailing'); ?>
                    <!-- EMAIL TEMPLATE -->
                    <?php get_template_part('template/subtheme/event-email-template'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('footer-dashboard'); ?>