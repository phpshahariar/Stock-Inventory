<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{!! asset('/dashboard/') !!}/assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    Sean Ngu
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li class="active"><a href="index.html">Dashboard v1</a></li>
                    <li><a href="index_v2.html">Dashboard v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <span class="badge pull-right">10</span>
                    <i class="fa fa-inbox"></i>
                    <span>Buyer Info</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-buyer') !!}">Add Buyer</a></li>
                    <li><a href="{!! url('/manage-buyer') !!}">Manage Buyer</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-camera"></i>
                    <span>Categorys <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-category') !!}">Add Category</a></li>
                    <li><a href="{!! url('/manage-category') !!}">Manage Category</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Brand <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-brand') !!}">Add Brand</a></li>
                    <li><a href="{!! url('/manage-brand') !!}">Manage Brand</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-gift"></i>
                    <span>Product</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-product') !!}">Add Product</a></li>
                    <li><a href="{!! url('/manage-product') !!}">Manage Product</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-key"></i>
                    <span>Sell Product</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-sell') !!}">Add Sell</a></li>
                    <li><a href="{!! url('/manage-sell') !!}">Manage Sell</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-gift"></i>
                    <span>Supllier</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{!! url('/add-supllier') !!}">Add Supllier</a></li>
                    <li><a href="{!! url('/manage-supllier') !!}">Manage Supllier</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cubes"></i>
                    <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="javascript:;">HTML</a></li>
                    <li><a href="https://seantheme.com/color-admin-v1.9/admin/ajax/index.html">AJAX</a></li>
                    <li><a href="https://seantheme.com/color-admin-v1.9/admin/angularjs/index.html">ANGULAR JS<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-medkit"></i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-align-left"></i>
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret pull-right"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>