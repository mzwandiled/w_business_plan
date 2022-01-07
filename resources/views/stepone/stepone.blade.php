@extends('layouts.main')

@section('content')
    <div id="form_container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div id="left_form">
                    <figure><img src="img/info_graphic_1.svg" alt="" width="100" height="100"></figure>
                    <h2>Wecomply <span>Business Plan Tool</span></h2>
                    <p>Write a business plan online.</p>
                    <!--<a href="" class="btn_1 rounded yellow purchase" target="_parent">Learn More </a>-->
                    <a href="#wizard_container" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                    <!--<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>-->
                </div>
            </div>
            <div class="col-lg-8">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                        <span id="location"></span>
                    </div>
                    <!-- /top-wizard -->
                    <form id="wrapped" method="post" action="{{route('businessplan.store')}}">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            <!--step 1-->
                            <div class="step">
                                <h3 class="main_question"><i ></i>Online Business Plan Tool</h3>
                                <div class="form-group add_top_30">
                                    <input name="business_name" id=""  class="form-control" placeholder="Please enter  business name ">
                                </div>
                                <div class="form-group">
                                    <input name="business_owner" id=""   type="text"class="form-control" placeholder=" Please enter the name of the business owner">

                                </div>
                                <div class="form-group">
                                    <textarea name="business_address" id="" cols="66" rows="6"  class="form-control" placeholder="Enter Business Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="business_contact" id=""  type="tel"  class="form-control" placeholder=" Please enter the contact number  of the business owner">
                                </div>
                                <div class="form-group">
                                    <label for="business_logo" class="form-label">Please upload your logo here </label>
                                    <input class="form-control" type="file" id="business_logo" name="business_logo"/>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                           <!--step 1.1-->
                            <div class="step">
                                <h3 class="main_question"><i ></i>Executive Summary (0/1)</h3>
                                <div class="form-group add_top_30">
                                    <textarea name="business_concept" id="" cols="66" rows="6"  placeholder=" Business Concept"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="financial_features" id="" cols="66" rows="6"  placeholder=" Financial Features"></textarea>

                                </div>
                                <div class="form-group">
                                    <textarea name="financial_requirements" id="" cols="66" rows="6"  placeholder=" Financial Requirements"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!--step 2 -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Executive Summary (1/1)</h3>
                                <div class="form-group">
                                    <textarea name="current_business_position" id="" cols="66" rows="9" placeholder=" Current Business Position"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="major achievements" id="" cols="66" rows="9" placeholder=" Major Achievements"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                        <div class="form-group radio_input">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                             <!--step 3 -->
                            <div class="step">
                                <h3 class="main_question"><i></i>General Company Description (0/1)</h3>

                                <div class="form-group add_top_30">
                                    <textarea name="general_overview" id="" cols="66" rows=6 placeholder="General overview of the company "></textarea>
                                </div>
                                <div class="form-group ">
                                    <label for="name">Company Name</label>
                                    <input type="text" name="company_name" id="name" class="form-control required" >
                                </div>
                                <div class="form-group">
                                    <label for="email">Type of legal Entity</label>
                                    <select name="type_of_legal_entity" id="" class="form-control required">
                                        <option value="1">Close Corporation</option>
                                        <option value="2">Close Corporation 1</option>
                                        <option value="3">Close Corporation 2</option>
                                    </select>

                                </div>
                                <div class="form-group ">
                                    <textarea name="significant_assets" id="" cols="66" rows="6" placeholder="Significant Assets "></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                               <!--step 4 -->
                            <div class="step">
                                <h3 class="main_question"><i></i>General Company Description (1/1)</h3>
                                <div class="form-group ">
                                    <textarea name="mission_statement" id="" cols="66" rows="4" placeholder="Mission Statement"></textarea>
                                </div>

                                <div class="form-group ">
                                    <textarea name="ownership" id="" cols="66" rows="4" placeholder="ownership "></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="company_strength" id="" cols="66" rows="4" placeholder="Company Strengths and core competencies"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Industry Type</label>
                                    <select name="industry_type" id="" class="form-control required">
                                        <option value="1">Engineering</option>
                                        <option value="2">Hospitality </option>
                                        <option value="3">Financial</option>
                                    </select>

                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                            <!--step 5 -->
                            <div class="step">
                                <h3 class="main_question"><i></i>The Opportunity,Industry & Market</h3>
                                <div class="form-group ">
                                    <textarea name="opportunities" id="" cols="66" rows="4" placeholder="Describe the opportunites"></textarea>
                                </div>

                                <div class="form-group ">
                                    <textarea name="industry" id="" cols="66" rows="4" placeholder="Describe the industry"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="market" id="" cols="66" rows="4" placeholder="Describe the market "></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                             <!--step 6 -->
                            <div class="step">
                                <h3 class="main_question"><i></i>What is your Strategy (0/1)?</h3>
                                <div class="form-group ">
                                    <textarea name="business_focus" id="" cols="66" rows="4" placeholder="What is the focus of the business: broad mass market or a specific niche?"></textarea>
                                </div>

                                <div class="form-group ">
                                    <textarea name="business_success" id="" cols="66" rows="4" placeholder="How will the business succeed in the market?"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="business_unique" id="" cols="66" rows="4" placeholder="What is unique about the business?  "></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <!--step 7 (1/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>What is your Strategy (1/1)?</h3>
                                <div class="form-group ">
                                    <label for="name">What is the value of the customers ? </label>
                                    <input type="text" name="customer_value" id="name" class="form-control required" >
                                </div>

                                <div class="form-group ">
                                    <textarea name="value_proposition" id="" cols="66" rows="8" placeholder="Describe the value proposition for the customer?"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <!--step 8 (0/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Describe Your Business Model ?</h3>
                                <div class="form-group ">
                                    <label for="name">What is the source of revenue ? </label>
                                    <input type="text" name="revenue_source" id="name" class="form-control required" >
                                </div>

                                <div class="form-group ">
                                    <textarea name="major_costs" id="" cols="66" rows="3" class="form-control" placeholder="What are the major costs involved in generating the revenue ?"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="business_profitability" id="" cols="66" class="form-control" rows="3" placeholder=" The profitability of the business (revenue less costs)"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="business_investment" id="" cols="66" class="form-control"  rows="3" placeholder="The investment required to get the business up and running (to get to scale)"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="criticial_success" id="" cols="66" class="form-control" rows="3" placeholder="The critical success factors and assumptions for making the profit model work"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                            <!--step 9 (0/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Team Management  and Organisation</h3>
                                <div class="form-group ">
                                    <textarea name="founders_list" id="" cols="66" rows="3" class="form-control" placeholder="list the founders including their qualifications and experience"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="manager_description" id="" cols="66" class="form-control" rows="3" placeholder=" Description of who will manage the business on a day-to-day basis."></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="investment_requirement" id="" cols="66" class="form-control"  rows="3" placeholder="The investment required to get the business up and running (to get to scale)"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="organisation_chart" id="" cols="66" class="form-control" rows="3" placeholder=" 	An organisational chart if you have more than 10 employees, showing the management hierarchy and responsibility for key functions"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->


                            <!--step 10 (0/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Marketing Plan</h3>
                                <div class="form-group ">
                                    <textarea name="product_service" id="" cols="66" rows="3" class="form-control" placeholder=" The product (or service) and why it is valuable to customers"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="target_market" id="" cols="66" class="form-control" rows="3" placeholder="The focused and detailed description of the target market"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="customers_perception" id="" cols="66" class="form-control"  rows="3" placeholder="The positioning of the product or service – how it should be perceived by customers"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                      <!--step 11 (1/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Operational Plan</h3>
                                <div class="form-group ">
                                    <textarea name="operating_cyle" id="" cols="66" rows="3" class="form-control" placeholder=" 	A description of the operating cycle that describes what the organisation will do to deliver its service or create and sell its product"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="neccesary_skills" id="" cols="66" class="form-control" rows="3" placeholder="A description of where all the necessary skills and materials will be sourced"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="outsource" id="" cols="66" class="form-control"  rows="3" placeholder="What will be outsourced, what relationships are in place and how those relationships will be managed"></textarea>
                                </div>
                                 <div class="form-group ">
                                    <textarea name="cash_receipts" id="" cols="66" class="form-control"  rows="3" placeholder="The cash receipts and cash payment cycle of the business"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                    <!--step 10 (1/1) -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Marketing Plan</h3>
                                <div class="form-group ">
                                    <textarea name="pricing_strategy" id="" cols="66" rows="3" class="form-control" placeholder=" 	The pricing strategy with specific price points at which the product or service will be sold"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="sales_distribution" id="" cols="66" class="form-control" rows="3" placeholder="The sales and distribution channels that will be used to get the product or service to the customer"></textarea>
                                </div>
                                <div class="form-group ">
                                    <textarea name="promotion_strategy" id="" cols="66" class="form-control"  rows="3" placeholder="The promotion strategy including public relations activities, specific promotions, advertising and intended viral marketing activities"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->

                              <!--step 11  -->
                            <div class="step">
                                <h3 class="main_question"><i></i>Financial  Plan</h3>
                                <div class="form-group ">
                                    <label for="financial_statement" class="form-label">Please upload your financial statements  for processing...</label>
                                    <input class="form-control" type="file" id="financial_statement"/>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <!end -->
                            <div class="submit step" id="end">
                                <div class="summary">
                                    <div class="wrapper">
                                        <h3>Thank your for your time to create your business plan with us<br><span id="name_field"></span>!</h3>
                                        <p>Please accept our terms  and conditions to download your business plan <strong id="email_field"></strong> or abort the process if you dont agree with our terms and conditions</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
@endsection
