@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Welcome {{ $exampleUser['firstname'] }}</h4>
    <span><strong>Account Number:</strong> 0410182</span>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li><a href="/reports">Reports</a></li>
        <li class="active">Weekly</li>
    </ol>
@endsection

@section('content')
    <style>
        .reports-table thead tr th, .reports-table tbody tr td{
            padding-left: 10px!important;
            padding-right: 10px!important;
            padding-top: 3px!important;
            padding-bottom: 3px!important;
            border: 1px solid black;
            font-family: sans-serif;
            font-size: 0.9em!important;
            text-align: center;
            color: #000;
        }
        .no-border {
            border: 0px !important;
        }
        .grey-background {
            background-color: #D3D3D3;
            color: #000;
        }
        .table-left {
            text-align: left !important;
        }
        .table-right {
            text-align: right !important;
        }
    </style>
    <div class="white-box">
        <h3 class="box-title">Weekly Sales</h3>
        <!-- row -->
        <div class="row">
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border"></th>
                                <th class="no-border">4 days</th>
                                <th class="no-border"></th>
                                <th class="no-border"></th>
                                <th class="no-border"></th>
                                <th class="no-border">4 days</th>
                            </tr>
                            <tr>
                                <th class="no-border"></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border table-left"><strong>5 weeks rolling</strong></th>
                                <th><strong>Week 1</strong></th>
                                <th><strong>Week 2</strong></th>
                                <th><strong>Week 3</strong></th>
                                <th><strong>Week 4</strong></th>
                                <th><strong>Week 5</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border"></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left">Chrome</td>
                                <td>-</td>
                                <td>43</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Complex & Implants</td>
                                <td>10,678</td>
                                <td>14,981</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Composite</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Core3d Glasgow</td>
                                <td>5,440</td>
                                <td>3,632</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Core3d London</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Denture</td>
                                <td>11,604</td>
                                <td>16,216</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Essential (Intl.)</td>
                                <td>7,612</td>
                                <td>13,407</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">NHS Crown &amp; Bridge</td>
                                <td>1,031</td>
                                <td>1,751</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Orthodontics</td>
                                <td>1,239</td>
                                <td>1,853</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Ultra</td>
                                <td>9,616</td>
                                <td>15,696</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Veneer</td>
                                <td>1,447</td>
                                <td>915</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left"><strong>Total db turnover</strong></td>
                                <td><strong>48,667</strong></td>
                                <td><strong>68,493</strong></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th><strong>Aug-17</strong></th>
                                <th><strong>Aug-16</strong></th>
                            </tr>
                            <tr>
                                <th>This Month</th>
                                <th>PY Month</th>
                            </tr>
                            <tr>
                                <th>£</th>
                                <th>£</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>43</td>
                                <td>697</td>
                            </tr>
                            <tr>
                                <td>23,659</td>
                                <td>69,361</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>9,072</td>
                                <td>5,440</td>
                            </tr>
                            <tr>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td>27,819</td>
                                <td>63,892</td>
                            </tr>
                            <tr>
                                <td>21,019</td>
                                <td>41,798</td>
                            </tr>
                            <tr>
                                <td>2,782</td>
                                <td>9,531</td>
                            </tr>
                            <tr>
                                <td>3,092</td>
                                <td>10,782</td>
                            </tr>
                            <tr>
                                <td>25,311</td>
                                <td>88,914</td>
                            </tr>
                            <tr>
                                <td>2,363</td>
                                <td>7,911</td>
                            </tr>
                            <tr>
                                <td><strong>117,158</strong></td>
                                <td><strong>320,649</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th><strong>2017</strong></th>
                                <th><strong>2016</strong></th>
                            </tr>
                            <tr>
                                <th>YTD Total</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th>£</th>
                                <th>£</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3,522</td>
                                <td>16,593</td>
                            </tr>
                            <tr>
                                <td>521,433</td>
                                <td>662,545</td>
                            </tr>
                            <tr>
                                <td>273</td>
                                <td>716</td>
                            </tr>
                            <tr>
                                <td>128,644</td>
                                <td>311,879</td>
                            </tr>
                            <tr>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td>448,864</td>
                                <td>709,864</td>
                            </tr>
                            <tr>
                                <td>352,167</td>
                                <td>490,800</td>
                            </tr>
                            <tr>
                                <td>58,912</td>
                                <td>118,991</td>
                            </tr>
                            <tr>
                                <td>62,835</td>
                                <td>101,860</td>
                            </tr>
                            <tr>
                                <td>512,892</td>
                                <td>858,256</td>
                            </tr>
                            <tr>
                                <td>42,641</td>
                                <td>75,182</td>
                            </tr>
                            <tr>
                                <td><strong>2,132,194</strong></td>
                                <td><strong>3,346,691</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th class="no-border"><strong><i>monthly</i></strong></th>
                                <th><strong>Budget</strong></th>
                                <th><strong>Budget</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border"><i>variance</i></th>
                                <th>Aug-17</th>
                                <th>Total Yr 2017</th>
                            </tr>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th>£</th>
                                <th>£</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border"><i>(655)</i></td>
                                <td>208</td>
                                <td>15,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>43,702</i></td>
                                <td>75,820</td>
                                <td>780,000</td>
                            </tr>
                            <tr>
                                <td class="no-border">-</td>
                                <td>83</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(18,691)</i></td>
                                <td>23,967</td>
                                <td>310,000</td>
                            </tr>
                            <tr>
                                <td class="no-border">-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(36,072)</i></td>
                                <td>62,453</td>
                                <td>750,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(20,780)</i></td>
                                <td>44,942</td>
                                <td>530,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(6,748)</i></td>
                                <td>8,570</td>
                                <td>125,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(7690)</i></td>
                                <td>14,902</td>
                                <td>140,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(63,603)</i></td>
                                <td>83,656</td>
                                <td>915,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(5,549)</i></td>
                                <td>8,838</td>
                                <td>110,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><strong><i>(203,490)</i></strong></td>
                                <td><strong>323,440</strong></td>
                                <td><strong>3,676,001</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="white-box">
        <h3 class="box-title">Weekly Units</h3>
        <!-- row -->
        <div class="row">
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border"></th>
                                <th class="no-border">4 days</th>
                                <th class="no-border"></th>
                                <th class="no-border"></th>
                                <th class="no-border"></th>
                                <th class="no-border">4 days</th>
                            </tr>
                            <tr>
                                <th class="no-border"></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                                <th class="grey-background"><strong>Aug-17</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border table-left"><strong>5 weeks rolling</strong></th>
                                <th><strong>Week 1</strong></th>
                                <th><strong>Week 2</strong></th>
                                <th><strong>Week 3</strong></th>
                                <th><strong>Week 4</strong></th>
                                <th><strong>Week 5</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border"></th>
                                <th><strong>Units</strong></th>
                                <th><strong>Units</strong></th>
                                <th><strong>Units</strong></th>
                                <th><strong>Units</strong></th>
                                <th><strong>Units</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left">Chrome</td>
                                <td>-</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Complex & Implants</td>
                                <td>119</td>
                                <td>129</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Composite</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Core3d Glasgow</td>
                                <td>118</td>
                                <td>101</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Core3d London</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Denture</td>
                                <td>467</td>
                                <td>695</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Essential (Intl.)</td>
                                <td>191</td>
                                <td>335</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">NHS Crown &amp; Bridge</td>
                                <td>21</td>
                                <td>33</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Orthodontics</td>
                                <td>44</td>
                                <td>63</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Ultra</td>
                                <td>184</td>
                                <td>198</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Veneer</td>
                                <td>30</td>
                                <td>22</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left"><strong>Total db turnover</strong></td>
                                <td><strong>1,174</strong></td>
                                <td><strong>1,577</strong></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th><strong>Aug-17</strong></th>
                                <th><strong>Aug-16</strong></th>
                            </tr>
                            <tr>
                                <th>This Month</th>
                                <th>PY Month</th>
                            </tr>
                            <tr>
                                <th>Units</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>248</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>248</td>
                                <td>787</td>
                            </tr>
                            <tr>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td>1,162</td>
                                <td>3,184</td>
                            </tr>
                            <tr>
                                <td>526</td>
                                <td>1,142</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>107</td>
                                <td>408</td>
                            </tr>
                            <tr>
                                <td>382</td>
                                <td>1,451</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>157</td>
                            </tr>
                            <tr>
                                <td><strong>2,751</strong></td>
                                <td><strong>7,977</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th><strong>2017</strong></th>
                                <th><strong>2016</strong></th>
                            </tr>
                            <tr>
                                <th>YTD Total</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th>Units</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>86</td>
                                <td>326</td>
                            </tr>
                            <tr>
                                <td>4,152</td>
                                <td>5,342</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>3,928</td>
                                <td>9,386</td>
                            </tr>
                            <tr>
                                <td class="grey-background">-</td>
                                <td class="grey-background">-</td>
                            </tr>
                            <tr>
                                <td>20,435</td>
                                <td>34,497</td>
                            </tr>
                            <tr>
                                <td>9,081</td>
                                <td>13,805</td>
                            </tr>
                            <tr>
                                <td>1,753</td>
                                <td>3,484</td>
                            </tr>
                            <tr>
                                <td>2,073</td>
                                <td>3,847</td>
                            </tr>
                            <tr>
                                <td>7,903</td>
                                <td>13,347</td>
                            </tr>
                            <tr>
                                <td>896</td>
                                <td>1,631</td>
                            </tr>
                            <tr>
                                <td><strong>50,310</strong></td>
                                <td><strong>85,676</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th class="no-border"><strong><i>monthly</i></strong></th>
                                <th><strong>Budget</strong></th>
                                <th><strong>Budget</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border"><i>variance</i></th>
                                <th>Aug-17</th>
                                <th>Total Yr 2017</th>
                            </tr>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th>£</th>
                                <th>£</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border"><i>(655)</i></td>
                                <td>208</td>
                                <td>15,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>43,702</i></td>
                                <td>75,820</td>
                                <td>780,000</td>
                            </tr>
                            <tr>
                                <td class="no-border">-</td>
                                <td>83</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(18,691)</i></td>
                                <td>23,967</td>
                                <td>310,000</td>
                            </tr>
                            <tr>
                                <td class="no-border">-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(36,072)</i></td>
                                <td>62,453</td>
                                <td>750,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(20,780)</i></td>
                                <td>44,942</td>
                                <td>530,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(6,748)</i></td>
                                <td>8,570</td>
                                <td>125,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(7690)</i></td>
                                <td>14,902</td>
                                <td>140,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(63,603)</i></td>
                                <td>83,656</td>
                                <td>915,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><i>(5,549)</i></td>
                                <td>8,838</td>
                                <td>110,000</td>
                            </tr>
                            <tr>
                                <td class="no-border"><strong><i>(203,490)</i></strong></td>
                                <td><strong>323,440</strong></td>
                                <td><strong>3,676,001</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="white-box">
        <h3 class="box-title">Financials - Monthly figures</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border table-left">Profit and loss</th>
                                <th class="no-border">Final</th>
                                <th class="no-border">Final</th>
                                <th class="no-border">Final</th>
                                <th class="no-border">Final</th>
                                <th class="no-border">Final</th>
                            </tr>
                            <tr>
                                <th class="no-border"></th>
                                <th class="grey-background"><strong>Mar-17</strong></th>
                                <th class="grey-background"><strong>Apr-17</strong></th>
                                <th class="grey-background"><strong>May-17</strong></th>
                                <th class="grey-background"><strong>Jun-17</strong></th>
                                <th class="grey-background"><strong>Jul-17</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border table-left">&nbsp;</th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                                <th><strong>£</strong></th>
                            </tr>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left"><strong>Turnover</strong></td>
                                <td><strong>333,045</strong></td>
                                <td><strong>253,433</strong></td>
                                <td><strong>340,729</strong></td>
                                <td><strong>334,908</strong></td>
                                <td><strong>255,636</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Materials</td>
                                <td>(96,021)</td>
                                <td>(82,388)</td>
                                <td>(90,569)</td>
                                <td>(95,157)</td>
                                <td>(75,240)</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Wage cost</td>
                                <td>(67,135)</td>
                                <td>(64,892)</td>
                                <td>(64,942)</td>
                                <td>(69,090)</td>
                                <td>(70,252)</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left"><strong>Gross profit</strong></td>
                                <td class="grey-background"><strong>169,890</strong></td>
                                <td class="grey-background"><strong>106,153</strong></td>
                                <td class="grey-background"><strong>182,219</strong></td>
                                <td class="grey-background"><strong>170,661</strong></td>
                                <td class="grey-background"><strong>110,144</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">Overheads</td>
                                <td>(117,682)</td>
                                <td>(115,025)</td>
                                <td>(116,668)</td>
                                <td>(100,649)</td>
                                <td>(104,692)</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="no-border table-left"><strong>EBITDA</strong></td>
                                <td class="grey-background"><strong>52,207</strong></td>
                                <td class="grey-background"><strong>(8,872)</strong></td>
                                <td class="grey-background"><strong>68,550</strong></td>
                                <td class="grey-background"><strong>70,012</strong></td>
                                <td class="grey-background"><strong>5,452</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border"><strong>Draft Total</strong></th>
                                <th class="no-border"><strong>Sage Total</strong></th>
                            </tr>
                            <tr>
                                <th class="grey-background">2017</th>
                                <th class="grey-background">2016</th>
                            </tr>
                            <tr>
                                <th>£</th>
                                <th>£</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>2,019,289</strong></td>
                                <td><strong>1,881,050</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>(601,224)</strong></td>
                                <td><strong>(499,204)</strong></td>
                            </tr>
                            <tr>
                                <td><strong>(456,726)</strong></td>
                                <td><strong>(441,796)</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="grey-background"><strong>961,340</strong></td>
                                <td class="grey-background"><strong>940,050</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>(785,391)</strong></td>
                                <td><strong>(832,202)</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="grey-background"><strong>175,948</strong></td>
                                <td class="grey-background"><strong>107,848</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th class="no-border">&nbsp;</th>
                                <th class="no-border">&nbsp;</th>
                            </tr>
                            <tr>
                                <th><i>£ variance</i></th>
                                <th><i>% variance</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>138,239</strong></td>
                                <td><strong>7.3%</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>102,020</td>
                                <td>20.4%</td>
                            </tr>
                            <tr>
                                <td>14,930</td>
                                <td>3.4%</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>21,290</strong></td>
                                <td><strong>2.3%</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>(46,810)</td>
                                <td>-5.6%</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>68,100</strong></td>
                                <td><strong>63.1%</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th class="no-border">Py month</th>
                                <th class="no-border" colspan="3"><i>month-on-month</i></th>
                            </tr>
                            <tr>
                                <th>Jun-16</th>
                                <th colspan="3" class="no-border"><i>variance</i></th>
                            </tr>
                            <tr>
                                <th>£</th>
                                <th class="no-border"><i>£ variance</i></th>
                                <th class="no-border"></th>
                                <th class="no-border"><i>% variance</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>286,785</strong></td>
                                <td class="no-border"><strong><i>(31,149)</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-10.9%</i></strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>(75,681)</td>
                                <td class="no-border"><strong><i>441</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-0.6%</i></strong></td>
                            </tr>
                            <tr>
                                <td>(62,144)</td>
                                <td class="no-border"><strong><i>(62,144)</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-13.0%</i></strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>148,960</strong></td>
                                <td class="no-border"><strong><i>(38,816)</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-26.1%</i></strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>(136,490)</td>
                                <td class="no-border"><strong><i>(31,798)</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-23.3%</i></strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                                <td class="no-border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>12,470</strong></td>
                                <td class="no-border"><strong><i>(7,018)</i></strong></td>
                                <td class="no-border"></td>
                                <td class="no-border"><strong><i>-56.3%</i></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="white-box">
        <h3 class="box-title">% Gross Margin By Quarter End 2013 - 2017 (with moving average)</h3>
        <div class="row">
            <div class="col-md-10">
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #00aaf1;"></i>% Gross Margin</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #79e580;"></i>% Gross Margin Averages</h5>
                    </li>
                </ul>
                <div id="morris-area-chart1"></div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th colspan="3" class="no-border"><strong>Gross Margin</strong></th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">-</th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">averages</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left">2017</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>46.8%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2016</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>49.2%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2015</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>52.4%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2014</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>53.8%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2013</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>48.3%</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="white-box">
        <h3 class="box-title">Turnover 2012 - 2017 By Month</h3>
        <div class="row">
            <div class="col-md-10">
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #79e580;"></i>Site A View</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #2cabe3;"></i>Site B View</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #ff5050;"></i>Site C View</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #cc33ff;"></i>Site D View</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #ffff4d;"></i>Site E View</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #ff9966;"></i>Site F View</h5>
                    </li>
                </ul>
                <div id="morris-area-chart2"></div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th colspan="3" class="no-border"><strong>Turnover</strong></th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">-</th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">averages</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left">2017</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>288,470</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2016</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>277,453</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2015</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>265,171</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2014</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>266,234</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2013</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>295,789</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2012</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>321,572</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2011</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>358,429</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2010</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>350,874</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">% EBITDA by Quarter End 2013 - 2017 (with moving average)</h3>
        <div class="row">
            <div class="col-md-10">
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #79e580;"></i>% Earnings Margin</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #ff5050;"></i>% Earnings Margin Averages</h5>
                    </li>
                </ul>
                <div id="morris-area-chart3"></div>
            </div>
            <div class="col-md-2">
                <div class="table-responsive table-center">
                    <table class="reports-table" style="margin-top: 0px!important; width: 99%">
                        <thead>
                            <tr>
                                <th colspan="3" class="no-border"><strong>Earnings Margin</strong></th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">-</th>
                            </tr>
                            <tr>
                                <th colspan="3" class="no-border">averages</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="no-border table-left">2017</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>6.9%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2016</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>4.9%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2015</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>9.7%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2014</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>7.0%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2013</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>12.7%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2012</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>7.4%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2011</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>8.7%</strong></td>
                            </tr>
                            <tr>
                                <td class="no-border table-left">2010</td>
                                <td class="no-border"></td>
                                <td class="no-border table-right"><strong>8.6%</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
             Morris.Area({
             element: 'morris-area-chart1',
             data: [{
                     period: '2013-01-01',
                     SiteA: 46.5,
                     SiteB: 46.5,
                }, {
                     period: '2013-04-01',
                     SiteA: 52,
                     SiteB: 52,
                 }, {
                     period: '2013-07-01',
                     SiteA: 46,
                     SiteB: 46,
                }, {
                     period: '2013-10-01',
                     SiteA: 48,
                     SiteB: 48.3,
                }, {
                     period: '2014-01-01',
                     SiteA: 51,
                     SiteB: 49.5,
                }, {
                     period: '2014-04-01',
                     SiteA: 47.5,
                     SiteB: 48.5,
                 }, {
                     period: '2014-07-01',
                     SiteA: 58.5,
                     SiteB: 51,
                }, {
                     period: '2014-10-01',
                     SiteA: 59.5,
                     SiteB: 54,
                }, {
                     period: '2015-01-01',
                     SiteA: 49.5,
                     SiteB: 54,
                }, {
                     period: '2015-04-01',
                     SiteA: 55.5,
                     SiteB: 56,
                 }, {
                     period: '2015-07-01',
                     SiteA: 51,
                     SiteB: 54,
                }, {
                     period: '2015-10-01',
                     SiteA: 53.5,
                     SiteB: 53.5,
                }, {
                     period: '2016-01-01',
                     SiteA: 51,
                     SiteB: 53.5,
                }, {
                     period: '2016-04-01',
                     SiteA: 48.5,
                     SiteB: 51,
                 }, {
                     period: '2016-07-01',
                     SiteA: 51,
                     SiteB: 51,
                 }, {
                     period: '2016-10-01',
                     SiteA: 47,
                     SiteB: 49.5,
                }, {
                     period: '2017-01-01',
                     SiteA: 46.5,
                     SiteB: 48.5,
                }, {
                     period: '2017-04-01',
                     SiteA: 49.5,
                     SiteB: 49,
                 }],
             xkey: 'period',
             ykeys: ['SiteB', 'SiteA'],
             labels: ['Site B', 'Site A'],
             pointSize: 2,
             fillOpacity: 0.1,
             pointStrokeColors: ['#79e580', '#2cabe3'],
             behaveLikeLine: true,
             gridLineColor: '#ffffff',
             lineWidth: 2,
             smooth: true,
             hideHover: 'auto',
             lineColors: ['#79e580', '#2cabe3'],
             resize: true,
             ymin: 45,
             ymax: 65
         });
        });
        $(document).ready(function () {
             Morris.Area({
             element: 'morris-area-chart2',
             data: [{
                     period: '2012-01',
                     SiteA: 170000,
                     SiteB: 370000,
                     SiteC: 245000,
                     SiteD: 267000,
                     SiteE: 245000,
                     SiteF: 205000,
                }, {
                     period: '2012-02',
                     SiteA: 175000,
                     SiteB: 285000,
                     SiteC: 205000,
                     SiteD: 270000,
                     SiteE: 245000,
                     SiteF: 205000,
                 }, {
                     period: '2012-03',
                     SiteA: 185000,
                     SiteB: 345000,
                     SiteC: 205000,
                     SiteD: 345000,
                     SiteE: 370000,
                     SiteF: 250000,
                }, {
                     period: '2012-04',
                     SiteA: 250000,
                     SiteB: 245000,
                     SiteC: 345000,
                     SiteD: 270000,
                     SiteE: 250000,
                     SiteF: 205000,
                }, {
                     period: '2012-05',
                     SiteA: 213000,
                     SiteB: 410000,
                     SiteC: 313000,
                     SiteD: 245000,
                     SiteE: 250000,
                     SiteF: 270000,
                }, {
                     period: '2012-06',
                     SiteA: 170000,
                     SiteB: 265000,
                     SiteC: 250000,
                     SiteD: 331000,
                     SiteE: 270000,
                     SiteF: 245000,
                 }, {
                     period: '2012-07',
                     SiteA: 213000,
                     SiteB: 250000,
                     SiteC: 245000,
                     SiteD: 270000,
                     SiteE: 235000,
                     SiteF: 250000,
                }, {
                     period: '2012-08',
                     SiteA: 213000,
                     SiteB: 250000,
                     SiteC: 235000,
                     SiteD: 260000,
                     SiteE: 255000,
                     SiteF: 275000,
                }, {
                     period: '2012-09',
                     SiteA: 213000,
                     SiteB: 220000,
                     SiteC: 245000,
                     SiteD: 290000,
                     SiteE: 265000,
                     SiteF: 250000,
                }, {
                     period: '2012-10',
                     SiteA: 313000,
                     SiteB: 250000,
                     SiteC: 345000,
                     SiteD: 270000,
                     SiteE: 345000,
                     SiteF: 250000,
                 }, {
                     period: '2012-11',
                     SiteA: 213000,
                     SiteB: 230000,
                     SiteC: 225000,
                     SiteD: 250000,
                     SiteE: 315000,
                     SiteF: 250000,
                }, {
                     period: '2012-12',
                     SiteA: 213000,
                     SiteB: 350000,
                     SiteC: 235000,
                     SiteD: 220000,
                     SiteE: 345000,
                     SiteF: 210000,
                }],
             xkey: 'period',
             ykeys: ['SiteA', 'SiteB', 'SiteC', 'SiteD', 'SiteE', 'SiteF'],
             labels: ['Site A', 'Site B', 'Site C', 'Site D', 'Site E', 'Site F'],
             xLabelFormat: function (x) {
                var IndexToMonth = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
                var month = IndexToMonth[ x.getMonth() ];
                return month;
            },
            dateFormat: function (x) {
                var IndexToMonth = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
                var month = IndexToMonth[ new Date(x).getMonth() ];
                return month;
            },
             pointSize: 2,
             fillOpacity: 0.1,
             pointStrokeColors: ['#79e580', '#2cabe3', '#ff5050', '#cc33ff', '#ffff4d', '#ff9966'],
             behaveLikeLine: true,
             gridLineColor: '#ffffff',
             lineWidth: 2,
             smooth: true,
             hideHover: 'auto',
             lineColors: ['#79e580', '#2cabe3', '#ff5050', '#cc33ff', '#ffff4d', '#ff9966'],
             resize: true,
             ymin: 150000,
             ymax: 450000
         });
        });
        $(document).ready(function () {
             Morris.Area({
             element: 'morris-area-chart3',
             data: [{
                     period: '2013 Q1',
                     SiteA: 10,
                     SiteB: 10,
                }, {
                     period: '2013 Q2',
                     SiteA: 20,
                     SiteB: 20,
                 }, {
                     period: '2013 Q3',
                     SiteA: 13,
                     SiteB: 13,
                }, {
                     period: '2013 Q4',
                     SiteA: 11,
                     SiteB: 14,
                }, {
                     period: '2014 Q1',
                     SiteA: 6,
                     SiteB: 11,
                }, {
                     period: '2014 Q2',
                     SiteA: -1,
                     SiteB: 7,
                 }, {
                     period: '2014 Q3',
                     SiteA: 11,
                     SiteB: 7,
                }, {
                     period: '2014 Q4',
                     SiteA: 14,
                     SiteB: 9,
                }, {
                     period: '2015 Q1',
                     SiteA: 15,
                     SiteB: 8,
                }, {
                     period: '2015 Q2',
                     SiteA: 3,
                     SiteB: 12,
                 }, {
                     period: '2015 Q3',
                     SiteA: 12,
                     SiteB: 10,
                }, {
                     period: '2015 Q4',
                     SiteA: 11,
                     SiteB: 14,
                }, {
                     period: '2016 Q1',
                     SiteA: 10,
                     SiteB: 14,
                }, {
                     period: '2016 Q2',
                     SiteA: 5,
                     SiteB: 10,
                 }, {
                     period: '2016 Q3',
                     SiteA: 1,
                     SiteB: 11,
                }, {
                     period: '2016 Q4',
                     SiteA: -1,
                     SiteB: 10,
                }, {
                     period: '2017 Q1',
                     SiteA: 9,
                     SiteB: 9,
                }, {
                     period: '2017 Q2',
                     SiteA: 7,
                     SiteB: 9,
                }, {
                     period: '2017 Q3',
                     SiteA: 10,
                     SiteB: 11,
                }, {
                     period: '2017 Q4',
                     SiteA: 15,
                     SiteB: 13,
                }],
             xkey: 'period',
             ykeys: ['SiteB', 'SiteA'],
             labels: ['Site B', 'Site A'],
             pointSize: 2,
             fillOpacity: 0.1,
             pointStrokeColors: ['#79e580', '#ff5050'],
             behaveLikeLine: true,
             gridLineColor: '#ffffff',
             lineWidth: 2,
             smooth: true,
             hideHover: 'auto',
             lineColors: ['#79e580', '#ff5050'],
             resize: true,
             ymin: -5.0,
             ymax: 25.0
         });
        });
    </script>
@endsection