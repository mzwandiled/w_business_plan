<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_ones', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('business_owner');
            $table->text('business_address');
            $table->text('business_contact');
            $table->string('business_logo');

            /**executive summary */

            $table->text('business_concept');
            $table->text('financial_features');
            $table->text('financial_requirements');
            $table->text('current_business_position');
            $table->text('major_achievements');

            /**excutive summary end*/

            /**General Company Description */

            $table->text('general_overview');
            $table->string('company_name');
            $table->text('type_of_legal_entity');
            $table->text('significant_assets');
            $table->text('mission_statement');
            $table->text('ownership');
            $table->text('company_strength');
            $table->text('industry_type');

            /**General Company Description end */

            /**The Opportunity,Industry & Market */

            $table->text('opportunities');
            $table->text('industry');
            $table->text('market');

            /**The Opportunity,Industry & Market */

            /**What is your Strategy (0/1)? */

            $table->text('business_focus');
            $table->text('business_success');
            $table->text('business_unique');
            $table->text('customer_value');
            $table->text('value_proposition');

            /**What is your Strategy (0/1)? */


            /**Describe Your Business Model? */

            $table->text('revenue_source');
            $table->text('major_costs');
            $table->text('business_profitability');
            $table->text('business_investment');
            $table->text('criticial_success');

            /**Describe Your Business Model? */


            /**Team Management and Organisation*/

            $table->text('founders_list');
            $table->text('manager_description');
            $table->text('investment_requirement');
            $table->text('organisation_chart');

            /**Team Management and Organisation */

            /**Marketing Plan*/
            $table->text('product_service');
            $table->text('target_market');
            $table->text('customers_perception');

            /**Marketing Plan*/


            /**Operational Plan*/

            $table->text('operating_cyle');
            $table->text('neccesary_skills');
            $table->text('outsource');
            $table->text('cash_receipts');

            /**Operational Plan*/

            /**Marketing Plan*/

            $table->text('pricing_strategy');
            $table->text('sales_distribution');
            $table->text('promotion_strategy');

            /**Marketing Plan*/
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('step_ones');
    }
}
