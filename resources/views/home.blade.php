@extends('layout.master')

@section('title','Home')

@section('content')
    <div class="container-fluid">
        <div class="col-md-4">
            <!start sidebar *********!>


            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>&nbsp; &nbsp;Categories</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>&nbsp;&nbsp;Brands</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;&nbsp;Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>&nbsp;&nbsp;Contact</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





            <!end sidebar *******!>
        </div>
        <div class="col-md-8">

            <!--one product start****-->
            <div class="col-sm-6 col-md-4">

                <div class="thumbnail">
                    <h3 style="text-align: center;">Price$30 </h3>
                    <img src="{{asset('images/Laravel.png')}}" alt="img" style="width:200px;height:220px;">
                    <div class="caption">
                        <h3>Laravel Book</h3>
                        <p class="burmese"> PHP with Laravel by Matt</p>
                        <p>
                            <a href="#" class="btn btn-info" role="button">View Details</a>
                            <a href="#" class="btn btn-info pull-right" role="button">Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <!--end one product ****-->
            <!--one product start****-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <h3 style="text-align: center;">Price$20 </h3>
                    <img src="{{asset('images/book-large-web - Copy.png')}}" alt="img" style="width:200px;height:220px;">
                    <div class="caption">
                        <h3>Book Large Web</h3>
                        <p class="burmese"> Book Large Web</p>
                        <p>
                            <a href="#" class="btn btn-info" role="button">View Details</a>
                            <a href="#" class="btn btn-info pull-right" role="button">Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <!--end one product ****-->
            <!--one product start****-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <h3 style="text-align: center;">Price$10 </h3>
                    <img src="{{asset('images/LearningLaravel5_cover6.png')}}" alt="img" style="width:200px;height:220px;">
                    <div class="caption">
                        <h3>LearningLaravel5</h3>
                        <p class="burmese">LearningLaravel5</p>
                        <p>
                            <a href="#" class="btn btn-info" role="button">View Details</a>
                            <a href="#" class="btn btn-info pull-right" role="button">Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <!--end one product ****-->
        </div>

    </div>
@endsection