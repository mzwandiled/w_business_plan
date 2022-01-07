<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepOne extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'business_owner',
        'business_address',
        'business_contact',
        'business_logo',
        'business_concept',
        'financial_features',
        'financial_requirements',
        'current_business_position',
        'major_achievements',
        'general_overview',
        'company_name',
        'type_of_legal_entity',
        'significant_assets',
        'mission_statement',
        'ownership',
        'company_strength',
        'industry_type',
        'opportunities',
        'industry',
        'market',
        'business_focus',
        'business_success',
        'business_unique',
        'customer_value',
        'value_proposition',
        'revenue_source',
        'major_costs',
        'business_profitability',
        'business_investment',
        'criticial_success',
        'founders_list',
        'manager_description',
        'investment_requirement',
        'organisation_chart',
        'product_service',
        'target_market',
        'customers_perception',
        'operating_cyle',
        'neccesary_skills',
        'outsource',
        'cash_receipts',
        'pricing_strategy',
        'sales_distribution',
        'promotion_strategy'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
