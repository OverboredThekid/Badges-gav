    <div class="image-container set-full-height" style="background-image: url('assets/img/wizard.jpg')">
        <!--   Creative Tim Branding   -->
        <a href="http://creative-tim.com">
            <div class="logo-container">
                <div class="logo">
                    <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    {{ config('app.name') }}
                </div>
            </div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="reds" id="wizardProfile">
                            <form action="Card-maker/Test" method="POST">
                                @csrf
                                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                        <b>BUILD</b> YOUR Company Card <br>
                                        <small>This information will help us create your new card!</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                        <li><a href="#account" data-toggle="tab">Account</a></li>
                                        <li><a href="#address" data-toggle="tab">Address</a></li>
                                    </ul>

                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                        <input type="file" id="wizard-picture">
                                                    </div>
                                                    <h6>Choose Picture</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name <small>(required)</small></label>
                                                    <input name="name" type="text" class="form-control" placeholder="Andrew Smith...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number<small>(required)</small></label>
                                                    <input name="phone" type="text" class="form-control" placeholder="123 456-7890">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                        <div class="row">

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Design">
                                                        <div class="icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                        <h6>Design</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Code">
                                                        <div class="icon">
                                                            <i class="fa fa-terminal"></i>
                                                        </div>
                                                        <h6>Code</h6>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Develop">
                                                        <div class="icon">
                                                            <i class="fa fa-laptop"></i>
                                                        </div>
                                                        <h6>Develop</h6>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Are you living in a nice area? </h4>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control" placeholder="5h Avenue">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Street Number</label>
                                                    <input type="text" class="form-control" placeholder="242">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="New York...">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Country</label><br>
                                                    <select name="country" class="form-control">
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>
